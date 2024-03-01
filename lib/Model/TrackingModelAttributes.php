<?php
/**
 * TrackingModelAttributes
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Spy\DHLParcel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Deutsche Post International Shipping API - QA
 *
 * Welcome to the Deutsche Post International API! <br/><br/> This API provides an interface for our shipping and tracking services. It enables open integration channels for our customers and partners.
 *
 * The version of the OpenAPI document: 5.7.7
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Spy\DHLParcel\Model;

/**
 * TrackingModelAttributes Class Doc Comment
 *
 * @category Class
 * @description Version 1
 * @package  Spy\DHLParcel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class TrackingModelAttributes
{
    public string $strAwb = 'awb';
    public string $strBarcode = 'barcode';
    public string $strEvents = 'events';
    public string $strFromCity = 'from_city';
    public string $strFromCountry = 'from_country';
    public string $strFromName = 'from_name';
    public string $strFromZip = 'from_zip';
    public string $strPublicUrl = 'public_url';
    public string $strToCity = 'to_city';
    public string $strToCountry = 'to_country';
    public string $strToName = 'to_name';
    public string $strToZip = 'to_zip';
}

