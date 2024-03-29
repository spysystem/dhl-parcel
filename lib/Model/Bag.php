<?php
/**
 * Bag
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
 * Bag Class Doc Comment
 *
 * @category Class
 * @package  Spy\DHLParcel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Bag implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return BagModelFields
      */
    public static function GetModelFields(): BagModelFields
    {
        return new BagModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return BagModelAttributes
      */
    public static function GetModelAttributes(): BagModelAttributes
    {
        return new BagModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Bag';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'bag_track' => 'bool',
        'format' => 'string',
        'destination_country' => 'string',
        'items_count' => 'int',
        'items_weight_in_kilogram' => 'float',
        'customer_reference' => 'string'
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
        'bag_track' => null,
        'format' => null,
        'destination_country' => null,
        'items_count' => 'int32',
        'items_weight_in_kilogram' => null,
        'customer_reference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'bag_track' => false,
		'format' => false,
		'destination_country' => false,
		'items_count' => false,
		'items_weight_in_kilogram' => false,
		'customer_reference' => false
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
        'bag_track' => 'bagTrack',
        'format' => 'format',
        'destination_country' => 'destinationCountry',
        'items_count' => 'itemsCount',
        'items_weight_in_kilogram' => 'itemsWeightInKilogram',
        'customer_reference' => 'customerReference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'bag_track' => 'setBagTrack',
        'format' => 'setFormat',
        'destination_country' => 'setDestinationCountry',
        'items_count' => 'setItemsCount',
        'items_weight_in_kilogram' => 'setItemsWeightInKilogram',
        'customer_reference' => 'setCustomerReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'bag_track' => 'getBagTrack',
        'format' => 'getFormat',
        'destination_country' => 'getDestinationCountry',
        'items_count' => 'getItemsCount',
        'items_weight_in_kilogram' => 'getItemsWeightInKilogram',
        'customer_reference' => 'getCustomerReference'
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
        $this->setIfExists('bag_track', $data ?? [], false);
        $this->setIfExists('format', $data ?? [], null);
        $this->setIfExists('destination_country', $data ?? [], null);
        $this->setIfExists('items_count', $data ?? [], null);
        $this->setIfExists('items_weight_in_kilogram', $data ?? [], null);
        $this->setIfExists('customer_reference', $data ?? [], null);
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

        if ($this->container['bag_track'] === null) {
            $invalidProperties[] = "'bag_track' can't be null";
        }
        if ($this->container['format'] === null) {
            $invalidProperties[] = "'format' can't be null";
        }
        if ($this->container['destination_country'] === null) {
            $invalidProperties[] = "'destination_country' can't be null";
        }
        if ((mb_strlen($this->container['destination_country']) > 2)) {
            $invalidProperties[] = "invalid value for 'destination_country', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['destination_country']) < 2)) {
            $invalidProperties[] = "invalid value for 'destination_country', the character length must be bigger than or equal to 2.";
        }

        if (!preg_match("/[A-Z]{2}/", $this->container['destination_country'])) {
            $invalidProperties[] = "invalid value for 'destination_country', must be conform to the pattern /[A-Z]{2}/.";
        }

        if ($this->container['items_count'] === null) {
            $invalidProperties[] = "'items_count' can't be null";
        }
        if ($this->container['items_weight_in_kilogram'] === null) {
            $invalidProperties[] = "'items_weight_in_kilogram' can't be null";
        }
        if (!is_null($this->container['customer_reference']) && (mb_strlen($this->container['customer_reference']) > 30)) {
            $invalidProperties[] = "invalid value for 'customer_reference', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['customer_reference']) && (mb_strlen($this->container['customer_reference']) < 0)) {
            $invalidProperties[] = "invalid value for 'customer_reference', the character length must be bigger than or equal to 0.";
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
     * @param int|null $id Internal id of the bag.
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
     * Gets bag_track
     *
     * @return bool
     */
    public function getBagTrack()
    {
        return $this->container['bag_track'];
    }

    /**
     * Sets bag_track
     *
     * @param bool $bag_track False for bulk preadvice, True for bag tracking
     *
     * @return self
     */
    public function setBagTrack($bag_track)
    {
        if (is_null($bag_track)) {
            throw new \InvalidArgumentException('non-nullable bag_track cannot be null');
        }
        $this->container['bag_track'] = $bag_track;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format The format of the content of this bag.
     *
     * @return self
     */
    public function setFormat($format)
    {
        if (is_null($format)) {
            throw new \InvalidArgumentException('non-nullable format cannot be null');
        }
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets destination_country
     *
     * @return string
     */
    public function getDestinationCountry()
    {
        return $this->container['destination_country'];
    }

    /**
     * Sets destination_country
     *
     * @param string $destination_country The destination country code.
     *
     * @return self
     */
    public function setDestinationCountry($destination_country)
    {
        if (is_null($destination_country)) {
            throw new \InvalidArgumentException('non-nullable destination_country cannot be null');
        }
        if ((mb_strlen($destination_country) > 2)) {
            throw new \InvalidArgumentException('invalid length for $destination_country when calling Bag., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($destination_country) < 2)) {
            throw new \InvalidArgumentException('invalid length for $destination_country when calling Bag., must be bigger than or equal to 2.');
        }
        if ((!preg_match("/[A-Z]{2}/", $destination_country))) {
            throw new \InvalidArgumentException("invalid value for \$destination_country when calling Bag., must conform to the pattern /[A-Z]{2}/.");
        }

        $this->container['destination_country'] = $destination_country;

        return $this;
    }

    /**
     * Gets items_count
     *
     * @return int
     */
    public function getItemsCount()
    {
        return $this->container['items_count'];
    }

    /**
     * Sets items_count
     *
     * @param int $items_count Number of items in bag. Minimum 1.
     *
     * @return self
     */
    public function setItemsCount($items_count)
    {
        if (is_null($items_count)) {
            throw new \InvalidArgumentException('non-nullable items_count cannot be null');
        }
        $this->container['items_count'] = $items_count;

        return $this;
    }

    /**
     * Gets items_weight_in_kilogram
     *
     * @return float
     */
    public function getItemsWeightInKilogram()
    {
        return $this->container['items_weight_in_kilogram'];
    }

    /**
     * Sets items_weight_in_kilogram
     *
     * @param float $items_weight_in_kilogram The weight in kilogram of the bag.
     *
     * @return self
     */
    public function setItemsWeightInKilogram($items_weight_in_kilogram)
    {
        if (is_null($items_weight_in_kilogram)) {
            throw new \InvalidArgumentException('non-nullable items_weight_in_kilogram cannot be null');
        }
        $this->container['items_weight_in_kilogram'] = $items_weight_in_kilogram;

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
     * @param string|null $customer_reference Customer reference
     *
     * @return self
     */
    public function setCustomerReference($customer_reference)
    {
        if (is_null($customer_reference)) {
            throw new \InvalidArgumentException('non-nullable customer_reference cannot be null');
        }
        if ((mb_strlen($customer_reference) > 30)) {
            throw new \InvalidArgumentException('invalid length for $customer_reference when calling Bag., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($customer_reference) < 0)) {
            throw new \InvalidArgumentException('invalid length for $customer_reference when calling Bag., must be bigger than or equal to 0.');
        }

        $this->container['customer_reference'] = $customer_reference;

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


