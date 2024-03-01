# # MixedBagOrderDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **int** |  | [optional]
**customer_ekp** | **string** |  | [optional]
**awb_id** | **string** | Either the AWB is generated, or sent by the customer. | [optional]
**format** | **string** | The format of package. Everytime MIXED. | [optional]
**contact_name** | **string** | Contact name for paperwork. |
**telephone_number** | **string** | Telephone number for paperwork. Mandatory for sales channel EXPRESS. | [optional]
**job_reference** | **string** | Job reference for the whole shipment. | [optional]
**product** | **string** | Product code. |
**service_level** | **string** | The service level of the order, either STANDARD or PRIORITY |
**items_count** | **int** | Number of items in bag. Minimum 1. |
**items_weight_in_kilogram** | **float** | The weight in kilogram of the bag. |
**total_count_receptacles** | **int** | Number of airway bills. |
**auth_user** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
