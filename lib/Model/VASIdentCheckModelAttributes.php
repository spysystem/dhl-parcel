<?php
/**
 * VASIdentCheckModelAttributes
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
 * VASIdentCheckModelAttributes Class Doc Comment
 *
 * @category Class
 * @description Check the identity of the recipient via name (firstname, lastname), date of birth or age. This uses firstName and lastName as separate attributes since for identity check an automatic split of a one-line name is not considered reliable enough.
 * @package  Spy\DHLParcel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VASIdentCheckModelAttributes
{
    public string $strFirstName = 'first_name';
    public string $strLastName = 'last_name';
    public string $strDateOfBirth = 'date_of_birth';
    public string $strMinimumAge = 'minimum_age';
}

