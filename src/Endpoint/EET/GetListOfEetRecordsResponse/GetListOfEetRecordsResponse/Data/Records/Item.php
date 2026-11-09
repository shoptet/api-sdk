<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\EET\GetListOfEetRecordsResponse\GetListOfEetRecordsResponse\Data\Records;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidNullable;
use Shoptet\Api\Sdk\Php\Endpoint\EET\GetListOfEetRecordsResponse\GetListOfEetRecordsResponse\Data\Records\Item\LastError;
use Shoptet\Api\Sdk\Php\Endpoint\EET\GetListOfEetRecordsResponse\GetListOfEetRecordsResponse\Data\Records\Item\Price;
use Shoptet\Api\Sdk\Php\Endpoint\EET\GetListOfEetRecordsResponse\GetListOfEetRecordsResponse\Data\Records\Item\SourceCurrency;
use Shoptet\Api\Sdk\Php\Endpoint\EET\GetListOfEetRecordsResponse\GetListOfEetRecordsResponse\Data\Records\Item\Warnings;

class Item extends Entity
{
    protected int $id;
    protected string $receiptNumber;
    protected TypeDateTime $receiptedAt;
    protected string $deviceId;
    protected int $premisesId;
    protected int $evidenceUnitId;
    protected string $eic;
    protected string $environment;
    protected bool $isLegallyValid;
    protected string $state;
    protected int $attempts;
    protected TypeDateTimeNullable $lastAttemptAt;
    protected TypeDateTimeNullable $nextAttemptAt;
    protected TypeDateTime $deadlineAt;
    protected TypeDateTimeNullable $deadlineMissedAt;
    protected ?string $pok;
    protected TypeDateTimeNullable $confirmedAt;
    protected ?LastError $lastError;
    protected Warnings $warnings;
    protected Price $price;
    protected ?SourceCurrency $sourceCurrency;
    protected string $source;
    protected ?string $orderCode;
    protected ?string $invoiceCode;
    protected ?string $creditNoteCode;
    protected TypeGuidNullable $paymentMethodGuid;
    protected ?int $adminUserId;
    protected ?string $transactionId;
    protected TypeDateTime $creationTime;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getReceiptNumber(): string
    {
        return $this->receiptNumber;
    }

    public function setReceiptNumber(string $receiptNumber): static
    {
        $this->receiptNumber = $receiptNumber;
        return $this;
    }

    public function getReceiptedAt(): TypeDateTime
    {
        return $this->receiptedAt;
    }

    public function setReceiptedAt(TypeDateTime $receiptedAt): static
    {
        $this->receiptedAt = $receiptedAt;
        return $this;
    }

    public function getDeviceId(): string
    {
        return $this->deviceId;
    }

    public function setDeviceId(string $deviceId): static
    {
        $this->deviceId = $deviceId;
        return $this;
    }

    public function getPremisesId(): int
    {
        return $this->premisesId;
    }

    public function setPremisesId(int $premisesId): static
    {
        $this->premisesId = $premisesId;
        return $this;
    }

    public function getEvidenceUnitId(): int
    {
        return $this->evidenceUnitId;
    }

    public function setEvidenceUnitId(int $evidenceUnitId): static
    {
        $this->evidenceUnitId = $evidenceUnitId;
        return $this;
    }

    public function getEic(): string
    {
        return $this->eic;
    }

    public function setEic(string $eic): static
    {
        $this->eic = $eic;
        return $this;
    }

    public function getEnvironment(): string
    {
        return $this->environment;
    }

    public function setEnvironment(string $environment): static
    {
        $this->environment = $environment;
        return $this;
    }

    public function isIsLegallyValid(): bool
    {
        return $this->isLegallyValid;
    }

    public function setIsLegallyValid(bool $isLegallyValid): static
    {
        $this->isLegallyValid = $isLegallyValid;
        return $this;
    }

    public function getState(): string
    {
        return $this->state;
    }

    public function setState(string $state): static
    {
        $this->state = $state;
        return $this;
    }

    public function getAttempts(): int
    {
        return $this->attempts;
    }

    public function setAttempts(int $attempts): static
    {
        $this->attempts = $attempts;
        return $this;
    }

