# Spy\DHLParcel\OrdersApi

All URIs are relative to https://api-sandbox.dhl.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addOrderItems()**](OrdersApi.md#addOrderItems) | **POST** /dpi/shipping/v1/orders/{orderId}/items | Add Items to an Order |
| [**createOrder()**](OrdersApi.md#createOrder) | **POST** /dpi/shipping/v1/orders | Create Order |
| [**finalizeOrder()**](OrdersApi.md#finalizeOrder) | **POST** /dpi/shipping/v1/orders/{orderId}/finalization | Finalize open Order |
| [**getOrder()**](OrdersApi.md#getOrder) | **GET** /dpi/shipping/v1/orders/{orderId} | Get Order |
| [**getShipments()**](OrdersApi.md#getShipments) | **GET** /dpi/shipping/v1/orders/{orderId}/shipments | Get Shipments for an Order |


## `addOrderItems()`

```php
addOrderItems($order_id, $authorization, $body, $third_party_vendor_id): object
```

Add Items to an Order

Add  new item(s) to a open order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | The id of the order.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$body = array(new \Spy\DHLParcel\Model\Item()); // \Spy\DHLParcel\Model\Item[] | The items that shall be created.
$third_party_vendor_id = 'third_party_vendor_id_example'; // string | The ID of the 3PV/Third Party Vendor who adds an item to this order. If no 3PV software is used please leave out of request

try {
    $result = $apiInstance->addOrderItems($order_id, $authorization, $body, $third_party_vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->addOrderItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| The id of the order. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **body** | [**\Spy\DHLParcel\Model\Item[]**](../Model/Item.md)| The items that shall be created. | |
| **third_party_vendor_id** | **string**| The ID of the 3PV/Third Party Vendor who adds an item to this order. If no 3PV software is used please leave out of request | [optional] |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createOrder()`

```php
createOrder($authorization, $body, $third_party_vendor_id): object
```

Create Order

Creates a new order based on the given JSON data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$body = new \Spy\DHLParcel\Model\OrderData(); // \Spy\DHLParcel\Model\OrderData | The order that shall be created.
$third_party_vendor_id = 'third_party_vendor_id_example'; // string | The ID of the 3PV/Third Party Vendor who creates this order. If no 3PV software is used please leave out of request

try {
    $result = $apiInstance->createOrder($authorization, $body, $third_party_vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->createOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **body** | [**\Spy\DHLParcel\Model\OrderData**](../Model/OrderData.md)| The order that shall be created. | |
| **third_party_vendor_id** | **string**| The ID of the 3PV/Third Party Vendor who creates this order. If no 3PV software is used please leave out of request | [optional] |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `finalizeOrder()`

```php
finalizeOrder($order_id, $authorization, $body, $third_party_vendor_id): \Spy\DHLParcel\Model\Order
```

Finalize open Order

Finalize the given open Order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | The id of the order.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$body = new \Spy\DHLParcel\Model\Paperwork(); // \Spy\DHLParcel\Model\Paperwork | The paperwork information for the order.
$third_party_vendor_id = 'third_party_vendor_id_example'; // string | The ID of the 3PV/Third Party Vendor who finalizes this order.If no 3PV software is used please leave out of request

try {
    $result = $apiInstance->finalizeOrder($order_id, $authorization, $body, $third_party_vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->finalizeOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| The id of the order. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **body** | [**\Spy\DHLParcel\Model\Paperwork**](../Model/Paperwork.md)| The paperwork information for the order. | |
| **third_party_vendor_id** | **string**| The ID of the 3PV/Third Party Vendor who finalizes this order.If no 3PV software is used please leave out of request | [optional] |

### Return type

[**\Spy\DHLParcel\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrder()`

```php
getOrder($order_id, $authorization): \Spy\DHLParcel\Model\Order
```

Get Order

Searches the order for the given orderId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | The id of the order that the user wants to retrieve.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"

try {
    $result = $apiInstance->getOrder($order_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| The id of the order that the user wants to retrieve. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |

### Return type

[**\Spy\DHLParcel\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShipments()`

```php
getShipments($order_id, $authorization): \Spy\DHLParcel\Model\Shipment[]
```

Get Shipments for an Order

Searches shipments attached to an given order. Answers with a not found status (404) if order does not exist or if there are no shipmments attached to this order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$order_id = 'order_id_example'; // string | The id of the order that the user wants to retrieve all shipments for.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"

try {
    $result = $apiInstance->getShipments($order_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getShipments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **order_id** | **string**| The id of the order that the user wants to retrieve all shipments for. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |

### Return type

[**\Spy\DHLParcel\Model\Shipment[]**](../Model/Shipment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
