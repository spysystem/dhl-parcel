# # CustomsDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_no** | **string** | Invoice number | [optional]
**export_type** | **string** | This contains the category of goods contained in parcel. |
**export_description** | **string** | Mandatory if exporttype is &#39;OTHER&#39; | [optional]
**shipping_conditions** | **string** | Aka &#39;Terms of Trade&#39; aka &#39;Frankatur&#39;. The attribute is exclusively used for the product Europaket (V54EPAK). DDU is deprecated (use DAP instead). | [optional]
**permit_no** | **string** | Permit number. Very rarely needed. Mostly relevant for higher value goods. An example use case would be an item made from crocodile leather which requires dedicated license / permit identified by that number. | [optional]
**attestation_no** | **string** | Attest or certification identified by this number. Very rarely needed. An example use case would be a medical shipment referring to an attestation that a certain amount of medicine may be imported within e.g. the current quarter of the year. | [optional]
**has_electronic_export_notification** | **bool** | flag confirming whether electronic record for export was made | [optional]
**mrn** | **string** |  | [optional]
**postal_charges** | [**\Spy\DHLParcel\Model\Value**](Value.md) |  |
**office_of_origin** | **string** | Optional. Will appear on CN23. | [optional]
**shipper_customs_ref** | **string** | Optional. The customs reference is used by customs authorities to identify economics operators an/or other persons involved. With the given reference, granted authorizations and/or relevant processes in customs clearance an/or taxation can be taken into account. Aka Zoll-Nummer or EORI-Number but dependent on destination. | [optional]
**consignee_customs_ref** | **string** | Optional. The customs reference is used by customs authorities to identify economics operators an/or other persons involved. With the given reference, granted authorizations and/or relevant processes in customs clearance an/or taxation can be taken into account. Aka Zoll-Nummer or EORI-Number but dependent on destination. | [optional]
**items** | [**\Spy\DHLParcel\Model\Commodity[]**](Commodity.md) | Commodity types in that package |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
