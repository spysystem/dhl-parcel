# Spy\DHLParcel\ItemsApi

All URIs are relative to https://api-sandbox.dhl.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteItem()**](ItemsApi.md#deleteItem) | **DELETE** /dpi/shipping/v1/items/{itemId} | Delete Item |
| [**getItemById()**](ItemsApi.md#getItemById) | **GET** /dpi/shipping/v1/items/{itemId} | Get Item |
| [**getItemLabel()**](ItemsApi.md#getItemLabel) | **GET** /dpi/shipping/v1/items/{itemId}/label | Get Item Label |
| [**updateItemInOrder()**](ItemsApi.md#updateItemInOrder) | **PUT** /dpi/shipping/v1/items/{itemId} | Update item |


## `deleteItem()`

```php
deleteItem($item_id, $authorization)
```

Delete Item

Deletes the item for the specified item id. <br><br>This operation only works for items attached to orders that are in the OPEN state. Called on items of orders in the FINALIZED state leads to an 404 error (an item with the desired attributes cannot be found).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string | The id of the item.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"

try {
    $apiInstance->deleteItem($item_id, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->deleteItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The id of the item. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemById()`

```php
getItemById($item_id, $authorization): \Spy\DHLParcel\Model\Item
```

Get Item

You get all information about a given item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string | The id of the item.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"

try {
    $result = $apiInstance->getItemById($item_id, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getItemById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The id of the item. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |

### Return type

[**\Spy\DHLParcel\Model\Item**](../Model/Item.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemLabel()`

```php
getItemLabel($item_id, $authorization, $accept)
```

Get Item Label

For a given item a label is generated or retrieved from the cache and send to the requestor as a bytestream response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string | The id of the item.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$accept = 'accept_example'; // string | Bytestream containing the media type of the generated label.

try {
    $apiInstance->getItemLabel($item_id, $authorization, $accept);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->getItemLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The id of the item. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **accept** | **string**| Bytestream containing the media type of the generated label. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/pdf+singlepage`, `application/pdf+singlepage+6x4`, `application/zpl`, `application/zpl+6x4`, `application/zpl+rotated`, `application/zpl+rotated+6x4`, `image/png`, `image/png+6x4`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateItemInOrder()`

```php
updateItemInOrder($item_id, $authorization, $body): \Spy\DHLParcel\Model\Item
```

Update item

Updates the item for the specified item id. <br><br>This operation only works for items attached to orders that are in the OPEN state. Called on items of orders in the FINALIZED state leads to an 404 error (an item with the desired attributes cannot be found). The following fields are not updatable: product, serviceLevel, destinationCountry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\ItemsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$item_id = 'item_id_example'; // string | The id of the item.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$body = new \Spy\DHLParcel\Model\Item(); // \Spy\DHLParcel\Model\Item | The item data that shall be used.

try {
    $result = $apiInstance->updateItemInOrder($item_id, $authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemsApi->updateItemInOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **item_id** | **string**| The id of the item. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **body** | [**\Spy\DHLParcel\Model\Item**](../Model/Item.md)| The item data that shall be used. | |

### Return type

[**\Spy\DHLParcel\Model\Item**](../Model/Item.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
