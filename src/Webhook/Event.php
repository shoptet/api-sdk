<?php

namespace Shoptet\Api\Sdk\Php\Webhook;

enum Event: string
{
    case BRAND_CREATE = 'brand:create';
    case BRAND_UPDATE = 'brand:update';
    case BRAND_DELETE = 'brand:delete';
    case CREDIT_NOTE_CREATE = 'creditNote:create';
    case CREDIT_NOTE_DELETE = 'creditNote:delete';
    case CREDIT_NOTE_UPDATE = 'creditNote:update';
    case CUSTOMER_CREATE = 'customer:create';
    case CUSTOMER_UPDATE = 'customer:update';
    case CUSTOMER_DISABLE_ORDERS = 'customer:disableOrders';
    case CUSTOMER_ENABLE_ORDERS = 'customer:enableOrders';
    case CUSTOMER_IMPORT = 'customer:import';
    case CUSTOMER_DELETE = 'customer:delete';
    case DELIVERY_NOTE_CREATE = 'deliveryNote:create';
    case DELIVERY_NOTE_DELETE = 'deliveryNote:delete';
    case DELIVERY_NOTE_UPDATE = 'deliveryNote:update';
    case DISCOUNT_COUPON_CREATE = 'discountCoupon:create';
    case DISCOUNT_COUPON_DELETE = 'discountCoupon:delete';
    case ESHOP_CURRENCIES = 'eshop:currencies';
    case ESHOP_BILLING_INFORMATION = 'eshop:billingInformation';
    case ESHOP_DESIGN = 'eshop:design';
    case ESHOP_MANDATORY_FIELDS = 'eshop:mandatoryFields';
    case ESHOP_PROJECT_DOMAIN = 'eshop:projectDomain';
    case INVOICE_CREATE = 'invoice:create';
    case INVOICE_DELETE = 'invoice:delete';
    case INVOICE_UPDATE = 'invoice:update';
    case JOB_FINISHED = 'job:finished';
    case MAILING_LIST_EMAIL_CREATE = 'mailingListEmail:create';
    case MAILING_LIST_EMAIL_DELETE = 'mailingListEmail:delete';
    case ORDER_CANCEL = 'order:cancel';
    case ORDER_CREATE = 'order:create';
    case ORDER_DELETE = 'order:delete';
    case ORDER_UPDATE = 'order:update';
    case ORDER_STATUSES_LIST_CHANGE = 'orderStatusesList:change';
    case PAYMENT_METHOD_CHANGE = 'paymentMethod:change';
    case PROFORMA_INVOICE_CREATE = 'proformaInvoice:create';
    case PROFORMA_INVOICE_DELETE = 'proformaInvoice:delete';
    case PROFORMA_INVOICE_UPDATE = 'proformaInvoice:update';
    case PROOF_PAYMENT_CREATE = 'proofPayment:create';
    case PROOF_PAYMENT_DELETE = 'proofPayment:delete';
    case PROOF_PAYMENT_UPDATE = 'proofPayment:update';
    case SHIPPING_METHOD_CHANGE = 'shippingMethod:change';
    case SHIPPING_REQUEST_CANCELLED = 'shippingRequest:cancelled';
    case SHIPPING_REQUEST_CONFIRMED = 'shippingRequest:confirmed';
    case STOCK_MOVEMENT = 'stock:movement';
    case STOCK_IN_STOCK = 'stock:inStock';
    case STOCK_SOLD_OUT = 'stock:soldOut';
    case STOCK_MIN_STOCK_SUPPLY_REACHED = 'stock:minStockSupplyReached';
    case DISCOUNT_COUPON_MASS_CREATE = 'discountCoupon:massCreate';
    case DISCOUNT_COUPON_MASS_DELETE = 'discountCoupon:massDelete';
    case INVOICE_MASS_UPDATE = 'invoice:massUpdate';
    case ORDER_MASS_CREATE = 'order:massCreate';
    case ORDER_MASS_UPDATE = 'order:massUpdate';
    case ADDON_SUSPEND = 'addon:suspend';
    case ADDON_APPROVE = 'addon:approve';
    case ADDON_TERMINATE = 'addon:terminate';
    case ADDON_UNINSTALL = 'addon:uninstall';
}
