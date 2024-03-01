# # Awb

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**awb_copy_count** | **int** | Copies of AWB labels. One AWB per final receptacle required. Number between 1 and 99. |
**contact_name** | **string** | Contact name for paperwork. |
**customer_ekp** | **string** | Deutsche Post Customer Account number (EKP) of the customer who wants to create an single awb. |
**item_format** | **string** | The item format for this awb. |
**job_reference** | **string** | Job reference for the whole shipment. | [optional]
**product** | **string** | The product that is used for the shipment of this item. The concrete product is defined by a combination of product and serviceLevel. Available products are: GMM (Business Mail), GMR (Business Mail Registered), GMP (Packet), GPT (Packet Tracked), GPP (Packet Plus). |
**service_level** | **string** | The service level that is used for the shipment of this item. There are restrictions for use of service level: Registered is only available with product GMR and SalesChannel DPI, STANDARD is only available with products GMM and GMP, PRIORITY is only available with products GPT, GPP and GMP. |
**telephone_number** | **string** | Telephone number for paperwork. Mandatory for sales channel EXPRESS. | [optional]
**total_weight** | **float** | Total weight of the awb (in kg). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
