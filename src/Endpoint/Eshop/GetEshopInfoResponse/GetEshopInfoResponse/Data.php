<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\ActiveModules;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\BillingInformation;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\CashDesk;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\ContactInformation;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\Countries;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\Currencies;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\ImageCuts;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\Languages;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\OrderAdditionalFields;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\OrderStatuses;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\PaymentMethods;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\Settings;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\ShippingMethods;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\SocialNetworks;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\TaxClasses;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data\Urls;

class Data extends Entity
{
    protected ContactInformation $contactInformation;
    protected ?BillingInformation $billingInformation;
    protected Settings $settings;
    protected Currencies $currencies;
    protected TaxClasses $taxClasses;
    protected ActiveModules $activeModules;
    protected Urls $urls;
    protected ?SocialNetworks $socialNetworks;
    protected ?OrderAdditionalFields $orderAdditionalFields;
    protected ?OrderStatuses $orderStatuses;
    protected ?PaymentMethods $paymentMethods;
    protected ?ShippingMethods $shippingMethods;
    protected ?ImageCuts $imageCuts;
    protected ?Languages $languages;
    protected ?bool $trial;
    protected ?Countries $countries;
    protected ?CashDesk $cashDesk;

    public function getContactInformation(): ContactInformation
    {
        return $this->contactInformation;
    }

    public function setContactInformation(ContactInformation $contactInformation): static
    {
        $this->contactInformation = $contactInformation;
        return $this;
    }

    public function getBillingInformation(): ?BillingInformation
    {
        return $this->billingInformation;
    }

    public function setBillingInformation(?BillingInformation $billingInformation): static
    {
        $this->billingInformation = $billingInformation;
        return $this;
    }

    public function getSettings(): Settings
    {
        return $this->settings;
    }

    public function setSettings(Settings $settings): static
    {
        $this->settings = $settings;
        return $this;
    }

    public function getCurrencies(): Currencies
    {
        return $this->currencies;
    }

    public function setCurrencies(Currencies $currencies): static
    {
        $this->currencies = $currencies;
        return $this;
    }

    public function getTaxClasses(): TaxClasses
    {
        return $this->taxClasses;
    }

    public function setTaxClasses(TaxClasses $taxClasses): static
    {
        $this->taxClasses = $taxClasses;
        return $this;
    }

    public function getActiveModules(): ActiveModules
    {
        return $this->activeModules;
    }

    public function setActiveModules(ActiveModules $activeModules): static
    {
        $this->activeModules = $activeModules;
        return $this;
    }

    public function getUrls(): Urls
    {
        return $this->urls;
    }

    public function setUrls(Urls $urls): static
    {
        $this->urls = $urls;
        return $this;
    }

    public function getSocialNetworks(): ?SocialNetworks
    {
        return $this->socialNetworks;
    }

    public function setSocialNetworks(?SocialNetworks $socialNetworks): static
    {
        $this->socialNetworks = $socialNetworks;
        return $this;
    }

    public function getOrderAdditionalFields(): ?OrderAdditionalFields
    {
        return $this->orderAdditionalFields;
    }

    public function setOrderAdditionalFields(?OrderAdditionalFields $orderAdditionalFields): static
    {
        $this->orderAdditionalFields = $orderAdditionalFields;
        return $this;
    }

    public function getOrderStatuses(): ?OrderStatuses
    {
        return $this->orderStatuses;
    }

    public function setOrderStatuses(?OrderStatuses $orderStatuses): static
    {
        $this->orderStatuses = $orderStatuses;
        return $this;
    }

    public function getPaymentMethods(): ?PaymentMethods
    {
        return $this->paymentMethods;
    }

    public function setPaymentMethods(?PaymentMethods $paymentMethods): static
    {
        $this->paymentMethods = $paymentMethods;
        return $this;
    }

    public function getShippingMethods(): ?ShippingMethods
    {
        return $this->shippingMethods;
    }

    public function setShippingMethods(?ShippingMethods $shippingMethods): static
    {
        $this->shippingMethods = $shippingMethods;
        return $this;
    }

    public function getImageCuts(): ?ImageCuts
    {
        return $this->imageCuts;
    }

    public function setImageCuts(?ImageCuts $imageCuts): static
    {
        $this->imageCuts = $imageCuts;
        return $this;
    }

    public function getLanguages(): ?Languages
    {
        return $this->languages;
    }

    public function setLanguages(?Languages $languages): static
    {
        $this->languages = $languages;
        return $this;
    }

    public function getTrial(): ?bool
    {
        return $this->trial;
    }

    public function setTrial(?bool $trial): static
    {
        $this->trial = $trial;
        return $this;
    }

    public function getCountries(): ?Countries
    {
        return $this->countries;
    }

    public function setCountries(?Countries $countries): static
    {
        $this->countries = $countries;
        return $this;
    }

    public function getCashDesk(): ?CashDesk
    {
        return $this->cashDesk;
    }

    public function setCashDesk(?CashDesk $cashDesk): static
    {
        $this->cashDesk = $cashDesk;
        return $this;
    }
}
