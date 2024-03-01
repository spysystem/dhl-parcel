# Spy\DHLParcel\ValidationApi

All URIs are relative to https://api-sandbox.dhl.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**validateOrderItem()**](ValidationApi.md#validateOrderItem) | **POST** /dpi/shipping/v1/validation | Validate Order Items |


## `validateOrderItem()`

```php
validateOrderItem($authorization, $body, $third_party_vendor_id)
```

Validate Order Items

Validate OrderItems, required by efiliale

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\ValidationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$body = new \Spy\DHLParcel\Model\Validation(); // \Spy\DHLParcel\Model\Validation | The items that shall be validated.
$third_party_vendor_id = 'third_party_vendor_id_example'; // string | The ID of the 3PV/Third Party Vendor who wants to validate this item.

try {
    $apiInstance->validateOrderItem($authorization, $body, $third_party_vendor_id);
} catch (Exception $e) {
    echo 'Exception when calling ValidationApi->validateOrderItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **body** | [**\Spy\DHLParcel\Model\Validation**](../Model/Validation.md)| The items that shall be validated. | |
| **third_party_vendor_id** | **string**| The ID of the 3PV/Third Party Vendor who wants to validate this item. | [optional] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
