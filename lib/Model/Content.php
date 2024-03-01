<?php
/**
 * Content
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
 * Content Class Doc Comment
 *
 * @category Class
 * @package  Spy\DHLParcel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Content implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return ContentModelFields
      */
    public static function GetModelFields(): ContentModelFields
    {
        return new ContentModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return ContentModelAttributes
      */
    public static function GetModelAttributes(): ContentModelAttributes
    {
        return new ContentModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Content';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'content_piece_amount' => 'int',
        'content_piece_description' => 'string',
        'content_piece_hs_code' => 'string',
        'content_piece_index_number' => 'int',
        'content_piece_netweight' => 'int',
        'content_piece_origin' => 'string',
        'content_piece_value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'content_piece_amount' => 'int64',
        'content_piece_description' => null,
        'content_piece_hs_code' => null,
        'content_piece_index_number' => 'int64',
        'content_piece_netweight' => 'int32',
        'content_piece_origin' => null,
        'content_piece_value' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'content_piece_amount' => false,
		'content_piece_description' => false,
		'content_piece_hs_code' => false,
		'content_piece_index_number' => false,
		'content_piece_netweight' => false,
		'content_piece_origin' => false,
		'content_piece_value' => false
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
        'content_piece_amount' => 'contentPieceAmount',
        'content_piece_description' => 'contentPieceDescription',
        'content_piece_hs_code' => 'contentPieceHsCode',
        'content_piece_index_number' => 'contentPieceIndexNumber',
        'content_piece_netweight' => 'contentPieceNetweight',
        'content_piece_origin' => 'contentPieceOrigin',
        'content_piece_value' => 'contentPieceValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content_piece_amount' => 'setContentPieceAmount',
        'content_piece_description' => 'setContentPieceDescription',
        'content_piece_hs_code' => 'setContentPieceHsCode',
        'content_piece_index_number' => 'setContentPieceIndexNumber',
        'content_piece_netweight' => 'setContentPieceNetweight',
        'content_piece_origin' => 'setContentPieceOrigin',
        'content_piece_value' => 'setContentPieceValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content_piece_amount' => 'getContentPieceAmount',
        'content_piece_description' => 'getContentPieceDescription',
        'content_piece_hs_code' => 'getContentPieceHsCode',
        'content_piece_index_number' => 'getContentPieceIndexNumber',
        'content_piece_netweight' => 'getContentPieceNetweight',
        'content_piece_origin' => 'getContentPieceOrigin',
        'content_piece_value' => 'getContentPieceValue'
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
        $this->setIfExists('content_piece_amount', $data ?? [], null);
        $this->setIfExists('content_piece_description', $data ?? [], null);
        $this->setIfExists('content_piece_hs_code', $data ?? [], null);
        $this->setIfExists('content_piece_index_number', $data ?? [], null);
        $this->setIfExists('content_piece_netweight', $data ?? [], null);
        $this->setIfExists('content_piece_origin', $data ?? [], null);
        $this->setIfExists('content_piece_value', $data ?? [], null);
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

        if ($this->container['content_piece_amount'] === null) {
            $invalidProperties[] = "'content_piece_amount' can't be null";
        }
        if (($this->container['content_piece_amount'] > 999)) {
            $invalidProperties[] = "invalid value for 'content_piece_amount', must be smaller than or equal to 999.";
        }

        if (($this->container['content_piece_amount'] < 1)) {
            $invalidProperties[] = "invalid value for 'content_piece_amount', must be bigger than or equal to 1.";
        }

        if ($this->container['content_piece_description'] === null) {
            $invalidProperties[] = "'content_piece_description' can't be null";
        }
        if ((mb_strlen($this->container['content_piece_description']) > 33)) {
            $invalidProperties[] = "invalid value for 'content_piece_description', the character length must be smaller than or equal to 33.";
        }

        if ((mb_strlen($this->container['content_piece_description']) < 3)) {
            $invalidProperties[] = "invalid value for 'content_piece_description', the character length must be bigger than or equal to 3.";
        }

        if (!preg_match("/^(?![=\\-\\+@]).*/", $this->container['content_piece_description'])) {
            $invalidProperties[] = "invalid value for 'content_piece_description', must be conform to the pattern /^(?![=\\-\\+@]).*/.";
        }

        if ($this->container['content_piece_netweight'] === null) {
            $invalidProperties[] = "'content_piece_netweight' can't be null";
        }
        if (($this->container['content_piece_netweight'] > 2000)) {
            $invalidProperties[] = "invalid value for 'content_piece_netweight', must be smaller than or equal to 2000.";
        }

        if (($this->container['content_piece_netweight'] < 1)) {
            $invalidProperties[] = "invalid value for 'content_piece_netweight', must be bigger than or equal to 1.";
        }

        if ($this->container['content_piece_origin'] === null) {
            $invalidProperties[] = "'content_piece_origin' can't be null";
        }
        if ((mb_strlen($this->container['content_piece_origin']) > 2)) {
            $invalidProperties[] = "invalid value for 'content_piece_origin', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['content_piece_origin']) < 2)) {
            $invalidProperties[] = "invalid value for 'content_piece_origin', the character length must be bigger than or equal to 2.";
        }

        if (!preg_match("/^(?![=\\-\\+@]).*/", $this->container['content_piece_origin'])) {
            $invalidProperties[] = "invalid value for 'content_piece_origin', must be conform to the pattern /^(?![=\\-\\+@]).*/.";
        }

        if ($this->container['content_piece_value'] === null) {
            $invalidProperties[] = "'content_piece_value' can't be null";
        }
        if (!preg_match("/^(?:(?:\\d{1,4}\\.\\d{2})|(?:\\d{1,7}))$/", $this->container['content_piece_value'])) {
            $invalidProperties[] = "invalid value for 'content_piece_value', must be conform to the pattern /^(?:(?:\\d{1,4}\\.\\d{2})|(?:\\d{1,7}))$/.";
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
     * Gets content_piece_amount
     *
     * @return int
     */
    public function getContentPieceAmount()
    {
        return $this->container['content_piece_amount'];
    }

    /**
     * Sets content_piece_amount
     *
     * @param int $content_piece_amount Number of pieces.
     *
     * @return self
     */
    public function setContentPieceAmount($content_piece_amount)
    {
        if (is_null($content_piece_amount)) {
            throw new \InvalidArgumentException('non-nullable content_piece_amount cannot be null');
        }

        if (($content_piece_amount > 999)) {
            throw new \InvalidArgumentException('invalid value for $content_piece_amount when calling Content., must be smaller than or equal to 999.');
        }
        if (($content_piece_amount < 1)) {
            throw new \InvalidArgumentException('invalid value for $content_piece_amount when calling Content., must be bigger than or equal to 1.');
        }

        $this->container['content_piece_amount'] = $content_piece_amount;

        return $this;
    }

    /**
     * Gets content_piece_description
     *
     * @return string
     */
    public function getContentPieceDescription()
    {
        return $this->container['content_piece_description'];
    }

    /**
     * Sets content_piece_description
     *
     * @param string $content_piece_description The (short) description of this content.
     *
     * @return self
     */
    public function setContentPieceDescription($content_piece_description)
    {
        if (is_null($content_piece_description)) {
            throw new \InvalidArgumentException('non-nullable content_piece_description cannot be null');
        }
        if ((mb_strlen($content_piece_description) > 33)) {
            throw new \InvalidArgumentException('invalid length for $content_piece_description when calling Content., must be smaller than or equal to 33.');
        }
        if ((mb_strlen($content_piece_description) < 3)) {
            throw new \InvalidArgumentException('invalid length for $content_piece_description when calling Content., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/^(?![=\\-\\+@]).*/", $content_piece_description))) {
            throw new \InvalidArgumentException("invalid value for \$content_piece_description when calling Content., must conform to the pattern /^(?![=\\-\\+@]).*/.");
        }

        $this->container['content_piece_description'] = $content_piece_description;

        return $this;
    }

    /**
     * Gets content_piece_hs_code
     *
     * @return string|null
     */
    public function getContentPieceHsCode()
    {
        return $this->container['content_piece_hs_code'];
    }

    /**
     * Sets content_piece_hs_code
     *
     * @param string|null $content_piece_hs_code The HS code of this content. Only 6, 8 or 10 digits, with max. one leading zero.
     *
     * @return self
     */
    public function setContentPieceHsCode($content_piece_hs_code)
    {
        if (is_null($content_piece_hs_code)) {
            throw new \InvalidArgumentException('non-nullable content_piece_hs_code cannot be null');
        }
        $this->container['content_piece_hs_code'] = $content_piece_hs_code;

        return $this;
    }

    /**
     * Gets content_piece_index_number
     *
     * @return int|null
     */
    public function getContentPieceIndexNumber()
    {
        return $this->container['content_piece_index_number'];
    }

    /**
     * Sets content_piece_index_number
     *
     * @param int|null $content_piece_index_number NOT RECOMMENDED, obsolete and should not be contained in requests until further notice.
     *
     * @return self
     */
    public function setContentPieceIndexNumber($content_piece_index_number)
    {
        if (is_null($content_piece_index_number)) {
            throw new \InvalidArgumentException('non-nullable content_piece_index_number cannot be null');
        }
        $this->container['content_piece_index_number'] = $content_piece_index_number;

        return $this;
    }

    /**
     * Gets content_piece_netweight
     *
     * @return int
     */
    public function getContentPieceNetweight()
    {
        return $this->container['content_piece_netweight'];
    }

    /**
     * Sets content_piece_netweight
     *
     * @param int $content_piece_netweight The net weight of all pieces of this content type.
     *
     * @return self
     */
    public function setContentPieceNetweight($content_piece_netweight)
    {
        if (is_null($content_piece_netweight)) {
            throw new \InvalidArgumentException('non-nullable content_piece_netweight cannot be null');
        }

        if (($content_piece_netweight > 2000)) {
            throw new \InvalidArgumentException('invalid value for $content_piece_netweight when calling Content., must be smaller than or equal to 2000.');
        }
        if (($content_piece_netweight < 1)) {
            throw new \InvalidArgumentException('invalid value for $content_piece_netweight when calling Content., must be bigger than or equal to 1.');
        }

        $this->container['content_piece_netweight'] = $content_piece_netweight;

        return $this;
    }

    /**
     * Gets content_piece_origin
     *
     * @return string
     */
    public function getContentPieceOrigin()
    {
        return $this->container['content_piece_origin'];
    }

    /**
     * Sets content_piece_origin
     *
     * @param string $content_piece_origin Country of origin, based on ISO-3166-1.
     *
     * @return self
     */
    public function setContentPieceOrigin($content_piece_origin)
    {
        if (is_null($content_piece_origin)) {
            throw new \InvalidArgumentException('non-nullable content_piece_origin cannot be null');
        }
        if ((mb_strlen($content_piece_origin) > 2)) {
            throw new \InvalidArgumentException('invalid length for $content_piece_origin when calling Content., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($content_piece_origin) < 2)) {
            throw new \InvalidArgumentException('invalid length for $content_piece_origin when calling Content., must be bigger than or equal to 2.');
        }
        if ((!preg_match("/^(?![=\\-\\+@]).*/", $content_piece_origin))) {
            throw new \InvalidArgumentException("invalid value for \$content_piece_origin when calling Content., must conform to the pattern /^(?![=\\-\\+@]).*/.");
        }

        $this->container['content_piece_origin'] = $content_piece_origin;

        return $this;
    }

    /**
     * Gets content_piece_value
     *
     * @return string
     */
    public function getContentPieceValue()
    {
        return $this->container['content_piece_value'];
    }

    /**
     * Sets content_piece_value
     *
     * @param string $content_piece_value Overall value of the content pieces of one type. 1 to 4 digits before the decimal point, 2 digits after the decimal point or 1 to 7 digits without decimal point
     *
     * @return self
     */
    public function setContentPieceValue($content_piece_value)
    {
        if (is_null($content_piece_value)) {
            throw new \InvalidArgumentException('non-nullable content_piece_value cannot be null');
        }

        if ((!preg_match("/^(?:(?:\\d{1,4}\\.\\d{2})|(?:\\d{1,7}))$/", $content_piece_value))) {
            throw new \InvalidArgumentException("invalid value for \$content_piece_value when calling Content., must conform to the pattern /^(?:(?:\\d{1,4}\\.\\d{2})|(?:\\d{1,7}))$/.");
        }

        $this->container['content_piece_value'] = $content_piece_value;

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

