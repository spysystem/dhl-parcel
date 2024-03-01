# OpenAPIClient-php

Welcome to the Deutsche Post International API! <br/><br/> This API provides an interface for our shipping and tracking services. It enables open integration channels for our customers and partners.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/spysystem/dhl-parcel.git"
    }
  ],
  "require": {
    "spysystem/dhl-parcel": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');




$apiInstance = new Spy\DHLParcel\Api\AWBsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$body = new \Spy\DHLParcel\Model\Awb(); // \Spy\DHLParcel\Model\Awb | The awb that shall be created.

try {
    $result = $apiInstance->createAwb($authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AWBsApi->createAwb: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api-sandbox.dhl.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AWBsApi* | [**createAwb**](docs/Api/AWBsApi.md#createawb) | **POST** /dpi/shipping/v1/awbs | Create a Single AWB
*AuthenticationApi* | [**getAccessToken**](docs/Api/AuthenticationApi.md#getaccesstoken) | **GET** /dpi/v1/auth/accesstoken | Get Access New Token
*AuthenticationApi* | [**getAccessTokenInfo**](docs/Api/AuthenticationApi.md#getaccesstokeninfo) | **GET** /dpi/v1/auth/accesstoken/info | Get Access Token Info
*AuthenticationApi* | [**revokeAccessToken**](docs/Api/AuthenticationApi.md#revokeaccesstoken) | **GET** /dpi/v1/auth/accesstoken/revoke | Revoke Access Token
*BulkOrdersApi* | [**createBulkOrder**](docs/Api/BulkOrdersApi.md#createbulkorder) | **POST** /dpi/shipping/v1/bulk/{customerEkp}/orders | Create a Bulk Order
*BulkOrdersApi* | [**createMixedOrder**](docs/Api/BulkOrdersApi.md#createmixedorder) | **POST** /dpi/shipping/v1/bulk/{customerEkp}/mixedorders | Create a Mixed Order
*BulkOrdersApi* | [**downloadBulkPaperwork**](docs/Api/BulkOrdersApi.md#downloadbulkpaperwork) | **GET** /dpi/shipping/v1/bulk/{customerEkp}/orders/{orderId}/paperwork | Get Bulk Paperwork
*BulkOrdersApi* | [**getBagTagLabel**](docs/Api/BulkOrdersApi.md#getbagtaglabel) | **GET** /dpi/shipping/v1/bulk/label | Get Bag Tag Label
*BulkOrdersApi* | [**getBulkOrder**](docs/Api/BulkOrdersApi.md#getbulkorder) | **GET** /dpi/shipping/v1/bulk/{customerEkp}/orders/{orderId} | Get a Bulk Order
*CustomersApi* | [**createClosedBag**](docs/Api/CustomersApi.md#createclosedbag) | **POST** /dpi/shipping/v1/customers/{customerEkp}/bags | Create a Closed Bag
*CustomersApi* | [**createCustomerOrder**](docs/Api/CustomersApi.md#createcustomerorder) | **POST** /dpi/shipping/v1/customers/{customerEkp}/orders | Create Order
*CustomersApi* | [**createItem**](docs/Api/CustomersApi.md#createitem) | **POST** /dpi/shipping/v1/customers/{customerEkp}/items | Create Single Item
*CustomersApi* | [**createReturnItem**](docs/Api/CustomersApi.md#createreturnitem) | **POST** /dpi/shipping/v1/customers/{customerEkp}/returnitems | Create a Return Item
*CustomersApi* | [**getBagTag**](docs/Api/CustomersApi.md#getbagtag) | **GET** /dpi/shipping/v1/customers/{customerEkp}/bags/{bagId}/label | Get Label for Bag
*CustomersApi* | [**getCustomerItemLabel**](docs/Api/CustomersApi.md#getcustomeritemlabel) | **GET** /dpi/shipping/v1/customers/{customerEkp}/items/{barcode}/label | Get Label for Item
*CustomersApi* | [**getItemByBarcode**](docs/Api/CustomersApi.md#getitembybarcode) | **GET** /dpi/shipping/v1/customers/{customerEkp}/items/{barcode} | Retrieve Data for Item
*CustomersApi* | [**getItems**](docs/Api/CustomersApi.md#getitems) | **GET** /dpi/shipping/v1/customers/{customerEkp}/items | Get Available Items
*CustomersApi* | [**getReturnItemLabel**](docs/Api/CustomersApi.md#getreturnitemlabel) | **GET** /dpi/shipping/v1/customers/{customerEkp}/returnitems/{barcode}/label | Retrieve Label for Return Item
*CustomersApi* | [**updateCustomerItem**](docs/Api/CustomersApi.md#updatecustomeritem) | **PUT** /dpi/shipping/v1/customers/{customerEkp}/items/{barcode} | Update a single item.
*ItemsApi* | [**deleteItem**](docs/Api/ItemsApi.md#deleteitem) | **DELETE** /dpi/shipping/v1/items/{itemId} | Delete Item
*ItemsApi* | [**getItemById**](docs/Api/ItemsApi.md#getitembyid) | **GET** /dpi/shipping/v1/items/{itemId} | Get Item
*ItemsApi* | [**getItemLabel**](docs/Api/ItemsApi.md#getitemlabel) | **GET** /dpi/shipping/v1/items/{itemId}/label | Get Item Label
*ItemsApi* | [**updateItemInOrder**](docs/Api/ItemsApi.md#updateiteminorder) | **PUT** /dpi/shipping/v1/items/{itemId} | Update item
*OrdersApi* | [**addOrderItems**](docs/Api/OrdersApi.md#addorderitems) | **POST** /dpi/shipping/v1/orders/{orderId}/items | Add Items to an Order
*OrdersApi* | [**createOrder**](docs/Api/OrdersApi.md#createorder) | **POST** /dpi/shipping/v1/orders | Create Order
*OrdersApi* | [**finalizeOrder**](docs/Api/OrdersApi.md#finalizeorder) | **POST** /dpi/shipping/v1/orders/{orderId}/finalization | Finalize open Order
*OrdersApi* | [**getOrder**](docs/Api/OrdersApi.md#getorder) | **GET** /dpi/shipping/v1/orders/{orderId} | Get Order
*OrdersApi* | [**getShipments**](docs/Api/OrdersApi.md#getshipments) | **GET** /dpi/shipping/v1/orders/{orderId}/shipments | Get Shipments for an Order
*ShipmentsApi* | [**getAwbLabel**](docs/Api/ShipmentsApi.md#getawblabel) | **GET** /dpi/shipping/v1/shipments/{awb}/awblabels | Get AWB Label
*ShipmentsApi* | [**getItemLabels**](docs/Api/ShipmentsApi.md#getitemlabels) | **GET** /dpi/shipping/v1/shipments/{awb}/itemlabels | Get Item Labels
*ShipmentsApi* | [**getShipment**](docs/Api/ShipmentsApi.md#getshipment) | **GET** /dpi/shipping/v1/shipments/{awb} | Get Shipment Data for AWB
*TrackingsApi* | [**getBagAndEvents**](docs/Api/TrackingsApi.md#getbagandevents) | **GET** /dpi/tracking/v3/bag/{customerBagId} | Get Trackings of bags V3
*TrackingsApi* | [**getTrackingForAirwayBill**](docs/Api/TrackingsApi.md#gettrackingforairwaybill) | **GET** /dpi/tracking/v3/trackings/awb/{awb} | Get Tracking - Shipment V3
*TrackingsApi* | [**getTrackingForAwb**](docs/Api/TrackingsApi.md#gettrackingforawb) | **GET** /dpi/tracking/v1/trackings/awb/{awb} | Get Tracking - Shipment V1
*TrackingsApi* | [**getTrackingsBasic**](docs/Api/TrackingsApi.md#gettrackingsbasic) | **GET** /dpi/tracking/v1/trackings/{barcode} | Get Trackings V1
*TrackingsApi* | [**getTrackingsExtended**](docs/Api/TrackingsApi.md#gettrackingsextended) | **GET** /dpi/tracking/v3/trackings/{barcode} | Get Trackings V3
*ValidationApi* | [**validateOrderItem**](docs/Api/ValidationApi.md#validateorderitem) | **POST** /dpi/shipping/v1/validation | Validate Order Items

## Models

- [AssembleOrder](docs/Model/AssembleOrder.md)
- [Awb](docs/Model/Awb.md)
- [Bag](docs/Model/Bag.md)
- [BagItemContentDto](docs/Model/BagItemContentDto.md)
- [BagItemDto](docs/Model/BagItemDto.md)
- [BagOrder](docs/Model/BagOrder.md)
- [BagPaperwork](docs/Model/BagPaperwork.md)
- [BulkBagDto](docs/Model/BulkBagDto.md)
- [BulkOrderDto](docs/Model/BulkOrderDto.md)
- [ClosedBag](docs/Model/ClosedBag.md)
- [Content](docs/Model/Content.md)
- [Country](docs/Model/Country.md)
- [CwsErrorDTO](docs/Model/CwsErrorDTO.md)
- [GetAccessTokenInfo401Response](docs/Model/GetAccessTokenInfo401Response.md)
- [GetAccessTokenInfoResponse](docs/Model/GetAccessTokenInfoResponse.md)
- [GetAccessTokenResponse](docs/Model/GetAccessTokenResponse.md)
- [Item](docs/Model/Item.md)
- [ItemData](docs/Model/ItemData.md)
- [Language](docs/Model/Language.md)
- [MixedBagOrderDTO](docs/Model/MixedBagOrderDTO.md)
- [Order](docs/Model/Order.md)
- [OrderData](docs/Model/OrderData.md)
- [Paperwork](docs/Model/Paperwork.md)
- [ReturnItem](docs/Model/ReturnItem.md)
- [ReturnItemResponse](docs/Model/ReturnItemResponse.md)
- [RevokeAccessTokenResponse](docs/Model/RevokeAccessTokenResponse.md)
- [Shipment](docs/Model/Shipment.md)
- [Tracking](docs/Model/Tracking.md)
- [TrackingEvent](docs/Model/TrackingEvent.md)
- [V3Tracking](docs/Model/V3Tracking.md)
- [V3TrackingEvent](docs/Model/V3TrackingEvent.md)
- [Validation](docs/Model/Validation.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `5.7.7`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
