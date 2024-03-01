# # BagItemDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**barcode** | **string** |  | [optional]
**customer_ekp** | **string** |  | [optional]
**awb** | **string** |  | [optional]
**destination_country** | [**\Spy\DHLParcel\Model\Country**](Country.md) |  | [optional]
**destination_email** | **string** |  | [optional]
**destination_phone** | **string** |  | [optional]
**destination_phone2** | **string** |  | [optional]
**format** | **string** |  | [optional]
**item_weight** | **int** |  | [optional]
**bag_id** | **string** | In requests only applicable for customers using \&quot;prelabelled service\&quot; | [optional]
**product_type** | **string** |  | [optional]
**product** | **string** |  | [optional]
**service_level** | **string** |  | [optional]
**name** | **string** |  | [optional]
**customer_reference** | **string** |  | [optional]
**recipient_phone** | **string** |  | [optional]
**recipient_email** | **string** |  | [optional]
**address_line1** | **string** |  | [optional]
**address_line2** | **string** |  | [optional]
**address_line3** | **string** |  | [optional]
**city** | **string** |  | [optional]
**destination_state** | **string** |  | [optional]
**postal_code** | **string** |  | [optional]
**currency** | **string** |  | [optional]
**content_type** | **string** |  | [optional]
**declared_content_amount** | **int** |  | [optional]
**detailed_content_descriptions1** | **string** |  | [optional]
**total_value** | **int** |  | [optional]
**return_label** | **bool** |  | [optional]
**sender_customs_reference** | **string** |  | [optional]
**importer_customs_reference** | **string** |  | [optional]
**checked** | **bool** |  | [optional]
**bag_item_contents** | [**\Spy\DHLParcel\Model\BagItemContentDto[]**](BagItemContentDto.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
