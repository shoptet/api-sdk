<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\CustomerBatchCreate\Settings;

class CustomerBatchCreate extends Entity
{
    protected ?Settings $settings;
    protected CustomerCreate $data;

    public function getSettings(): ?Settings
    {
        return $this->settings;
    }

    public function setSettings(?Settings $settings): static
    {
        $this->settings = $settings;
        return $this;
    }

    public function getData(): CustomerCreate
    {
        return $this->data;
    }

    public function setData(CustomerCreate $data): static
    {
        $this->data = $data;
        return $this;
    }
}
