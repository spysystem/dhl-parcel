<?php
/**
 * ShipperModelAttributes
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
 * ShipperModelAttributes Class Doc Comment
 *
 * @category Class
 * @description Shipper information, including contact information and address.
 * @package  Spy\DHLParcel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipperModelAttributes
{
    public string $strName1 = 'name1';
    public string $strName2 = 'name2';
    public string $strName3 = 'name3';
    public string $strAddressStreet = 'address_street';
    public string $strAddressHouse = 'address_house';
    public string $strPostalCode = 'postal_code';
    public string $strCity = 'city';
    public string $strCountry = 'country';
    public string $strContactName = 'contact_name';
    public string $strEmail = 'email';
}

