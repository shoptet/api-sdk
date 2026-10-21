<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity\EshopLanguageWebhookPayload;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\EshopLanguageWebhookPayload\Data\Languages;

class Data extends Entity
{
    protected Languages $languages;

    public function getLanguages(): Languages
    {
        return $this->languages;
    }

    public function setLanguages(Languages $languages): static
    {
        $this->languages = $languages;
        return $this;
    }
}
