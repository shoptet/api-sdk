<?php

namespace Shoptet\Api\Sdk\Php\Response;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Factory\Entity\EntityFactory;

class EntityResponse extends AbstractResponse
{
    protected ?Entity $body;

    public function getBody(): ?Entity
    {
        if ($this->isServerError()) {
            return null;
        }
        if (!isset($this->body)) {
            $this->body = $this->castBodyToEntity();
        }
        return $this->body;
    }

    protected function castBodyToEntity(): ?Entity
    {
        $responseEntityClass = $this->endpoint->getResponseEntityClass();
        if ($responseEntityClass === null) {
            //no response entity class
            return null;
        }

        /** @var null|array<string, mixed> $arrBody */
        $arrBody = json_decode($this->rawBody, true);
        if ($arrBody === null) {
            //cannot be processed - why?
            return null;
        }

        $this->body = EntityFactory::createEntity($responseEntityClass, $arrBody);
        return $this->body;
    }
}
