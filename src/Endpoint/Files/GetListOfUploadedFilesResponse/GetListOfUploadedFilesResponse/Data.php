<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Files\GetListOfUploadedFilesResponse\GetListOfUploadedFilesResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Files\GetListOfUploadedFilesResponse\GetListOfUploadedFilesResponse\Data\Files;
use Shoptet\Api\Sdk\Php\Endpoint\Files\GetListOfUploadedFilesResponse\GetListOfUploadedFilesResponse\Data\Images;

class Data extends Entity
{
    protected Images $images;
    protected ?Files $files;

    public function getImages(): Images
    {
        return $this->images;
    }

    public function setImages(Images $images): static
    {
        $this->images = $images;
        return $this;
    }

    public function getFiles(): ?Files
    {
        return $this->files;
    }

    public function setFiles(?Files $files): static
    {
        $this->files = $files;
        return $this;
    }
}
