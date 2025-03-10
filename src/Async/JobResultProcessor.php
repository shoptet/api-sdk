<?php

namespace Shoptet\Api\Sdk\Php\Async;

use Generator;
use Shoptet\Api\Sdk\Php\Endpoint\JobEndpoints\GetJobDetailResponse\GetJobDetailResponse;
use Shoptet\Api\Sdk\Php\Exception\LogicException;
use Shoptet\Api\Sdk\Php\Exception\RuntimeException;
use Shoptet\Api\Sdk\Php\Factory\Endpoint\EndpointFactory;

class JobResultProcessor
{
    public function __construct(
        private readonly EndpointFactory $endpointFactory
    ) {
    }

    /**
     * Process snapshot job result. This method gets job result file path from response and processes it.
     * It returns an iterator over snapshot job result data. This method use Generator to process data with
     * smaller memory footprint.
     */
    public function processSnapshot(GetJobDetailResponse $response): SnapshotResultData
    {
        $job = $response->getData()?->getJob();

        if ($job === null) {
            throw new RuntimeException('Job data is missing in response!');
        }

        $endpoint = $this->endpointFactory->createEndpointByHttpMethodAndUrl('GET', $job->getEndpoint());

        if (!($endpoint instanceof SnapshotEndpoint)) {
            throw new LogicException(
                sprintf('Endpoint %s is not an snapshot one! Cannot be processed!', $job->getEndpoint())
            );
        }

        $status = JobStatuses::tryFrom($job->getStatus());

        if (in_array($status, JobStatuses::getWaitingStatuses())) {
            throw new JobIsNotFinishedException(sprintf(
                'Job is not finished yet! Current status is: "%s"', $job->getStatus()
            ));
        }

        if (in_array($status, JobStatuses::getFailedStatuses())) {
            throw new JobFailedException(sprintf(
                'Job has failed with status: "%s"', $job->getStatus()
            ));
        }

        $jobResult = new SnapshotResultData($response);
        $resultPath = $job->getResultUrl();

        if ($resultPath === null) {
            throw new RuntimeException('Job`s result file path is missing in response!');
        }

        $jobResult->setResultDataGenerator(
            fn() => $this->processSnapshotData($endpoint, $resultPath)
        );

        return $jobResult;
    }

    private function processSnapshotData(
        SnapshotEndpoint $endpoint,
        string $resultPath,
    ): Generator {
        $responseEntityClass = $endpoint->getSnapshotResultEntityClass();

        $file = gzopen($resultPath, 'rb');

        if ($file === false) {
            throw new RuntimeException(
                sprintf('Failed to open job`s result file at path: %s', $resultPath)
            );
        }

        while (($line = gzgets($file)) !== false) {
            $data = json_decode($line, true);

            if ($data !== null) {
                yield new $responseEntityClass($data);
            }
        }

        fclose($file);
    }
}
