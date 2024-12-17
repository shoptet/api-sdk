<?php

namespace Shoptet\Api\Sdk\Php\Endpoint;

use Shoptet\Api\Sdk\Php\Component\Entity\Paginator;
use Shoptet\Api\Sdk\Php\Exception\LogicException;
use Shoptet\Api\Sdk\Php\Exception\OutOfRangeException;
use Shoptet\Api\Sdk\Php\Exception\RuntimeException;
use Shoptet\Api\Sdk\Php\Response\ResponseInterface;

abstract class PageableGet extends Get
{
    protected Paginator $paginator;

    public function setPaginator(Paginator $paginator): static
    {
        $this->paginator = $paginator;
        return $this;
    }

    /**
     * @throws LogicException
     * @throws OutOfRangeException
     * @throws RuntimeException
     */
    public function getNextPage(): ResponseInterface
    {
        $queryPage = array_key_exists('page', $this->queryParams) ? (int) $this->queryParams['page'] : 1;
        $paginatorPage = $this->paginator->getPage();
        if ($paginatorPage !== $queryPage) {
            throw new RuntimeException('Something went wrong while trying to get next page.');
        }
        if ($paginatorPage >= $this->paginator->getPageCount()) {
            throw new OutOfRangeException('Next page is out of range');
        }

        $this->addQueryParam('page', ++$paginatorPage);
        return $this->execute();
    }
}
