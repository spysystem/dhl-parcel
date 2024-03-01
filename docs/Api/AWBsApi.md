# Spy\DHLParcel\AWBsApi

All URIs are relative to https://api-sandbox.dhl.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAwb()**](AWBsApi.md#createAwb) | **POST** /dpi/shipping/v1/awbs | Create a Single AWB |


## `createAwb()`

```php
createAwb($authorization, $body): \Spy\DHLParcel\Model\Awb
```

Create a Single AWB

Creates a new single awb based on the given data. This request will be decommissioned. Please use /dpi/v1/bulk/{customerEkp}/mixedorders instead.

### Example

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

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **body** | [**\Spy\DHLParcel\Model\Awb**](../Model/Awb.md)| The awb that shall be created. | |

### Return type

[**\Spy\DHLParcel\Model\Awb**](../Model/Awb.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
