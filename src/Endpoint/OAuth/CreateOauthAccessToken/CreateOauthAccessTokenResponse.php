<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\OAuth\CreateOauthAccessToken;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\Errors;

/**
 * Response data for creating oAuth access token. This class contains data class and errors list.
 * For more information see https://developers.shoptet.com/api/documentation/installing-the-addon/
 */
class CreateOauthAccessTokenResponse extends Entity
{
    /**
     * @var CreateOauthAccessTokenResponseData|null data class with oAuth access token, if request was successful
     */
    protected ?CreateOauthAccessTokenResponseData $data;

    /**
     * @var Errors|null list of errors if request was not successful
     */
    protected ?Errors $errors;

    public function getData(): ?CreateOauthAccessTokenResponseData
    {
        return $this->data;
    }

    public function setData(?CreateOauthAccessTokenResponseData $data): static
    {
        $this->data = $data;
        return $this;
    }

    public function getErrors(): ?Errors
    {
        return $this->errors;
    }

    public function setErrors(?Errors $errors): static
    {
        $this->errors = $errors;
        return $this;
    }
}
