<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\OrderBatchCreate;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Settings extends Entity
{
    protected ?bool $suppressDocumentGeneration;
    protected ?bool $suppressEmailSending;
    protected ?bool $suppressProductChecking;
    protected ?bool $suppressStockMovements;
    protected ?bool $suppressHistoricalMandatoryFields;
    protected ?bool $suppressHistoricalPaymentChecking;
    protected ?bool $suppressHistoricalShippingChecking;

    public function getSuppressDocumentGeneration(): ?bool
    {
        return $this->suppressDocumentGeneration;
    }

    public function setSuppressDocumentGeneration(?bool $suppressDocumentGeneration): static
    {
        $this->suppressDocumentGeneration = $suppressDocumentGeneration;
        return $this;
    }

    public function getSuppressEmailSending(): ?bool
    {
        return $this->suppressEmailSending;
    }

    public function setSuppressEmailSending(?bool $suppressEmailSending): static
    {
        $this->suppressEmailSending = $suppressEmailSending;
        return $this;
    }

    public function getSuppressProductChecking(): ?bool
    {
        return $this->suppressProductChecking;
    }

    public function setSuppressProductChecking(?bool $suppressProductChecking): static
    {
        $this->suppressProductChecking = $suppressProductChecking;
        return $this;
    }

    public function getSuppressStockMovements(): ?bool
    {
        return $this->suppressStockMovements;
    }

    public function setSuppressStockMovements(?bool $suppressStockMovements): static
    {
        $this->suppressStockMovements = $suppressStockMovements;
        return $this;
    }

    public function getSuppressHistoricalMandatoryFields(): ?bool
    {
        return $this->suppressHistoricalMandatoryFields;
    }

    public function setSuppressHistoricalMandatoryFields(?bool $suppressHistoricalMandatoryFields): static
    {
        $this->suppressHistoricalMandatoryFields = $suppressHistoricalMandatoryFields;
        return $this;
    }

    public function getSuppressHistoricalPaymentChecking(): ?bool
    {
        return $this->suppressHistoricalPaymentChecking;
    }

    public function setSuppressHistoricalPaymentChecking(?bool $suppressHistoricalPaymentChecking): static
    {
        $this->suppressHistoricalPaymentChecking = $suppressHistoricalPaymentChecking;
        return $this;
    }

    public function getSuppressHistoricalShippingChecking(): ?bool
    {
        return $this->suppressHistoricalShippingChecking;
    }

    public function setSuppressHistoricalShippingChecking(?bool $suppressHistoricalShippingChecking): static
    {
        $this->suppressHistoricalShippingChecking = $suppressHistoricalShippingChecking;
        return $this;
    }
}
