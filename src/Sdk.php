<?php

namespace Shoptet\Api\Sdk\Php;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
use Shoptet\Api\Sdk\Php\Async\JobNotFoundException;
use Shoptet\Api\Sdk\Php\Async\JobResultProcessor;
use Shoptet\Api\Sdk\Php\Async\SnapshotResultData;
use Shoptet\Api\Sdk\Php\Authorization\AuthorizationFacade;
use Shoptet\Api\Sdk\Php\Authorization\OAuth;
use Shoptet\Api\Sdk\Php\Authorization\Token\FileTokenStorage;
use Shoptet\Api\Sdk\Php\Authorization\Token\TokenStorage;
use Shoptet\Api\Sdk\Php\Endpoint\AlternativeProducts\AddAlternativeProduct;
use Shoptet\Api\Sdk\Php\Endpoint\AlternativeProducts\AddAlternativeProductRequest\AddAlternativeProductRequest;
use Shoptet\Api\Sdk\Php\Endpoint\AlternativeProducts\GetListOfProductAlternativeProducts;
use Shoptet\Api\Sdk\Php\Endpoint\AlternativeProducts\SetAlternativeProducts;
use Shoptet\Api\Sdk\Php\Endpoint\AlternativeProducts\SetAlternativeProductsRequest\SetAlternativeProductsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\CreateArticle;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\CreateArticleRequest\CreateArticleRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\CreateArticleSection;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\CreateArticleSectionRequest\CreateArticleSectionRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\DeleteArticle;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\DeleteArticleSection;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\GetDetailOfArticle;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\GetDetailOfArticleSection;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\GetListAllArticles;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\GetListOfArticleSections;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\GetListOfArticles;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\UpdateArticle;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\UpdateArticleRequest\UpdateArticleRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\UpdateArticleSection;
use Shoptet\Api\Sdk\Php\Endpoint\Articles\UpdateArticleSectionRequest\UpdateArticleSectionRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Brands\CreateBrand;
use Shoptet\Api\Sdk\Php\Endpoint\Brands\CreateBrandBatch;
use Shoptet\Api\Sdk\Php\Endpoint\Brands\CreateBrandBatchRequest\CreateBrandBatchRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Brands\CreateBrandRequest\CreateBrandRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Brands\DeleteBrand;
use Shoptet\Api\Sdk\Php\Endpoint\Brands\GetDetailOfBrand;
use Shoptet\Api\Sdk\Php\Endpoint\Brands\GetListofBrands;
use Shoptet\Api\Sdk\Php\Endpoint\Brands\UpdateBrand;
use Shoptet\Api\Sdk\Php\Endpoint\Brands\UpdateBrandRequest\UpdateBrandRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\CreateProductCategory;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\CreateProductCategoryRequest\CreateProductCategoryRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\DeleteProductCategory;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\GetListOfProductCategories;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\GetListOfProductsOrderInCategory;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\GetProductCategoryDetail;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateCategoryProductsPriorityBatch;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateCategoryProductsPriorityBatchRequest\UpdateCategoryProductsPriorityBatchRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateProductCategory;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateProductCategoryBatch;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateProductCategoryBatchRequest\UpdateProductCategoryBatchRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateProductCategoryRequest\UpdateProductCategoryRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateProductOrderInCategory;
use Shoptet\Api\Sdk\Php\Endpoint\Categories\UpdateProductOrderInCategoryRequest\UpdateProductOrderInCategoryRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ConsumptionTaxes\CreateConsumptionTax;
use Shoptet\Api\Sdk\Php\Endpoint\ConsumptionTaxes\CreateConsumptionTaxRequest\CreateConsumptionTaxRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ConsumptionTaxes\DeleteConsumptionTax;
use Shoptet\Api\Sdk\Php\Endpoint\ConsumptionTaxes\GetListOfConsumptionTaxes;
use Shoptet\Api\Sdk\Php\Endpoint\ConsumptionTaxes\UpdateConsumptionTax;
use Shoptet\Api\Sdk\Php\Endpoint\ConsumptionTaxes\UpdateConsumptionTaxRequest\UpdateConsumptionTaxRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteFromInvoice;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteFromInvoiceRequest\CreateCreditNoteFromInvoiceRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteFromProofOfPayment;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteFromProofOfPaymentRequest\CreateCreditNoteFromProofOfPaymentRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteItem;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\CreateCreditNoteItemRequest\CreateCreditNoteItemRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\DeleteCreditNote;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\DeleteCreditNoteItem;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\DownloadCreditNoteAsIsdoc;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\DownloadCreditNotePdf;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\GetCreditNoteDetail;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\GetLastCreditNoteChanges;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\GetListOfAllCreditNotes;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\GetListOfCreditNotes;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\RestockCreditNote;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\UpdateCreditNote;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\UpdateCreditNoteItem;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\UpdateCreditNoteItemRequest\UpdateCreditNoteItemRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CreditNotes\UpdateCreditNoteRequest\UpdateCreditNoteRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerAccounts\CreateCustomerAccount;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerAccounts\CreateCustomerAccountRequest\CreateCustomerAccountRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerAccounts\DeleteCustomerAccount;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerAccounts\GetDetailOfCustomerAccount;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerAccounts\GetListOfCustomerAccounts;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerAccounts\UpdateCustomerAccount;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerAccounts\UpdateCustomerAccountRequest\UpdateCustomerAccountRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerDeliveryAddresses\CreateDeliveryAddress;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerDeliveryAddresses\CreateDeliveryAddressRequest\CreateDeliveryAddressRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerDeliveryAddresses\DeleteCustomerDeliveryAddress;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerDeliveryAddresses\GeListOfCustomerDeliveryAddresses;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerDeliveryAddresses\GetDetailOfCustomerDeliveryAddress;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerDeliveryAddresses\UpdateCustomerDeliveryAddress;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerDeliveryAddresses\UpdateCustomerDeliveryAddressRequest\UpdateCustomerDeliveryAddressRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerRemarks\CreateCustomerRemark;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerRemarks\CreateCustomerRemarkRequest\CreateCustomerRemarkRequest;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerRemarks\DeleteCustomerRemark;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerRemarks\GetDetailOfCustomerRemark;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerRemarks\GetListOfCustomerRemarks;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerRemarks\UpdateCustomerRemark;
use Shoptet\Api\Sdk\Php\Endpoint\CustomerRemarks\UpdateCustomerRemarkRequest\UpdateCustomerRemarkRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomer;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerRequest\CreateCustomerRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\DeleteCustomer;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetCustomerDetail;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetLastCustomerChanges;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfAllCustomers;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerGroups;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerRegions;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomers;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomer;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerRequest\UpdateCustomerRequest;
use Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\DeliveryNoteFromOrder;
use Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\DeliveryNoteFromOrderRequest\DeliveryNoteFromOrderRequest;
use Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\DownloadDeliveryNoteAsPdf;
use Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\GetDetailOfDeliveryNote;
use Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\GetListOfAllDeliveryNotes;
use Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\GetListOfDeliveryNotes;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\BulkDeleteDiscountCoupons;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\BulkDeleteDiscountCouponsRequest\BulkDeleteDiscountCouponsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCoupons;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsRequest\CreateDiscountCouponsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsSet;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsSetRequest\CreateDiscountCouponsSetRequest;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsTemplate;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\CreateDiscountCouponsTemplateRequest\CreateDiscountCouponsTemplateRequest;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\DeleteDiscountCoupon;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\DeleteDiscountCouponsTemplate;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetDetailOfDiscountCoupon;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetListOfAllDiscountCoupons;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetListOfDiscountCoupons;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\GetTemplatesOfDiscountCoupons;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\UpdateDiscountCouponsUsage;
use Shoptet\Api\Sdk\Php\Endpoint\DiscountCoupons\UpdateDiscountCouponsUsageRequest\UpdateDiscountCouponsUsageRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Discussions\CreateDiscussionPosts;
use Shoptet\Api\Sdk\Php\Endpoint\Discussions\CreateDiscussionPostsRequest\CreateDiscussionPostsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Discussions\DeleteDiscussionById;
use Shoptet\Api\Sdk\Php\Endpoint\Discussions\GetListOfDiscussionPosts;
use Shoptet\Api\Sdk\Php\Endpoint\Discussions\UpdateDiscussionPost;
use Shoptet\Api\Sdk\Php\Endpoint\Discussions\UpdateDiscussionPostRequest\UpdateDiscussionPostRequest;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailDistributionList;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailDistributionListRequest\CreateEmailDistributionListRequest;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailsDistributionList;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailsDistributionListRequest\CreateEmailsDistributionListRequest;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\GetDetailOfEmailDistributionList;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\GetLastChangesInDistributionList;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\GetListingOfEmailDistributionLists;
use Shoptet\Api\Sdk\Php\Endpoint\Endpoints\GetListOfAvailableEndpoints;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDesign;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDocumentSettings;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfo;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopMandatoryFields;
use Shoptet\Api\Sdk\Php\Endpoint\Exports\GeneralDocumentDownload;
use Shoptet\Api\Sdk\Php\Endpoint\Files\GetListOfUploadedFiles;
use Shoptet\Api\Sdk\Php\Endpoint\Files\UploadFile;
use Shoptet\Api\Sdk\Php\Endpoint\Files\UploadFileRequest\UploadFileRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Files\UploadFiles;
use Shoptet\Api\Sdk\Php\Endpoint\Files\UploadFilesRequest\UploadFilesRequest;
use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\CreateFilteringParameter;
use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\CreateFilteringParameterRequest\CreateFilteringParameterRequest;
use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\CreateFilteringParameterValue;
use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\CreateFilteringParameterValueRequest\CreateFilteringParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\DeleteFilteringParameter;
use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\DeleteFilteringParameterValue;
use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\GetDetailOfFilteringParameter;
use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\GetListOfFilteringParameters;
use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\UpdateFilteringParameter;
use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\UpdateFilteringParameterRequest\UpdateFilteringParameterRequest;
use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\UpdateFilteringParameterValue;
use Shoptet\Api\Sdk\Php\Endpoint\FilteringParameters\UpdateFilteringParameterValueRequest\UpdateFilteringParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Flags\CreateProductFlag;
use Shoptet\Api\Sdk\Php\Endpoint\Flags\CreateProductFlagRequest\CreateProductFlagRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Flags\DeleteProductFlag;
use Shoptet\Api\Sdk\Php\Endpoint\Flags\GetListOfProductsFlags;
use Shoptet\Api\Sdk\Php\Endpoint\Flags\UpdateProductFlag;
use Shoptet\Api\Sdk\Php\Endpoint\Flags\UpdateProductFlagRequest\UpdateProductFlagRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Gifts\GetOrderGiftSettings;
use Shoptet\Api\Sdk\Php\Endpoint\Gifts\UpdateOrderGiftSettings;
use Shoptet\Api\Sdk\Php\Endpoint\Gifts\UpdateOrderGiftSettingsRequest\UpdateOrderGiftSettingsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Instores\GetInStoreDetail;
use Shoptet\Api\Sdk\Php\Endpoint\Instores\GetListOfInStores;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\CreateInvoiceFromOrder;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\CreateInvoiceFromOrderRequest\CreateInvoiceFromOrderRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\CreateInvoiceFromProformaInvoice;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\CreateInvoiceFromProformaInvoiceRequest\CreateInvoiceFromProformaInvoiceRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\DownloadInvoiceAsIsdoc;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\DownloadInvoiceAsPdf;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetInvoiceDetail;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetLastInvoiceChanges;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetListOfAllInvoices;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetListOfInvoices;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\InvoiceLinkProformaInvoices;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\InvoiceLinkProformaInvoicesRequest\InvoiceLinkProformaInvoicesRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\InvoiceLinkProofPayments;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\InvoiceLinkProofPaymentsRequest\InvoiceLinkProofPaymentsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Jobs\GetJobDetail;
use Shoptet\Api\Sdk\Php\Endpoint\Jobs\GetJobDetailResponse\GetJobDetailResponse;
use Shoptet\Api\Sdk\Php\Endpoint\Jobs\GetListOfJobs;
use Shoptet\Api\Sdk\Php\Endpoint\MeasureUnits\GetListOfProductsMeasureUnits;
use Shoptet\Api\Sdk\Php\Endpoint\OnlineStores\GetListOfOnlineStores;
use Shoptet\Api\Sdk\Php\Endpoint\OnlineStores\GetOnlineStoreDetail;
use Shoptet\Api\Sdk\Php\Endpoint\OrderGifts\AddOrderGift;
use Shoptet\Api\Sdk\Php\Endpoint\OrderGifts\AddOrderGiftRequest\AddOrderGiftRequest;
use Shoptet\Api\Sdk\Php\Endpoint\OrderGifts\DeleteOrderGift;
use Shoptet\Api\Sdk\Php\Endpoint\OrderGifts\GetOrderGiftsList;
use Shoptet\Api\Sdk\Php\Endpoint\OrderHistory\CreateOrderRemark;
use Shoptet\Api\Sdk\Php\Endpoint\OrderHistory\CreateOrderRemarkRequest\CreateOrderRemarkRequest;
use Shoptet\Api\Sdk\Php\Endpoint\OrderHistory\DeleteOrderHistoryItem;
use Shoptet\Api\Sdk\Php\Endpoint\OrderHistory\GetListOfAllRemarks;
use Shoptet\Api\Sdk\Php\Endpoint\OrderHistory\GetListOfRemarksForOrder;
use Shoptet\Api\Sdk\Php\Endpoint\OrderItems\CreateOrderItem;
use Shoptet\Api\Sdk\Php\Endpoint\OrderItems\CreateOrderItemRequest\CreateOrderItemRequest;
use Shoptet\Api\Sdk\Php\Endpoint\OrderItems\CreateOrderItemSurchargeParameters;
use Shoptet\Api\Sdk\Php\Endpoint\OrderItems\CreateOrderItemSurchargeParametersRequest\CreateOrderItemSurchargeParametersRequest;
use Shoptet\Api\Sdk\Php\Endpoint\OrderItems\DeleteOrderItem;
use Shoptet\Api\Sdk\Php\Endpoint\OrderItems\DeleteOrderItemSurchargeParameters;
use Shoptet\Api\Sdk\Php\Endpoint\OrderItems\UpdateOrderItem;
use Shoptet\Api\Sdk\Php\Endpoint\OrderItems\UpdateOrderItemRequest\UpdateOrderItemRequest;
use Shoptet\Api\Sdk\Php\Endpoint\OrderPayment\CreateOrderPayment;
use Shoptet\Api\Sdk\Php\Endpoint\OrderPayment\CreateOrderPaymentRequest\CreateOrderPaymentRequest;
use Shoptet\Api\Sdk\Php\Endpoint\OrderPayment\UpdateOrderPayment;
use Shoptet\Api\Sdk\Php\Endpoint\OrderPayment\UpdateOrderPaymentRequest\UpdateOrderPaymentRequest;
use Shoptet\Api\Sdk\Php\Endpoint\OrderShipping\AddOrderShipping;
use Shoptet\Api\Sdk\Php\Endpoint\OrderShipping\AddOrderShippingRequest\AddOrderShippingRequest;
use Shoptet\Api\Sdk\Php\Endpoint\OrderShipping\UpdateOrderShipping;
use Shoptet\Api\Sdk\Php\Endpoint\OrderShipping\UpdateOrderShippingRequest\UpdateOrderShippingRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\BulkOrderStatusChange;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\BulkOrderStatusChangeRequest\BulkOrderStatusChangeRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrder;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderRequest\CreateOrderRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\DeleteOrder;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\DownloadOrderAsPdf;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetLastOrderChanges;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfAllOrders;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrderSources;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrderStatuses;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrders;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetOrderClaims;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetOrderDetail;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\OrderBatchInsertion;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\OrderBatchInsertionRequest\OrderBatchInsertionRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\OrderCopy;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\OrderCopyRequest\OrderCopyRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderHead;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderHeadRequest\UpdateOrderHeadRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderStatus;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderStatusRequest\UpdateOrderStatusRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateRemarksForOrder;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateRemarksForOrderRequest\UpdateRemarksForOrderRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Pages\CreatePage;
use Shoptet\Api\Sdk\Php\Endpoint\Pages\CreatePageRequest\CreatePageRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Pages\DeletePage;
use Shoptet\Api\Sdk\Php\Endpoint\Pages\GetDetailOfPage;
use Shoptet\Api\Sdk\Php\Endpoint\Pages\GetListOfPages;
use Shoptet\Api\Sdk\Php\Endpoint\Pages\UpdatePage;
use Shoptet\Api\Sdk\Php\Endpoint\Pages\UpdatePageRequest\UpdatePageRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\CreateParametricCategory;
use Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\CreateParametricCategoryRequest\CreateParametricCategoryRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\DeleteParametricCategory;
use Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\GetListOfParametricCategories;
use Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\GetParametricCategoryDetail;
use Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\UpdateParametricCategory;
use Shoptet\Api\Sdk\Php\Endpoint\ParametricCategories\UpdateParametricCategoryRequest\UpdateParametricCategoryRequest;
use Shoptet\Api\Sdk\Php\Endpoint\PaymentGateways\GetInformationAboutPayment;
use Shoptet\Api\Sdk\Php\Endpoint\PaymentGateways\UpdatePaymentStatus;
use Shoptet\Api\Sdk\Php\Endpoint\PaymentGateways\UpdatePaymentStatusRequest\UpdatePaymentStatusRequest;
use Shoptet\Api\Sdk\Php\Endpoint\PaymentMethods\CreatePaymentMethod;
use Shoptet\Api\Sdk\Php\Endpoint\PaymentMethods\CreatePaymentMethodRequest\CreatePaymentMethodRequest;
use Shoptet\Api\Sdk\Php\Endpoint\PaymentMethods\DeletePaymentMethod;
use Shoptet\Api\Sdk\Php\Endpoint\PaymentMethods\GetListingOfPaymentMethods;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\CreatePricelist;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\CreatePricelistRequest\CreatePricelistRequest;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\DeletePricelist;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\GetListOfAllPricelistDetails;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\GetListOfPriceLists;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\GetPricelistDetail;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelist;
use Shoptet\Api\Sdk\Php\Endpoint\PriceLists\UpdatePricelistRequest\UpdatePricelistRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProductAvailabilities\CreateProductAvailability;
use Shoptet\Api\Sdk\Php\Endpoint\ProductAvailabilities\CreateProductAvailabilityRequest\CreateProductAvailabilityRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProductAvailabilities\DeleteProductAvailability;
use Shoptet\Api\Sdk\Php\Endpoint\ProductAvailabilities\GetListOfProductsAvailabilities;
use Shoptet\Api\Sdk\Php\Endpoint\ProductAvailabilities\UpdateProductAvailability;
use Shoptet\Api\Sdk\Php\Endpoint\ProductAvailabilities\UpdateProductAvailabilityRequest\UpdateProductAvailabilityRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProductGifts\CreateProductGift;
use Shoptet\Api\Sdk\Php\Endpoint\ProductGifts\CreateProductGiftRequest\CreateProductGiftRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProductGifts\GetListOfProductGifts;
use Shoptet\Api\Sdk\Php\Endpoint\ProductGifts\SteGiftsToProduct;
use Shoptet\Api\Sdk\Php\Endpoint\ProductGifts\SteGiftsToProductRequest\SteGiftsToProductRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProductImages\CreateProductImages;
use Shoptet\Api\Sdk\Php\Endpoint\ProductImages\CreateProductImagesRequest\CreateProductImagesRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProductImages\DeleteAllProductImagesInGallery;
use Shoptet\Api\Sdk\Php\Endpoint\ProductImages\DeleteOneProductImage;
use Shoptet\Api\Sdk\Php\Endpoint\ProductImages\GetListOfProductImages;
use Shoptet\Api\Sdk\Php\Endpoint\ProductImages\GetProductImagesUpdate;
use Shoptet\Api\Sdk\Php\Endpoint\ProductImages\GetProductImagesUpdateRequest\GetProductImagesUpdateRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProductImages\UpdateProductImagesSource;
use Shoptet\Api\Sdk\Php\Endpoint\ProductImages\UpdateProductImagesSourceRequest\UpdateProductImagesSourceRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProductRelatedFiles\CreateRelatedFileLink;
use Shoptet\Api\Sdk\Php\Endpoint\ProductRelatedFiles\CreateRelatedFileLinkRequest\CreateRelatedFileLinkRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProductRelatedFiles\DeleteOneProductRelatedFile;
use Shoptet\Api\Sdk\Php\Endpoint\ProductSets\AddItemToProductSet;
use Shoptet\Api\Sdk\Php\Endpoint\ProductSets\AddItemToProductSetRequest\AddItemToProductSetRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProductSets\SetProductSetItems;
use Shoptet\Api\Sdk\Php\Endpoint\ProductSets\SetProductSetItemsRequest\SetProductSetItemsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProduct;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductRequest\CreateProductRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteProduct;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteProductVariant;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetLastProductChanges;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfAllProducts;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfAllProductsAndPricelistPrices;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProducts;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetProductDetail;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetProductDetailByCode;
use Shoptet\Api\Sdk\Php\Endpoint\Products\ProductBatchUpdate;
use Shoptet\Api\Sdk\Php\Endpoint\Products\ProductBatchUpdateRequest\ProductBatchUpdateRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\ProductCopy;
use Shoptet\Api\Sdk\Php\Endpoint\Products\ProductCopyRequest\ProductCopyRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UnlinkAllProductRelatedFiles;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProduct;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductByCode;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductByCodeRequest\UpdateProductByCodeRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductRequest\UpdateProductRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\CreateProformaInvoiceFromOrder;
use Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\CreateProformaInvoiceFromOrderRequest\CreateProformaInvoiceFromOrderRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\DownloadProformaInvoicePdf;
use Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\GetLastProformaInvoiceChanges;
use Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\GetListOfAllProformaInvoices;
use Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\GetListOfProformaInvoices;
use Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\GetProformaInvoiceDetail;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\CreateProofPayment;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\CreateProofPaymentByOrderCode;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\CreateProofPaymentByProformaInvoiceCode;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\CreateProofPaymentRequest\CreateProofPaymentRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\DeleteProofPayment;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\DownloadProofOfPaymentPdf;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\DownloadProofPaymentAsIsdoc;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetLastProofPaymentsChanges;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetListOfAllProofPayments;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetListOfProofPayments;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetProofPaymentDetail;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetProofPaymentDetailByOrderCode;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetProofPaymentDetailByProformaInvoiceCode;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\ProofPaymentDocumentSettings;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\ProofPaymentDocumentSettingsRequest\ProofPaymentDocumentSettingsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\UpdateProofPayment;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\UpdateProofPaymentRequest\UpdateProofPaymentRequest;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\CreateQuantityDiscount;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\CreateQuantityDiscountRequest\CreateQuantityDiscountRequest;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\DeleteQuantityDiscount;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\GetDetailOfQuantityDiscounts;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\GetListOfAllQuantityDiscounts;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\GetListOfQuantityDiscounts;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\UpdateQuantityDiscount;
use Shoptet\Api\Sdk\Php\Endpoint\QuantityDiscounts\UpdateQuantityDiscountRequest\UpdateQuantityDiscountRequest;
use Shoptet\Api\Sdk\Php\Endpoint\RecyclingFees\GetListOfRecyclingFeeCategories;
use Shoptet\Api\Sdk\Php\Endpoint\RelatedProducts\AddRelatedProduct;
use Shoptet\Api\Sdk\Php\Endpoint\RelatedProducts\AddRelatedProductRequest\AddRelatedProductRequest;
use Shoptet\Api\Sdk\Php\Endpoint\RelatedProducts\GetListOfProductRelatedProducts;
use Shoptet\Api\Sdk\Php\Endpoint\RelatedProducts\SetRelatedProducts;
use Shoptet\Api\Sdk\Php\Endpoint\RelatedProducts\SetRelatedProductsRequest\SetRelatedProductsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\CreateProductReview;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\CreateProductReviewRequest\CreateProductReviewRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\CreateProjectReview;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\CreateProjectReviewRequest\CreateProjectReviewRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\GetListOfEshopReviewsDeprecated;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\GetListOfProductsReviews;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\GetListOfProductsReviewsDeprecated;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\GetListOfProjectReviews;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\UpdateProductReview;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\UpdateProductReviewRequest\UpdateProductReviewRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\UpdateProjectReview;
use Shoptet\Api\Sdk\Php\Endpoint\Reviews\UpdateProjectReviewRequest\UpdateProjectReviewRequest;
use Shoptet\Api\Sdk\Php\Endpoint\SalesChannels\GetSalesChannels;
use Shoptet\Api\Sdk\Php\Endpoint\SalesChannels\GetSalesChannelsDetail;
use Shoptet\Api\Sdk\Php\Endpoint\SalesChannels\GetSalesChannelsDetailById;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\CreateShippingMethod;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\CreateShippingMethodRequest\CreateShippingMethodRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingMethods\GetListOfShippingMethods;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\GetShippingRequestForCartDetails;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\GetShippingRequestForGettingOrderStatus;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\UpdateShippingData;
use Shoptet\Api\Sdk\Php\Endpoint\ShippingRequests\UpdateShippingDataRequest\UpdateShippingDataRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetListOfStocks;
use Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetProductSuppliesInStock;
use Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetStockDetail;
use Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetStockMovements;
use Shoptet\Api\Sdk\Php\Endpoint\Stocks\GetStockMovementsLastMove;
use Shoptet\Api\Sdk\Php\Endpoint\Stocks\UpdateQuantityInStock;
use Shoptet\Api\Sdk\Php\Endpoint\Stocks\UpdateQuantityInStockRequest\UpdateQuantityInStockRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Suppliers\GetListOfSuppliers;
use Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters\CreateSurchargeParameter;
use Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters\CreateSurchargeParameterRequest\CreateSurchargeParameterRequest;
use Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters\CreateSurchargeParameterValue;
use Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters\CreateSurchargeParameterValueRequest\CreateSurchargeParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters\DeleteSurchargeParameterByIndex;
use Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters\DeleteSurchargeParameterValue;
use Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters\GetDetailOfSurchargeParameter;
use Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters\GetListOfSurchargeParameters;
use Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters\UpdateSurchargeParameter;
use Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters\UpdateSurchargeParameterRequest\UpdateSurchargeParameterRequest;
use Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters\UpdateSurchargeParameterValue;
use Shoptet\Api\Sdk\Php\Endpoint\SurchargeParameters\UpdateSurchargeParameterValueRequest\UpdateSurchargeParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Templates\CreateAndEditHtmlCodes;
use Shoptet\Api\Sdk\Php\Endpoint\Templates\CreateAndEditHtmlCodesRequest\CreateAndEditHtmlCodesRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Templates\DeleteHtmlCode;
use Shoptet\Api\Sdk\Php\Endpoint\Templates\GetListingOfHtmlCodes;
use Shoptet\Api\Sdk\Php\Endpoint\Units\GetListOfProductUnits;
use Shoptet\Api\Sdk\Php\Endpoint\UnsubscribedEmails\CreateUnsubscribedEmail;
use Shoptet\Api\Sdk\Php\Endpoint\UnsubscribedEmails\CreateUnsubscribedEmailRequest\CreateUnsubscribedEmailRequest;
use Shoptet\Api\Sdk\Php\Endpoint\UnsubscribedEmails\GetListingOfUnsubscribedEmails;
use Shoptet\Api\Sdk\Php\Endpoint\VariantParameters\CreateVariantParameter;
use Shoptet\Api\Sdk\Php\Endpoint\VariantParameters\CreateVariantParameterRequest\CreateVariantParameterRequest;
use Shoptet\Api\Sdk\Php\Endpoint\VariantParameters\CreateVariantParameterValue;
use Shoptet\Api\Sdk\Php\Endpoint\VariantParameters\CreateVariantParameterValueRequest\CreateVariantParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\VariantParameters\DeleteVariantParameter;
use Shoptet\Api\Sdk\Php\Endpoint\VariantParameters\DeleteVariantParameterValue;
use Shoptet\Api\Sdk\Php\Endpoint\VariantParameters\GetDetailOfVariantParameter;
use Shoptet\Api\Sdk\Php\Endpoint\VariantParameters\GetListOfVariantParameters;
use Shoptet\Api\Sdk\Php\Endpoint\VariantParameters\UpdateVariantParameter;
use Shoptet\Api\Sdk\Php\Endpoint\VariantParameters\UpdateVariantParameterRequest\UpdateVariantParameterRequest;
use Shoptet\Api\Sdk\Php\Endpoint\VariantParameters\UpdateVariantParameterValue;
use Shoptet\Api\Sdk\Php\Endpoint\VariantParameters\UpdateVariantParameterValueRequest\UpdateVariantParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\VolumeDiscounts\GetListOfVolumeDiscounts;
use Shoptet\Api\Sdk\Php\Endpoint\Warranties\GetListOfProductWarranties;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\DeleteRegisteredWebhook;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\GenerateWebhookSignatureKey;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\GetDetailOfRegisteredWebhooks;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\GetOverviewOfRegisteredWebhooks;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\GetWebhookNotification;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\RegisterNewWebhook;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\RegisterNewWebhookRequest\RegisterNewWebhookRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\UpdateExistingWebhook;
use Shoptet\Api\Sdk\Php\Endpoint\Webhooks\UpdateExistingWebhookRequest\UpdateExistingWebhookRequest;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\CreateXYDiscount;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\CreateXYDiscountRequest\CreateXYDiscountRequest;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\DeleteXYDiscount;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\GetDetailOfXYDiscounts;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\GetListOfXYDiscounts;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\GetXYDiscountsSettings;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\UpdateXYDiscount;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\UpdateXYDiscountRequest\UpdateXYDiscountRequest;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\UpdateXYDiscountSettings;
use Shoptet\Api\Sdk\Php\Endpoint\XYDiscounts\UpdateXYDiscountSettingsRequest\UpdateXYDiscountSettingsRequest;
use Shoptet\Api\Sdk\Php\Exception\LogicException;
use Shoptet\Api\Sdk\Php\Exception\ReflectionException;
use Shoptet\Api\Sdk\Php\Exception\RuntimeException;
use Shoptet\Api\Sdk\Php\Factory\Endpoint\EndpointFactory;
use Shoptet\Api\Sdk\Php\Factory\Response\EntityResponseFactory;
use Shoptet\Api\Sdk\Php\HttpClient\ClientInterface;
use Shoptet\Api\Sdk\Php\HttpClient\CurlClient;
use Shoptet\Api\Sdk\Php\Response\ResponseInterface;

