<?php
/**
 * ConsigneeModelFields
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
 * ConsigneeModelFields Class Doc Comment
 *
 * @category Class
 * @description Consignee address information. Either a doorstep address (contact address) including contact information or a droppoint address. One of packstation (parcel locker), or post office (postfiliale/retail shop).
 * @package  Spy\DHLParcel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ConsigneeModelFields
{
    public string $strName1 = 'name1';
    public string $strName2 = 'name2';
    public string $strName3 = 'name3';
    public string $strDispatchingInformation = 'dispatchingInformation';
    public string $strAddressStreet = 'addressStreet';
    public string $strAddressHouse = 'addressHouse';
    public string $strAdditionalAddressInformation1 = 'additionalAddressInformation1';
    public string $strAdditionalAddressInformation2 = 'additionalAddressInformation2';
    public string $strPostalCode = 'postalCode';
    public string $strCity = 'city';
    public string $strState = 'state';
    public string $strCountry = 'country';
    public string $strContactName = 'contactName';
    public string $strPhone = 'phone';
    public string $strEmail = 'email';
    public string $strName = 'name';
    public string $strLockerId = 'lockerID';
    public string $strPostNumber = 'postNumber';
    public string $strRetailId = 'retailID';
    public string $strPoBoxId = 'poBoxID';
}

