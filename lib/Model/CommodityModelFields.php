<?php
/**
 * CommodityModelFields
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
 * CommodityModelFields Class Doc Comment
 *
 * @category Class
 * @description Commodity line item (e.g. a t-shirt) for international shipments which require individual listing of goods. Each good must contain a description of the item, the amount of the item, the net weight of one single item and the value of one single item. If you ship 5 t-shirts, you need to include the weight and value of one single shirt. The correct final weight and value will be calculated automatically. The HS Code and the country of origin are optional.
 * @package  Spy\DHLParcel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CommodityModelFields
{
    public string $strItemDescription = 'itemDescription';
    public string $strCountryOfOrigin = 'countryOfOrigin';
    public string $strHsCode = 'hsCode';
    public string $strPackagedQuantity = 'packagedQuantity';
    public string $strItemValue = 'itemValue';
    public string $strItemWeight = 'itemWeight';
}