class Sdk
{
    protected const string DEFAULT_BASE_URI = 'https://api.myshoptet.com';
    protected const array DEFAULT_HEADERS = ['Content-Type' => 'application/vnd.shoptet.v1.0'];
    protected const string DEFAULT_FILE_STORAGE_PATH = '/tmp/shoptet-api';

    protected static EndpointFactory $endpointFactory;
    protected static LoggerInterface $logger;
    protected static TokenStorage $tokenStorage;
    protected static string $partnerDomainUrl;

    public static function getBaseUri(): string
    {
        return self::getEndpointFactory()->getBaseUri();
    }

    public static function setBaseUri(string $baseUri): void
    {
        self::getEndpointFactory()->setBaseUri($baseUri);
    }

    public static function setTokenStorage(TokenStorage $tokenStorage): void
    {
        self::$tokenStorage = $tokenStorage;
    }

    public static function setPartnerDomainUrl(string $partnerDomainUrl): void
    {
        self::$partnerDomainUrl = $partnerDomainUrl;
    }

    protected static function getTokenStorage(): TokenStorage
    {
        if (!isset(self::$tokenStorage)) {
            self::$tokenStorage = new FileTokenStorage(self::DEFAULT_FILE_STORAGE_PATH);
        }
        return self::$tokenStorage;
    }

