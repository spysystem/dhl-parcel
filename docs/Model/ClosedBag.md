# # ClosedBag

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product** | **string** | The product that is used for the shipment of this item. Available products are: GMP (Packet), GMM (Business Mail Standard). |
**format** | **string** | The format of the content of this bag. |
**service_level** | **string** | The service level that is used for the shipment of this item. There are restrictions for use of service level: STANDARD is only available with products GMM and GMP, PRIORITY is only available with products GMM and GMP. |
**destination_country** | **string** | The destination country code. |
**bag_id** | **string** | The BagId to track the bag. In requests only applicable for customers using \&quot;prelabelled service\&quot; | [optional]
**item_barcodes** | **string[]** | The barcodes of the already created items. |
**item_count** | **int** | The number of items. This value is only for the response. | [optional]
**net_bulk_weight_in_kilogram** | **float** | The weight of items. This value is only for the response. | [optional]
**customer_ekp** | **string** | The customer ekp. This value is only for the response. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
