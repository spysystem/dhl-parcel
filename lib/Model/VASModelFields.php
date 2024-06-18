<?php
/**
 * VASModelFields
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
 * VASModelFields Class Doc Comment
 *
 * @category Class
 * @description Value added services. Please note that services are specific to products and geographies and/or may require individual setup and billing numbers. Please test and contact your account representative in case of questions.
 * @package  Spy\DHLParcel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class VASModelFields
{
    public string $strPreferredNeighbour = 'preferredNeighbour';
    public string $strPreferredLocation = 'preferredLocation';
    public string $strVisualCheckOfAge = 'visualCheckOfAge';
    public string $strNamedPersonOnly = 'namedPersonOnly';
    public string $strIdentCheck = 'identCheck';
    public string $strSignedForByRecipient = 'signedForByRecipient';
    public string $strEndorsement = 'endorsement';
    public string $strPreferredDay = 'preferredDay';
    public string $strNoNeighbourDelivery = 'noNeighbourDelivery';
    public string $strAdditionalInsurance = 'additionalInsurance';
    public string $strBulkyGoods = 'bulkyGoods';
    public string $strCashOnDelivery = 'cashOnDelivery';
    public string $strIndividualSenderRequirement = 'individualSenderRequirement';
    public string $strPremium = 'premium';
    public string $strClosestDropPoint = 'closestDropPoint';
    public string $strParcelOutletRouting = 'parcelOutletRouting';
    public string $strDhlRetoure = 'dhlRetoure';
    public string $strPostalDeliveryDutyPaid = 'postalDeliveryDutyPaid';
}

