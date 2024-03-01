<?php
/**
 * Paperwork
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
 * Paperwork Class Doc Comment
 *
 * @category Class
 * @package  Spy\DHLParcel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Paperwork implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return PaperworkModelFields
      */
    public static function GetModelFields(): PaperworkModelFields
    {
        return new PaperworkModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return PaperworkModelAttributes
      */
    public static function GetModelAttributes(): PaperworkModelAttributes
    {
        return new PaperworkModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Paperwork';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'awb_copy_count' => 'int',
        'contact_name' => 'string',
        'job_reference' => 'string',
        'pickup_type' => 'string',
        'telephone_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'awb_copy_count' => 'int32',
        'contact_name' => null,
        'job_reference' => null,
        'pickup_type' => null,
        'telephone_number' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'awb_copy_count' => false,
		'contact_name' => false,
		'job_reference' => false,
		'pickup_type' => false,
		'telephone_number' => false
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
        'awb_copy_count' => 'awbCopyCount',
        'contact_name' => 'contactName',
        'job_reference' => 'jobReference',
        'pickup_type' => 'pickupType',
        'telephone_number' => 'telephoneNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'awb_copy_count' => 'setAwbCopyCount',
        'contact_name' => 'setContactName',
        'job_reference' => 'setJobReference',
        'pickup_type' => 'setPickupType',
        'telephone_number' => 'setTelephoneNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'awb_copy_count' => 'getAwbCopyCount',
        'contact_name' => 'getContactName',
        'job_reference' => 'getJobReference',
        'pickup_type' => 'getPickupType',
        'telephone_number' => 'getTelephoneNumber'
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

    public const PICKUP_TYPE_CUSTOMER_DROP_OFF = 'CUSTOMER_DROP_OFF';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPickupTypeAllowableValues()
    {
        return [
            self::PICKUP_TYPE_CUSTOMER_DROP_OFF,
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
        $this->setIfExists('awb_copy_count', $data ?? [], null);
        $this->setIfExists('contact_name', $data ?? [], null);
        $this->setIfExists('job_reference', $data ?? [], null);
        $this->setIfExists('pickup_type', $data ?? [], null);
        $this->setIfExists('telephone_number', $data ?? [], null);
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

        if ($this->container['awb_copy_count'] === null) {
            $invalidProperties[] = "'awb_copy_count' can't be null";
        }
        if (($this->container['awb_copy_count'] > 99)) {
            $invalidProperties[] = "invalid value for 'awb_copy_count', must be smaller than or equal to 99.";
        }

        if (($this->container['awb_copy_count'] < 1)) {
            $invalidProperties[] = "invalid value for 'awb_copy_count', must be bigger than or equal to 1.";
        }

        if ($this->container['contact_name'] === null) {
            $invalidProperties[] = "'contact_name' can't be null";
        }
        if ((mb_strlen($this->container['contact_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'contact_name', the character length must be smaller than or equal to 255.";
        }

        if ((mb_strlen($this->container['contact_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'contact_name', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['job_reference']) && (mb_strlen($this->container['job_reference']) > 17)) {
            $invalidProperties[] = "invalid value for 'job_reference', the character length must be smaller than or equal to 17.";
        }

        if (!is_null($this->container['job_reference']) && (mb_strlen($this->container['job_reference']) < 0)) {
            $invalidProperties[] = "invalid value for 'job_reference', the character length must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getPickupTypeAllowableValues();
        if (!is_null($this->container['pickup_type']) && !in_array($this->container['pickup_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'pickup_type', must be one of '%s'",
                $this->container['pickup_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['telephone_number']) && (mb_strlen($this->container['telephone_number']) > 40)) {
            $invalidProperties[] = "invalid value for 'telephone_number', the character length must be smaller than or equal to 40.";
        }

        if (!is_null($this->container['telephone_number']) && (mb_strlen($this->container['telephone_number']) < 0)) {
            $invalidProperties[] = "invalid value for 'telephone_number', the character length must be bigger than or equal to 0.";
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
     * Gets awb_copy_count
     *
     * @return int
     */
    public function getAwbCopyCount()
    {
        return $this->container['awb_copy_count'];
    }

    /**
     * Sets awb_copy_count
     *
     * @param int $awb_copy_count Copies of AWB labels. One AWB per final receptacle required. Number between 1 and 99.
     *
     * @return self
     */
    public function setAwbCopyCount($awb_copy_count)
    {
        if (is_null($awb_copy_count)) {
            throw new \InvalidArgumentException('non-nullable awb_copy_count cannot be null');
        }

        if (($awb_copy_count > 99)) {
            throw new \InvalidArgumentException('invalid value for $awb_copy_count when calling Paperwork., must be smaller than or equal to 99.');
        }
        if (($awb_copy_count < 1)) {
            throw new \InvalidArgumentException('invalid value for $awb_copy_count when calling Paperwork., must be bigger than or equal to 1.');
        }

        $this->container['awb_copy_count'] = $awb_copy_count;

        return $this;
    }

    /**
     * Gets contact_name
     *
     * @return string
     */
    public function getContactName()
    {
        return $this->container['contact_name'];
    }

    /**
     * Sets contact_name
     *
     * @param string $contact_name Contact name for questions from operations or sales.
     *
     * @return self
     */
    public function setContactName($contact_name)
    {
        if (is_null($contact_name)) {
            throw new \InvalidArgumentException('non-nullable contact_name cannot be null');
        }
        if ((mb_strlen($contact_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $contact_name when calling Paperwork., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($contact_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $contact_name when calling Paperwork., must be bigger than or equal to 0.');
        }

        $this->container['contact_name'] = $contact_name;

        return $this;
    }

    /**
     * Gets job_reference
     *
     * @return string|null
     */
    public function getJobReference()
    {
        return $this->container['job_reference'];
    }

    /**
     * Sets job_reference
     *
     * @param string|null $job_reference Job reference for the whole shipment.
     *
     * @return self
     */
    public function setJobReference($job_reference)
    {
        if (is_null($job_reference)) {
            throw new \InvalidArgumentException('non-nullable job_reference cannot be null');
        }
        if ((mb_strlen($job_reference) > 17)) {
            throw new \InvalidArgumentException('invalid length for $job_reference when calling Paperwork., must be smaller than or equal to 17.');
        }
        if ((mb_strlen($job_reference) < 0)) {
            throw new \InvalidArgumentException('invalid length for $job_reference when calling Paperwork., must be bigger than or equal to 0.');
        }

        $this->container['job_reference'] = $job_reference;

        return $this;
    }

    /**
     * Gets pickup_type
     *
     * @return string|null
     */
    public function getPickupType()
    {
        return $this->container['pickup_type'];
    }

    /**
     * Sets pickup_type
     *
     * @param string|null $pickup_type Pickup type used in pickup information. Only \"CUSTOMER_DROP_OFF\" is available.
     *
     * @return self
     */
    public function setPickupType($pickup_type)
    {
        if (is_null($pickup_type)) {
            throw new \InvalidArgumentException('non-nullable pickup_type cannot be null');
        }
        $allowedValues = $this->getPickupTypeAllowableValues();
        if (!in_array($pickup_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'pickup_type', must be one of '%s'",
                    $pickup_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pickup_type'] = $pickup_type;

        return $this;
    }

    /**
     * Gets telephone_number
     *
     * @return string|null
     */
    public function getTelephoneNumber()
    {
        return $this->container['telephone_number'];
    }

    /**
     * Sets telephone_number
     *
     * @param string|null $telephone_number Telephone number for paperwork. Mandatory for sales channel EXPRESS.
     *
     * @return self
     */
    public function setTelephoneNumber($telephone_number)
    {
        if (is_null($telephone_number)) {
            throw new \InvalidArgumentException('non-nullable telephone_number cannot be null');
        }
        if ((mb_strlen($telephone_number) > 40)) {
            throw new \InvalidArgumentException('invalid length for $telephone_number when calling Paperwork., must be smaller than or equal to 40.');
        }
        if ((mb_strlen($telephone_number) < 0)) {
            throw new \InvalidArgumentException('invalid length for $telephone_number when calling Paperwork., must be bigger than or equal to 0.');
        }

        $this->container['telephone_number'] = $telephone_number;

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