    protected static function createOauth(): OAuth
    {
        if (!isset(self::$partnerDomainUrl)) {
            throw new LogicException('Partner domain URL is not set. Call `setPartnerDomainUrl` first');
        }
        return new OAuth(self::getHttpClient(), self::$partnerDomainUrl);
    }

    public static function createAuthorizationFacade(): AuthorizationFacade
    {
        $tokenStorage = self::getTokenStorage();
        $oAuth = self::createOauth();
        return new AuthorizationFacade($tokenStorage, $oAuth);
    }

    public static function authorizeRequest(string $tokenId): void
    {
        $authorizationFacade = self::createAuthorizationFacade();
        $authorizationFacade->authorizeRequest($tokenId);
    }

    public static function createFreshPublicApiToken(string $tokenId, string $oAuthAccessTokenId): void
    {
        $authorizationFacade = self::createAuthorizationFacade();
        $authorizationFacade->createFreshPublicApiToken($tokenId, $oAuthAccessTokenId);
    }

    /**
     * @return array<string, string>
     */
    public static function getHeaders(): array
    {
        return self::getEndpointFactory()->getHeaders();
    }

    public static function setHeader(string $header, string $value): void
    {
        $headers = self::getEndpointFactory()->getHeaders();
        $headers[$header] = $value;
        self::getEndpointFactory()->setHeaders($headers);
    }

    public static function unsetHeader(string $header): void
    {
        $headers = self::getEndpointFactory()->getHeaders();
        if (array_key_exists($header, $headers)) {
            unset($headers[$header]);
            self::getEndpointFactory()->setHeaders($headers);
        }
    }

    public static function getHttpClient(): ClientInterface
    {
        return self::getEndpointFactory()->getHttpClient();
    }

    public static function setHttpClient(ClientInterface $httpClient): void
    {
        self::getEndpointFactory()->setHttpClient($httpClient);
    }

    public static function getLogger(): LoggerInterface
    {
        if (!isset(self::$logger)) {
            self::$logger = new NullLogger();
        }
        return self::$logger;
    }

    public static function setLogger(LoggerInterface $logger): void
    {
        self::$logger = $logger;
    }

