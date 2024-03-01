<?php
/**
 * ReturnItemResponseModelAttributes
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
 * ReturnItemResponseModelAttributes Class Doc Comment
 *
 * @category Class
 * @package  Spy\DHLParcel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReturnItemResponseModelAttributes
{
    public string $strCustRef = 'cust_ref';
    public string $strSenderName = 'sender_name';
    public string $strSenderEmail = 'sender_email';
    public string $strAddressLine1 = 'address_line1';
    public string $strAddressLine2 = 'address_line2';
    public string $strAddressLine3 = 'address_line3';
    public string $strCity = 'city';
    public string $strState = 'state';
    public string $strPostalCode = 'postal_code';
    public string $strDestinationCountry = 'destination_country';
    public string $strBarcode = 'barcode';
}
