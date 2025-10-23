<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\OrderBatchCreate\Settings;

class OrderBatchCreate extends Entity
{
    protected ?Settings $settings;
    protected Order $data;

    public function getSettings(): ?Settings
    {
        return $this->settings;
    }

    public function setSettings(?Settings $settings): static
    {
        $this->settings = $settings;
        return $this;
    }

    public function getData(): Order
    {
        return $this->data;
    }

    public function setData(Order $data): static
    {
        $this->data = $data;
        return $this;
    }
}
