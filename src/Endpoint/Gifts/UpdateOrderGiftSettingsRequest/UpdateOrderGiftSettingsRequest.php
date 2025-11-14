<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Gifts\UpdateOrderGiftSettingsRequest;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Gifts\UpdateOrderGiftSettingsRequest\UpdateOrderGiftSettingsRequest\Data;

class UpdateOrderGiftSettingsRequest extends Entity
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
