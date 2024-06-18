<?php
/**
 * ContactAddressModelAttributes
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
 * ContactAddressModelAttributes Class Doc Comment
 *
 * @category Class
 * @description Combines name, address, contact information. The recommended way is to use the mandatory attribute addressStreet and submit the streetname and housenumber together â€“ alternatively addressHouse + addressStreet can be used. For many international addresses there is no house number, please do not set a period or any other sign to indicate that the address does not have a housenumber.
 * @package  Spy\DHLParcel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContactAddressModelAttributes
{
    public string $strName1 = 'name1';
    public string $strName2 = 'name2';
    public string $strName3 = 'name3';
    public string $strDispatchingInformation = 'dispatching_information';
    public string $strAddressStreet = 'address_street';
    public string $strAddressHouse = 'address_house';
    public string $strAdditionalAddressInformation1 = 'additional_address_information1';
    public string $strAdditionalAddressInformation2 = 'additional_address_information2';
    public string $strPostalCode = 'postal_code';
    public string $strCity = 'city';
    public string $strState = 'state';
    public string $strCountry = 'country';
    public string $strContactName = 'contact_name';
    public string $strPhone = 'phone';
    public string $strEmail = 'email';
}