    /**
     * @param array{
     *     language?: string,
     *     include?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Eshop/geteshopinfo
     */
    public static function getEshopInfo(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetEshopInfo::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Eshop/geteshopdesign
     */
    public static function getEshopDesign(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetEshopDesign::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Eshop/geteshopdocumentsettings
     */
    public static function getEshopDocumentSettings(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetEshopDocumentSettings::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Eshop/geteshopmandatoryfields
     */
    public static function getEshopMandatoryFields(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetEshopMandatoryFields::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Reviews/getlistofeshopreviewsdeprecated
     */
    public static function getListOfEshopReviewsDeprecated(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfEshopReviewsDeprecated::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Online-stores/getlistofonlinestores
     */
    public static function getListOfOnlineStores(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfOnlineStores::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [1] Online store ID
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Online-stores/getonlinestoredetail
     */
    public static function getOnlineStoreDetail(string $id, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetOnlineStoreDetail::class)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     availabilityId?: string,
     *     availabilityWhenSoldOutId?: string,
     *     creationTimeFrom?: string,
     *     creationTimeTo?: string,
     *     visibility?: string,
     *     type?: string,
     *     brandName?: string,
     *     brandCode?: string,
     *     defaultCategoryGuid?: string,
     *     categoryGuid?: string,
     *     flag?: string,
     *     include?: string,
     *     productCodes?: string,
     *     productGuids?: string,
     *     supplierGuid?: string,
     *     changeTimeFrom?: string,
     *     changeTimeTo?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Products/getlistofproducts
     */
    public static function getListOfProducts(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfProducts::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateProductRequest $requestBody
     * @param array{
     *     language?: string,
     *     include?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Products/createproduct
     */
    public static function createProduct(
        array|CreateProductRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateProduct::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [93bc0dbe-7481-11e8-8216-002590dad85e] Product guid
     * @param array<string, mixed>|ProductCopyRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Products/productcopy
     */
    public static function productCopy(
        string $guid,
        array|ProductCopyRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(ProductCopy::class)
            ->addPathParam('guid', $guid)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     include?: string,
     *     productCodes?: string,
     *     productGuids?: string,
     *     availabilityId?: string,
     *     availabilityWhenSoldOutId?: string,
     *     creationTimeFrom?: string,
     *     creationTimeTo?: string,
     *     visibility?: string,
     *     type?: string,
     *     brandName?: string,
     *     brandCode?: string,
     *     defaultCategoryGuid?: string,
     *     categoryGuid?: string,
     *     flag?: string,
     *     supplierGuid?: string,
     *     changeTimeFrom?: string,
     *     changeTimeTo?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Products/getlistofallproducts
     */
    public static function getListOfAllProducts(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfAllProducts::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Products/getlistofallproductsandpricelistprices
     */
    public static function getListOfAllProductsAndPricelistPrices(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfAllProductsAndPricelistPrices::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [93bc0dbe-7481-11e8-8216-002590dad85e] Product guid
     * @param array{
     *     language?: string,
     *     include?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Products/getproductdetail
     */
    public static function getProductDetail(string $guid, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetProductDetail::class)
            ->addPathParam('guid', $guid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [bffa3b98-d968-11e0-b04f-57a43310b768] Product guid
     * @param array<string, mixed>|UpdateProductRequest $requestBody
     * @param array{
     *     language?: string,
     *     include?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Products/updateproduct
     */
    public static function updateProduct(
        string $guid,
        array|UpdateProductRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateProduct::class)
            ->addPathParam('guid', $guid)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [93bc0dbe-7481-11e8-8216-002590dad85e] Product guid
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Products/deleteproduct
     */
    public static function deleteProduct(string $guid, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteProduct::class)
            ->addPathParam('guid', $guid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|ProductBatchUpdateRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Products/productbatchupdate
     */
    public static function productBatchUpdate(
        array|ProductBatchUpdateRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(ProductBatchUpdate::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [133] product or variant code.
     * @param array{
     *     language?: string,
     *     include?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Products/getproductdetailbycode
     */
    public static function getProductDetailByCode(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetProductDetailByCode::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [00351] Product or variant code
     * @param array<string, mixed>|UpdateProductByCodeRequest $requestBody
     * @param array{
     *     language?: string,
     *     include?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Products/updateproductbycode
     */
    public static function updateProductByCode(
        string $code,
        array|UpdateProductByCodeRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateProductByCode::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [112] product variant code.
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Products/deleteproductvariant
     */
    public static function deleteProductVariant(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteProductVariant::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [92ca3575-7481-11e8-8216-002590dad85e] Product's guid
     * @param string $gallery [shop] Gallery identifier - use `shop` for normal and `shop360` for 360 photos
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-images/getlistofproductimages
     */
    public static function getListOfProductImages(
        string $guid,
        string $gallery,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfProductImages::class)
            ->addPathParam('guid', $guid)
            ->addPathParam('gallery', $gallery)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [94fe7ffc-7481-11e8-8216-002590dad85e] Product's guid
     * @param string $gallery [shop] Gallery name (shop or shop360)
     * @param array{
     *     language?: string,
     *     removeReference?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-images/deleteallproductimagesingallery
     */
    public static function deleteAllProductImagesInGallery(
        string $guid,
        string $gallery,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteAllProductImagesInGallery::class)
            ->addPathParam('guid', $guid)
            ->addPathParam('gallery', $gallery)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [95b84d4b-7481-11e8-8216-002590dad85e] Product's guid
     * @param string $gallery [shop] Gallery identifier - use `shop` for normal and `shop360` for 360 photos
     * @param array<string, mixed>|GetProductImagesUpdateRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-images/getproductimagesupdate
     */
    public static function getProductImagesUpdate(
        string $guid,
        string $gallery,
        array|GetProductImagesUpdateRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(GetProductImagesUpdate::class)
            ->addPathParam('guid', $guid)
            ->addPathParam('gallery', $gallery)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [95b84d4b-7481-11e8-8216-002590dad85e] Product's guid
     * @param string $gallery [shop] Gallery identifier - use `shop` for normal and `shop360` for 360 photos
     * @param array<string, mixed>|CreateProductImagesRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-images/createproductimages
     */
    public static function createProductImages(
        string $guid,
        string $gallery,
        array|CreateProductImagesRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateProductImages::class)
            ->addPathParam('guid', $guid)
            ->addPathParam('gallery', $gallery)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [95b84d4b-7481-11e8-8216-002590dad85e] Product's guid
     * @param string $gallery [shop] Gallery identifier - use `shop` for normal and `shop360` for 360 photos
     * @param array<string, mixed>|UpdateProductImagesSourceRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-images/updateproductimagessource
     */
    public static function updateProductImagesSource(
        string $guid,
        string $gallery,
        array|UpdateProductImagesSourceRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateProductImagesSource::class)
            ->addPathParam('guid', $guid)
            ->addPathParam('gallery', $gallery)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [92d77e60-7481-11e8-8216-002590dad85e] Product's guid
     * @param string $gallery [shop] Gallery name (shop or shop360)
     * @param string $imageName [52.png] Filename
     * @param array{
     *     language?: string,
     *     removeReference?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-images/deleteoneproductimage
     */
    public static function deleteOneProductImage(
        string $guid,
        string $gallery,
        string $imageName,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteOneProductImage::class)
            ->addPathParam('guid', $guid)
            ->addPathParam('gallery', $gallery)
            ->addPathParam('imageName', $imageName)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [93bc0dbe-7481-11e8-8216-002590dad85e] Product guid
     * @param array<string, mixed>|CreateRelatedFileLinkRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-related-files/createrelatedfilelink
     */
    public static function createRelatedFileLink(
        string $guid,
        array|CreateRelatedFileLinkRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateRelatedFileLink::class)
            ->addPathParam('guid', $guid)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [93bc0dbe-7481-11e8-8216-002590dad85e] Product guid
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Products/unlinkallproductrelatedfiles
     */
    public static function unlinkAllProductRelatedFiles(string $guid, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(UnlinkAllProductRelatedFiles::class)
            ->addPathParam('guid', $guid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [92d77e60-7481-11e8-8216-002590dad85e] Product's guid
     * @param string $id [232] Related file id
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-related-files/deleteoneproductrelatedfile
     */
    public static function deleteOneProductRelatedFile(
        string $guid,
        string $id,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteOneProductRelatedFile::class)
            ->addPathParam('guid', $guid)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     from: string,
     *     changeType?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Products/getlastproductchanges
     */
    public static function getLastProductChanges(array $queryParams): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetLastProductChanges::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Categories/getlistofproductcategories
     */
    public static function getListOfProductCategories(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfProductCategories::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateProductCategoryRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Categories/createproductcategory
     */
    public static function createProductCategory(
        array|CreateProductCategoryRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateProductCategory::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $categoryGuid [5c498fb7-70ac-11e9-9208-08002774f818] Product category.
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Categories/getproductcategorydetail
     */
    public static function getProductCategoryDetail(string $categoryGuid, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetProductCategoryDetail::class)
            ->addPathParam('categoryGuid', $categoryGuid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $categoryGuid [bffa3b98-d968-11e0-b04f-57a43310b728] Category's guid
     * @param array<string, mixed>|UpdateProductCategoryRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Categories/updateproductcategory
     */
    public static function updateProductCategory(
        string $categoryGuid,
        array|UpdateProductCategoryRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateProductCategory::class)
            ->addPathParam('categoryGuid', $categoryGuid)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $categoryGuid [5c499200-70ac-11e9-9208-08002774f818] Category guid
     * @param array{
     *     language?: string,
     *     deleteUsed?: string,
     *     deleteChildren?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Categories/deleteproductcategory
     */
    public static function deleteProductCategory(string $categoryGuid, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteProductCategory::class)
            ->addPathParam('categoryGuid', $categoryGuid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|UpdateProductCategoryBatchRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Categories/updateproductcategorybatch
     */
    public static function updateProductCategoryBatch(
        array|UpdateProductCategoryBatchRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateProductCategoryBatch::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|UpdateCategoryProductsPriorityBatchRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Categories/updatecategoryproductsprioritybatch
     */
    public static function updateCategoryProductsPriorityBatch(
        array|UpdateCategoryProductsPriorityBatchRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateCategoryProductsPriorityBatch::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $categoryGuid [5c498fb7-70ac-11e9-9208-08002774f818] Product category.
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Categories/getlistofproductsorderincategory
     */
    public static function getListOfProductsOrderInCategory(
        string $categoryGuid,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfProductsOrderInCategory::class)
            ->addPathParam('categoryGuid', $categoryGuid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $categoryGuid [5c498fb7-70ac-11e9-9208-08002774f818] Product category.
     * @param array<string, mixed>|UpdateProductOrderInCategoryRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Categories/updateproductorderincategory
     */
    public static function updateProductOrderInCategory(
        string $categoryGuid,
        array|UpdateProductOrderInCategoryRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateProductOrderInCategory::class)
            ->addPathParam('categoryGuid', $categoryGuid)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     include?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Parametric-categories/getlistofparametriccategories
     */
    public static function getListOfParametricCategories(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfParametricCategories::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateParametricCategoryRequest $requestBody
     * @param array{
     *     language?: string,
     *     include?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Parametric-categories/createparametriccategory
     */
    public static function createParametricCategory(
        array|CreateParametricCategoryRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateParametricCategory::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $categoryGuid [5c498fb7-70ac-11e9-9208-08002774f818] Guid of parametric category.
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Parametric-categories/getparametriccategorydetail
     */
    public static function getParametricCategoryDetail(
        string $categoryGuid,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(GetParametricCategoryDetail::class)
            ->addPathParam('categoryGuid', $categoryGuid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $categoryGuid [5c498fb7-70ac-11e9-9208-08002774f818] Guid of parametric category.
     * @param array<string, mixed>|UpdateParametricCategoryRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Parametric-categories/updateparametriccategory
     */
    public static function updateParametricCategory(
        string $categoryGuid,
        array|UpdateParametricCategoryRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateParametricCategory::class)
            ->addPathParam('categoryGuid', $categoryGuid)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $categoryGuid [5c498fb7-70ac-11e9-9208-08002774f818] Guid of parametric category.
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Parametric-categories/deleteparametriccategory
     */
    public static function deleteParametricCategory(string $categoryGuid, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteParametricCategory::class)
            ->addPathParam('categoryGuid', $categoryGuid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Flags/getlistofproductsflags
     */
    public static function getListOfProductsFlags(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfProductsFlags::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateProductFlagRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Flags/createproductflag
     */
    public static function createProductFlag(
        array|CreateProductFlagRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateProductFlag::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [action]
     * @param array<string, mixed>|UpdateProductFlagRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Flags/updateproductflag
     */
    public static function updateProductFlag(
        string $code,
        array|UpdateProductFlagRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateProductFlag::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [action]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Flags/deleteproductflag
     */
    public static function deleteProductFlag(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteProductFlag::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Measure-units/getlistofproductsmeasureunits
     */
    public static function getListOfProductsMeasureUnits(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfProductsMeasureUnits::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-availabilities/getlistofproductsavailabilities
     */
    public static function getListOfProductsAvailabilities(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfProductsAvailabilities::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateProductAvailabilityRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-availabilities/createproductavailability
     */
    public static function createProductAvailability(
        array|CreateProductAvailabilityRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateProductAvailability::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [123] product availability ID
     * @param array<string, mixed>|UpdateProductAvailabilityRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-availabilities/updateproductavailability
     */
    public static function updateProductAvailability(
        string $id,
        array|UpdateProductAvailabilityRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateProductAvailability::class)
            ->addPathParam('id', $id)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [123] product availability ID
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-availabilities/deleteproductavailability
     */
    public static function deleteProductAvailability(string $id, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteProductAvailability::class)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Surcharge-parameters/getlistofsurchargeparameters
     */
    public static function getListOfSurchargeParameters(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfSurchargeParameters::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateSurchargeParameterRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Surcharge-parameters/createsurchargeparameter
     */
    public static function createSurchargeParameter(
        array|CreateSurchargeParameterRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateSurchargeParameter::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [povinny]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Surcharge-parameters/getdetailofsurchargeparameter
     */
    public static function getDetailOfSurchargeParameter(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetDetailOfSurchargeParameter::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [povinny]
     * @param array<string, mixed>|UpdateSurchargeParameterRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Surcharge-parameters/updatesurchargeparameter
     */
    public static function updateSurchargeParameter(
        string $code,
        array|UpdateSurchargeParameterRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateSurchargeParameter::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [povinny]
     * @param array<string, mixed>|CreateSurchargeParameterValueRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Surcharge-parameters/createsurchargeparametervalue
     */
    public static function createSurchargeParameterValue(
        string $code,
        array|CreateSurchargeParameterValueRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateSurchargeParameterValue::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [povinny]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Surcharge-parameters/deletesurchargeparameterbyindex
     */
    public static function deleteSurchargeParameterByIndex(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteSurchargeParameterByIndex::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $paramIndex [povinny]
     * @param string $valueIndex [modry]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Surcharge-parameters/deletesurchargeparametervalue
     */
    public static function deleteSurchargeParameterValue(
        string $paramIndex,
        string $valueIndex,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteSurchargeParameterValue::class)
            ->addPathParam('paramIndex', $paramIndex)
            ->addPathParam('valueIndex', $valueIndex)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $paramIndex [povinny]
     * @param string $valueIndex [modry]
     * @param array<string, mixed>|UpdateSurchargeParameterValueRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Surcharge-parameters/updatesurchargeparametervalue
     */
    public static function updateSurchargeParameterValue(
        string $paramIndex,
        string $valueIndex,
        array|UpdateSurchargeParameterValueRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateSurchargeParameterValue::class)
            ->addPathParam('paramIndex', $paramIndex)
            ->addPathParam('valueIndex', $valueIndex)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Filtering-parameters/getlistoffilteringparameters
     */
    public static function getListOfFilteringParameters(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfFilteringParameters::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateFilteringParameterRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Filtering-parameters/createfilteringparameter
     */
    public static function createFilteringParameter(
        array|CreateFilteringParameterRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateFilteringParameter::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [material]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Filtering-parameters/getdetailoffilteringparameter
     */
    public static function getDetailOfFilteringParameter(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetDetailOfFilteringParameter::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [material]
     * @param array<string, mixed>|UpdateFilteringParameterRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Filtering-parameters/updatefilteringparameter
     */
    public static function updateFilteringParameter(
        string $code,
        array|UpdateFilteringParameterRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateFilteringParameter::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [material]
     * @param array<string, mixed>|CreateFilteringParameterValueRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Filtering-parameters/createfilteringparametervalue
     */
    public static function createFilteringParameterValue(
        string $code,
        array|CreateFilteringParameterValueRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateFilteringParameterValue::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [strih-2]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Filtering-parameters/deletefilteringparameter
     */
    public static function deleteFilteringParameter(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteFilteringParameter::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [pohlavi]
     * @param string $valueIndex [muz]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Filtering-parameters/deletefilteringparametervalue
     */
    public static function deleteFilteringParameterValue(
        string $code,
        string $valueIndex,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteFilteringParameterValue::class)
            ->addPathParam('code', $code)
            ->addPathParam('valueIndex', $valueIndex)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [material]
     * @param string $valueIndex [bavlna]
     * @param array<string, mixed>|UpdateFilteringParameterValueRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Filtering-parameters/updatefilteringparametervalue
     */
    public static function updateFilteringParameterValue(
        string $code,
        string $valueIndex,
        array|UpdateFilteringParameterValueRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateFilteringParameterValue::class)
            ->addPathParam('code', $code)
            ->addPathParam('valueIndex', $valueIndex)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     include?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Variant-parameters/getlistofvariantparameters
     */
    public static function getListOfVariantParameters(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfVariantParameters::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateVariantParameterRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Variant-parameters/createvariantparameter
     */
    public static function createVariantParameter(
        array|CreateVariantParameterRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateVariantParameter::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $paramIndex [barva]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Variant-parameters/getdetailofvariantparameter
     */
    public static function getDetailOfVariantParameter(string $paramIndex, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetDetailOfVariantParameter::class)
            ->addPathParam('paramIndex', $paramIndex)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $paramIndex [barva]
     * @param array<string, mixed>|UpdateVariantParameterRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Variant-parameters/updatevariantparameter
     */
    public static function updateVariantParameter(
        string $paramIndex,
        array|UpdateVariantParameterRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateVariantParameter::class)
            ->addPathParam('paramIndex', $paramIndex)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $paramIndex [barevne-spektrum]
     * @param array<string, mixed>|CreateVariantParameterValueRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Variant-parameters/createvariantparametervalue
     */
    public static function createVariantParameterValue(
        string $paramIndex,
        array|CreateVariantParameterValueRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateVariantParameterValue::class)
            ->addPathParam('paramIndex', $paramIndex)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $paramIndex [strih]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Variant-parameters/deletevariantparameter
     */
    public static function deleteVariantParameter(string $paramIndex, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteVariantParameter::class)
            ->addPathParam('paramIndex', $paramIndex)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $paramIndex [strih]
     * @param string $rawValue [raminka]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Variant-parameters/deletevariantparametervalue
     */
    public static function deleteVariantParameterValue(
        string $paramIndex,
        string $rawValue,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteVariantParameterValue::class)
            ->addPathParam('paramIndex', $paramIndex)
            ->addPathParam('rawValue', $rawValue)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $paramIndex [barva]
     * @param string $rawValue [fialova]
     * @param array<string, mixed>|UpdateVariantParameterValueRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Variant-parameters/updatevariantparametervalue
     */
    public static function updateVariantParameterValue(
        string $paramIndex,
        string $rawValue,
        array|UpdateVariantParameterValueRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateVariantParameterValue::class)
            ->addPathParam('paramIndex', $paramIndex)
            ->addPathParam('rawValue', $rawValue)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Consumption-taxes/getlistofconsumptiontaxes
     */
    public static function getListOfConsumptionTaxes(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfConsumptionTaxes::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateConsumptionTaxRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Consumption-taxes/createconsumptiontax
     */
    public static function createConsumptionTax(
        array|CreateConsumptionTaxRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateConsumptionTax::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [8] consumption tax identifier
     * @param array<string, mixed>|UpdateConsumptionTaxRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Consumption-taxes/updateconsumptiontax
     */
    public static function updateConsumptionTax(
        string $id,
        array|UpdateConsumptionTaxRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateConsumptionTax::class)
            ->addPathParam('id', $id)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [8] consumption tax identifier
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Consumption-taxes/deleteconsumptiontax
     */
    public static function deleteConsumptionTax(string $id, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteConsumptionTax::class)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Recycling-fees/getlistofrecyclingfeecategories
     */
    public static function getListOfRecyclingFeeCategories(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfRecyclingFeeCategories::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Warranties/getlistofproductwarranties
     */
    public static function getListOfProductWarranties(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfProductWarranties::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [93bc0dbe-7481-11e8-8216-002590dad85e] Product guid
     * @param array{
     *     language?: string,
     *     visible?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Alternative-products/getlistofproductalternativeproducts
     */
    public static function getListOfProductAlternativeProducts(
        string $guid,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfProductAlternativeProducts::class)
            ->addPathParam('guid', $guid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [93bc0dbe-7481-11e8-8216-002590dad85e] Product guid
     * @param array<string, mixed>|AddAlternativeProductRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Alternative-products/addalternativeproduct
     */
    public static function addAlternativeProduct(
        string $guid,
        array|AddAlternativeProductRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(AddAlternativeProduct::class)
            ->addPathParam('guid', $guid)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [93bc0dbe-7481-11e8-8216-002590dad85e] Product guid
     * @param array<string, mixed>|SetAlternativeProductsRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Alternative-products/setalternativeproducts
     */
    public static function setAlternativeProducts(
        string $guid,
        array|SetAlternativeProductsRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(SetAlternativeProducts::class)
            ->addPathParam('guid', $guid)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [93bc0dbe-7481-11e8-8216-002590dad85e] Product guid
     * @param array{
     *     language?: string,
     *     visible?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Related-products/getlistofproductrelatedproducts
     */
    public static function getListOfProductRelatedProducts(string $guid, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfProductRelatedProducts::class)
            ->addPathParam('guid', $guid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [93bc0dbe-7481-11e8-8216-002590dad85e] Product guid
     * @param array<string, mixed>|AddRelatedProductRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Related-products/addrelatedproduct
     */
    public static function addRelatedProduct(
        string $guid,
        array|AddRelatedProductRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(AddRelatedProduct::class)
            ->addPathParam('guid', $guid)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [93bc0dbe-7481-11e8-8216-002590dad85e] Product guid
     * @param array<string, mixed>|SetRelatedProductsRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Related-products/setrelatedproducts
     */
    public static function setRelatedProducts(
        string $guid,
        array|SetRelatedProductsRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(SetRelatedProducts::class)
            ->addPathParam('guid', $guid)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [93bc0dbe-7481-11e8-8216-002590dad85e] Product guid - Must be `product-set` type.
     * @param array<string, mixed>|AddItemToProductSetRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-sets/additemtoproductset
     */
    public static function addItemToProductSet(
        string $guid,
        array|AddItemToProductSetRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(AddItemToProductSet::class)
            ->addPathParam('guid', $guid)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [93bc0dbe-7481-11e8-8216-002590dad85e] Product guid - Must be `product-set` type.
     * @param array<string, mixed>|SetProductSetItemsRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-sets/setproductsetitems
     */
    public static function setProductSetItems(
        string $guid,
        array|SetProductSetItemsRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(SetProductSetItems::class)
            ->addPathParam('guid', $guid)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Units/getlistofproductunits
     */
    public static function getListOfProductUnits(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfProductUnits::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [93bc0dbe-7481-11e8-8216-002590dad85e] Product guid
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-gifts/getlistofproductgifts
     */
    public static function getListOfProductGifts(string $guid, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfProductGifts::class)
            ->addPathParam('guid', $guid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [93bc0dbe-7481-11e8-8216-002590dad85e] Product guid
     * @param array<string, mixed>|CreateProductGiftRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-gifts/createproductgift
     */
    public static function createProductGift(
        string $guid,
        array|CreateProductGiftRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateProductGift::class)
            ->addPathParam('guid', $guid)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [93bc0dbe-7481-11e8-8216-002590dad85e] Product guid
     * @param array<string, mixed>|SteGiftsToProductRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Product-gifts/stegiftstoproduct
     */
    public static function steGiftsToProduct(
        string $guid,
        array|SteGiftsToProductRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(SteGiftsToProduct::class)
            ->addPathParam('guid', $guid)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     dateFrom: string,
     *     dateTo: string,
     *     changeTimeFrom: string,
     *     productGuid: string,
     *     orderCode: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Reviews/getlistofproductsreviewsdeprecated
     */
    public static function getListOfProductsReviewsDeprecated(array $queryParams): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfProductsReviewsDeprecated::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Price-lists/getlistofpricelists
     */
    public static function getListOfPriceLists(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfPriceLists::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreatePricelistRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Price-lists/createpricelist
     */
    public static function createPricelist(
        array|CreatePricelistRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreatePricelist::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [1] Price list ID
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     code?: string,
     *     guid?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Price-lists/getpricelistdetail
     */
    public static function getPricelistDetail(string $id, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetPricelistDetail::class)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [1] Pricelist id
     * @param array<string, mixed>|UpdatePricelistRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Price-lists/updatepricelist
     */
    public static function updatePricelist(
        string $id,
        array|UpdatePricelistRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdatePricelist::class)
            ->addPathParam('id', $id)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [1] pricelist ID (number)
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Price-lists/deletepricelist
     */
    public static function deletePricelist(string $id, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeletePricelist::class)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [1] Price list ID
     * @param array{
     *     language?: string,
     *     codeFrom?: string,
     *     codeTo?: string,
     *     actionPriceDateFrom?: string,
     *     actionPriceDateTo?: string,
     *     vatRate?: string,
     *     currencyCode?: string,
     *     orderableMinAmount?: string,
     *     orderableMinAmountFrom?: string,
     *     orderableMinAmountTo?: string,
     *     orderableMaxAmount?: string,
     *     orderableMaxAmountFrom?: string,
     *     orderableMaxAmountTo?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Price-lists/getlistofallpricelistdetails
     */
    public static function getListOfAllPricelistDetails(string $id, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfAllPricelistDetails::class)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Sales-channels/getsaleschannels
     */
    public static function getSalesChannels(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetSalesChannels::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     statusId?: string,
     *     shippingGuid?: string,
     *     shippingCompanyCode?: string,
     *     paymentMethodGuid?: string,
     *     creationTimeFrom?: string,
     *     creationTimeTo?: string,
     *     codeFrom?: string,
     *     codeTo?: string,
     *     customerGuid?: string,
     *     email?: string,
     *     phone?: string,
     *     productCode?: string,
     *     changeTimeFrom?: string,
     *     changeTimeTo?: string,
     *     sourceId?: string,
     *     orderCodes?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Orders/getlistoforders
     */
    public static function getListOfOrders(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfOrders::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateOrderRequest $requestBody
     * @param array{
     *     language?: string,
     *     suppressDocumentGeneration?: string,
     *     suppressEmailSending?: string,
     *     suppressProductChecking?: string,
     *     suppressStockMovements?: string,
     *     suppressHistoricalMandatoryFields?: string,
     *     suppressHistoricalPaymentChecking?: string,
     *     suppressHistoricalShippingChecking?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Orders/createorder
     */
    public static function createOrder(
        array|CreateOrderRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateOrder::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     orderCodes?: string,
     *     creationTimeFrom?: string,
     *     creationTimeTo?: string,
     *     userId?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-history/getlistofallremarks
     */
    public static function getListOfAllRemarks(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfAllRemarks::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     include?: string,
     *     orderCodes?: string,
     *     statusId?: string,
     *     shippingGuid?: string,
     *     shippingCompanyCode?: string,
     *     paymentMethodGuid?: string,
     *     creationTimeFrom?: string,
     *     creationTimeTo?: string,
     *     codeFrom?: string,
     *     codeTo?: string,
     *     customerGuid?: string,
     *     email?: string,
     *     phone?: string,
     *     productCode?: string,
     *     changeTimeFrom?: string,
     *     changeTimeTo?: string,
     *     sourceId?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Orders/getlistofallorders
     */
    public static function getListOfAllOrders(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfAllOrders::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|BulkOrderStatusChangeRequest $requestBody
     * @param array{
     *     language?: string,
     *     suppressDocumentGeneration?: string,
     *     suppressEmailSending?: string,
     *     suppressSmsSending?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Orders/bulkorderstatuschange
     */
    public static function bulkOrderStatusChange(
        array|BulkOrderStatusChangeRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(BulkOrderStatusChange::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000012]
     * @param array{
     *     language?: string,
     *     include?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Orders/getorderdetail
     */
    public static function getOrderDetail(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetOrderDetail::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [0000000001]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Orders/deleteorder
     */
    public static function deleteOrder(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteOrder::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000012] order code (number)
     * @param array<string, mixed>|UpdateOrderHeadRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Orders/updateorderhead
     */
    public static function updateOrderHead(
        string $code,
        array|UpdateOrderHeadRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateOrderHead::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000012] order code
     * @param array<string, mixed>|CreateOrderItemRequest $requestBody
     * @param array{
     *     language?: string,
     *     suppressProductChecking?: string,
     *     suppressStockMovements?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-items/createorderitem
     */
    public static function createOrderItem(
        string $code,
        array|CreateOrderItemRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateOrderItem::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000012] order code (number)
     * @param string $id [198] order item id. Can be found in field `data.order.items.itemId` in Order detail.  (number)
     * @param array<string, mixed>|UpdateOrderItemRequest $requestBody
     * @param array{
     *     language?: string,
     *     suppressProductGuidCheck?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-items/updateorderitem
     */
    public static function updateOrderItem(
        string $code,
        string $id,
        array|UpdateOrderItemRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateOrderItem::class)
            ->addPathParam('code', $code)
            ->addPathParam('id', $id)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000012] order code (number)
     * @param string $id [198] order item id. Can be found in field `data.order.items.itemId` in Order detail. (number)
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-items/deleteorderitem
     */
    public static function deleteOrderItem(string $code, string $id, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteOrderItem::class)
            ->addPathParam('code', $code)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000012] order code
     * @param string $id [3120] order item id
     * @param array<string, mixed>|CreateOrderItemSurchargeParametersRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-items/createorderitemsurchargeparameters
     */
    public static function createOrderItemSurchargeParameters(
        string $code,
        string $id,
        array|CreateOrderItemSurchargeParametersRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateOrderItemSurchargeParameters::class)
            ->addPathParam('code', $code)
            ->addPathParam('id', $id)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000012] order code
     * @param string $id [3120] order item id
     * @param string $relationId [04e876] key to identify, which surcharge parameter in relation to order item, should be delete
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-items/deleteorderitemsurchargeparameters
     */
    public static function deleteOrderItemSurchargeParameters(
        string $code,
        string $id,
        string $relationId,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteOrderItemSurchargeParameters::class)
            ->addPathParam('code', $code)
            ->addPathParam('id', $id)
            ->addPathParam('relationId', $relationId)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000079] order code
     * @param array<string, mixed>|CreateOrderPaymentRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-payment/createorderpayment
     */
    public static function createOrderPayment(
        string $code,
        array|CreateOrderPaymentRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateOrderPayment::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000079] order code
     * @param string $id [1] id of order item
     * @param array<string, mixed>|UpdateOrderPaymentRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-payment/updateorderpayment
     */
    public static function updateOrderPayment(
        string $code,
        string $id,
        array|UpdateOrderPaymentRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateOrderPayment::class)
            ->addPathParam('code', $code)
            ->addPathParam('id', $id)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000079] order code
     * @param array<string, mixed>|AddOrderShippingRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-shipping/addordershipping
     */
    public static function addOrderShipping(
        string $code,
        array|AddOrderShippingRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(AddOrderShipping::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000079] order code
     * @param string $id [1] id of order item
     * @param array<string, mixed>|UpdateOrderShippingRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-shipping/updateordershipping
     */
    public static function updateOrderShipping(
        string $code,
        string $id,
        array|UpdateOrderShippingRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateOrderShipping::class)
            ->addPathParam('code', $code)
            ->addPathParam('id', $id)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000004]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Orders/downloadorderaspdf
     */
    public static function downloadOrderAsPdf(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DownloadOrderAsPdf::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000067] Order code
     * @param array{
     *     language?: string,
     *     system?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-history/getlistofremarksfororder
     */
    public static function getListOfRemarksForOrder(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfRemarksForOrder::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000012]
     * @param array<string, mixed>|CreateOrderRemarkRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-history/createorderremark
     */
    public static function createOrderRemark(
        string $code,
        array|CreateOrderRemarkRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateOrderRemark::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000067] Order code
     * @param string $id [4] ID of history item
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-history/deleteorderhistoryitem
     */
    public static function deleteOrderHistoryItem(
        string $code,
        string $id,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteOrderHistoryItem::class)
            ->addPathParam('code', $code)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000012]
     * @param array<string, mixed>|UpdateRemarksForOrderRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Orders/updateremarksfororder
     */
    public static function updateRemarksForOrder(
        string $code,
        array|UpdateRemarksForOrderRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateRemarksForOrder::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000012]
     * @param array<string, mixed>|UpdateOrderStatusRequest $requestBody
     * @param array{
     *     language?: string,
     *     suppressDocumentGeneration?: string,
     *     suppressEmailSending?: string,
     *     suppressSmsSending?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Orders/updateorderstatus
     */
    public static function updateOrderStatus(
        string $code,
        array|UpdateOrderStatusRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateOrderStatus::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000012]
     * @param array<string, mixed>|OrderCopyRequest $requestBody
     * @param array{
     *     language?: string,
     *     include?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Orders/ordercopy
     */
    public static function orderCopy(
        string $code,
        array|OrderCopyRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(OrderCopy::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000053] Order code
     * @param array<string, mixed>|DeliveryNoteFromOrderRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Delivery-notes/deliverynotefromorder
     */
    public static function deliveryNoteFromOrder(
        string $code,
        array|DeliveryNoteFromOrderRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(DeliveryNoteFromOrder::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Orders/getlistoforderstatuses
     */
    public static function getListOfOrderStatuses(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfOrderStatuses::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Orders/getlistofordersources
     */
    public static function getListOfOrderSources(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfOrderSources::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     from: string,
     *     changeType?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Orders/getlastorderchanges
     */
    public static function getLastOrderChanges(array $queryParams): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetLastOrderChanges::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     includeClosedAndCancelledOrders?: string,
     *     productCode?: string,
     *     orderCode?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Orders/getorderclaims
     */
    public static function getOrderClaims(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetOrderClaims::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|OrderBatchInsertionRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Orders/orderbatchinsertion
     */
    public static function orderBatchInsertion(
        array|OrderBatchInsertionRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(OrderBatchInsertion::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-gifts/getordergiftslist
     */
    public static function getOrderGiftsList(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetOrderGiftsList::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|AddOrderGiftRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-gifts/addordergift
     */
    public static function addOrderGift(
        array|AddOrderGiftRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(AddOrderGift::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [4] ID of gift
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Order-gifts/deleteordergift
     */
    public static function deleteOrderGift(string $id, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteOrderGift::class)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Gifts/getordergiftsettings
     */
    public static function getOrderGiftSettings(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetOrderGiftSettings::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|UpdateOrderGiftSettingsRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Gifts/updateordergiftsettings
     */
    public static function updateOrderGiftSettings(
        array|UpdateOrderGiftSettingsRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateOrderGiftSettings::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/In-stores/getlistofinstores
     */
    public static function getListOfInStores(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfInStores::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [1] In-store ID
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/In-stores/getinstoredetail
     */
    public static function getInStoreDetail(string $id, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetInStoreDetail::class)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     isValid?: string,
     *     proformaInvoiceCode?: string,
     *     creationTimeFrom?: string,
     *     creationTimeTo?: string,
     *     taxDateFrom?: string,
     *     orderCode?: string,
     *     codeFrom?: string,
     *     codeTo?: string,
     *     varSymbol?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Invoices/getlistofinvoices
     */
    public static function getListOfInvoices(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfInvoices::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     include?: string,
     *     creationTimeFrom?: string,
     *     creationTimeTo?: string,
     *     changeTimeFrom?: string,
     *     changeTimeTo?: string,
     *     codeFrom?: string,
     *     codeTo?: string,
     *     proformaInvoiceCodeFrom?: string,
     *     proformaInvoiceCodeTo?: string,
     *     dueDateFrom?: string,
     *     dueDateTo?: string,
     *     taxDateFrom?: string,
     *     taxDateTo?: string,
     *     orderCodeFrom?: string,
     *     orderCodeTo?: string,
     *     customerGuid?: string,
     *     varSymbol?: string,
     *     isValid?: string,
     *     hasTaxId?: string,
     *     hasVatId?: string,
     *     hasCompanyId?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Invoices/getlistofallinvoices
     */
    public static function getListOfAllInvoices(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfAllInvoices::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000004]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Invoices/getinvoicedetail
     */
    public static function getInvoiceDetail(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetInvoiceDetail::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000053] Code of order
     * @param array<string, mixed>|CreateInvoiceFromOrderRequest $requestBody
     * @param array{
     *     language?: string,
     *     suppressExistenceCheck?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Invoices/createinvoicefromorder
     */
    public static function createInvoiceFromOrder(
        string $code,
        array|CreateInvoiceFromOrderRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateInvoiceFromOrder::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000053] Code of order
     * @param array<string, mixed>|CreateProformaInvoiceFromOrderRequest $requestBody
     * @param array{
     *     language?: string,
     *     suppressExistenceCheck?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proforma-invoices/createproformainvoicefromorder
     */
    public static function createProformaInvoiceFromOrder(
        string $code,
        array|CreateProformaInvoiceFromOrderRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateProformaInvoiceFromOrder::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000053] Code of proforma invoice
     * @param array<string, mixed>|CreateInvoiceFromProformaInvoiceRequest $requestBody
     * @param array{
     *     language?: string,
     *     suppressExistenceCheck?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Invoices/createinvoicefromproformainvoice
     */
    public static function createInvoiceFromProformaInvoice(
        string $code,
        array|CreateInvoiceFromProformaInvoiceRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateInvoiceFromProformaInvoice::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000053] Code of the invoice
     * @param array<string, mixed>|InvoiceLinkProformaInvoicesRequest $requestBody
     * @param array{
     *     language?: string,
     *     include?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Invoices/invoicelinkproformainvoices
     */
    public static function invoiceLinkProformaInvoices(
        string $code,
        array|InvoiceLinkProformaInvoicesRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(InvoiceLinkProformaInvoices::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000053] Code of the invoice
     * @param array<string, mixed>|InvoiceLinkProofPaymentsRequest $requestBody
     * @param array{
     *     language?: string,
     *     include?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Invoices/invoicelinkproofpayments
     */
    public static function invoiceLinkProofPayments(
        string $code,
        array|InvoiceLinkProofPaymentsRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(InvoiceLinkProofPayments::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000004]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Invoices/downloadinvoiceaspdf
     */
    public static function downloadInvoiceAsPdf(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DownloadInvoiceAsPdf::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000004]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Invoices/downloadinvoiceasisdoc
     */
    public static function downloadInvoiceAsIsdoc(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DownloadInvoiceAsIsdoc::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     from: string,
     *     changeType?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Invoices/getlastinvoicechanges
     */
    public static function getLastInvoiceChanges(array $queryParams): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetLastInvoiceChanges::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     isValid?: string,
     *     orderCode?: string,
     *     creationTimeFrom?: string,
     *     creationTimeTo?: string,
     *     varSymbol?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proforma-invoices/getlistofproformainvoices
     */
    public static function getListOfProformaInvoices(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfProformaInvoices::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     include?: string,
     *     creationTimeFrom?: string,
     *     creationTimeTo?: string,
     *     changeTimeFrom?: string,
     *     changeTimeTo?: string,
     *     codeFrom?: string,
     *     codeTo?: string,
     *     proformaInvoiceCodeFrom?: string,
     *     proformaInvoiceCodeTo?: string,
     *     isValid?: string,
     *     paid?: string,
     *     currencyCode?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proforma-invoices/getlistofallproformainvoices
     */
    public static function getListOfAllProformaInvoices(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfAllProformaInvoices::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000035]
     * @param array{
     *     language?: string,
     *     include?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proforma-invoices/getproformainvoicedetail
     */
    public static function getProformaInvoiceDetail(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetProformaInvoiceDetail::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000035]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proforma-invoices/downloadproformainvoicepdf
     */
    public static function downloadProformaInvoicePdf(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DownloadProformaInvoicePdf::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     from: string,
     *     changeType?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proforma-invoices/getlastproformainvoicechanges
     */
    public static function getLastProformaInvoiceChanges(array $queryParams): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetLastProformaInvoiceChanges::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     code?: string,
     *     orderCode?: string,
     *     proformaInvoiceCode?: string,
     *     invoiceCode?: string,
     *     issueDate?: string,
     *     isValid?: string,
     *     closed?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proof-payments/getlistofproofpayments
     */
    public static function getListOfProofPayments(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfProofPayments::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateProofPaymentRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proof-payments/createproofpayment
     */
    public static function createProofPayment(
        array|CreateProofPaymentRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateProofPayment::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [P--2015000170-1]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proof-payments/getproofpaymentdetail
     */
    public static function getProofPaymentDetail(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetProofPaymentDetail::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [P--2015000170-1]
     * @param array<string, mixed>|UpdateProofPaymentRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proof-payments/updateproofpayment
     */
    public static function updateProofPayment(
        string $code,
        array|UpdateProofPaymentRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateProofPayment::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [P--2015000170-1]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proof-payments/deleteproofpayment
     */
    public static function deleteProofPayment(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteProofPayment::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     creationTimeFrom?: string,
     *     creationTimeTo?: string,
     *     changeTimeFrom?: string,
     *     changeTimeTo?: string,
     *     taxDateFrom?: string,
     *     taxDateTo?: string,
     *     isValid?: string,
     *     currencyCode?: string,
     *     closed?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proof-payments/getlistofallproofpayments
     */
    public static function getListOfAllProofPayments(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfAllProofPayments::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2015000001]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proof-payments/getproofpaymentdetailbyordercode
     */
    public static function getProofPaymentDetailByOrderCode(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetProofPaymentDetailByOrderCode::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2015000001]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proof-payments/createproofpaymentbyordercode
     */
    public static function createProofPaymentByOrderCode(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(CreateProofPaymentByOrderCode::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2015000170]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proof-payments/getproofpaymentdetailbyproformainvoicecode
     */
    public static function getProofPaymentDetailByProformaInvoiceCode(
        string $code,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(GetProofPaymentDetailByProformaInvoiceCode::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2015000170]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proof-payments/createproofpaymentbyproformainvoicecode
     */
    public static function createProofPaymentByProformaInvoiceCode(
        string $code,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateProofPaymentByProformaInvoiceCode::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [P--2015000170-1]
     * @param array<string, mixed>|ProofPaymentDocumentSettingsRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proof-payments/proofpaymentdocumentsettings
     */
    public static function proofPaymentDocumentSettings(
        string $code,
        array|ProofPaymentDocumentSettingsRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(ProofPaymentDocumentSettings::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [P-2014000004-01]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proof-payments/downloadproofofpaymentpdf
     */
    public static function downloadProofOfPaymentPdf(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DownloadProofOfPaymentPdf::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [P-2015000248-01]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proof-payments/downloadproofpaymentasisdoc
     */
    public static function downloadProofPaymentAsIsdoc(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DownloadProofPaymentAsIsdoc::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     from: string,
     *     changeType?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Proof-payments/getlastproofpaymentschanges
     */
    public static function getLastProofPaymentsChanges(array $queryParams): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetLastProofPaymentsChanges::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     isValid?: string,
     *     invoiceCode?: string,
     *     creationTimeFrom?: string,
     *     creationTimeTo?: string,
     *     varSymbol?: string,
     *     proofPaymentCode?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Credit-notes/getlistofcreditnotes
     */
    public static function getListOfCreditNotes(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfCreditNotes::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     creationTimeFrom?: string,
     *     creationTimeTo?: string,
     *     changeTimeFrom?: string,
     *     changeTimeTo?: string,
     *     codeFrom?: string,
     *     codeTo?: string,
     *     invoiceCodeFrom?: string,
     *     invoiceCodeTo?: string,
     *     dueDateFrom?: string,
     *     dueDateTo?: string,
     *     hasProofPaymentCode?: string,
     *     taxDateFrom?: string,
     *     taxDateTo?: string,
     *     orderCodeFrom?: string,
     *     orderCodeTo?: string,
     *     customerGuid?: string,
     *     varSymbol?: string,
     *     restocked?: string,
     *     isValid?: string,
     *     include?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Credit-notes/getlistofallcreditnotes
     */
    public static function getListOfAllCreditNotes(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfAllCreditNotes::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [0000000002]
     * @param array{
     *     language?: string,
     *     include?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Credit-notes/getcreditnotedetail
     */
    public static function getCreditNoteDetail(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetCreditNoteDetail::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [0000000002]
     * @param array<string, mixed>|UpdateCreditNoteRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Credit-notes/updatecreditnote
     */
    public static function updateCreditNote(
        string $code,
        array|UpdateCreditNoteRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateCreditNote::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [0000000002]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Credit-notes/deletecreditnote
     */
    public static function deleteCreditNote(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteCreditNote::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [0000000002]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Credit-notes/restockcreditnote
     */
    public static function restockCreditNote(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(RestockCreditNote::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000004] Code of invoice
     * @param array<string, mixed>|CreateCreditNoteFromInvoiceRequest $requestBody
     * @param array{
     *     language?: string,
     *     include?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Credit-notes/createcreditnotefrominvoice
     */
    public static function createCreditNoteFromInvoice(
        string $code,
        array|CreateCreditNoteFromInvoiceRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateCreditNoteFromInvoice::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [P-2014000004-01] Proof of payment code
     * @param array<string, mixed>|CreateCreditNoteFromProofOfPaymentRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Credit-notes/createcreditnotefromproofofpayment
     */
    public static function createCreditNoteFromProofOfPayment(
        string $code,
        array|CreateCreditNoteFromProofOfPaymentRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateCreditNoteFromProofOfPayment::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000012] credit note code (number)
     * @param array<string, mixed>|CreateCreditNoteItemRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Credit-notes/createcreditnoteitem
     */
    public static function createCreditNoteItem(
        string $code,
        array|CreateCreditNoteItemRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateCreditNoteItem::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000012] credit note code (number)
     * @param string $id [198] credit note item id. Can be found in field `data.creditNote.items.itemId` in Credit note detail.
     * @param array<string, mixed>|UpdateCreditNoteItemRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Credit-notes/updatecreditnoteitem
     */
    public static function updateCreditNoteItem(
        string $code,
        string $id,
        array|UpdateCreditNoteItemRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateCreditNoteItem::class)
            ->addPathParam('code', $code)
            ->addPathParam('id', $id)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [2018000012] credit note code (number)
     * @param string $id [198] credit note item id. Can be found in field `data.creditNote.items.itemId` in Credit note detail.
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Credit-notes/deletecreditnoteitem
     */
    public static function deleteCreditNoteItem(string $code, string $id, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteCreditNoteItem::class)
            ->addPathParam('code', $code)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [0000000002]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Credit-notes/downloadcreditnotepdf
     */
    public static function downloadCreditNotePdf(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DownloadCreditNotePdf::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [0000000002]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Credit-notes/downloadcreditnoteasisdoc
     */
    public static function downloadCreditNoteAsIsdoc(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DownloadCreditNoteAsIsdoc::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     from: string,
     *     changeType?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Credit-notes/getlastcreditnotechanges
     */
    public static function getLastCreditNoteChanges(array $queryParams): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetLastCreditNoteChanges::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     isValid?: string,
     *     orderCode?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Delivery-notes/getlistofdeliverynotes
     */
    public static function getListOfDeliveryNotes(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfDeliveryNotes::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     creationTimeFrom?: string,
     *     creationTimeTo?: string,
     *     changeTimeFrom?: string,
     *     changeTimeTo?: string,
     *     codeFrom?: string,
     *     codeTo?: string,
     *     orderCodeFrom?: string,
     *     orderCodeTo?: string,
     *     customerGuid?: string,
     *     isValid?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Delivery-notes/getlistofalldeliverynotes
     */
    public static function getListOfAllDeliveryNotes(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfAllDeliveryNotes::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [0000000003]
     * @param array{
     *     language?: string,
     *     include?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Delivery-notes/getdetailofdeliverynote
     */
    public static function getDetailOfDeliveryNote(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetDetailOfDeliveryNote::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [0000000001]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Delivery-notes/downloaddeliverynoteaspdf
     */
    public static function downloadDeliveryNoteAsPdf(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DownloadDeliveryNoteAsPdf::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $type [proofPayment] See tables for all document types
     * @param string $format [xmlPohodaCz] See tables for all document formats
     * @param array{
     *     language?: string,
     *     currency?: string,
     *     codeFrom?: string,
     *     codeTo?: string,
     *     dateFrom?: string,
     *     dateTo?: string,
     *     taxDateFrom?: string,
     *     taxDateTo?: string,
     *     include?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Exports/generaldocumentdownload
     */
    public static function generalDocumentDownload(
        string $type,
        string $format,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(GeneralDocumentDownload::class)
            ->addPathParam('type', $type)
            ->addPathParam('format', $format)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [0199bdfd-0979-71fb-85ce-e483c61d391a] Sales channel GUID
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Sales-channels/getsaleschannelsdetail
     */
    public static function getSalesChannelsDetail(string $guid, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetSalesChannelsDetail::class)
            ->addPathParam('guid', $guid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [2] Sales channel ID
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Sales-channels/getsaleschannelsdetailbyid
     */
    public static function getSalesChannelsDetailById(string $id, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetSalesChannelsDetailById::class)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Stocks/getlistofstocks
     */
    public static function getListOfStocks(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfStocks::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $stockId [1]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Stocks/getstockdetail
     */
    public static function getStockDetail(string $stockId, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetStockDetail::class)
            ->addPathParam('stockId', $stockId)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $stockId [1] ID of stock for which we would like the movements.
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     lastId?: string,
     *     changeTimeFrom?: string,
     *     orderCode?: string,
     *     include?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Stocks/getstockmovements
     */
    public static function getStockMovements(string $stockId, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetStockMovements::class)
            ->addPathParam('stockId', $stockId)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $stockId [1] ID of the stock for which we would like the movements.
     * @param array<string, mixed>|UpdateQuantityInStockRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Stocks/updatequantityinstock
     */
    public static function updateQuantityInStock(
        string $stockId,
        array|UpdateQuantityInStockRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateQuantityInStock::class)
            ->addPathParam('stockId', $stockId)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $stockId [1] ID of stock for which we would like the movements.
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Stocks/getstockmovementslastmove
     */
    public static function getStockMovementsLastMove(string $stockId, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetStockMovementsLastMove::class)
            ->addPathParam('stockId', $stockId)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $stockId [1]
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     productGuid?: string,
     *     code?: string,
     *     onlyWithClaim?: string,
     *     changedFrom?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Stocks/getproductsuppliesinstock
     */
    public static function getProductSuppliesInStock(string $stockId, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetProductSuppliesInStock::class)
            ->addPathParam('stockId', $stockId)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Suppliers/getlistofsuppliers
     */
    public static function getListOfSuppliers(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfSuppliers::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Brands/getlistofbrands
     */
    public static function getListofBrands(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListofBrands::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateBrandRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Brands/createbrand
     */
    public static function createBrand(
        array|CreateBrandRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateBrand::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [1e3f3f3f-3f3f-63ca-b93f-02423f1f0005] brand GUID
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Brands/getdetailofbrand
     */
    public static function getDetailOfBrand(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetDetailOfBrand::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [1e3f3f3f-3f3f-63ca-b93f-02423f1f0005] brand GUID
     * @param array<string, mixed>|UpdateBrandRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Brands/updatebrand
     */
    public static function updateBrand(
        string $code,
        array|UpdateBrandRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateBrand::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [1e3f3f3f-3f3f-63ca-b93f-02423f1f0005] brand GUID
     * @param array{
     *     language?: string,
     *     deleteUsed?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Brands/deletebrand
     */
    public static function deleteBrand(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteBrand::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateBrandBatchRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Brands/createbrandbatch
     */
    public static function createBrandBatch(
        array|CreateBrandBatchRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateBrandBatch::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     email?: string,
     *     phone?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customers/getlistofcustomers
     */
    public static function getListOfCustomers(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfCustomers::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateCustomerRequest $requestBody
     * @param array{
     *     language?: string,
     *     suppressMandatoryFieldsCheck?: string,
     *     sendRegistrationEmail?: string,
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customers/createcustomer
     */
    public static function createCustomer(
        array|CreateCustomerRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateCustomer::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     creationTimeFrom?: string,
     *     creationTimeTo?: string,
     *     changeTimeFrom?: string,
     *     changeTimeTo?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customers/getlistofallcustomers
     */
    public static function getListOfAllCustomers(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfAllCustomers::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [443cad54-73bc-11e8-8216-002590dad85e]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customers/getcustomerdetail
     */
    public static function getCustomerDetail(string $guid, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetCustomerDetail::class)
            ->addPathParam('guid', $guid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [443cad54-73bc-11e8-8216-002590dad85e]
     * @param array<string, mixed>|UpdateCustomerRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customers/updatecustomer
     */
    public static function updateCustomer(
        string $guid,
        array|UpdateCustomerRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateCustomer::class)
            ->addPathParam('guid', $guid)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [747fb32d-73bc-11e8-8216-002590dad85e]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customers/deletecustomer
     */
    public static function deleteCustomer(string $guid, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteCustomer::class)
            ->addPathParam('guid', $guid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [45f0cc8c-b7a9-11ea-a7a1-08002746ad91]
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-accounts/getlistofcustomeraccounts
     */
    public static function getListOfCustomerAccounts(string $guid, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfCustomerAccounts::class)
            ->addPathParam('guid', $guid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [45f0cc8c-b7a9-11ea-a7a1-08002746ad91]
     * @param array<string, mixed>|CreateCustomerAccountRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-accounts/createcustomeraccount
     */
    public static function createCustomerAccount(
        string $guid,
        array|CreateCustomerAccountRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateCustomerAccount::class)
            ->addPathParam('guid', $guid)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [45f0cc8c-b7a9-11ea-a7a1-08002746ad91]
     * @param string $accountGuid [460e4fbe-b7a9-11ea-82ab-08002746ad91]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-accounts/getdetailofcustomeraccount
     */
    public static function getDetailOfCustomerAccount(
        string $guid,
        string $accountGuid,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(GetDetailOfCustomerAccount::class)
            ->addPathParam('guid', $guid)
            ->addPathParam('accountGuid', $accountGuid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [45f0cc8c-b7a9-11ea-a7a1-08002746ad91]
     * @param string $accountGuid [460e4fbe-b7a9-11ea-82ab-08002746ad91]
     * @param array<string, mixed>|UpdateCustomerAccountRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-accounts/updatecustomeraccount
     */
    public static function updateCustomerAccount(
        string $guid,
        string $accountGuid,
        array|UpdateCustomerAccountRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateCustomerAccount::class)
            ->addPathParam('guid', $guid)
            ->addPathParam('accountGuid', $accountGuid)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [45f0cc8c-b7a9-11ea-a7a1-08002746ad91]
     * @param string $accountGuid [460e4fbe-b7a9-11ea-82ab-08002746ad91]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-accounts/deletecustomeraccount
     */
    public static function deleteCustomerAccount(
        string $guid,
        string $accountGuid,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteCustomerAccount::class)
            ->addPathParam('guid', $guid)
            ->addPathParam('accountGuid', $accountGuid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [45f0cc8c-b7a9-11ea-a7a1-08002746ad91]
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-delivery-addresses/gelistofcustomerdeliveryaddresses
     */
    public static function geListOfCustomerDeliveryAddresses(string $guid, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GeListOfCustomerDeliveryAddresses::class)
            ->addPathParam('guid', $guid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [45f0cc8c-b7a9-11ea-a7a1-08002746ad91]
     * @param array<string, mixed>|CreateDeliveryAddressRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-delivery-addresses/createdeliveryaddress
     */
    public static function createDeliveryAddress(
        string $guid,
        array|CreateDeliveryAddressRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateDeliveryAddress::class)
            ->addPathParam('guid', $guid)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [45f0cc8c-b7a9-11ea-a7a1-08002746ad91]
     * @param string $addressGuid [2592b624-b73f-11ea-8a73-08002746ad91]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-delivery-addresses/getdetailofcustomerdeliveryaddress
     */
    public static function getDetailOfCustomerDeliveryAddress(
        string $guid,
        string $addressGuid,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(GetDetailOfCustomerDeliveryAddress::class)
            ->addPathParam('guid', $guid)
            ->addPathParam('addressGuid', $addressGuid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [45f0cc8c-b7a9-11ea-a7a1-08002746ad91]
     * @param string $addressGuid [2592b624-b73f-11ea-8a73-08002746ad91]
     * @param array<string, mixed>|UpdateCustomerDeliveryAddressRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-delivery-addresses/updatecustomerdeliveryaddress
     */
    public static function updateCustomerDeliveryAddress(
        string $guid,
        string $addressGuid,
        array|UpdateCustomerDeliveryAddressRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateCustomerDeliveryAddress::class)
            ->addPathParam('guid', $guid)
            ->addPathParam('addressGuid', $addressGuid)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [45f0cc8c-b7a9-11ea-a7a1-08002746ad91]
     * @param string $addressGuid [2592b624-b73f-11ea-8a73-08002746ad91]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-delivery-addresses/deletecustomerdeliveryaddress
     */
    public static function deleteCustomerDeliveryAddress(
        string $guid,
        string $addressGuid,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteCustomerDeliveryAddress::class)
            ->addPathParam('guid', $guid)
            ->addPathParam('addressGuid', $addressGuid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [45f0cc8c-b7a9-11ea-a7a1-08002746ad91]
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-remarks/getlistofcustomerremarks
     */
    public static function getListOfCustomerRemarks(string $guid, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfCustomerRemarks::class)
            ->addPathParam('guid', $guid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [45f0cc8c-b7a9-11ea-a7a1-08002746ad91]
     * @param array<string, mixed>|CreateCustomerRemarkRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-remarks/createcustomerremark
     */
    public static function createCustomerRemark(
        string $guid,
        array|CreateCustomerRemarkRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateCustomerRemark::class)
            ->addPathParam('guid', $guid)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [45f0cc8c-b7a9-11ea-a7a1-08002746ad91]
     * @param string $id [1]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-remarks/getdetailofcustomerremark
     */
    public static function getDetailOfCustomerRemark(
        string $guid,
        string $id,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(GetDetailOfCustomerRemark::class)
            ->addPathParam('guid', $guid)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [45f0cc8c-b7a9-11ea-a7a1-08002746ad91]
     * @param string $id [1]
     * @param array<string, mixed>|UpdateCustomerRemarkRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-remarks/updatecustomerremark
     */
    public static function updateCustomerRemark(
        string $guid,
        string $id,
        array|UpdateCustomerRemarkRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateCustomerRemark::class)
            ->addPathParam('guid', $guid)
            ->addPathParam('id', $id)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [45f0cc8c-b7a9-11ea-a7a1-08002746ad91]
     * @param string $id [1]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customer-remarks/deletecustomerremark
     */
    public static function deleteCustomerRemark(string $guid, string $id, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteCustomerRemark::class)
            ->addPathParam('guid', $guid)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     from: string,
     *     changeType?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customers/getlastcustomerchanges
     */
    public static function getLastCustomerChanges(array $queryParams): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetLastCustomerChanges::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customers/getlistofcustomerregions
     */
    public static function getListOfCustomerRegions(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfCustomerRegions::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Customers/getlistofcustomergroups
     */
    public static function getListOfCustomerGroups(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfCustomerGroups::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Templates/getlistingofhtmlcodes
     */
    public static function getListingOfHtmlCodes(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListingOfHtmlCodes::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateAndEditHtmlCodesRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Templates/createandedithtmlcodes
     */
    public static function createAndEditHtmlCodes(
        array|CreateAndEditHtmlCodesRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateAndEditHtmlCodes::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $location [common-header] supported values: `common-header`, `common-footer`, `order-confirmed`
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Templates/deletehtmlcode
     */
    public static function deleteHtmlCode(string $location, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteHtmlCode::class)
            ->addPathParam('location', $location)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $paymentCode [os8FtURz7PpO46Z87euEAoBAn9RClB2d] the payment code identifies the payment of a single order, it is generated when the order is completed and received by the payment gateway upon redirection from the e-shop to the payment gateway.
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Payment-gateways/getinformationaboutpayment
     */
    public static function getInformationAboutPayment(string $paymentCode, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetInformationAboutPayment::class)
            ->addPathParam('paymentCode', $paymentCode)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $paymentCode [os8FtURz7PpO46Z87euEAoBAn9RClB2d] payment code identifies the payment of a single order, it is generated when the order is completed and received by the payment gateway upon redirection from e-shop to the payment gateway.
     * @param array<string, mixed>|UpdatePaymentStatusRequest $requestBody
     * @param array{
     *     language?: string,
     *     suppressDocumentGeneration?: string,
     *     suppressEmailSending?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Payment-gateways/updatepaymentstatus
     */
    public static function updatePaymentStatus(
        string $paymentCode,
        array|UpdatePaymentStatusRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdatePaymentStatus::class)
            ->addPathParam('paymentCode', $paymentCode)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Webhooks/getoverviewofregisteredwebhooks
     */
    public static function getOverviewOfRegisteredWebhooks(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetOverviewOfRegisteredWebhooks::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|RegisterNewWebhookRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Webhooks/registernewwebhook
     */
    public static function registerNewWebhook(
        array|RegisterNewWebhookRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(RegisterNewWebhook::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [3]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Webhooks/getdetailofregisteredwebhooks
     */
    public static function getDetailOfRegisteredWebhooks(string $id, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetDetailOfRegisteredWebhooks::class)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [3]
     * @param array<string, mixed>|UpdateExistingWebhookRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Webhooks/updateexistingwebhook
     */
    public static function updateExistingWebhook(
        string $id,
        array|UpdateExistingWebhookRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateExistingWebhook::class)
            ->addPathParam('id', $id)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [3]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Webhooks/deleteregisteredwebhook
     */
    public static function deleteRegisteredWebhook(string $id, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteRegisteredWebhook::class)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Webhooks/generatewebhooksignaturekey
     */
    public static function generateWebhookSignatureKey(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GenerateWebhookSignatureKey::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     status?: string,
     *     event?: string,
     *     active?: string,
     *     from?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Webhooks/getwebhooknotification
     */
    public static function getWebhookNotification(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetWebhookNotification::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Shipping-methods/getlistofshippingmethods
     */
    public static function getListOfShippingMethods(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfShippingMethods::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateShippingMethodRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Shipping-methods/createshippingmethod
     */
    public static function createShippingMethod(
        array|CreateShippingMethodRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateShippingMethod::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $shippingRequestCode [0389fc7dd97584790e5ad49010db9c4a] Shipping request code of cart
     * @param string $shippingGuid [ecb3e399-2f57-11eb-8853-0800275177b9] Shipping method based on delivery
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Shipping-requests/getshippingrequestforcartdetails
     */
    public static function getShippingRequestForCartDetails(
        string $shippingRequestCode,
        string $shippingGuid,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(GetShippingRequestForCartDetails::class)
            ->addPathParam('shippingRequestCode', $shippingRequestCode)
            ->addPathParam('shippingGuid', $shippingGuid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $shippingRequestCode [0389fc7dd97584790e5ad49010db9c4a] Shipping request code of cart
     * @param string $shippingGuid [ecb3e399-2f57-11eb-8853-0800275177b9] Shipping method based on delivery
     * @param array<string, mixed>|UpdateShippingDataRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Shipping-requests/updateshippingdata
     */
    public static function updateShippingData(
        string $shippingRequestCode,
        string $shippingGuid,
        array|UpdateShippingDataRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateShippingData::class)
            ->addPathParam('shippingRequestCode', $shippingRequestCode)
            ->addPathParam('shippingGuid', $shippingGuid)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $shippingRequestCode [0389fc7dd97584790e5ad49010db9c4a] Shipping request code of cart
     * @param string $shippingGuid [ecb3e399-2f57-11eb-8853-0800275177b9] Shipping method based on delivery
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Shipping-requests/getshippingrequestforgettingorderstatus
     */
    public static function getShippingRequestForGettingOrderStatus(
        string $shippingRequestCode,
        string $shippingGuid,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(GetShippingRequestForGettingOrderStatus::class)
            ->addPathParam('shippingRequestCode', $shippingRequestCode)
            ->addPathParam('shippingGuid', $shippingGuid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     salesChannelGuid?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Payment-methods/getlistingofpaymentmethods
     */
    public static function getListingOfPaymentMethods(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListingOfPaymentMethods::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreatePaymentMethodRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Payment-methods/createpaymentmethod
     */
    public static function createPaymentMethod(
        array|CreatePaymentMethodRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreatePaymentMethod::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [93bc0dbe-7481-11e8-8216-002590dad85e] Payment guid
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Payment-methods/deletepaymentmethod
     */
    public static function deletePaymentMethod(string $guid, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeletePaymentMethod::class)
            ->addPathParam('guid', $guid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     from?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Unsubscribed-emails/getlistingofunsubscribedemails
     */
    public static function getListingOfUnsubscribedEmails(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListingOfUnsubscribedEmails::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateUnsubscribedEmailRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Unsubscribed-emails/createunsubscribedemail
     */
    public static function createUnsubscribedEmail(
        array|CreateUnsubscribedEmailRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateUnsubscribedEmail::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/E-mail-distribution-lists/getlistingofemaildistributionlists
     */
    public static function getListingOfEmailDistributionLists(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListingOfEmailDistributionLists::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateEmailDistributionListRequest $requestBody
     * @param array{
     *     language?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/E-mail-distribution-lists/createemaildistributionlist
     */
    public static function createEmailDistributionList(
        array|CreateEmailDistributionListRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateEmailDistributionList::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [newsletters] e-mail list code
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/E-mail-distribution-lists/getdetailofemaildistributionlist
     */
    public static function getDetailOfEmailDistributionList(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetDetailOfEmailDistributionList::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [newsletters] e-mail list code
     * @param array<string, mixed>|CreateEmailsDistributionListRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/E-mail-distribution-lists/createemailsdistributionlist
     */
    public static function createEmailsDistributionList(
        string $code,
        array|CreateEmailsDistributionListRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateEmailsDistributionList::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [newsletters] e-mail list code
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     from: string,
     *     changeType?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/E-mail-distribution-lists/getlastchangesindistributionlist
     */
    public static function getLastChangesInDistributionList(string $code, array $queryParams): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetLastChangesInDistributionList::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     template?: string,
     *     creationTimeFrom?: string,
     *     creationTimeTo?: string,
     *     reusable?: string,
     *     validFrom?: string,
     *     validTo?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discount-coupons/getlistofdiscountcoupons
     */
    public static function getListOfDiscountCoupons(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfDiscountCoupons::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateDiscountCouponsRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discount-coupons/creatediscountcoupons
     */
    public static function createDiscountCoupons(
        array|CreateDiscountCouponsRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateDiscountCoupons::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|BulkDeleteDiscountCouponsRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discount-coupons/bulkdeletediscountcoupons
     */
    public static function bulkDeleteDiscountCoupons(
        array|BulkDeleteDiscountCouponsRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(BulkDeleteDiscountCoupons::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     codeFrom?: string,
     *     codeTo?: string,
     *     creationTimeFrom?: string,
     *     creationTimeTo?: string,
     *     discountType?: string,
     *     validFrom?: string,
     *     validTo?: string,
     *     reusable?: string,
     *     template: string,
     *     currency?: string,
     *     shippingPrice: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discount-coupons/getlistofalldiscountcoupons
     */
    public static function getListOfAllDiscountCoupons(array $queryParams): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfAllDiscountCoupons::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [ABCDEF12] discount coupon code
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discount-coupons/getdetailofdiscountcoupon
     */
    public static function getDetailOfDiscountCoupon(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetDetailOfDiscountCoupon::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [ABCDEF12] discount coupon code
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discount-coupons/deletediscountcoupon
     */
    public static function deleteDiscountCoupon(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteDiscountCoupon::class)
            ->addPathParam('code', $code)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateDiscountCouponsSetRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discount-coupons/creatediscountcouponsset
     */
    public static function createDiscountCouponsSet(
        array|CreateDiscountCouponsSetRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateDiscountCouponsSet::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $code [89170026] discount coupon code
     * @param array<string, mixed>|UpdateDiscountCouponsUsageRequest $requestBody
     * @param array{
     *     language?: string,
     *     suppressOrderChecking?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discount-coupons/updatediscountcouponsusage
     */
    public static function updateDiscountCouponsUsage(
        string $code,
        array|UpdateDiscountCouponsUsageRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateDiscountCouponsUsage::class)
            ->addPathParam('code', $code)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discount-coupons/gettemplatesofdiscountcoupons
     */
    public static function getTemplatesOfDiscountCoupons(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetTemplatesOfDiscountCoupons::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateDiscountCouponsTemplateRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discount-coupons/creatediscountcouponstemplate
     */
    public static function createDiscountCouponsTemplate(
        array|CreateDiscountCouponsTemplateRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateDiscountCouponsTemplate::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $guid [b6e09a7a-6cb5-11eb-89aa-08002746ad91] discount coupon template guid
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discount-coupons/deletediscountcouponstemplate
     */
    public static function deleteDiscountCouponsTemplate(string $guid, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteDiscountCouponsTemplate::class)
            ->addPathParam('guid', $guid)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     customerGroupCode?: string,
     *     validFrom?: string,
     *     validTo?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/XY-discounts/getlistofxydiscounts
     */
    public static function getListOfXYDiscounts(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfXYDiscounts::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateXYDiscountRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/XY-discounts/createxydiscount
     */
    public static function createXYDiscount(
        array|CreateXYDiscountRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateXYDiscount::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [1] discount ID
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/XY-discounts/getdetailofxydiscounts
     */
    public static function getDetailOfXYDiscounts(string $id, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetDetailOfXYDiscounts::class)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [1] discount ID
     * @param array<string, mixed>|UpdateXYDiscountRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/XY-discounts/updatexydiscount
     */
    public static function updateXYDiscount(
        string $id,
        array|UpdateXYDiscountRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateXYDiscount::class)
            ->addPathParam('id', $id)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [1] discount ID
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/XY-discounts/deletexydiscount
     */
    public static function deleteXYDiscount(string $id, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteXYDiscount::class)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/XY-discounts/getxydiscountssettings
     */
    public static function getXYDiscountsSettings(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetXYDiscountsSettings::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|UpdateXYDiscountSettingsRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/XY-discounts/updatexydiscountsettings
     */
    public static function updateXYDiscountSettings(
        array|UpdateXYDiscountSettingsRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateXYDiscountSettings::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     customerGroupCode?: string,
     *     validFrom?: string,
     *     validTo?: string,
     *     status?: string,
     *     isActive?: string,
     *     includeUnregisteredCustomers?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Quantity-discounts/getlistofquantitydiscounts
     */
    public static function getListOfQuantityDiscounts(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfQuantityDiscounts::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateQuantityDiscountRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Quantity-discounts/createquantitydiscount
     */
    public static function createQuantityDiscount(
        array|CreateQuantityDiscountRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateQuantityDiscount::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     customerGroupCode?: string,
     *     validFrom?: string,
     *     validTo?: string,
     *     status?: string,
     *     isActive?: string,
     *     includeUnregisteredCustomers?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Quantity-discounts/getlistofallquantitydiscounts
     */
    public static function getListOfAllQuantityDiscounts(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfAllQuantityDiscounts::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [1] discount ID
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Quantity-discounts/getdetailofquantitydiscounts
     */
    public static function getDetailOfQuantityDiscounts(string $id, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetDetailOfQuantityDiscounts::class)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [1] discount ID
     * @param array<string, mixed>|UpdateQuantityDiscountRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Quantity-discounts/updatequantitydiscount
     */
    public static function updateQuantityDiscount(
        string $id,
        array|UpdateQuantityDiscountRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateQuantityDiscount::class)
            ->addPathParam('id', $id)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [1] discount ID
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Quantity-discounts/deletequantitydiscount
     */
    public static function deleteQuantityDiscount(string $id, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteQuantityDiscount::class)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     customerGroupCode?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Volume-discounts/getlistofvolumediscounts
     */
    public static function getListOfVolumeDiscounts(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfVolumeDiscounts::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Articles/getlistofarticles
     */
    public static function getListOfArticles(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfArticles::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateArticleRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Articles/createarticle
     */
    public static function createArticle(
        array|CreateArticleRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateArticle::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     idFrom?: string,
     *     idTo?: string,
     *     articleLanguage?: string,
     *     publishDateFrom?: string,
     *     publishDateTo?: string,
     *     changeDateFrom?: string,
     *     changeDateTo?: string,
     *     visible?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Articles/getlistallarticles
     */
    public static function getListAllArticles(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListAllArticles::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $articleId [1] article ID
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Articles/getdetailofarticle
     */
    public static function getDetailOfArticle(string $articleId, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetDetailOfArticle::class)
            ->addPathParam('articleId', $articleId)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $articleId [1] article ID
     * @param array<string, mixed>|UpdateArticleRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Articles/updatearticle
     */
    public static function updateArticle(
        string $articleId,
        array|UpdateArticleRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateArticle::class)
            ->addPathParam('articleId', $articleId)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $articleId [1] article ID
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Articles/deletearticle
     */
    public static function deleteArticle(string $articleId, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteArticle::class)
            ->addPathParam('articleId', $articleId)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Articles/getlistofarticlesections
     */
    public static function getListOfArticleSections(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfArticleSections::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateArticleSectionRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Articles/createarticlesection
     */
    public static function createArticleSection(
        array|CreateArticleSectionRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateArticleSection::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $articleSectionId [1] article section ID
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Articles/getdetailofarticlesection
     */
    public static function getDetailOfArticleSection(
        string $articleSectionId,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(GetDetailOfArticleSection::class)
            ->addPathParam('articleSectionId', $articleSectionId)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $articleSectionId [123] article section ID
     * @param array<string, mixed>|UpdateArticleSectionRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Articles/updatearticlesection
     */
    public static function updateArticleSection(
        string $articleSectionId,
        array|UpdateArticleSectionRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateArticleSection::class)
            ->addPathParam('articleSectionId', $articleSectionId)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $articleSectionId [1] article section ID
     * @param array{
     *     language?: string,
     *     force?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Articles/deletearticlesection
     */
    public static function deleteArticleSection(string $articleSectionId, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteArticleSection::class)
            ->addPathParam('articleSectionId', $articleSectionId)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Pages/getlistofpages
     */
    public static function getListOfPages(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfPages::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreatePageRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Pages/createpage
     */
    public static function createPage(
        array|CreatePageRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreatePage::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $pageId [1] page ID
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Pages/getdetailofpage
     */
    public static function getDetailOfPage(string $pageId, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetDetailOfPage::class)
            ->addPathParam('pageId', $pageId)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $pageId [1] page ID
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Pages/deletepage
     */
    public static function deletePage(string $pageId, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeletePage::class)
            ->addPathParam('pageId', $pageId)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $pageId [1] page ID
     * @param array<string, mixed>|UpdatePageRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Pages/updatepage
     */
    public static function updatePage(
        string $pageId,
        array|UpdatePageRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdatePage::class)
            ->addPathParam('pageId', $pageId)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     productGuid?: string,
     *     articleId?: string,
     *     pageId?: string,
     *     customerGuid?: string,
     *     userEmail?: string,
     *     creationDateFrom?: string,
     *     creationDateTo?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discussions/getlistofdiscussionposts
     */
    public static function getListOfDiscussionPosts(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfDiscussionPosts::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateDiscussionPostsRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discussions/creatediscussionposts
     */
    public static function createDiscussionPosts(
        array|CreateDiscussionPostsRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateDiscussionPosts::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [1] Discussion post id
     * @param array<string, mixed>|UpdateDiscussionPostRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discussions/updatediscussionpost
     */
    public static function updateDiscussionPost(
        string $id,
        array|UpdateDiscussionPostRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateDiscussionPost::class)
            ->addPathParam('id', $id)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $id [1] ID of discussion
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Discussions/deletediscussionbyid
     */
    public static function deleteDiscussionById(string $id, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(DeleteDiscussionById::class)
            ->addPathParam('id', $id)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     status?: string,
     *     creationTimeFrom?: string,
     *     creationTimeTo?: string,
     *     completionTimeFrom?: string,
     *     completionTimeTo?: string,
     *     itemsPerPage?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Jobs/getlistofjobs
     */
    public static function getListOfJobs(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfJobs::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $jobId [3ax1844]
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Jobs/getjobdetail
     */
    public static function getJobDetail(string $jobId, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetJobDetail::class)
            ->addPathParam('jobId', $jobId)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Files/getlistofuploadedfiles
     */
    public static function getListOfUploadedFiles(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfUploadedFiles::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|UploadFilesRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Files/uploadfiles
     */
    public static function uploadFiles(
        array|UploadFilesRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UploadFiles::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|UploadFileRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Files/uploadfile
     */
    public static function uploadFile(
        array|UploadFileRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UploadFile::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     status?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Endpoints/getlistofavailableendpoints
     */
    public static function getListOfAvailableEndpoints(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfAvailableEndpoints::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     dateFrom: string,
     *     dateTo: string,
     *     changeTimeFrom: string,
     *     productGuid: string,
     *     orderCode: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Reviews/getlistofproductsreviews
     */
    public static function getListOfProductsReviews(array $queryParams): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfProductsReviews::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateProductReviewRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Reviews/createproductreview
     */
    public static function createProductReview(
        array|CreateProductReviewRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateProductReview::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $reviewId [1] review ID
     * @param array<string, mixed>|UpdateProductReviewRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Reviews/updateproductreview
     */
    public static function updateProductReview(
        string $reviewId,
        array|UpdateProductReviewRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateProductReview::class)
            ->addPathParam('reviewId', $reviewId)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Reviews/getlistofprojectreviews
     */
    public static function getListOfProjectReviews(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfProjectReviews::class)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param array<string, mixed>|CreateProjectReviewRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Reviews/createprojectreview
     */
    public static function createProjectReview(
        array|CreateProjectReviewRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(CreateProjectReview::class)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    /**
     * @param string $reviewId [1] review ID
     * @param array<string, mixed>|UpdateProjectReviewRequest $requestBody
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/shoptet-api/openapi/Reviews/updateprojectreview
     */
    public static function updateProjectReview(
        string $reviewId,
        array|UpdateProjectReviewRequest $requestBody,
        array $queryParams = [],
    ): ResponseInterface {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateProjectReview::class)
            ->addPathParam('reviewId', $reviewId)
            ->setBody($requestBody)
            ->setQueryParams($queryParams)
            ->execute();
    }

    protected static function getEndpointFactory(): EndpointFactory
    {
        if (!isset(self::$endpointFactory)) {
            self::$endpointFactory = new EndpointFactory(
                self::DEFAULT_BASE_URI,
                self::DEFAULT_HEADERS,
                new CurlClient(
                    new EntityResponseFactory()
                )
            );
        }
        return self::$endpointFactory;
    }

    public static function processSnapshotResult(string $jobId): SnapshotResultData
    {
        $jobDetail = Sdk::getJobDetail($jobId);

        if ($jobDetail->getStatusCode() === 404) {
            throw new JobNotFoundException();
        }

        if ($jobDetail->getStatusCode() !== 200) {
            throw new RuntimeException('An Error occured while processing job result');
        }
        /** @var GetJobDetailResponse $jobDetailBody */
        $jobDetailBody = $jobDetail->getBody();
        $jobProcessor = new JobResultProcessor(self::getEndpointFactory());

        return $jobProcessor->processSnapshot($jobDetailBody);
    }
}
