<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Files\UploadFileRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Files\UploadFileRequest\UploadFileRequest\Data;

class UploadFileRequest extends Entity
{
    protected Data $data;

    public function getData(): Data
    {
        return $this->data;
    }

    public function setData(Data $data): static
    {
        $this->data = $data;
        return $this;
    }
}
