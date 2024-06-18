<?php
/**
 * PostOffice
 *
 * PHP version 7.4
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

use \ArrayAccess;
use \Spy\DHLParcel\ObjectSerializer;

/**
 * PostOffice Class Doc Comment
 *
 * @category Class
 * @description Only usable for German post offices or retail outlets (Paketshops), international postOffices or retail outlets cannot be addressed directly. If your customer wishes for international delivery to a droppoint, please use DHL Parcel International (V53WPAK) with the delivery type \&quot;Closest Droppoint\&quot;.
 * @package  Spy\DHLParcel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PostOffice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return PostOfficeModelFields
      */
    public static function GetModelFields(): PostOfficeModelFields
    {
        return new PostOfficeModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return PostOfficeModelAttributes
      */
    public static function GetModelAttributes(): PostOfficeModelAttributes
    {
        return new PostOfficeModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PostOffice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'retail_id' => 'int',
        'post_number' => 'string',
        'email' => 'string',
        'city' => 'string',
        'country' => '\Spy\DHLParcel\Model\Country',
        'postal_code' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'retail_id' => 'int32',
        'post_number' => null,
        'email' => null,
        'city' => null,
        'country' => null,
        'postal_code' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'retail_id' => false,
        'post_number' => false,
        'email' => false,
        'city' => false,
        'country' => false,
        'postal_code' => false
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
        'name' => 'name',
        'retail_id' => 'retailID',
        'post_number' => 'postNumber',
        'email' => 'email',
        'city' => 'city',
        'country' => 'country',
        'postal_code' => 'postalCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'retail_id' => 'setRetailId',
        'post_number' => 'setPostNumber',
        'email' => 'setEmail',
        'city' => 'setCity',
        'country' => 'setCountry',
        'postal_code' => 'setPostalCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'retail_id' => 'getRetailId',
        'post_number' => 'getPostNumber',
        'email' => 'getEmail',
        'city' => 'getCity',
        'country' => 'getCountry',
        'postal_code' => 'getPostalCode'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('retail_id', $data ?? [], null);
        $this->setIfExists('post_number', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('postal_code', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 50)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['retail_id'] === null) {
            $invalidProperties[] = "'retail_id' can't be null";
        }
        if (($this->container['retail_id'] > 999)) {
            $invalidProperties[] = "invalid value for 'retail_id', must be smaller than or equal to 999.";
        }

        if (($this->container['retail_id'] < 401)) {
            $invalidProperties[] = "invalid value for 'retail_id', must be bigger than or equal to 401.";
        }

        if (!is_null($this->container['post_number']) && (mb_strlen($this->container['post_number']) > 10)) {
            $invalidProperties[] = "invalid value for 'post_number', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['post_number']) && (mb_strlen($this->container['post_number']) < 3)) {
            $invalidProperties[] = "invalid value for 'post_number', the character length must be bigger than or equal to 3.";
        }

        if (!is_null($this->container['post_number']) && !preg_match("/^[0-9]{6,10}$/", $this->container['post_number'])) {
            $invalidProperties[] = "invalid value for 'post_number', must be conform to the pattern /^[0-9]{6,10}$/.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) > 80)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['email']) && (mb_strlen($this->container['email']) < 3)) {
            $invalidProperties[] = "invalid value for 'email', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ((mb_strlen($this->container['city']) > 80)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 80.";
        }

        if ((mb_strlen($this->container['city']) < 0)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['postal_code'] === null) {
            $invalidProperties[] = "'postal_code' can't be null";
        }
        if ((mb_strlen($this->container['postal_code']) > 10)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be smaller than or equal to 10.";
        }

        if ((mb_strlen($this->container['postal_code']) < 3)) {
            $invalidProperties[] = "invalid value for 'postal_code', the character length must be bigger than or equal to 3.";
        }

        if (!preg_match("/^[0-9A-Za-z]+([ -]?[0-9A-Za-z]+)*$/", $this->container['postal_code'])) {
            $invalidProperties[] = "invalid value for 'postal_code', must be conform to the pattern /^[0-9A-Za-z]+([ -]?[0-9A-Za-z]+)*$/.";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PostOffice., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PostOffice., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets retail_id
     *
     * @return int
     */
    public function getRetailId()
    {
        return $this->container['retail_id'];
    }

    /**
     * Sets retail_id
     *
     * @param int $retail_id Id or Number of Post office / Filiale / outlet / parcel shop
     *
     * @return self
     */
    public function setRetailId($retail_id)
    {
        if (is_null($retail_id)) {
            throw new \InvalidArgumentException('non-nullable retail_id cannot be null');
        }

        if (($retail_id > 999)) {
            throw new \InvalidArgumentException('invalid value for $retail_id when calling PostOffice., must be smaller than or equal to 999.');
        }
        if (($retail_id < 401)) {
            throw new \InvalidArgumentException('invalid value for $retail_id when calling PostOffice., must be bigger than or equal to 401.');
        }

        $this->container['retail_id'] = $retail_id;

        return $this;
    }

    /**
     * Gets post_number
     *
     * @return string|null
     */
    public function getPostNumber()
    {
        return $this->container['post_number'];
    }

    /**
     * Sets post_number
     *
     * @param string|null $post_number postNumber (Postnummer) is the official account number a private DHL Customer gets upon registration. To address a post office or retail outlet directly, either the post number or e-mail address of the consignee is needed.
     *
     * @return self
     */
    public function setPostNumber($post_number)
    {
        if (is_null($post_number)) {
            throw new \InvalidArgumentException('non-nullable post_number cannot be null');
        }
        if ((mb_strlen($post_number) > 10)) {
            throw new \InvalidArgumentException('invalid length for $post_number when calling PostOffice., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($post_number) < 3)) {
            throw new \InvalidArgumentException('invalid length for $post_number when calling PostOffice., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/^[0-9]{6,10}$/", ObjectSerializer::toString($post_number)))) {
            throw new \InvalidArgumentException("invalid value for \$post_number when calling PostOffice., must conform to the pattern /^[0-9]{6,10}$/.");
        }

        $this->container['post_number'] = $post_number;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Email address of the consignee. To address a post office or retail outlet directly, either the post number or e-mail address of the consignee is needed.
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        if ((mb_strlen($email) > 80)) {
            throw new \InvalidArgumentException('invalid length for $email when calling PostOffice., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($email) < 3)) {
            throw new \InvalidArgumentException('invalid length for $email when calling PostOffice., must be bigger than or equal to 3.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city City where the retail location is
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        if ((mb_strlen($city) > 80)) {
            throw new \InvalidArgumentException('invalid length for $city when calling PostOffice., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($city) < 0)) {
            throw new \InvalidArgumentException('invalid length for $city when calling PostOffice., must be bigger than or equal to 0.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return \Spy\DHLParcel\Model\Country|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param \Spy\DHLParcel\Model\Country|null $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code postal_code
     *
     * @return self
     */
    public function setPostalCode($postal_code)
    {
        if (is_null($postal_code)) {
            throw new \InvalidArgumentException('non-nullable postal_code cannot be null');
        }
        if ((mb_strlen($postal_code) > 10)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling PostOffice., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($postal_code) < 3)) {
            throw new \InvalidArgumentException('invalid length for $postal_code when calling PostOffice., must be bigger than or equal to 3.');
        }
        if ((!preg_match("/^[0-9A-Za-z]+([ -]?[0-9A-Za-z]+)*$/", ObjectSerializer::toString($postal_code)))) {
            throw new \InvalidArgumentException("invalid value for \$postal_code when calling PostOffice., must conform to the pattern /^[0-9A-Za-z]+([ -]?[0-9A-Za-z]+)*$/.");
        }

        $this->container['postal_code'] = $postal_code;

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


