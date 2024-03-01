# # Order

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer_ekp** | **string** | Deutsche Post Customer Account number (EKP) of the customer who wants to create an order. |
**order_id** | **int** | ID of the Order. |
**items** | [**\Spy\DHLParcel\Model\Item[]**](Item.md) | The items associated with this order. | [optional]
**order_status** | **string** | The status of the order. It indicates if an order shall be held open to add more items at a later point in time. \&quot;OPEN\&quot; means items can be added later, \&quot;FINALIZE\&quot; means that the order shall be processed immediately. |
**paperwork** | [**\Spy\DHLParcel\Model\Paperwork**](Paperwork.md) |  |
**shipments** | [**\Spy\DHLParcel\Model\Shipment[]**](Shipment.md) | Array of shipments. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
