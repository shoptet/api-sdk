<?php

namespace Shoptet\Api\Sdk\Php;

use Psr\Log\LoggerInterface;
use Psr\Log\NullLogger;
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
use Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomer;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerAccount;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerAccountRequest\CreateCustomerAccountRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerRemark;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerRemarkRequest\CreateCustomerRemarkRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateCustomerRequest\CreateCustomerRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateDeliveryAddress;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\CreateDeliveryAddressRequest\CreateDeliveryAddressRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\DeleteCustomer;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\DeleteCustomerAccount;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\DeleteCustomerDeliveryAddress;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\DeleteCustomerRemark;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GeListOfCustomerDeliveryAddresses;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetCustomerDetail;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetDetailOfCustomerAccount;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetDetailOfCustomerDeliveryAddress;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetDetailOfCustomerRemark;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetLastCustomerChanges;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfAllCustomers;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerAccounts;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerGroups;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerRegions;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomerRemarks;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\GetListOfCustomers;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomer;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerAccount;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerAccountRequest\UpdateCustomerAccountRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerDeliveryAddress;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerDeliveryAddressRequest\UpdateCustomerDeliveryAddressRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerRemark;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerRemarkRequest\UpdateCustomerRemarkRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Customers\UpdateCustomerRequest\UpdateCustomerRequest;
use Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\DownloadDeliveryNoteAsPdf;
use Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\GetDetailOfDeliveryNote;
use Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\GetListOfAllDeliveryNotes;
use Shoptet\Api\Sdk\Php\Endpoint\DeliveryNotes\GetListOfDeliveryNotes;
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
use Shoptet\Api\Sdk\Php\Endpoint\Discussions\GetListOfDiscussionPosts;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailDistributionList;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailDistributionListRequest\CreateEmailDistributionListRequest;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailsDistributionList;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\CreateEmailsDistributionListRequest\CreateEmailsDistributionListRequest;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\GetDetailOfEmailDistributionList;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\GetLastChangesInDistributionList;
use Shoptet\Api\Sdk\Php\Endpoint\EmailDistributionLists\GetListingOfEmailDistributionLists;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDesign;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfo;
use Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopMandatoryFields;
use Shoptet\Api\Sdk\Php\Endpoint\Files\GetListOfUploadedFiles;
use Shoptet\Api\Sdk\Php\Endpoint\Files\UploadFile;
use Shoptet\Api\Sdk\Php\Endpoint\Files\UploadFileRequest\UploadFileRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Files\UploadFiles;
use Shoptet\Api\Sdk\Php\Endpoint\Files\UploadFilesRequest\UploadFilesRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\CreateInvoiceFromOrder;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\CreateInvoiceFromOrderRequest\CreateInvoiceFromOrderRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\DownloadInvoiceAsIsdoc;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\DownloadInvoiceAsPdf;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetInvoiceDetail;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetLastInvoiceChanges;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetListOfAllInvoices;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\GetListOfInvoices;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\InvoiceLinkProofPayments;
use Shoptet\Api\Sdk\Php\Endpoint\Invoices\InvoiceLinkProofPaymentsRequest\InvoiceLinkProofPaymentsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\JobEndpoints\GetJobDetail;
use Shoptet\Api\Sdk\Php\Endpoint\JobEndpoints\GetListOfJobs;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderGift;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderGiftRequest\AddOrderGiftRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderShipping;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\AddOrderShippingRequest\AddOrderShippingRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrder;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderItem;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderItemRequest\CreateOrderItemRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderItemSurchargeParameters;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderItemSurchargeParametersRequest\CreateOrderItemSurchargeParametersRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderPayment;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderPaymentRequest\CreateOrderPaymentRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderRemark;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderRemarkRequest\CreateOrderRemarkRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\CreateOrderRequest\CreateOrderRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\DeleteOrder;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\DeleteOrderGift;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\DeleteOrderHistoryItem;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\DeleteOrderItem;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\DeleteOrderItemSurchargeParameters;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\DownloadOrderAsPdf;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetLastOrderChanges;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfAllOrders;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrderSources;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrderStatuses;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfOrders;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetListOfRemarksForOrder;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetOrderDetail;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetOrderGiftSettings;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\GetOrderGiftsList;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\OrderCopy;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\OrderCopyRequest\OrderCopyRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderGiftSettings;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderGiftSettingsRequest\UpdateOrderGiftSettingsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderHead;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderHeadRequest\UpdateOrderHeadRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderItem;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderItemRequest\UpdateOrderItemRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderPayment;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderPaymentRequest\UpdateOrderPaymentRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderShipping;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderShippingRequest\UpdateOrderShippingRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderStatus;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateOrderStatusRequest\UpdateOrderStatusRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Orders\UpdateRemarksForOrder;
use Shoptet\Api\Sdk\Php\Endpoint\Pages\GetDetailOfPage;
use Shoptet\Api\Sdk\Php\Endpoint\Pages\GetListOfPages;
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
use Shoptet\Api\Sdk\Php\Endpoint\Products\AddAlternativeProduct;
use Shoptet\Api\Sdk\Php\Endpoint\Products\AddAlternativeProductRequest\AddAlternativeProductRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\AddItemToProductSet;
use Shoptet\Api\Sdk\Php\Endpoint\Products\AddItemToProductSetRequest\AddItemToProductSetRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\AddRelatedProduct;
use Shoptet\Api\Sdk\Php\Endpoint\Products\AddRelatedProductRequest\AddRelatedProductRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateFilteringParameter;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateFilteringParameterRequest\CreateFilteringParameterRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateFilteringParameterValue;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateFilteringParameterValueRequest\CreateFilteringParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProduct;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductCategory;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductCategoryRequest\CreateProductCategoryRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductFlag;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductFlagRequest\CreateProductFlagRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductGift;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductGiftRequest\CreateProductGiftRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductImages;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductImagesRequest\CreateProductImagesRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateProductRequest\CreateProductRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateSurchargeParameter;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateSurchargeParameterRequest\CreateSurchargeParameterRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateSurchargeParameterValue;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateSurchargeParameterValueRequest\CreateSurchargeParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateVariantParameter;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateVariantParameterRequest\CreateVariantParameterRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateVariantParameterValue;
use Shoptet\Api\Sdk\Php\Endpoint\Products\CreateVariantParameterValueRequest\CreateVariantParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteAllProductImagesInGallery;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteFilteringParameter;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteFilteringParameterValue;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteOneProductImage;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteProduct;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteProductCategory;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteProductFlag;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteProductVariant;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteSurchargeParameterByIndex;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteSurchargeParameterValue;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteVariantParameter;
use Shoptet\Api\Sdk\Php\Endpoint\Products\DeleteVariantParameterValue;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetDetailOfFilteringParameter;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetDetailOfSurchargeParameter;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetDetailOfVariantParameter;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetLastProductChanges;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfAllProducts;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfFilteringParameters;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfParametricCategories;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductAlternativeProducts;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductCategories;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductGifts;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductImages;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductRelatedProducts;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductUnits;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductWarranties;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProducts;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsAvailabilities;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsFlags;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsMeasureUnits;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsOrderInCategory;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfProductsReviews;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfRecyclingFeeCategories;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfSurchargeParameters;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetListOfVariantParameters;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetParametricCategoryDetail;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetProductCategoryDetail;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetProductDetail;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetProductDetailByCode;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetProductImagesUpdate;
use Shoptet\Api\Sdk\Php\Endpoint\Products\GetProductImagesUpdateRequest\GetProductImagesUpdateRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\ProductBatchUpdate;
use Shoptet\Api\Sdk\Php\Endpoint\Products\ProductBatchUpdateRequest\ProductBatchUpdateRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\ProductCopy;
use Shoptet\Api\Sdk\Php\Endpoint\Products\ProductCopyRequest\ProductCopyRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\SetAlternativeProducts;
use Shoptet\Api\Sdk\Php\Endpoint\Products\SetAlternativeProductsRequest\SetAlternativeProductsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\SetProductSetItems;
use Shoptet\Api\Sdk\Php\Endpoint\Products\SetProductSetItemsRequest\SetProductSetItemsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\SetRelatedProducts;
use Shoptet\Api\Sdk\Php\Endpoint\Products\SetRelatedProductsRequest\SetRelatedProductsRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\SteGiftsToProduct;
use Shoptet\Api\Sdk\Php\Endpoint\Products\SteGiftsToProductRequest\SteGiftsToProductRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateFilteringParameter;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateFilteringParameterRequest\UpdateFilteringParameterRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateFilteringParameterValue;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateFilteringParameterValueRequest\UpdateFilteringParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProduct;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductByCode;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductByCodeRequest\UpdateProductByCodeRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductCategory;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductCategoryBatch;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductCategoryBatchRequest\UpdateProductCategoryBatchRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductCategoryRequest\UpdateProductCategoryRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductFlag;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductFlagRequest\UpdateProductFlagRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductImagesSource;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductImagesSourceRequest\UpdateProductImagesSourceRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductOrderInCategory;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductOrderInCategoryRequest\UpdateProductOrderInCategoryRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateProductRequest\UpdateProductRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateSurchargeParameter;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateSurchargeParameterRequest\UpdateSurchargeParameterRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateSurchargeParameterValue;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateSurchargeParameterValueRequest\UpdateSurchargeParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateVariantParameter;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateVariantParameterRequest\UpdateVariantParameterRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateVariantParameterValue;
use Shoptet\Api\Sdk\Php\Endpoint\Products\UpdateVariantParameterValueRequest\UpdateVariantParameterValueRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\DownloadProformaInvoicePdf;
use Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\GetLastProformaInvoiceChanges;
use Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\GetListOfProformaInvoices;
use Shoptet\Api\Sdk\Php\Endpoint\ProformaInvoices\GetProformaInvoiceDetail;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\CreateProofPayment;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\CreateProofPaymentByOrderCode;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\CreateProofPaymentByProformaInvoiceCode;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\CreateProofPaymentRequest\CreateProofPaymentRequest;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\DeleteProofPayment;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\DownloadProofOfPaymentPdf;
use Shoptet\Api\Sdk\Php\Endpoint\ProofPayments\GetLastProofPaymentsChanges;
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
use Shoptet\Api\Sdk\Php\Endpoint\SystemEndpoints\GetListOfAvailableEndpoints;
use Shoptet\Api\Sdk\Php\Endpoint\Templates\CreateAndEditHtmlCodes;
use Shoptet\Api\Sdk\Php\Endpoint\Templates\CreateAndEditHtmlCodesRequest\CreateAndEditHtmlCodesRequest;
use Shoptet\Api\Sdk\Php\Endpoint\Templates\DeleteHtmlCode;
use Shoptet\Api\Sdk\Php\Endpoint\Templates\GetListingOfHtmlCodes;
use Shoptet\Api\Sdk\Php\Endpoint\UnsubscribedEmails\CreateUnsubscribedEmail;
use Shoptet\Api\Sdk\Php\Endpoint\UnsubscribedEmails\CreateUnsubscribedEmailRequest\CreateUnsubscribedEmailRequest;
use Shoptet\Api\Sdk\Php\Endpoint\UnsubscribedEmails\GetListingOfUnsubscribedEmails;
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

    protected static ClientInterface $httpClient;
    protected static EndpointFactory $endpointFactory;
    protected static LoggerInterface $logger;

    public static function getBaseUri(): string
    {
        return self::getEndpointFactory()->getBaseUri();
    }

    public static function setBaseUri(string $baseUri): void
    {
        self::getEndpointFactory()->setBaseUri($baseUri);
    }

    public static function setAccessToken(string $token): void
    {
        self::setHeader('Shoptet-Access-Token', $token);
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
     * @see https://api.docs.shoptet.com/openapi/Eshop/geteshopinfo
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
     * @see https://api.docs.shoptet.com/openapi/Eshop/geteshopdesign
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
     * @see https://api.docs.shoptet.com/openapi/Eshop/geteshopmandatoryfields
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
     * @see https://api.docs.shoptet.com/openapi/Products/getlistofproducts
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
     * @see https://api.docs.shoptet.com/openapi/Products/createproduct
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
     * @see https://api.docs.shoptet.com/openapi/Products/productcopy
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
     * @see https://api.docs.shoptet.com/openapi/Products/getlistofallproducts
     */
    public static function getListOfAllProducts(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfAllProducts::class)
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
     * @see https://api.docs.shoptet.com/openapi/Products/getproductdetail
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
     * @see https://api.docs.shoptet.com/openapi/Products/updateproduct
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
     * @see https://api.docs.shoptet.com/openapi/Products/deleteproduct
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
     * @see https://api.docs.shoptet.com/openapi/Products/productbatchupdate
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
     * @see https://api.docs.shoptet.com/openapi/Products/getproductdetailbycode
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
     * @see https://api.docs.shoptet.com/openapi/Products/updateproductbycode
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
     * @see https://api.docs.shoptet.com/openapi/Products/deleteproductvariant
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
     * @see https://api.docs.shoptet.com/openapi/Products/getlistofproductimages
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
     * @see https://api.docs.shoptet.com/openapi/Products/deleteallproductimagesingallery
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
     * @see https://api.docs.shoptet.com/openapi/Products/getproductimagesupdate
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
     * @see https://api.docs.shoptet.com/openapi/Products/createproductimages
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
     * @see https://api.docs.shoptet.com/openapi/Products/updateproductimagessource
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
     * @see https://api.docs.shoptet.com/openapi/Products/deleteoneproductimage
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
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     from: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Products/getlastproductchanges
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Products/getlistofproductcategories
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
     * @see https://api.docs.shoptet.com/openapi/Products/createproductcategory
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
     * @see https://api.docs.shoptet.com/openapi/Products/getproductcategorydetail
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
     * @see https://api.docs.shoptet.com/openapi/Products/updateproductcategory
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
     * @see https://api.docs.shoptet.com/openapi/Products/deleteproductcategory
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
     * @see https://api.docs.shoptet.com/openapi/Products/updateproductcategorybatch
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
     * @param string $categoryGuid [5c498fb7-70ac-11e9-9208-08002774f818] Product category.
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
     * @see https://api.docs.shoptet.com/openapi/Products/getlistofproductsorderincategory
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
     * @see https://api.docs.shoptet.com/openapi/Products/updateproductorderincategory
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Products/getlistofparametriccategories
     */
    public static function getListOfParametricCategories(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfParametricCategories::class)
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
     * @see https://api.docs.shoptet.com/openapi/Products/getparametriccategorydetail
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
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Products/getlistofproductsflags
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
     * @see https://api.docs.shoptet.com/openapi/Products/createproductflag
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
     * @see https://api.docs.shoptet.com/openapi/Products/updateproductflag
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
     * @see https://api.docs.shoptet.com/openapi/Products/deleteproductflag
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
     * @see https://api.docs.shoptet.com/openapi/Products/getlistofproductsmeasureunits
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
     * @see https://api.docs.shoptet.com/openapi/Products/getlistofproductsavailabilities
     */
    public static function getListOfProductsAvailabilities(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfProductsAvailabilities::class)
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
     * @see https://api.docs.shoptet.com/openapi/Products/getlistofsurchargeparameters
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
     * @see https://api.docs.shoptet.com/openapi/Products/createsurchargeparameter
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
     * @see https://api.docs.shoptet.com/openapi/Products/getdetailofsurchargeparameter
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
     * @see https://api.docs.shoptet.com/openapi/Products/updatesurchargeparameter
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
     * @see https://api.docs.shoptet.com/openapi/Products/createsurchargeparametervalue
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
     * @see https://api.docs.shoptet.com/openapi/Products/deletesurchargeparameterbyindex
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
     * @see https://api.docs.shoptet.com/openapi/Products/deletesurchargeparametervalue
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
     * @see https://api.docs.shoptet.com/openapi/Products/updatesurchargeparametervalue
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Products/getlistoffilteringparameters
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
     * @see https://api.docs.shoptet.com/openapi/Products/createfilteringparameter
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
     * @see https://api.docs.shoptet.com/openapi/Products/getdetailoffilteringparameter
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
     * @see https://api.docs.shoptet.com/openapi/Products/updatefilteringparameter
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
     * @see https://api.docs.shoptet.com/openapi/Products/createfilteringparametervalue
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
     * @see https://api.docs.shoptet.com/openapi/Products/deletefilteringparameter
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
     * @see https://api.docs.shoptet.com/openapi/Products/deletefilteringparametervalue
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
     * @see https://api.docs.shoptet.com/openapi/Products/updatefilteringparametervalue
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Products/getlistofvariantparameters
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
     * @see https://api.docs.shoptet.com/openapi/Products/createvariantparameter
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
     * @see https://api.docs.shoptet.com/openapi/Products/getdetailofvariantparameter
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
     * @see https://api.docs.shoptet.com/openapi/Products/updatevariantparameter
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
     * @see https://api.docs.shoptet.com/openapi/Products/createvariantparametervalue
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
     * @see https://api.docs.shoptet.com/openapi/Products/deletevariantparameter
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
     * @see https://api.docs.shoptet.com/openapi/Products/deletevariantparametervalue
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
     * @see https://api.docs.shoptet.com/openapi/Products/updatevariantparametervalue
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
     * @see https://api.docs.shoptet.com/openapi/Products/getlistofrecyclingfeecategories
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
     * @see https://api.docs.shoptet.com/openapi/Products/getlistofproductwarranties
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Products/getlistofproductalternativeproducts
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
     * @see https://api.docs.shoptet.com/openapi/Products/addalternativeproduct
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
     * @see https://api.docs.shoptet.com/openapi/Products/setalternativeproducts
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Products/getlistofproductrelatedproducts
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
     * @see https://api.docs.shoptet.com/openapi/Products/addrelatedproduct
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
     * @see https://api.docs.shoptet.com/openapi/Products/setrelatedproducts
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
     * @see https://api.docs.shoptet.com/openapi/Products/additemtoproductset
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
     * @see https://api.docs.shoptet.com/openapi/Products/setproductsetitems
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
     * @see https://api.docs.shoptet.com/openapi/Products/getlistofproductunits
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
     * @see https://api.docs.shoptet.com/openapi/Products/getlistofproductgifts
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
     * @see https://api.docs.shoptet.com/openapi/Products/createproductgift
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
     * @see https://api.docs.shoptet.com/openapi/Products/stegiftstoproduct
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
     * @see https://api.docs.shoptet.com/openapi/Products/getlistofproductsreviews
     */
    public static function getListOfProductsReviews(array $queryParams): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfProductsReviews::class)
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
     * @see https://api.docs.shoptet.com/openapi/Price-lists/getlistofpricelists
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
     * @see https://api.docs.shoptet.com/openapi/Price-lists/createpricelist
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Price-lists/getpricelistdetail
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
     * @see https://api.docs.shoptet.com/openapi/Price-lists/updatepricelist
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
     * @see https://api.docs.shoptet.com/openapi/Price-lists/deletepricelist
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
     * @see https://api.docs.shoptet.com/openapi/Price-lists/getlistofallpricelistdetails
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Orders/getlistoforders
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
     * @see https://api.docs.shoptet.com/openapi/Orders/createorder
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
     *     include?: string,
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
     * @see https://api.docs.shoptet.com/openapi/Orders/getlistofallorders
     */
    public static function getListOfAllOrders(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfAllOrders::class)
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
     * @see https://api.docs.shoptet.com/openapi/Orders/getorderdetail
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
     * @see https://api.docs.shoptet.com/openapi/Orders/deleteorder
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
     * @see https://api.docs.shoptet.com/openapi/Orders/updateorderhead
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
     * @see https://api.docs.shoptet.com/openapi/Orders/createorderitem
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
     * @see https://api.docs.shoptet.com/openapi/Orders/updateorderitem
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
     * @see https://api.docs.shoptet.com/openapi/Orders/deleteorderitem
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
     * @see https://api.docs.shoptet.com/openapi/Orders/createorderitemsurchargeparameters
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
     * @see https://api.docs.shoptet.com/openapi/Orders/deleteorderitemsurchargeparameters
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
     * @see https://api.docs.shoptet.com/openapi/Orders/createorderpayment
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
     * @see https://api.docs.shoptet.com/openapi/Orders/updateorderpayment
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
     * @see https://api.docs.shoptet.com/openapi/Orders/addordershipping
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
     * @see https://api.docs.shoptet.com/openapi/Orders/updateordershipping
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
     * @see https://api.docs.shoptet.com/openapi/Orders/downloadorderaspdf
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
     * @see https://api.docs.shoptet.com/openapi/Orders/getlistofremarksfororder
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
     * @see https://api.docs.shoptet.com/openapi/Orders/createorderremark
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
     * @see https://api.docs.shoptet.com/openapi/Orders/deleteorderhistoryitem
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
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Orders/updateremarksfororder
     */
    public static function updateRemarksForOrder(string $code, array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(UpdateRemarksForOrder::class)
            ->addPathParam('code', $code)
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
     * @see https://api.docs.shoptet.com/openapi/Orders/updateorderstatus
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
     * @see https://api.docs.shoptet.com/openapi/Orders/ordercopy
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
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Orders/getlistoforderstatuses
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
     * @see https://api.docs.shoptet.com/openapi/Orders/getlistofordersources
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Orders/getlastorderchanges
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Orders/getordergiftslist
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
     * @see https://api.docs.shoptet.com/openapi/Orders/addordergift
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
     * @see https://api.docs.shoptet.com/openapi/Orders/deleteordergift
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
     * @see https://api.docs.shoptet.com/openapi/Orders/getordergiftsettings
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
     * @see https://api.docs.shoptet.com/openapi/Orders/updateordergiftsettings
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Invoices/getlistofinvoices
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
     * @see https://api.docs.shoptet.com/openapi/Invoices/getlistofallinvoices
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
     * @see https://api.docs.shoptet.com/openapi/Invoices/getinvoicedetail
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
     * @see https://api.docs.shoptet.com/openapi/Invoices/createinvoicefromorder
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
     * @see https://api.docs.shoptet.com/openapi/Invoices/invoicelinkproofpayments
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
     * @see https://api.docs.shoptet.com/openapi/Invoices/downloadinvoiceaspdf
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
     * @see https://api.docs.shoptet.com/openapi/Invoices/downloadinvoiceasisdoc
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Invoices/getlastinvoicechanges
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Proforma-invoices/getlistofproformainvoices
     */
    public static function getListOfProformaInvoices(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfProformaInvoices::class)
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
     * @see https://api.docs.shoptet.com/openapi/Proforma-invoices/getproformainvoicedetail
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
     * @see https://api.docs.shoptet.com/openapi/Proforma-invoices/downloadproformainvoicepdf
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Proforma-invoices/getlastproformainvoicechanges
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Proof-payments/getlistofproofpayments
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
     * @see https://api.docs.shoptet.com/openapi/Proof-payments/createproofpayment
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
     * @see https://api.docs.shoptet.com/openapi/Proof-payments/getproofpaymentdetail
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
     * @see https://api.docs.shoptet.com/openapi/Proof-payments/updateproofpayment
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
     * @see https://api.docs.shoptet.com/openapi/Proof-payments/deleteproofpayment
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
     * @see https://api.docs.shoptet.com/openapi/Proof-payments/getproofpaymentdetailbyordercode
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
     * @see https://api.docs.shoptet.com/openapi/Proof-payments/createproofpaymentbyordercode
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
     * @see https://api.docs.shoptet.com/openapi/Proof-payments/getproofpaymentdetailbyproformainvoicecode
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
     * @see https://api.docs.shoptet.com/openapi/Proof-payments/createproofpaymentbyproformainvoicecode
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
     * @see https://api.docs.shoptet.com/openapi/Proof-payments/proofpaymentdocumentsettings
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
     * @see https://api.docs.shoptet.com/openapi/Proof-payments/downloadproofofpaymentpdf
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
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     from: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Proof-payments/getlastproofpaymentschanges
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
     * @see https://api.docs.shoptet.com/openapi/Credit-notes/getlistofcreditnotes
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
     * @see https://api.docs.shoptet.com/openapi/Credit-notes/getlistofallcreditnotes
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
     * @see https://api.docs.shoptet.com/openapi/Credit-notes/getcreditnotedetail
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
     * @see https://api.docs.shoptet.com/openapi/Credit-notes/updatecreditnote
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
     * @see https://api.docs.shoptet.com/openapi/Credit-notes/deletecreditnote
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
     * @see https://api.docs.shoptet.com/openapi/Credit-notes/restockcreditnote
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
     * @see https://api.docs.shoptet.com/openapi/Credit-notes/createcreditnotefrominvoice
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
     * @see https://api.docs.shoptet.com/openapi/Credit-notes/createcreditnotefromproofofpayment
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
     * @see https://api.docs.shoptet.com/openapi/Credit-notes/createcreditnoteitem
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
     * @param string $id [198] credit note item id. Can be found in field `data.creditNote.items.itemId` in Credit note detail.  (number)
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
     * @see https://api.docs.shoptet.com/openapi/Credit-notes/updatecreditnoteitem
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
     * @param string $id [198] credit note item id. Can be found in field `data.creditNote.items.itemId` in Credit note detail.  (number)
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Credit-notes/deletecreditnoteitem
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
     * @see https://api.docs.shoptet.com/openapi/Credit-notes/downloadcreditnotepdf
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
     * @see https://api.docs.shoptet.com/openapi/Credit-notes/downloadcreditnoteasisdoc
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Credit-notes/getlastcreditnotechanges
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Delivery-notes/getlistofdeliverynotes
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
     * @see https://api.docs.shoptet.com/openapi/Delivery-notes/getlistofalldeliverynotes
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
     * @see https://api.docs.shoptet.com/openapi/Delivery-notes/getdetailofdeliverynote
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
     * @see https://api.docs.shoptet.com/openapi/Delivery-notes/downloaddeliverynoteaspdf
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
     * @param array{
     *     language?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Stocks/getlistofstocks
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
     * @see https://api.docs.shoptet.com/openapi/Stocks/getstockdetail
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Stocks/getstockmovements
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
     * @see https://api.docs.shoptet.com/openapi/Stocks/updatequantityinstock
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
     * @see https://api.docs.shoptet.com/openapi/Stocks/getstockmovementslastmove
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Stocks/getproductsuppliesinstock
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Suppliers/getlistofsuppliers
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Brands/getlistofbrands
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
     * @see https://api.docs.shoptet.com/openapi/Brands/createbrand
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
     * @see https://api.docs.shoptet.com/openapi/Brands/getdetailofbrand
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
     * @see https://api.docs.shoptet.com/openapi/Brands/updatebrand
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
     * @see https://api.docs.shoptet.com/openapi/Brands/deletebrand
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
     * @see https://api.docs.shoptet.com/openapi/Brands/createbrandbatch
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Customers/getlistofcustomers
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/openapi/Customers/createcustomer
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
     * @see https://api.docs.shoptet.com/openapi/Customers/getlistofallcustomers
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
     * @see https://api.docs.shoptet.com/openapi/Customers/getcustomerdetail
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
     * @see https://api.docs.shoptet.com/openapi/Customers/updatecustomer
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
     * @see https://api.docs.shoptet.com/openapi/Customers/deletecustomer
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Customers/getlistofcustomeraccounts
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
     * @see https://api.docs.shoptet.com/openapi/Customers/createcustomeraccount
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
     * @see https://api.docs.shoptet.com/openapi/Customers/getdetailofcustomeraccount
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
     * @see https://api.docs.shoptet.com/openapi/Customers/updatecustomeraccount
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
     * @see https://api.docs.shoptet.com/openapi/Customers/deletecustomeraccount
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Customers/gelistofcustomerdeliveryaddresses
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
     * @see https://api.docs.shoptet.com/openapi/Customers/createdeliveryaddress
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
     * @see https://api.docs.shoptet.com/openapi/Customers/getdetailofcustomerdeliveryaddress
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
     * @see https://api.docs.shoptet.com/openapi/Customers/updatecustomerdeliveryaddress
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
     * @see https://api.docs.shoptet.com/openapi/Customers/deletecustomerdeliveryaddress
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Customers/getlistofcustomerremarks
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
     * @see https://api.docs.shoptet.com/openapi/Customers/createcustomerremark
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
     * @see https://api.docs.shoptet.com/openapi/Customers/getdetailofcustomerremark
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
     * @see https://api.docs.shoptet.com/openapi/Customers/updatecustomerremark
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
     * @see https://api.docs.shoptet.com/openapi/Customers/deletecustomerremark
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Customers/getlastcustomerchanges
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
     * @see https://api.docs.shoptet.com/openapi/Customers/getlistofcustomerregions
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
     * @see https://api.docs.shoptet.com/openapi/Customers/getlistofcustomergroups
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
     * @see https://api.docs.shoptet.com/openapi/Templates/getlistingofhtmlcodes
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
     * @see https://api.docs.shoptet.com/openapi/Templates/createandedithtmlcodes
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
     * @see https://api.docs.shoptet.com/openapi/Templates/deletehtmlcode
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
     * @see https://api.docs.shoptet.com/openapi/Payment-gateways/getinformationaboutpayment
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/openapi/Payment-gateways/updatepaymentstatus
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Webhooks/getoverviewofregisteredwebhooks
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
     * @see https://api.docs.shoptet.com/openapi/Webhooks/registernewwebhook
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
     * @see https://api.docs.shoptet.com/openapi/Webhooks/getdetailofregisteredwebhooks
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
     * @see https://api.docs.shoptet.com/openapi/Webhooks/updateexistingwebhook
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
     * @see https://api.docs.shoptet.com/openapi/Webhooks/deleteregisteredwebhook
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
     * @see https://api.docs.shoptet.com/openapi/Webhooks/generatewebhooksignaturekey
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Webhooks/getwebhooknotification
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
     * @see https://api.docs.shoptet.com/openapi/Shipping-methods/getlistofshippingmethods
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
     * @see https://api.docs.shoptet.com/openapi/Shipping-methods/createshippingmethod
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
     * @see https://api.docs.shoptet.com/openapi/Shipping-requests/getshippingrequestforcartdetails
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
     * @see https://api.docs.shoptet.com/openapi/Shipping-requests/updateshippingdata
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
     * @see https://api.docs.shoptet.com/openapi/Shipping-requests/getshippingrequestforgettingorderstatus
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Payment-methods/getlistingofpaymentmethods
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
     * @see https://api.docs.shoptet.com/openapi/Payment-methods/createpaymentmethod
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
     * @see https://api.docs.shoptet.com/openapi/Payment-methods/deletepaymentmethod
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Unsubscribed-emails/getlistingofunsubscribedemails
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
     * @see https://api.docs.shoptet.com/openapi/Unsubscribed-emails/createunsubscribedemail
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
     * @see https://api.docs.shoptet.com/openapi/E-mail-distribution-lists/getlistingofemaildistributionlists
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     * @throws ReflectionException
     *
     * @see https://api.docs.shoptet.com/openapi/E-mail-distribution-lists/createemaildistributionlist
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
     * @see https://api.docs.shoptet.com/openapi/E-mail-distribution-lists/getdetailofemaildistributionlist
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
     * @see https://api.docs.shoptet.com/openapi/E-mail-distribution-lists/createemailsdistributionlist
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/E-mail-distribution-lists/getlastchangesindistributionlist
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Discount-coupons/getlistofdiscountcoupons
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
     * @see https://api.docs.shoptet.com/openapi/Discount-coupons/creatediscountcoupons
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
     * @see https://api.docs.shoptet.com/openapi/Discount-coupons/getlistofalldiscountcoupons
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
     * @see https://api.docs.shoptet.com/openapi/Discount-coupons/getdetailofdiscountcoupon
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
     * @see https://api.docs.shoptet.com/openapi/Discount-coupons/deletediscountcoupon
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
     * @see https://api.docs.shoptet.com/openapi/Discount-coupons/creatediscountcouponsset
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
     * @see https://api.docs.shoptet.com/openapi/Discount-coupons/updatediscountcouponsusage
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
     * @see https://api.docs.shoptet.com/openapi/Discount-coupons/gettemplatesofdiscountcoupons
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
     * @see https://api.docs.shoptet.com/openapi/Discount-coupons/creatediscountcouponstemplate
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
     * @see https://api.docs.shoptet.com/openapi/Discount-coupons/deletediscountcouponstemplate
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
     * @see https://api.docs.shoptet.com/openapi/XY-discounts/getlistofxydiscounts
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
     * @see https://api.docs.shoptet.com/openapi/XY-discounts/createxydiscount
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
     * @see https://api.docs.shoptet.com/openapi/XY-discounts/getdetailofxydiscounts
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
     * @see https://api.docs.shoptet.com/openapi/XY-discounts/updatexydiscount
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
     * @see https://api.docs.shoptet.com/openapi/XY-discounts/deletexydiscount
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
     * @see https://api.docs.shoptet.com/openapi/XY-discounts/getxydiscountssettings
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
     * @see https://api.docs.shoptet.com/openapi/XY-discounts/updatexydiscountsettings
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
     * @see https://api.docs.shoptet.com/openapi/Quantity-discounts/getlistofquantitydiscounts
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
     * @see https://api.docs.shoptet.com/openapi/Quantity-discounts/createquantitydiscount
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
     * @see https://api.docs.shoptet.com/openapi/Quantity-discounts/getlistofallquantitydiscounts
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
     * @see https://api.docs.shoptet.com/openapi/Quantity-discounts/getdetailofquantitydiscounts
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
     * @see https://api.docs.shoptet.com/openapi/Quantity-discounts/updatequantitydiscount
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
     * @see https://api.docs.shoptet.com/openapi/Quantity-discounts/deletequantitydiscount
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
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Articles/getlistofarticles
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
     * @see https://api.docs.shoptet.com/openapi/Articles/createarticle
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
     * @see https://api.docs.shoptet.com/openapi/Articles/getlistallarticles
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
     * @see https://api.docs.shoptet.com/openapi/Articles/getdetailofarticle
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
     * @see https://api.docs.shoptet.com/openapi/Articles/updatearticle
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
     * @see https://api.docs.shoptet.com/openapi/Articles/deletearticle
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
     * @see https://api.docs.shoptet.com/openapi/Articles/getlistofarticlesections
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
     * @see https://api.docs.shoptet.com/openapi/Articles/createarticlesection
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
     * @see https://api.docs.shoptet.com/openapi/Articles/getdetailofarticlesection
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
     * @see https://api.docs.shoptet.com/openapi/Articles/updatearticlesection
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
     * @see https://api.docs.shoptet.com/openapi/Articles/deletearticlesection
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
     * @see https://api.docs.shoptet.com/openapi/Pages/getlistofpages
     */
    public static function getListOfPages(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfPages::class)
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
     * @see https://api.docs.shoptet.com/openapi/Pages/getdetailofpage
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
     * @param array{
     *     language?: string,
     *     page?: int,
     *     itemsPerPage?: int,
     *     productGuid?: string,
     *     userEmail?: string,
     *     creationDateFrom?: string,
     *     creationDateTo?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Discussions/getlistofdiscussionposts
     */
    public static function getListOfDiscussionPosts(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfDiscussionPosts::class)
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
     *     completionTimeFrom?: string,
     * } $queryParams
     *
     * @return ResponseInterface
     *
     * @throws LogicException
     * @throws RuntimeException
     *
     * @see https://api.docs.shoptet.com/openapi/Job-endpoints/getlistofjobs
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
     * @see https://api.docs.shoptet.com/openapi/Job-endpoints/getjobdetail
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
     * @see https://api.docs.shoptet.com/openapi/Files/getlistofuploadedfiles
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
     * @see https://api.docs.shoptet.com/openapi/Files/uploadfiles
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
     * @see https://api.docs.shoptet.com/openapi/Files/uploadfile
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
     * @see https://api.docs.shoptet.com/openapi/System-endpoints/getlistofavailableendpoints
     */
    public static function getListOfAvailableEndpoints(array $queryParams = []): ResponseInterface
    {
        return self::getEndpointFactory()
            ->createEndpoint(GetListOfAvailableEndpoints::class)
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
}
