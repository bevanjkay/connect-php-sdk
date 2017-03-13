# SquareConnect\CustomerCardApi

All URIs are relative to *https://connect.squareup.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createCustomerCard**](CustomerCardApi.md#createCustomerCard) | **POST** /v2/customers/{customer_id}/cards | CreateCustomerCard
[**deleteCustomerCard**](CustomerCardApi.md#deleteCustomerCard) | **DELETE** /v2/customers/{customer_id}/cards/{card_id} | DeleteCustomerCard


# **createCustomerCard**
> \SquareConnect\Model\CreateCustomerCardResponse createCustomerCard($authorization, $customer_id, $body)

CreateCustomerCard

Adds a card on file to an existing customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SquareConnect\Api\CustomerCardApi();
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of your request. This value should follow the format `Bearer YOUR_ACCESS_TOKEN_HERE`.
$customer_id = "customer_id_example"; // string | The ID of the customer to link the card on file to.
$body = new \SquareConnect\Model\CreateCustomerCardRequest(); // \SquareConnect\Model\CreateCustomerCardRequest | An object containing the fields to POST for the request.  See the corresponding object definition for field details.

try {
    $result = $api_instance->createCustomerCard($authorization, $customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCardApi->createCustomerCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| The value to provide in the Authorization header of your request. This value should follow the format &#x60;Bearer YOUR_ACCESS_TOKEN_HERE&#x60;. |
 **customer_id** | **string**| The ID of the customer to link the card on file to. |
 **body** | [**\SquareConnect\Model\CreateCustomerCardRequest**](../Model/\SquareConnect\Model\CreateCustomerCardRequest.md)| An object containing the fields to POST for the request.  See the corresponding object definition for field details. |

### Return type

[**\SquareConnect\Model\CreateCustomerCardResponse**](../Model/CreateCustomerCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomerCard**
> \SquareConnect\Model\DeleteCustomerCardResponse deleteCustomerCard($authorization, $customer_id, $card_id)

DeleteCustomerCard

Removes a card on file from a customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new SquareConnect\Api\CustomerCardApi();
$authorization = "authorization_example"; // string | The value to provide in the Authorization header of your request. This value should follow the format `Bearer YOUR_ACCESS_TOKEN_HERE`.
$customer_id = "customer_id_example"; // string | The ID of the customer that the card on file belongs to.
$card_id = "card_id_example"; // string | The ID of the card on file to delete.

try {
    $result = $api_instance->deleteCustomerCard($authorization, $customer_id, $card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerCardApi->deleteCustomerCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| The value to provide in the Authorization header of your request. This value should follow the format &#x60;Bearer YOUR_ACCESS_TOKEN_HERE&#x60;. |
 **customer_id** | **string**| The ID of the customer that the card on file belongs to. |
 **card_id** | **string**| The ID of the card on file to delete. |

### Return type

[**\SquareConnect\Model\DeleteCustomerCardResponse**](../Model/DeleteCustomerCardResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
