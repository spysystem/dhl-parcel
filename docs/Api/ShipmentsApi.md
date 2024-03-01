# Spy\DHLParcel\ShipmentsApi

All URIs are relative to https://api-sandbox.dhl.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAwbLabel()**](ShipmentsApi.md#getAwbLabel) | **GET** /dpi/shipping/v1/shipments/{awb}/awblabels | Get AWB Label |
| [**getItemLabels()**](ShipmentsApi.md#getItemLabels) | **GET** /dpi/shipping/v1/shipments/{awb}/itemlabels | Get Item Labels |
| [**getShipment()**](ShipmentsApi.md#getShipment) | **GET** /dpi/shipping/v1/shipments/{awb} | Get Shipment Data for AWB |


## `getAwbLabel()`

```php
getAwbLabel($awb, $authorization)
```

Get AWB Label

For a given shipment awb an awb labels is generated or retrieved from the cache and send to the requestor as a bytestream response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$awb = 'awb_example'; // string | The airwaybill of the shipment.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"

try {
    $apiInstance->getAwbLabel($awb, $authorization);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getAwbLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **awb** | **string**| The airwaybill of the shipment. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getItemLabels()`

```php
getItemLabels($awb, $authorization, $accept)
```

Get Item Labels

For a given shipment awb all item labels will be generated or retrieved from the cache and send to the requestor as a bytestream response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$awb = 'awb_example'; // string | The airwaybill of the shipment.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$accept = 'accept_example'; // string | Bytestream containing the media type of the generated labels.

try {
    $apiInstance->getItemLabels($awb, $authorization, $accept);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getItemLabels: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **awb** | **string**| The airwaybill of the shipment. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **accept** | **string**| Bytestream containing the media type of the generated labels. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/pdf+singlepage`, `application/pdf+singlepage+6x4`, `application/zpl`, `application/zpl+6x4`, `application/zpl+rotated`, `application/zpl+rotated+6x4`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShipment()`

```php
getShipment($awb, $authorization): \Spy\DHLParcel\Model\Shipment
```

Get Shipment Data for AWB

For a given shipment awb all available data will be send.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\ShipmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$awb = 'awb_example'; // string | The airwaybill of the shipment.
$authorization = 'Bearer [place  access_token token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"

try {
    $result = $apiInstance->getShipment($awb, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentsApi->getShipment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **awb** | **string**| The airwaybill of the shipment. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  access_token token here, without brackets]&#39;] |

### Return type

[**\Spy\DHLParcel\Model\Shipment**](../Model/Shipment.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
