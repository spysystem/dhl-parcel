<?php
/**
 * CustomsDetailsModelFields
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Spy\DHLParcel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Parcel DE Shipping API (Post & Parcel Germany)
 *
 * Note: This is the specification of the DPDHL Group Parcel DE Shipping API for Post & Parcel Germany. This REST web service allows business customers to create shipping labels on demand.
 *
 * The version of the OpenAPI document: 2.1.9
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Spy\DHLParcel\Model;

/**
 * CustomsDetailsModelFields Class Doc Comment
 *
 * @category Class
 * @description For international shipments, this section contains information necessary for customs about the exported goods. ExportDocument can contain one or more positions as child element. This data is also transferred as electronic declaration to customs. The custom details are mandatory depending on whether the parcel will go to a country outside the European Customs Union. For DHL Parcel International (V53WPAK) CN23 will returned as a separate document, while for Warenpost International the customs information will be printed onto the shipment label (CN22).
 * @package  Spy\DHLParcel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomsDetailsModelFields
{
    public string $strInvoiceNo = 'invoiceNo';
    public string $strExportType = 'exportType';
    public string $strExportDescription = 'exportDescription';
    public string $strShippingConditions = 'shippingConditions';
    public string $strPermitNo = 'permitNo';
    public string $strAttestationNo = 'attestationNo';
    public string $strHasElectronicExportNotification = 'hasElectronicExportNotification';
    public string $strMrn = 'MRN';
    public string $strPostalCharges = 'postalCharges';
    public string $strOfficeOfOrigin = 'officeOfOrigin';
    public string $strShipperCustomsRef = 'shipperCustomsRef';
    public string $strConsigneeCustomsRef = 'consigneeCustomsRef';
    public string $strItems = 'items';
}

