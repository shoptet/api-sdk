<?php

namespace Shoptet\Api\Sdk\Php\Webhook;

use Shoptet\Api\Sdk\Php\Exception\RuntimeException;
use Shoptet\Api\Sdk\Php\HttpClient\CurlClient;

final class SignatureValidator
{
    public const string SIGNATURE_HEADER = CurlClient::HEADER_WEBHOOK_SIGNATURE;

    /**
     * @param string|array<mixed>|\JsonSerializable $messageBody
     */
    public static function isValid(string $signatureKey, string|array|\JsonSerializable $messageBody, string $signature): bool
    {
        if (!is_string($messageBody)) {
            $encoded = json_encode($messageBody);
            if ($encoded === false) {
                throw new RuntimeException('Failed to encode message body: ' . json_last_error_msg());
            }
            $messageBody = $encoded;
        }
        $calculated = hash_hmac('sha1', $messageBody, $signatureKey);
        return hash_equals($calculated, $signature);
    }
}
