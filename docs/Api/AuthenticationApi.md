# Spy\DHLParcel\AuthenticationApi

All URIs are relative to https://api-sandbox.dhl.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAccessToken()**](AuthenticationApi.md#getAccessToken) | **GET** /dpi/v1/auth/accesstoken | Get Access New Token |
| [**getAccessTokenInfo()**](AuthenticationApi.md#getAccessTokenInfo) | **GET** /dpi/v1/auth/accesstoken/info | Get Access Token Info |
| [**revokeAccessToken()**](AuthenticationApi.md#revokeAccessToken) | **GET** /dpi/v1/auth/accesstoken/revoke | Revoke Access Token |


## `getAccessToken()`

```php
getAccessToken($authorization, $accept): \Spy\DHLParcel\Model\GetAccessTokenResponse
```

Get Access New Token

The Get access_token API call provides OAuth 2.0 Bearer token, assigned to your Consumer_key and Consumer_secret, which will grants you an access to the Deutsche Post International Shipping APIs.<br/><br/> If you already received credentials for the old gateway these remain valid until further notice.<br/><br/> The API operation is secured by HTTP Basic authentication, therefore you have to provide `Consumer_key` and `Consumer_secret` as an username and password, when calling the API..<br/><br/> **Example:** 1. You will receive `Consumer_key` and `Consumer_secret` from Deutsche Post International representative in following format.<br/>   Credentials below are exemplary and can _NOT_ be used in this Sandbox environment to get the access_token.      ````     Consumer_key: 5qsFCFLzeoz4C6PKJ7yH3NDQHgBEJLt7     Consumer_secret: P6mEGGaAZ2TdkLpD     ````  2. When passing the `Consumer_key` and `Consumer_secret` via HTTPS request, using HTTP Basic authentication, you have to     populate HTTP Header Authorization in following format.     > **Note:** *`Consumer_key` and `Consumer_secret` has to be encoded in base64-encoding. There is a `space` characeter between Basic and the base64-encoded string. There is a `:` character between the Consumer_key and Consumer_secret, when encoded in base64-encoding.*      ````     Authorization: Basic base64-encoded(Consumer_key:Consumer_secret)     Authorization: Basic NXFzRkNGTHplb3o0QzZQS0o3eUgzTkRRSGdCRUpMdDc6UDZtRUdHYUFaMlRka0xwRA==     ````      > **Note:** *You can test the Get access_token API directly from the documentation page. The Authorization HTTP Header was populated for you in the Console View on the right side of the screen.*  3. You will receive following response in the JSON format.      ````       {             \"access_token\": \"8CyAkmSppbfG5KAQ4AinTZ8RVJnD\",             \"token_type\": \"Bearer\",             \"expires_in\": 17999        }     ````  Understanding of the response fields: `access_token:` Contains access_token string for the Shipping / Tracking API authentication and authorization.<br/><br/> `token_type:` Type of the OAuth 2.0 access_token. Default value is \"Bearer\".<br/><br/> `expires_in:` Time to live of the access_token. Default value is 18000 seconds / 5 hours. After this time the token expires. <br/><br/>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = Basic NXFzRkNGTHplb3o0QzZQS0o3eUgzTkRRSGdCRUpMdDc6UDZtRUdHYUFaMlRka0xwRA==; // string | HTTP Basic Authorization string (base 64 encoded)
$accept = */*; // string

try {
    $result = $apiInstance->getAccessToken($authorization, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **authorization** | **string**| HTTP Basic Authorization string (base 64 encoded) | |
| **accept** | **string**|  | |

### Return type

[**\Spy\DHLParcel\Model\GetAccessTokenResponse**](../Model/GetAccessTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccessTokenInfo()`

```php
getAccessTokenInfo($token): \Spy\DHLParcel\Model\GetAccessTokenInfoResponse
```

Get Access Token Info

The Get access_token Info API call provides an information about the issued token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | access_token string

try {
    $result = $apiInstance->getAccessTokenInfo($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->getAccessTokenInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| access_token string | [optional] |

### Return type

[**\Spy\DHLParcel\Model\GetAccessTokenInfoResponse**](../Model/GetAccessTokenInfoResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeAccessToken()`

```php
revokeAccessToken($token): \Spy\DHLParcel\Model\RevokeAccessTokenResponse
```

Revoke Access Token

The Revoke access_token API call provides you an option to revoke your access_token, which not yet expired.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Spy\DHLParcel\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | access_token string

try {
    $result = $apiInstance->revokeAccessToken($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->revokeAccessToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| access_token string | [optional] |

### Return type

[**\Spy\DHLParcel\Model\RevokeAccessTokenResponse**](../Model/RevokeAccessTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
