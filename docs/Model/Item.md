# # Item

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_line1** | **string** | First line of address information of the recipient. |
**address_line2** | **string** | Second line of address information of the recipient. | [optional]
**address_line3** | **string** | Third line of address information of the recipient. | [optional]
**barcode** | **string** | The barcode of this item (if available). | [optional] [readonly]
**city** | **string** | City of the recipient address. |
**contents** | [**\Spy\DHLParcel\Model\Content[]**](Content.md) | The descriptions of the content pieces. | [optional]
**cust_ref** | **string** | Reference to the customer. | [optional]
**cust_ref2** | **string** | NOT RECOMMENDED, obsolete and should not be contained in requests until further notice. | [optional]
**cust_ref3** | **string** | NOT RECOMMENDED, obsolete and should not be contained in requests until further notice. | [optional]
**destination_country** | **string** | Destination country of the item, based on ISO-3166-1. Please check https://en.wikipedia.org/wiki/ISO_3166-1_alpha-2 for further details. |
**id** | **int** | The id of the item | [optional] [readonly]
**postal_code** | **string** | Postal code of the recipient address. Consists of numbers, upper case letters, and one space or dash between characters | [optional]
**product** | **string** | The product that is used for the shipment of this item. Available products are: GPP (Packet Plus), GMP (Packet), GMM (Business Mail Standard), GMR (Business Mail Registered), GPT (Packet Tracked). |
**importer_tax_id** | **string** | Customs reference number of the recipient, if required and applicable e.g. EORI number. | [optional]
**recipient** | **string** | Name of the recipient. |
**recipient_email** | **string** | Email address of the recipient. Used for notification. | [optional]
**recipient_fax** | **string** | Fax number of the recipient | [optional]
**recipient_phone** | **string** | Phone number of the recipient | [optional]
**return_item_wanted** | **bool** | Is Packet Return. | [optional] [default to false]
**p_ddp** | **bool** | Is Item pddp? FOR FUTURE USE. Not yet relvant | [optional] [default to false]
**sender_address_line1** | **string** | NOT RECOMMENDED, obsolete and should not be contained in requests until further notice. | [optional]
**sender_address_line2** | **string** | NOT RECOMMENDED, obsolete and should not be contained in requests until further notice. | [optional]
**sender_city** | **string** | NOT RECOMMENDED, obsolete and should not be contained in requests until further notice. | [optional]
**sender_country** | **string** | NOT RECOMMENDED, obsolete and should not be contained in requests until further notice. | [optional]
**sender_email** | **string** | NOT RECOMMENDED, obsolete and should not be contained in requests until further notice. | [optional]
**sender_name** | **string** | NOT RECOMMENDED, obsolete and should not be contained in requests until further notice. | [optional]
**sender_phone** | **string** | NOT RECOMMENDED, obsolete and should not be contained in requests until further notice. | [optional]
**sender_postal_code** | **string** | NOT RECOMMENDED, obsolete and should not be contained in requests until further notice. | [optional]
**sender_tax_id** | **string** | Customs reference number of the sender, if applicable e.g. IOSS or VOEC number. | [optional]
**service_level** | **string** | The service level that is used for the shipment of this item. There are restrictions for use of service level: REGISTERED is only available with product GMR and SalesChannel DPI, STANDARD is only available with products GMM and GMP, PRIORITY is available with all products. |
**shipment_amount** | **float** | Overall value of all content pieces of the item. | [optional]
**shipment_currency** | **string** | Currency code of the value, based on ISO-4217. Please check https://en.wikipedia.org/wiki/ISO_4217#Active_codes for further details. | [optional]
**shipment_gross_weight** | **int** | Gross weight of the item (in g). May not exceed 2000 g. |
**shipment_naturetype** | **string** | Nature of the pieces in this item. Mandatory for non-EU shipments: SALE_GOODS, RETURN_GOODS, COMMERCIAL_SAMPLE, DOCUMENTS, MIXED_CONTENTS, OTHERS. Mandatory for non-EU shipments. GIFT is DEPRECATED and will be removed in 04/2024. | [optional]
**state** | **string** | State of the recipient address. | [optional]
**third_party_vendor_id** | **string** | The ID of the 3PV/Third Party Vendor who created this item. | [optional]
**format** | **string** | The format. Weight limits are P: 100g, G: 500g, E: 2000g | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
