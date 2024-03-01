# Spy\DHLParcel\CustomersApi

All URIs are relative to https://api-sandbox.dhl.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createClosedBag()**](CustomersApi.md#createClosedBag) | **POST** /dpi/shipping/v1/customers/{customerEkp}/bags | Create a Closed Bag |
| [**createCustomerOrder()**](CustomersApi.md#createCustomerOrder) | **POST** /dpi/shipping/v1/customers/{customerEkp}/orders | Create Order |
| [**createItem()**](CustomersApi.md#createItem) | **POST** /dpi/shipping/v1/customers/{customerEkp}/items | Create Single Item |
| [**createReturnItem()**](CustomersApi.md#createReturnItem) | **POST** /dpi/shipping/v1/customers/{customerEkp}/returnitems | Create a Return Item |
| [**getBagTag()**](CustomersApi.md#getBagTag) | **GET** /dpi/shipping/v1/customers/{customerEkp}/bags/{bagId}/label | Get Label for Bag |
| [**getCustomerItemLabel()**](CustomersApi.md#getCustomerItemLabel) | **GET** /dpi/shipping/v1/customers/{customerEkp}/items/{barcode}/label | Get Label for Item |
| [**getItemByBarcode()**](CustomersApi.md#getItemByBarcode) | **GET** /dpi/shipping/v1/customers/{customerEkp}/items/{barcode} | Retrieve Data for Item |
| [**getItems()**](CustomersApi.md#getItems) | **GET** /dpi/shipping/v1/customers/{customerEkp}/items | Get Available Items |
| [**getReturnItemLabel()**](CustomersApi.md#getReturnItemLabel) | **GET** /dpi/shipping/v1/customers/{customerEkp}/returnitems/{barcode}/label | Retrieve Label for Return Item |
| [**updateCustomerItem()**](CustomersApi.md#updateCustomerItem) | **PUT** /dpi/shipping/v1/customers/{customerEkp}/items/{barcode} | Update a single item. |


## `createClosedBag()`

```php
createClosedBag($customer_ekp, $authorization, $body, $third_party_vendor_id): \Spy\DHLParcel\Model\ClosedBag
```

Create a Closed Bag

Creates and closes a bag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_ekp = 'customer_ekp_example'; // string | The EKP of the customer for whom the closed bag is created
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$body = new \Spy\DHLParcel\Model\ClosedBag(); // \Spy\DHLParcel\Model\ClosedBag | The data of the closed bag.
$third_party_vendor_id = 'third_party_vendor_id_example'; // string | ID to identify a third party vendor.

try {
    $result = $apiInstance->createClosedBag($customer_ekp, $authorization, $body, $third_party_vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createClosedBag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_ekp** | **string**| The EKP of the customer for whom the closed bag is created | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **body** | [**\Spy\DHLParcel\Model\ClosedBag**](../Model/ClosedBag.md)| The data of the closed bag. | |
| **third_party_vendor_id** | **string**| ID to identify a third party vendor. | [optional] |

### Return type

[**\Spy\DHLParcel\Model\ClosedBag**](../Model/ClosedBag.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCustomerOrder()`

```php
createCustomerOrder($customer_ekp, $authorization, $body, $third_party_vendor_id): \Spy\DHLParcel\Model\Order
```

Create Order

Creates an order from already existing items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_ekp = 'customer_ekp_example'; // string | The EKP of the customer for whom the order is created
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$body = new \Spy\DHLParcel\Model\AssembleOrder(); // \Spy\DHLParcel\Model\AssembleOrder | The order data and the items that shall be assembled to a new order
$third_party_vendor_id = 'third_party_vendor_id_example'; // string | The ID of the 3PV/Third Party Vendor who assembles this order.

try {
    $result = $apiInstance->createCustomerOrder($customer_ekp, $authorization, $body, $third_party_vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createCustomerOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_ekp** | **string**| The EKP of the customer for whom the order is created | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **body** | [**\Spy\DHLParcel\Model\AssembleOrder**](../Model/AssembleOrder.md)| The order data and the items that shall be assembled to a new order | |
| **third_party_vendor_id** | **string**| The ID of the 3PV/Third Party Vendor who assembles this order. | [optional] |

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

## `createItem()`

```php
createItem($customer_ekp, $authorization, $body, $third_party_vendor_id): \Spy\DHLParcel\Model\Item
```

Create Single Item

Single items are not attached to an order. Adding items to an order can be done later.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_ekp = 'customer_ekp_example'; // string | The customers ekp for whom the item shall be created.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$body = new \Spy\DHLParcel\Model\Item(); // \Spy\DHLParcel\Model\Item | The item that shall be created.
$third_party_vendor_id = 'third_party_vendor_id_example'; // string | The ID of the 3PV/Third Party Vendor who creates this item.

try {
    $result = $apiInstance->createItem($customer_ekp, $authorization, $body, $third_party_vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_ekp** | **string**| The customers ekp for whom the item shall be created. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **body** | [**\Spy\DHLParcel\Model\Item**](../Model/Item.md)| The item that shall be created. | |
| **third_party_vendor_id** | **string**| The ID of the 3PV/Third Party Vendor who creates this item. | [optional] |

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

## `createReturnItem()`

```php
createReturnItem($customer_ekp, $authorization, $body, $third_party_vendor_id): \Spy\DHLParcel\Model\ReturnItemResponse
```

Create a Return Item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_ekp = 'customer_ekp_example'; // string | The EKP of the customer for whom the return item is created
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$body = new \Spy\DHLParcel\Model\ReturnItem(); // \Spy\DHLParcel\Model\ReturnItem | The data of the return item that shall be created.
$third_party_vendor_id = 'third_party_vendor_id_example'; // string | ID to identify a third party vendor.

try {
    $result = $apiInstance->createReturnItem($customer_ekp, $authorization, $body, $third_party_vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createReturnItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_ekp** | **string**| The EKP of the customer for whom the return item is created | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **body** | [**\Spy\DHLParcel\Model\ReturnItem**](../Model/ReturnItem.md)| The data of the return item that shall be created. | |
| **third_party_vendor_id** | **string**| ID to identify a third party vendor. | [optional] |

### Return type

[**\Spy\DHLParcel\Model\ReturnItemResponse**](../Model/ReturnItemResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBagTag()`

```php
getBagTag($customer_ekp, $bag_id, $authorization, $accept): string[]
```

Get Label for Bag

For a given bag a label is generated or retrieved from the cache and send to the requestor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_ekp = 'customer_ekp_example'; // string | customerEkp
$bag_id = 'bag_id_example'; // string | The id of the bag.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$accept = 'accept_example'; // string | Bytestream containing the media type of the generated label.

try {
    $result = $apiInstance->getBagTag($customer_ekp, $bag_id, $authorization, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getBagTag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_ekp** | **string**| customerEkp | |
| **bag_id** | **string**| The id of the bag. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **accept** | **string**| Bytestream containing the media type of the generated label. | |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/pdf+singlepage`, `application/pdf+singlepage+6x4`, `application/zpl`, `application/zpl+6x4`, `application/zpl+rotated`, `application/zpl+rotated+6x4`, `image/png`, `image/png+6x4`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerItemLabel()`

```php
getCustomerItemLabel($customer_ekp, $barcode, $authorization, $accept): string[]
```

Get Label for Item

For a given item a label is generated or retrieved from the cache and send to the requestor as a bytestream response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_ekp = 'customer_ekp_example'; // string | customerEkp
$barcode = 'barcode_example'; // string | The id of the item.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$accept = 'accept_example'; // string | Bytestream containing the media type of the generated label.

try {
    $result = $apiInstance->getCustomerItemLabel($customer_ekp, $barcode, $authorization, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerItemLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_ekp** | **string**| customerEkp | |
| **barcode** | **string**| The id of the item. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **accept** | **string**| Bytestream containing the media type of the generated label. | |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/pdf+singlepage`, `application/pdf+singlepage+6x4`, `application/zpl`, `application/zpl+6x4`, `application/zpl+rotated`, `application/zpl+rotated+6x4`, `image/png`, `image/png+6x4`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemByBarcode()`

```php
getItemByBarcode($customer_ekp, $barcode, $authorization): \Spy\DHLParcel\Model\Item
```

Retrieve Data for Item

For a given item of a customer the data is retrieved.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_ekp = 'customer_ekp_example'; // string | The customers ekp for which all items are requested.
$barcode = 'barcode_example'; // string | The barcode of the item.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"

try {
    $result = $apiInstance->getItemByBarcode($customer_ekp, $barcode, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getItemByBarcode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_ekp** | **string**| The customers ekp for which all items are requested. | |
| **barcode** | **string**| The barcode of the item. | |
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

## `getItems()`

```php
getItems($customer_ekp, $authorization, $status, $page, $page_size): \Spy\DHLParcel\Model\Item
```

Get Available Items

Single items are not attached to an order. Adding items to an order can be done later.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_ekp = 'customer_ekp_example'; // string | The customers ekp for which all items are requested.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$status = 'NEW'; // string | The status for which all items are requested. Can be empty, then the defaults to all items with the status NEW.
$page = 0; // int | Page of the results to receive. Can be omitted, then the default is the first page (page # 0).
$page_size = 10; // int | Number of items per page. Can be omitted, then the default is 10 items per page.

try {
    $result = $apiInstance->getItems($customer_ekp, $authorization, $status, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_ekp** | **string**| The customers ekp for which all items are requested. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **status** | **string**| The status for which all items are requested. Can be empty, then the defaults to all items with the status NEW. | [optional] [default to &#39;NEW&#39;] |
| **page** | **int**| Page of the results to receive. Can be omitted, then the default is the first page (page # 0). | [optional] [default to 0] |
| **page_size** | **int**| Number of items per page. Can be omitted, then the default is 10 items per page. | [optional] [default to 10] |

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

## `getReturnItemLabel()`

```php
getReturnItemLabel($customer_ekp, $barcode, $authorization, $accept): string[]
```

Retrieve Label for Return Item

For a given item a label is generated or retrieved from the cache and send to the requestor as a bytestream response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_ekp = 'customer_ekp_example'; // string | The EKP of the customer for whom the return label is requested
$barcode = 'barcode_example'; // string | The barcode of the item.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$accept = 'accept_example'; // string | Bytestream containing the media type of the generated label.

try {
    $result = $apiInstance->getReturnItemLabel($customer_ekp, $barcode, $authorization, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getReturnItemLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_ekp** | **string**| The EKP of the customer for whom the return label is requested | |
| **barcode** | **string**| The barcode of the item. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **accept** | **string**| Bytestream containing the media type of the generated label. | [optional] |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/pdf+singlepage`, `application/pdf+singlepage+6x4`, `application/zpl`, `application/zpl+6x4`, `application/zpl+rotated`, `application/zpl+rotated+6x4`, `image/png`, `image/png+6x4`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCustomerItem()`

```php
updateCustomerItem($customer_ekp, $barcode, $body, $third_party_vendor_id): \Spy\DHLParcel\Model\Item
```

Update a single item.

Single items are not attached to an order. Adding items to an order can be done later.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_ekp = 'customer_ekp_example'; // string | The customers ekp for whom the item shall be created.
$barcode = 'barcode_example'; // string | The barcode for the item to be updated.
$body = new \Spy\DHLParcel\Model\Item(); // \Spy\DHLParcel\Model\Item | The item that shall be created.
$third_party_vendor_id = 'third_party_vendor_id_example'; // string | ID to identify a third party vendor.

try {
    $result = $apiInstance->updateCustomerItem($customer_ekp, $barcode, $body, $third_party_vendor_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->updateCustomerItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_ekp** | **string**| The customers ekp for whom the item shall be created. | |
| **barcode** | **string**| The barcode for the item to be updated. | |
| **body** | [**\Spy\DHLParcel\Model\Item**](../Model/Item.md)| The item that shall be created. | |
| **third_party_vendor_id** | **string**| ID to identify a third party vendor. | [optional] |

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
