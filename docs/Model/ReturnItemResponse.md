# # ReturnItemResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cust_ref** | **string** | Reference to the customer. | [optional]
**sender_name** | **string** | Name of the sender. |
**sender_email** | **string** | Email address of the sender. Used for notification. | [optional]
**address_line1** | **string** | First line of address information of the recipient. |
**address_line2** | **string** | Second line of address information of the recipient. | [optional]
**address_line3** | **string** | Third line of address information of the recipient. | [optional]
**city** | **string** | City of the recipient address. |
**state** | **string** | State of the recipient address. | [optional]
**postal_code** | **string** | Postal code of the recipient address. | [optional]
**destination_country** | **string** | Destination country of the item, based on ISO-3166-1. Please check https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further details. |
**barcode** | **string** | The barcode of this return item. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
