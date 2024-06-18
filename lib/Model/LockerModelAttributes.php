<?php
/**
 * LockerModelAttributes
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
 * LockerModelAttributes Class Doc Comment
 *
 * @category Class
 * @description Only usable for German Packstation, international lockers cannot be addressed directly. If your customer wishes for international delivery to a droppoint, please use DHL Parcel International (V53WPAK) with the delivery type \&quot;Closest Droppoint\&quot;.
 * @package  Spy\DHLParcel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LockerModelAttributes
{
    public string $strName = 'name';
    public string $strLockerId = 'locker_id';
    public string $strPostNumber = 'post_number';
    public string $strCity = 'city';
    public string $strCountry = 'country';
    public string $strPostalCode = 'postal_code';
}

