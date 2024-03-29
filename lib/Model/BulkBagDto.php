<?php
/**
 * BulkBagDto
 *
 * PHP version 7.4
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

use \ArrayAccess;
use \Spy\DHLParcel\ObjectSerializer;

/**
 * BulkBagDto Class Doc Comment
 *
 * @category Class
 * @package  Spy\DHLParcel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BulkBagDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return BulkBagDtoModelFields
      */
    public static function GetModelFields(): BulkBagDtoModelFields
    {
        return new BulkBagDtoModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return BulkBagDtoModelAttributes
      */
    public static function GetModelAttributes(): BulkBagDtoModelAttributes
    {
        return new BulkBagDtoModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BulkBagDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'country_code' => 'string',
        'customer_bag_id' => 'string',
        'packet_format' => 'string',
        'item_count' => 'int',
        'total_weight' => 'float',
        'validation_errors' => 'array<string,string>',
        'customer_reference' => 'string',
        'shipment_type' => 'string',
        'bag_tracking' => 'bool',
        'auth_user' => 'string',
        'printed' => 'bool',
        'ui_row_selected' => 'bool',
        'number' => 'int',
        'items' => '\Spy\DHLParcel\Model\BagItemDto[]',
        'linked_item_count' => 'int',
        'weight_per_item' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'country_code' => null,
        'customer_bag_id' => null,
        'packet_format' => null,
        'item_count' => 'int32',
        'total_weight' => null,
        'validation_errors' => null,
        'customer_reference' => null,
        'shipment_type' => null,
        'bag_tracking' => null,
        'auth_user' => null,
        'printed' => null,
        'ui_row_selected' => null,
        'number' => 'int32',
        'items' => null,
        'linked_item_count' => 'int32',
        'weight_per_item' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'country_code' => false,
		'customer_bag_id' => false,
		'packet_format' => false,
		'item_count' => false,
		'total_weight' => false,
		'validation_errors' => false,
		'customer_reference' => false,
		'shipment_type' => false,
		'bag_tracking' => false,
		'auth_user' => false,
		'printed' => false,
		'ui_row_selected' => false,
		'number' => false,
		'items' => false,
		'linked_item_count' => false,
		'weight_per_item' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'country_code' => 'countryCode',
        'customer_bag_id' => 'customerBagId',
        'packet_format' => 'packetFormat',
        'item_count' => 'itemCount',
        'total_weight' => 'totalWeight',
        'validation_errors' => 'validationErrors',
        'customer_reference' => 'customerReference',
        'shipment_type' => 'shipmentType',
        'bag_tracking' => 'bagTracking',
        'auth_user' => 'authUser',
        'printed' => 'printed',
        'ui_row_selected' => 'uiRowSelected',
        'number' => 'number',
        'items' => 'items',
        'linked_item_count' => 'linkedItemCount',
        'weight_per_item' => 'weightPerItem'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'country_code' => 'setCountryCode',
        'customer_bag_id' => 'setCustomerBagId',
        'packet_format' => 'setPacketFormat',
        'item_count' => 'setItemCount',
        'total_weight' => 'setTotalWeight',
        'validation_errors' => 'setValidationErrors',
        'customer_reference' => 'setCustomerReference',
        'shipment_type' => 'setShipmentType',
        'bag_tracking' => 'setBagTracking',
        'auth_user' => 'setAuthUser',
        'printed' => 'setPrinted',
        'ui_row_selected' => 'setUiRowSelected',
        'number' => 'setNumber',
        'items' => 'setItems',
        'linked_item_count' => 'setLinkedItemCount',
        'weight_per_item' => 'setWeightPerItem'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'country_code' => 'getCountryCode',
        'customer_bag_id' => 'getCustomerBagId',
        'packet_format' => 'getPacketFormat',
        'item_count' => 'getItemCount',
        'total_weight' => 'getTotalWeight',
        'validation_errors' => 'getValidationErrors',
        'customer_reference' => 'getCustomerReference',
        'shipment_type' => 'getShipmentType',
        'bag_tracking' => 'getBagTracking',
        'auth_user' => 'getAuthUser',
        'printed' => 'getPrinted',
        'ui_row_selected' => 'getUiRowSelected',
        'number' => 'getNumber',
        'items' => 'getItems',
        'linked_item_count' => 'getLinkedItemCount',
        'weight_per_item' => 'getWeightPerItem'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const PACKET_FORMAT_P = 'P';
    public const PACKET_FORMAT_G = 'G';
    public const PACKET_FORMAT_E = 'E';
    public const PACKET_FORMAT_MIXED = 'MIXED';
    public const PACKET_FORMAT_P_BAG = 'P_BAG';
    public const PACKET_FORMAT_G_BAG = 'G_BAG';
    public const PACKET_FORMAT_E_BAG = 'E_BAG';
    public const PACKET_FORMAT_P_PALLET = 'P_PALLET';
    public const PACKET_FORMAT_G_PALLET = 'G_PALLET';
    public const PACKET_FORMAT_E_PALLET = 'E_PALLET';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPacketFormatAllowableValues()
    {
        return [
            self::PACKET_FORMAT_P,
            self::PACKET_FORMAT_G,
            self::PACKET_FORMAT_E,
            self::PACKET_FORMAT_MIXED,
            self::PACKET_FORMAT_P_BAG,
            self::PACKET_FORMAT_G_BAG,
            self::PACKET_FORMAT_E_BAG,
            self::PACKET_FORMAT_P_PALLET,
            self::PACKET_FORMAT_G_PALLET,
            self::PACKET_FORMAT_E_PALLET,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('country_code', $data ?? [], null);
        $this->setIfExists('customer_bag_id', $data ?? [], null);
        $this->setIfExists('packet_format', $data ?? [], null);
        $this->setIfExists('item_count', $data ?? [], null);
        $this->setIfExists('total_weight', $data ?? [], null);
        $this->setIfExists('validation_errors', $data ?? [], null);
        $this->setIfExists('customer_reference', $data ?? [], null);
        $this->setIfExists('shipment_type', $data ?? [], null);
        $this->setIfExists('bag_tracking', $data ?? [], null);
        $this->setIfExists('auth_user', $data ?? [], null);
        $this->setIfExists('printed', $data ?? [], null);
        $this->setIfExists('ui_row_selected', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('linked_item_count', $data ?? [], null);
        $this->setIfExists('weight_per_item', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPacketFormatAllowableValues();
        if (!is_null($this->container['packet_format']) && !in_array($this->container['packet_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'packet_format', must be one of '%s'",
                $this->container['packet_format'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code country_code
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {
        if (is_null($country_code)) {
            throw new \InvalidArgumentException('non-nullable country_code cannot be null');
        }
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets customer_bag_id
     *
     * @return string|null
     */
    public function getCustomerBagId()
    {
        return $this->container['customer_bag_id'];
    }

    /**
     * Sets customer_bag_id
     *
     * @param string|null $customer_bag_id customer_bag_id
     *
     * @return self
     */
    public function setCustomerBagId($customer_bag_id)
    {
        if (is_null($customer_bag_id)) {
            throw new \InvalidArgumentException('non-nullable customer_bag_id cannot be null');
        }
        $this->container['customer_bag_id'] = $customer_bag_id;

        return $this;
    }

    /**
     * Gets packet_format
     *
     * @return string|null
     */
    public function getPacketFormat()
    {
        return $this->container['packet_format'];
    }

    /**
     * Sets packet_format
     *
     * @param string|null $packet_format packet_format
     *
     * @return self
     */
    public function setPacketFormat($packet_format)
    {
        if (is_null($packet_format)) {
            throw new \InvalidArgumentException('non-nullable packet_format cannot be null');
        }
        $allowedValues = $this->getPacketFormatAllowableValues();
        if (!in_array($packet_format, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'packet_format', must be one of '%s'",
                    $packet_format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['packet_format'] = $packet_format;

        return $this;
    }

    /**
     * Gets item_count
     *
     * @return int|null
     */
    public function getItemCount()
    {
        return $this->container['item_count'];
    }

    /**
     * Sets item_count
     *
     * @param int|null $item_count item_count
     *
     * @return self
     */
    public function setItemCount($item_count)
    {
        if (is_null($item_count)) {
            throw new \InvalidArgumentException('non-nullable item_count cannot be null');
        }
        $this->container['item_count'] = $item_count;

        return $this;
    }

    /**
     * Gets total_weight
     *
     * @return float|null
     */
    public function getTotalWeight()
    {
        return $this->container['total_weight'];
    }

    /**
     * Sets total_weight
     *
     * @param float|null $total_weight total_weight
     *
     * @return self
     */
    public function setTotalWeight($total_weight)
    {
        if (is_null($total_weight)) {
            throw new \InvalidArgumentException('non-nullable total_weight cannot be null');
        }
        $this->container['total_weight'] = $total_weight;

        return $this;
    }

    /**
     * Gets validation_errors
     *
     * @return array<string,string>|null
     */
    public function getValidationErrors()
    {
        return $this->container['validation_errors'];
    }

    /**
     * Sets validation_errors
     *
     * @param array<string,string>|null $validation_errors validation_errors
     *
     * @return self
     */
    public function setValidationErrors($validation_errors)
    {
        if (is_null($validation_errors)) {
            throw new \InvalidArgumentException('non-nullable validation_errors cannot be null');
        }
        $this->container['validation_errors'] = $validation_errors;

        return $this;
    }

    /**
     * Gets customer_reference
     *
     * @return string|null
     */
    public function getCustomerReference()
    {
        return $this->container['customer_reference'];
    }

    /**
     * Sets customer_reference
     *
     * @param string|null $customer_reference customer_reference
     *
     * @return self
     */
    public function setCustomerReference($customer_reference)
    {
        if (is_null($customer_reference)) {
            throw new \InvalidArgumentException('non-nullable customer_reference cannot be null');
        }
        $this->container['customer_reference'] = $customer_reference;

        return $this;
    }

    /**
     * Gets shipment_type
     *
     * @return string|null
     */
    public function getShipmentType()
    {
        return $this->container['shipment_type'];
    }

    /**
     * Sets shipment_type
     *
     * @param string|null $shipment_type shipment_type
     *
     * @return self
     */
    public function setShipmentType($shipment_type)
    {
        if (is_null($shipment_type)) {
            throw new \InvalidArgumentException('non-nullable shipment_type cannot be null');
        }
        $this->container['shipment_type'] = $shipment_type;

        return $this;
    }

    /**
     * Gets bag_tracking
     *
     * @return bool|null
     */
    public function getBagTracking()
    {
        return $this->container['bag_tracking'];
    }

    /**
     * Sets bag_tracking
     *
     * @param bool|null $bag_tracking bag_tracking
     *
     * @return self
     */
    public function setBagTracking($bag_tracking)
    {
        if (is_null($bag_tracking)) {
            throw new \InvalidArgumentException('non-nullable bag_tracking cannot be null');
        }
        $this->container['bag_tracking'] = $bag_tracking;

        return $this;
    }

    /**
     * Gets auth_user
     *
     * @return string|null
     */
    public function getAuthUser()
    {
        return $this->container['auth_user'];
    }

    /**
     * Sets auth_user
     *
     * @param string|null $auth_user auth_user
     *
     * @return self
     */
    public function setAuthUser($auth_user)
    {
        if (is_null($auth_user)) {
            throw new \InvalidArgumentException('non-nullable auth_user cannot be null');
        }
        $this->container['auth_user'] = $auth_user;

        return $this;
    }

    /**
     * Gets printed
     *
     * @return bool|null
     */
    public function getPrinted()
    {
        return $this->container['printed'];
    }

    /**
     * Sets printed
     *
     * @param bool|null $printed printed
     *
     * @return self
     */
    public function setPrinted($printed)
    {
        if (is_null($printed)) {
            throw new \InvalidArgumentException('non-nullable printed cannot be null');
        }
        $this->container['printed'] = $printed;

        return $this;
    }

    /**
     * Gets ui_row_selected
     *
     * @return bool|null
     */
    public function getUiRowSelected()
    {
        return $this->container['ui_row_selected'];
    }

    /**
     * Sets ui_row_selected
     *
     * @param bool|null $ui_row_selected ui_row_selected
     *
     * @return self
     */
    public function setUiRowSelected($ui_row_selected)
    {
        if (is_null($ui_row_selected)) {
            throw new \InvalidArgumentException('non-nullable ui_row_selected cannot be null');
        }
        $this->container['ui_row_selected'] = $ui_row_selected;

        return $this;
    }

    /**
     * Gets number
     *
     * @return int|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int|null $number number
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Spy\DHLParcel\Model\BagItemDto[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Spy\DHLParcel\Model\BagItemDto[]|null $items items
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets linked_item_count
     *
     * @return int|null
     */
    public function getLinkedItemCount()
    {
        return $this->container['linked_item_count'];
    }

    /**
     * Sets linked_item_count
     *
     * @param int|null $linked_item_count linked_item_count
     *
     * @return self
     */
    public function setLinkedItemCount($linked_item_count)
    {
        if (is_null($linked_item_count)) {
            throw new \InvalidArgumentException('non-nullable linked_item_count cannot be null');
        }
        $this->container['linked_item_count'] = $linked_item_count;

        return $this;
    }

    /**
     * Gets weight_per_item
     *
     * @return float|null
     */
    public function getWeightPerItem()
    {
        return $this->container['weight_per_item'];
    }

    /**
     * Sets weight_per_item
     *
     * @param float|null $weight_per_item weight_per_item
     *
     * @return self
     */
    public function setWeightPerItem($weight_per_item)
    {
        if (is_null($weight_per_item)) {
            throw new \InvalidArgumentException('non-nullable weight_per_item cannot be null');
        }
        $this->container['weight_per_item'] = $weight_per_item;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return (string)json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


