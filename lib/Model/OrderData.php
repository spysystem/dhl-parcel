<?php
/**
 * OrderData
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
 * OrderData Class Doc Comment
 *
 * @category Class
 * @package  Spy\DHLParcel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OrderData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return OrderDataModelFields
      */
    public static function GetModelFields(): OrderDataModelFields
    {
        return new OrderDataModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return OrderDataModelAttributes
      */
    public static function GetModelAttributes(): OrderDataModelAttributes
    {
        return new OrderDataModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer_ekp' => 'string',
        'items' => '\Spy\DHLParcel\Model\ItemData[]',
        'order_status' => 'string',
        'paperwork' => '\Spy\DHLParcel\Model\Paperwork'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customer_ekp' => null,
        'items' => null,
        'order_status' => null,
        'paperwork' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'customer_ekp' => false,
		'items' => false,
		'order_status' => false,
		'paperwork' => false
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
        'customer_ekp' => 'customerEkp',
        'items' => 'items',
        'order_status' => 'orderStatus',
        'paperwork' => 'paperwork'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_ekp' => 'setCustomerEkp',
        'items' => 'setItems',
        'order_status' => 'setOrderStatus',
        'paperwork' => 'setPaperwork'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_ekp' => 'getCustomerEkp',
        'items' => 'getItems',
        'order_status' => 'getOrderStatus',
        'paperwork' => 'getPaperwork'
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

    public const ORDER_STATUS_OPEN = 'OPEN';
    public const ORDER_STATUS_FINALIZE = 'FINALIZE';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderStatusAllowableValues()
    {
        return [
            self::ORDER_STATUS_OPEN,
            self::ORDER_STATUS_FINALIZE,
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
        $this->setIfExists('customer_ekp', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('order_status', $data ?? [], null);
        $this->setIfExists('paperwork', $data ?? [], null);
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

        if ($this->container['customer_ekp'] === null) {
            $invalidProperties[] = "'customer_ekp' can't be null";
        }
        if ((mb_strlen($this->container['customer_ekp']) > 15)) {
            $invalidProperties[] = "invalid value for 'customer_ekp', the character length must be smaller than or equal to 15.";
        }

        if ((mb_strlen($this->container['customer_ekp']) < 0)) {
            $invalidProperties[] = "invalid value for 'customer_ekp', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['items']) && (count($this->container['items']) > 2500)) {
            $invalidProperties[] = "invalid value for 'items', number of items must be less than or equal to 2500.";
        }

        if (!is_null($this->container['items']) && (count($this->container['items']) < 0)) {
            $invalidProperties[] = "invalid value for 'items', number of items must be greater than or equal to 0.";
        }

        if ($this->container['order_status'] === null) {
            $invalidProperties[] = "'order_status' can't be null";
        }
        $allowedValues = $this->getOrderStatusAllowableValues();
        if (!is_null($this->container['order_status']) && !in_array($this->container['order_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'order_status', must be one of '%s'",
                $this->container['order_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['paperwork'] === null) {
            $invalidProperties[] = "'paperwork' can't be null";
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
     * Gets customer_ekp
     *
     * @return string
     */
    public function getCustomerEkp()
    {
        return $this->container['customer_ekp'];
    }

    /**
     * Sets customer_ekp
     *
     * @param string $customer_ekp Deutsche Post Customer Account number (EKP) of the customer who wants to create an order.
     *
     * @return self
     */
    public function setCustomerEkp($customer_ekp)
    {
        if (is_null($customer_ekp)) {
            throw new \InvalidArgumentException('non-nullable customer_ekp cannot be null');
        }
        if ((mb_strlen($customer_ekp) > 15)) {
            throw new \InvalidArgumentException('invalid length for $customer_ekp when calling OrderData., must be smaller than or equal to 15.');
        }
        if ((mb_strlen($customer_ekp) < 0)) {
            throw new \InvalidArgumentException('invalid length for $customer_ekp when calling OrderData., must be bigger than or equal to 0.');
        }

        $this->container['customer_ekp'] = $customer_ekp;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Spy\DHLParcel\Model\ItemData[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Spy\DHLParcel\Model\ItemData[]|null $items The items associated with this order. A maximum of 2500 items per request are allowed. In case of \"FINALIZE\" at least one item is required.
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }

        if ((count($items) > 2500)) {
            throw new \InvalidArgumentException('invalid value for $items when calling OrderData., number of items must be less than or equal to 2500.');
        }
        if ((count($items) < 0)) {
            throw new \InvalidArgumentException('invalid length for $items when calling OrderData., number of items must be greater than or equal to 0.');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets order_status
     *
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status
     *
     * @param string $order_status The status of the order. It indicates if an order shall be held open to add more items at a later point in time. \"OPEN\" means items can be added later, \"FINALIZE\" means that the order shall be processed immediately.
     *
     * @return self
     */
    public function setOrderStatus($order_status)
    {
        if (is_null($order_status)) {
            throw new \InvalidArgumentException('non-nullable order_status cannot be null');
        }
        $allowedValues = $this->getOrderStatusAllowableValues();
        if (!in_array($order_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'order_status', must be one of '%s'",
                    $order_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order_status'] = $order_status;

        return $this;
    }

    /**
     * Gets paperwork
     *
     * @return \Spy\DHLParcel\Model\Paperwork
     */
    public function getPaperwork()
    {
        return $this->container['paperwork'];
    }

    /**
     * Sets paperwork
     *
     * @param \Spy\DHLParcel\Model\Paperwork $paperwork paperwork
     *
     * @return self
     */
    public function setPaperwork($paperwork)
    {
        if (is_null($paperwork)) {
            throw new \InvalidArgumentException('non-nullable paperwork cannot be null');
        }
        $this->container['paperwork'] = $paperwork;

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

