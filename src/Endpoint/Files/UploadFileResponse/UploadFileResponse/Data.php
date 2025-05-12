<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Files\UploadFileResponse\UploadFileResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Files\UploadFileResponse\UploadFileResponse\Data\File;
use Shoptet\Api\Sdk\Php\Endpoint\Files\UploadFileResponse\UploadFileResponse\Data\Image;

class Data extends Entity
{
    protected ?Image $image;
    protected ?File $file;

    public function getImage(): ?Image
    {
        return $this->image;
    }

    public function setImage(?Image $image): static
    {
        $this->image = $image;
        return $this;
    }

    public function getFile(): ?File
    {
        return $this->file;
    }

    public function setFile(?File $file): static
    {
        $this->file = $file;
        return $this;
    }
}
