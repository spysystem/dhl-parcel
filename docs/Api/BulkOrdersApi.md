# Spy\DHLParcel\BulkOrdersApi

All URIs are relative to https://api-sandbox.dhl.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBulkOrder()**](BulkOrdersApi.md#createBulkOrder) | **POST** /dpi/shipping/v1/bulk/{customerEkp}/orders | Create a Bulk Order |
| [**createMixedOrder()**](BulkOrdersApi.md#createMixedOrder) | **POST** /dpi/shipping/v1/bulk/{customerEkp}/mixedorders | Create a Mixed Order |
| [**downloadBulkPaperwork()**](BulkOrdersApi.md#downloadBulkPaperwork) | **GET** /dpi/shipping/v1/bulk/{customerEkp}/orders/{orderId}/paperwork | Get Bulk Paperwork |
| [**getBagTagLabel()**](BulkOrdersApi.md#getBagTagLabel) | **GET** /dpi/shipping/v1/bulk/label | Get Bag Tag Label |
| [**getBulkOrder()**](BulkOrdersApi.md#getBulkOrder) | **GET** /dpi/shipping/v1/bulk/{customerEkp}/orders/{orderId} | Get a Bulk Order |


## `createBulkOrder()`

```php
createBulkOrder($customer_ekp, $authorization, $body): \Spy\DHLParcel\Model\BagOrder
```

Create a Bulk Order

Creates a new bulk order based on the given data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\BulkOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_ekp = 56; // int | The customers ekp for whom the order shall be created.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$body = new \Spy\DHLParcel\Model\BagOrder(); // \Spy\DHLParcel\Model\BagOrder | The bag order that shall be created.

try {
    $result = $apiInstance->createBulkOrder($customer_ekp, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkOrdersApi->createBulkOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_ekp** | **int**| The customers ekp for whom the order shall be created. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **body** | [**\Spy\DHLParcel\Model\BagOrder**](../Model/BagOrder.md)| The bag order that shall be created. | |

### Return type

[**\Spy\DHLParcel\Model\BagOrder**](../Model/BagOrder.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMixedOrder()`

```php
createMixedOrder($customer_ekp, $authorization, $body): \Spy\DHLParcel\Model\BulkOrderDto
```

Create a Mixed Order

Creates a new mixed order based on the given data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\BulkOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_ekp = 'customer_ekp_example'; // string | The customers ekp for whom the order shall be created.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$body = new \Spy\DHLParcel\Model\MixedBagOrderDTO(); // \Spy\DHLParcel\Model\MixedBagOrderDTO | The mixed order that shall be created.

try {
    $result = $apiInstance->createMixedOrder($customer_ekp, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkOrdersApi->createMixedOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_ekp** | **string**| The customers ekp for whom the order shall be created. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **body** | [**\Spy\DHLParcel\Model\MixedBagOrderDTO**](../Model/MixedBagOrderDTO.md)| The mixed order that shall be created. | |

### Return type

[**\Spy\DHLParcel\Model\BulkOrderDto**](../Model/BulkOrderDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadBulkPaperwork()`

```php
downloadBulkPaperwork($customer_ekp, $order_id, $authorization): \Spy\DHLParcel\Model\Order
```

Get Bulk Paperwork

Gets the paperwork in zip format for the given orderId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\BulkOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_ekp = 'customer_ekp_example'; // string | The customers ekp for who retrieves the order.
$order_id = 'order_id_example'; // string | The id of the order from paperwork that the user wants to retrieve.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"

try {
    $result = $apiInstance->downloadBulkPaperwork($customer_ekp, $order_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkOrdersApi->downloadBulkPaperwork: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_ekp** | **string**| The customers ekp for who retrieves the order. | |
| **order_id** | **string**| The id of the order from paperwork that the user wants to retrieve. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |

### Return type

[**\Spy\DHLParcel\Model\Order**](../Model/Order.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBagTagLabel()`

```php
getBagTagLabel($bag_ids, $authorization, $accept)
```

Get Bag Tag Label

For a given bag get the label of the bag tag, sentt as a bytestream response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\BulkOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$bag_ids = array('bag_ids_example'); // string[] | The ids of the bag seperated by commas e.g. bagIds=GM40040404040410000000000035,GM40040404040410000000000036
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$accept = 'accept_example'; // string | Bytestream containing the media type of the generated label.

try {
    $apiInstance->getBagTagLabel($bag_ids, $authorization, $accept);
} catch (Exception $e) {
    echo 'Exception when calling BulkOrdersApi->getBagTagLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bag_ids** | [**string[]**](../Model/string.md)| The ids of the bag seperated by commas e.g. bagIds&#x3D;GM40040404040410000000000035,GM40040404040410000000000036 | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **accept** | **string**| Bytestream containing the media type of the generated label. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/pdf+singlepage`, `application/zpl`, `application/zpl+rotated`, `image/png`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBulkOrder()`

```php
getBulkOrder($customer_ekp, $order_id, $authorization): \Spy\DHLParcel\Model\Order
```

Get a Bulk Order

Searches the order for the given orderId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\BulkOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_ekp = 'customer_ekp_example'; // string | The customers ekp for who retrieves the order.
$order_id = 'order_id_example'; // string | The id of the order that the user wants to retrieve.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"

try {
    $result = $apiInstance->getBulkOrder($customer_ekp, $order_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkOrdersApi->getBulkOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_ekp** | **string**| The customers ekp for who retrieves the order. | |
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
