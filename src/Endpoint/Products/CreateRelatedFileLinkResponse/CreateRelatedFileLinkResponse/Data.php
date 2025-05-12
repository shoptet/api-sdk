<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Products\CreateRelatedFileLinkResponse\CreateRelatedFileLinkResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateRelatedFileLinkResponse\CreateRelatedFileLinkResponse\Data\RelatedFiles;

class Data extends Entity
{
    protected RelatedFiles $relatedFiles;

    public function getRelatedFiles(): RelatedFiles
    {
        return $this->relatedFiles;
    }

    public function setRelatedFiles(RelatedFiles $relatedFiles): static
    {
        $this->relatedFiles = $relatedFiles;
        return $this;
    }
}
