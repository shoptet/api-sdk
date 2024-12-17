<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopMandatoryFieldsResponse\GetEshopMandatoryFieldsResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeCustomerFieldValue;

class BillingInfo extends Entity
{
    protected TypeCustomerFieldValue $companyId;
    protected TypeCustomerFieldValue $taxId;

    public function getCompanyId(): TypeCustomerFieldValue
    {
        return $this->companyId;
    }

    public function setCompanyId(TypeCustomerFieldValue $companyId): static
    {
        $this->companyId = $companyId;
        return $this;
    }

    public function getTaxId(): TypeCustomerFieldValue
    {
        return $this->taxId;
    }

    public function setTaxId(TypeCustomerFieldValue $taxId): static
    {
        $this->taxId = $taxId;
        return $this;
    }
}
