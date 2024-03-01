# Spy\DHLParcel\TrackingsApi

All URIs are relative to https://api-sandbox.dhl.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getBagAndEvents()**](TrackingsApi.md#getBagAndEvents) | **GET** /dpi/tracking/v3/bag/{customerBagId} | Get Trackings of bags V3 |
| [**getTrackingForAirwayBill()**](TrackingsApi.md#getTrackingForAirwayBill) | **GET** /dpi/tracking/v3/trackings/awb/{awb} | Get Tracking - Shipment V3 |
| [**getTrackingForAwb()**](TrackingsApi.md#getTrackingForAwb) | **GET** /dpi/tracking/v1/trackings/awb/{awb} | Get Tracking - Shipment V1 |
| [**getTrackingsBasic()**](TrackingsApi.md#getTrackingsBasic) | **GET** /dpi/tracking/v1/trackings/{barcode} | Get Trackings V1 |
| [**getTrackingsExtended()**](TrackingsApi.md#getTrackingsExtended) | **GET** /dpi/tracking/v3/trackings/{barcode} | Get Trackings V3 |


## `getBagAndEvents()`

```php
getBagAndEvents($customer_bag_id, $authorization, $matching): \Spy\DHLParcel\Model\V3Tracking
```

Get Trackings of bags V3

Get all tracking information of for the bag (identified by the given barcode).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\TrackingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$customer_bag_id = 'customer_bag_id_example'; // string | The customerBagId of the tracked bag.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$matching = false; // bool | Flag to get additional fields

try {
    $result = $apiInstance->getBagAndEvents($customer_bag_id, $authorization, $matching);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingsApi->getBagAndEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_bag_id** | **string**| The customerBagId of the tracked bag. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **matching** | **bool**| Flag to get additional fields | [optional] [default to false] |

### Return type

[**\Spy\DHLParcel\Model\V3Tracking**](../Model/V3Tracking.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrackingForAirwayBill()`

```php
getTrackingForAirwayBill($awb, $authorization, $language, $with_event_type): \Spy\DHLParcel\Model\V3Tracking[]
```

Get Tracking - Shipment V3

Get tracking information of all items of a shipment (identified by the given awb). More detailed breakdown of track events compared to v1 but possibly more inconsisteny, duplicity and wrong tracking order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\TrackingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$awb = 'awb_example'; // string | The awb of the shipment.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$language = 'en'; // string | The language for the returned status message. \"en\" if omitted
$with_event_type = false; // bool | Flag if the event type should be written in the result. False if omitted

try {
    $result = $apiInstance->getTrackingForAirwayBill($awb, $authorization, $language, $with_event_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingsApi->getTrackingForAirwayBill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **awb** | **string**| The awb of the shipment. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **language** | **string**| The language for the returned status message. \&quot;en\&quot; if omitted | [optional] [default to &#39;en&#39;] |
| **with_event_type** | **bool**| Flag if the event type should be written in the result. False if omitted | [optional] [default to false] |

### Return type

[**\Spy\DHLParcel\Model\V3Tracking[]**](../Model/V3Tracking.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrackingForAwb()`

```php
getTrackingForAwb($awb, $authorization): \Spy\DHLParcel\Model\Tracking[]
```

Get Tracking - Shipment V1

Get tracking information of all items of a shipment (identified by the given awb).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\TrackingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$awb = 'awb_example'; // string | The awb of the shipment.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"

try {
    $result = $apiInstance->getTrackingForAwb($awb, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingsApi->getTrackingForAwb: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **awb** | **string**| The awb of the shipment. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |

### Return type

[**\Spy\DHLParcel\Model\Tracking[]**](../Model/Tracking.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrackingsBasic()`

```php
getTrackingsBasic($barcode, $authorization): \Spy\DHLParcel\Model\Tracking
```

Get Trackings V1

Get all tracking information of for the item (identified by the given barcode).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\TrackingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$barcode = 'barcode_example'; // string | The barcode of the tracked item.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"

try {
    $result = $apiInstance->getTrackingsBasic($barcode, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingsApi->getTrackingsBasic: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **barcode** | **string**| The barcode of the tracked item. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |

### Return type

[**\Spy\DHLParcel\Model\Tracking**](../Model/Tracking.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrackingsExtended()`

```php
getTrackingsExtended($barcode, $authorization, $language, $with_event_type): \Spy\DHLParcel\Model\V3Tracking
```

Get Trackings V3

Get all tracking information for the item (identified by the given barcode). More detailed breakdown of track events compared to v1 but possibly more inconsisteny, duplicity and wrong tracking order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\TrackingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$barcode = 'barcode_example'; // string | The barcode of the tracked item.
$authorization = 'Bearer [place  OAuth access_token here, without brackets]'; // string | Bearer Auth access_token together with the \"Bearer\" prefix is required. **Example** of the header value:\"*Bearer 0UuA.....*\"
$language = 'en'; // string | The language for the returned status message. \"en\" if omitted
$with_event_type = false; // bool | Flag if the event type should be written in the result. False if omitted

try {
    $result = $apiInstance->getTrackingsExtended($barcode, $authorization, $language, $with_event_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingsApi->getTrackingsExtended: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **barcode** | **string**| The barcode of the tracked item. | |
| **authorization** | **string**| Bearer Auth access_token together with the \&quot;Bearer\&quot; prefix is required. **Example** of the header value:\&quot;*Bearer 0UuA.....*\&quot; | [default to &#39;Bearer [place  OAuth access_token here, without brackets]&#39;] |
| **language** | **string**| The language for the returned status message. \&quot;en\&quot; if omitted | [optional] [default to &#39;en&#39;] |
| **with_event_type** | **bool**| Flag if the event type should be written in the result. False if omitted | [optional] [default to false] |

### Return type

[**\Spy\DHLParcel\Model\V3Tracking**](../Model/V3Tracking.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
