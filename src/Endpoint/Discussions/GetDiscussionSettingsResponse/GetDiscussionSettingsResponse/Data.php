<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Discussions\GetDiscussionSettingsResponse\GetDiscussionSettingsResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Discussions\GetDiscussionSettingsResponse\GetDiscussionSettingsResponse\Data\Settings;

class Data extends Entity
{
    protected Settings $settings;

    public function getSettings(): Settings
    {
        return $this->settings;
    }

    public function setSettings(Settings $settings): static
    {
        $this->settings = $settings;
        return $this;
    }
}
