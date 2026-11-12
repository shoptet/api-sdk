<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\EET\GetListOfEetEvidenceUnitsResponse\GetListOfEetEvidenceUnitsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\EET\GetListOfEetEvidenceUnitsResponse\GetListOfEetEvidenceUnitsResponse\Data\EvidenceUnits;

class Data extends Entity
{
    protected EvidenceUnits $evidenceUnits;

    public function getEvidenceUnits(): EvidenceUnits
    {
        return $this->evidenceUnits;
    }

    public function setEvidenceUnits(EvidenceUnits $evidenceUnits): static
    {
        $this->evidenceUnits = $evidenceUnits;
        return $this;
    }
}