    public function getLastAttemptAt(): TypeDateTimeNullable
    {
        return $this->lastAttemptAt;
    }

    public function setLastAttemptAt(TypeDateTimeNullable $lastAttemptAt): static
    {
        $this->lastAttemptAt = $lastAttemptAt;
        return $this;
    }

    public function getNextAttemptAt(): TypeDateTimeNullable
    {
        return $this->nextAttemptAt;
    }

    public function setNextAttemptAt(TypeDateTimeNullable $nextAttemptAt): static
    {
        $this->nextAttemptAt = $nextAttemptAt;
        return $this;
    }

    public function getDeadlineAt(): TypeDateTime
    {
        return $this->deadlineAt;
    }

    public function setDeadlineAt(TypeDateTime $deadlineAt): static
    {
        $this->deadlineAt = $deadlineAt;
        return $this;
    }

    public function getDeadlineMissedAt(): TypeDateTimeNullable
    {
        return $this->deadlineMissedAt;
    }

    public function setDeadlineMissedAt(TypeDateTimeNullable $deadlineMissedAt): static
    {
        $this->deadlineMissedAt = $deadlineMissedAt;
        return $this;
    }

    public function getPok(): ?string
    {
        return $this->pok;
    }

    public function setPok(?string $pok): static
    {
        $this->pok = $pok;
        return $this;
    }

    public function getConfirmedAt(): TypeDateTimeNullable
    {
        return $this->confirmedAt;
    }

    public function setConfirmedAt(TypeDateTimeNullable $confirmedAt): static
    {
        $this->confirmedAt = $confirmedAt;
        return $this;
    }

    public function getLastError(): ?LastError
    {
        return $this->lastError;
    }

    public function setLastError(?LastError $lastError): static
    {
        $this->lastError = $lastError;
        return $this;
    }

    public function getWarnings(): Warnings
    {
        return $this->warnings;
    }

    public function setWarnings(Warnings $warnings): static
    {
        $this->warnings = $warnings;
        return $this;
    }

    public function getPrice(): Price
    {
        return $this->price;
    }

    public function setPrice(Price $price): static
    {
        $this->price = $price;
        return $this;
    }

    public function getSourceCurrency(): ?SourceCurrency
    {
        return $this->sourceCurrency;
    }

    public function setSourceCurrency(?SourceCurrency $sourceCurrency): static
    {
        $this->sourceCurrency = $sourceCurrency;
        return $this;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function setSource(string $source): static
    {
        $this->source = $source;
        return $this;
    }

    public function getOrderCode(): ?string
    {
        return $this->orderCode;
    }

    public function setOrderCode(?string $orderCode): static
    {
        $this->orderCode = $orderCode;
        return $this;
    }

    public function getInvoiceCode(): ?string
    {
        return $this->invoiceCode;
    }

    public function setInvoiceCode(?string $invoiceCode): static
    {
        $this->invoiceCode = $invoiceCode;
        return $this;
    }

    public function getCreditNoteCode(): ?string
    {
        return $this->creditNoteCode;
    }

    public function setCreditNoteCode(?string $creditNoteCode): static
    {
        $this->creditNoteCode = $creditNoteCode;
        return $this;
    }

    public function getPaymentMethodGuid(): TypeGuidNullable
    {
        return $this->paymentMethodGuid;
    }

    public function setPaymentMethodGuid(TypeGuidNullable $paymentMethodGuid): static
    {
        $this->paymentMethodGuid = $paymentMethodGuid;
        return $this;
    }

    public function getAdminUserId(): ?int
    {
        return $this->adminUserId;
    }

    public function setAdminUserId(?int $adminUserId): static
    {
        $this->adminUserId = $adminUserId;
        return $this;
    }

    public function getTransactionId(): ?string
    {
        return $this->transactionId;
    }

    public function setTransactionId(?string $transactionId): static
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    public function getCreationTime(): TypeDateTime
    {
        return $this->creationTime;
    }

    public function setCreationTime(TypeDateTime $creationTime): static
    {
        $this->creationTime = $creationTime;
        return $this;
    }
}
