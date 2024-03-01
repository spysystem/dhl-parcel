# # BulkOrderDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**contact_name** | **string** |  | [optional]
**phone_number** | **string** |  | [optional]
**job_reference** | **string** |  | [optional]
**product_type** | **string** |  | [optional]
**bulk_order_type** | **string** |  | [optional]
**awb** | **string** |  | [optional]
**bulk_bags** | [**\Spy\DHLParcel\Model\BulkBagDto[]**](BulkBagDto.md) |  | [optional]
**status** | **string** |  | [optional]
**validation_errors** | **bool** |  | [optional] [default to false]
**error_message** | **string** |  | [optional]
**number_of_copies** | **int** |  | [optional]
**download_token** | **string** |  | [optional]
**printable** | **bool** |  | [optional]
**order_classification** | **string** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**created_by** | **string** |  | [optional]
**auth_user** | **string** |  | [optional]
**send_date** | **\DateTime** |  | [optional]
**submitted_date** | **\DateTime** |  | [optional]
**preadvice_eligible** | **bool** |  | [optional]
**finalised** | **bool** |  | [optional]
**total_item_weight_sum** | **float** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
