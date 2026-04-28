<?php

namespace ShoptetTests\Unit\Webhook;

use PHPUnit\Framework\TestCase;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Webhook\SignatureValidator;

class SignatureValidatorTest extends TestCase
{
    private const string SIGNATURE_KEY = '61d1175f54c47dd67df14c17002a17b2';
    private const string MESSAGE_BODY = '{"eshopId":315185,"event":"addon:uninstall","eventCreated":"2019-09-23T22:01:36+0200","eventInstance":"315185"}';
    private const string VALID_SIGNATURE = 'a0e0a3e7689bd4c80e4d6ffcccb05235b864e1d0';

    public function testValidSignatureReturnsTrue(): void
    {
        $this->assertTrue(
            SignatureValidator::isValid(self::SIGNATURE_KEY, self::MESSAGE_BODY, self::VALID_SIGNATURE)
        );
    }

    public function testInvalidSignatureReturnsFalse(): void
    {
        $this->assertFalse(
            SignatureValidator::isValid(self::SIGNATURE_KEY, self::MESSAGE_BODY, 'wrong_signature')
        );
    }

    public function testWrongKeyReturnsFalse(): void
    {
        $this->assertFalse(
            SignatureValidator::isValid('wrong_key', self::MESSAGE_BODY, self::VALID_SIGNATURE)
        );
    }

    public function testWrongBodyReturnsFalse(): void
    {
        $this->assertFalse(
            SignatureValidator::isValid(self::SIGNATURE_KEY, '{"tampered":true}', self::VALID_SIGNATURE)
        );
    }

    public function testArrayBodyProducesCorrectSignature(): void
    {
        $this->assertTrue(SignatureValidator::isValid(
            self::SIGNATURE_KEY, json_decode(self::MESSAGE_BODY, true), self::VALID_SIGNATURE
        ));
    }

    public function testArrayBodyWithWrongSignatureReturnsFalse(): void
    {
        $body = ['eshopId' => 315185];

        $this->assertFalse(SignatureValidator::isValid(self::SIGNATURE_KEY, $body, self::VALID_SIGNATURE));
    }

    public function testEntityBodyProducesCorrectSignature(): void
    {
        $entity = new class (json_decode(self::MESSAGE_BODY, true)) extends Entity {
            public int $eshopId;
            public string $event;
            public string $eventCreated;
            public string $eventInstance;
        };

        $this->assertTrue(SignatureValidator::isValid(self::SIGNATURE_KEY, $entity, self::VALID_SIGNATURE));
    }

    public function testEntityBodyWithWrongSignatureReturnsFalse(): void
    {
        $entity = new class extends Entity {
            public int $eshopId;
        };
        $entity->eshopId = 315185;

        $this->assertFalse(SignatureValidator::isValid(self::SIGNATURE_KEY, $entity, self::VALID_SIGNATURE));
    }
}
