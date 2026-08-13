<?php

namespace ShoptetTests\Unit\Endpoint\Webhooks;

use PHPUnit\Framework\TestCase;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\RegisterNewWebhookRequest\RegisterNewWebhookRequest\Data\Item;
use Shoptet\Api\Sdk\Php\Webhook\Event;

class RegisterNewWebhookRequestItemTest extends TestCase
{
    private const string WEBHOOK_URL = 'https://example.com/webhook';

    public function testAcceptsEnumCase(): void
    {
        $item = (new Item())
            ->setEvent(Event::JOB_FINISHED)
            ->setUrl(self::WEBHOOK_URL);

        $this->assertSame('job:finished', $item->getEvent());
    }

    public function testAcceptsKnownEventString(): void
    {
        $item = (new Item())
            ->setEvent('order:create')
            ->setUrl(self::WEBHOOK_URL);

        $this->assertSame('order:create', $item->getEvent());
    }

    public function testAcceptsEventStringUnknownToEnum(): void
    {
        $futureEvent = 'someEntity:futureEvent';

        $item = (new Item())
            ->setEvent($futureEvent)
            ->setUrl(self::WEBHOOK_URL);

        $this->assertSame($futureEvent, $item->getEvent());
    }

    public function testSerializesEventAndUrl(): void
    {
        $item = (new Item())
            ->setEvent(Event::ESHOP_SETTINGS_INFORMATION)
            ->setUrl(self::WEBHOOK_URL);

        $serialized = $item->toArray();

        $this->assertSame('eshop:settingsInformation', $serialized['event']);
        $this->assertSame(self::WEBHOOK_URL, $serialized['url']);
    }
}
