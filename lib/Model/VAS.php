<?php
/**
 * VAS
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
 * VAS Class Doc Comment
 *
 * @category Class
 * @description Value added services. Please note that services are specific to products and geographies and/or may require individual setup and billing numbers. Please test and contact your account representative in case of questions.
 * @package  Spy\DHLParcel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VAS implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return VASModelFields
      */
    public static function GetModelFields(): VASModelFields
    {
        return new VASModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return VASModelAttributes
      */
    public static function GetModelAttributes(): VASModelAttributes
    {
        return new VASModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VAS';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'preferred_neighbour' => 'string',
        'preferred_location' => 'string',
        'visual_check_of_age' => 'string',
        'named_person_only' => 'bool',
        'ident_check' => '\Spy\DHLParcel\Model\VASIdentCheck',
        'signed_for_by_recipient' => 'bool',
        'endorsement' => 'string',
        'preferred_day' => '\DateTime',
        'no_neighbour_delivery' => 'bool',
        'additional_insurance' => '\Spy\DHLParcel\Model\Value',
        'bulky_goods' => 'bool',
        'cash_on_delivery' => '\Spy\DHLParcel\Model\VASCashOnDelivery',
        'individual_sender_requirement' => 'string',
        'premium' => 'bool',
        'closest_drop_point' => 'bool',
        'parcel_outlet_routing' => 'string',
        'dhl_retoure' => '\Spy\DHLParcel\Model\VASDhlRetoure',
        'postal_delivery_duty_paid' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'preferred_neighbour' => null,
        'preferred_location' => null,
        'visual_check_of_age' => null,
        'named_person_only' => null,
        'ident_check' => null,
        'signed_for_by_recipient' => null,
        'endorsement' => null,
        'preferred_day' => 'date',
        'no_neighbour_delivery' => null,
        'additional_insurance' => null,
        'bulky_goods' => null,
        'cash_on_delivery' => null,
        'individual_sender_requirement' => null,
        'premium' => null,
        'closest_drop_point' => null,
        'parcel_outlet_routing' => null,
        'dhl_retoure' => null,
        'postal_delivery_duty_paid' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'preferred_neighbour' => false,
        'preferred_location' => false,
        'visual_check_of_age' => false,
        'named_person_only' => false,
        'ident_check' => false,
        'signed_for_by_recipient' => false,
        'endorsement' => false,
        'preferred_day' => false,
        'no_neighbour_delivery' => false,
        'additional_insurance' => false,
        'bulky_goods' => false,
        'cash_on_delivery' => false,
        'individual_sender_requirement' => false,
        'premium' => false,
        'closest_drop_point' => false,
        'parcel_outlet_routing' => false,
        'dhl_retoure' => false,
        'postal_delivery_duty_paid' => false
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
        'preferred_neighbour' => 'preferredNeighbour',
        'preferred_location' => 'preferredLocation',
        'visual_check_of_age' => 'visualCheckOfAge',
        'named_person_only' => 'namedPersonOnly',
        'ident_check' => 'identCheck',
        'signed_for_by_recipient' => 'signedForByRecipient',
        'endorsement' => 'endorsement',
        'preferred_day' => 'preferredDay',
        'no_neighbour_delivery' => 'noNeighbourDelivery',
        'additional_insurance' => 'additionalInsurance',
        'bulky_goods' => 'bulkyGoods',
        'cash_on_delivery' => 'cashOnDelivery',
        'individual_sender_requirement' => 'individualSenderRequirement',
        'premium' => 'premium',
        'closest_drop_point' => 'closestDropPoint',
        'parcel_outlet_routing' => 'parcelOutletRouting',
        'dhl_retoure' => 'dhlRetoure',
        'postal_delivery_duty_paid' => 'postalDeliveryDutyPaid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'preferred_neighbour' => 'setPreferredNeighbour',
        'preferred_location' => 'setPreferredLocation',
        'visual_check_of_age' => 'setVisualCheckOfAge',
        'named_person_only' => 'setNamedPersonOnly',
        'ident_check' => 'setIdentCheck',
        'signed_for_by_recipient' => 'setSignedForByRecipient',
        'endorsement' => 'setEndorsement',
        'preferred_day' => 'setPreferredDay',
        'no_neighbour_delivery' => 'setNoNeighbourDelivery',
        'additional_insurance' => 'setAdditionalInsurance',
        'bulky_goods' => 'setBulkyGoods',
        'cash_on_delivery' => 'setCashOnDelivery',
        'individual_sender_requirement' => 'setIndividualSenderRequirement',
        'premium' => 'setPremium',
        'closest_drop_point' => 'setClosestDropPoint',
        'parcel_outlet_routing' => 'setParcelOutletRouting',
        'dhl_retoure' => 'setDhlRetoure',
        'postal_delivery_duty_paid' => 'setPostalDeliveryDutyPaid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'preferred_neighbour' => 'getPreferredNeighbour',
        'preferred_location' => 'getPreferredLocation',
        'visual_check_of_age' => 'getVisualCheckOfAge',
        'named_person_only' => 'getNamedPersonOnly',
        'ident_check' => 'getIdentCheck',
        'signed_for_by_recipient' => 'getSignedForByRecipient',
        'endorsement' => 'getEndorsement',
        'preferred_day' => 'getPreferredDay',
        'no_neighbour_delivery' => 'getNoNeighbourDelivery',
        'additional_insurance' => 'getAdditionalInsurance',
        'bulky_goods' => 'getBulkyGoods',
        'cash_on_delivery' => 'getCashOnDelivery',
        'individual_sender_requirement' => 'getIndividualSenderRequirement',
        'premium' => 'getPremium',
        'closest_drop_point' => 'getClosestDropPoint',
        'parcel_outlet_routing' => 'getParcelOutletRouting',
        'dhl_retoure' => 'getDhlRetoure',
        'postal_delivery_duty_paid' => 'getPostalDeliveryDutyPaid'
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

    public const VISUAL_CHECK_OF_AGE_A16 = 'A16';
    public const VISUAL_CHECK_OF_AGE_A18 = 'A18';
    public const ENDORSEMENT__RETURN = 'RETURN';
    public const ENDORSEMENT_ABANDON = 'ABANDON';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVisualCheckOfAgeAllowableValues()
    {
        return [
            self::VISUAL_CHECK_OF_AGE_A16,
            self::VISUAL_CHECK_OF_AGE_A18,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEndorsementAllowableValues()
    {
        return [
            self::ENDORSEMENT__RETURN,
            self::ENDORSEMENT_ABANDON,
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
        $this->setIfExists('preferred_neighbour', $data ?? [], null);
        $this->setIfExists('preferred_location', $data ?? [], null);
        $this->setIfExists('visual_check_of_age', $data ?? [], null);
        $this->setIfExists('named_person_only', $data ?? [], null);
        $this->setIfExists('ident_check', $data ?? [], null);
        $this->setIfExists('signed_for_by_recipient', $data ?? [], null);
        $this->setIfExists('endorsement', $data ?? [], null);
        $this->setIfExists('preferred_day', $data ?? [], null);
        $this->setIfExists('no_neighbour_delivery', $data ?? [], null);
        $this->setIfExists('additional_insurance', $data ?? [], null);
        $this->setIfExists('bulky_goods', $data ?? [], null);
        $this->setIfExists('cash_on_delivery', $data ?? [], null);
        $this->setIfExists('individual_sender_requirement', $data ?? [], null);
        $this->setIfExists('premium', $data ?? [], null);
        $this->setIfExists('closest_drop_point', $data ?? [], null);
        $this->setIfExists('parcel_outlet_routing', $data ?? [], null);
        $this->setIfExists('dhl_retoure', $data ?? [], null);
        $this->setIfExists('postal_delivery_duty_paid', $data ?? [], null);
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

        if (!is_null($this->container['preferred_neighbour']) && (mb_strlen($this->container['preferred_neighbour']) > 100)) {
            $invalidProperties[] = "invalid value for 'preferred_neighbour', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['preferred_neighbour']) && (mb_strlen($this->container['preferred_neighbour']) < 0)) {
            $invalidProperties[] = "invalid value for 'preferred_neighbour', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['preferred_location']) && (mb_strlen($this->container['preferred_location']) > 100)) {
            $invalidProperties[] = "invalid value for 'preferred_location', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['preferred_location']) && (mb_strlen($this->container['preferred_location']) < 0)) {
            $invalidProperties[] = "invalid value for 'preferred_location', the character length must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getVisualCheckOfAgeAllowableValues();
        if (!is_null($this->container['visual_check_of_age']) && !in_array($this->container['visual_check_of_age'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'visual_check_of_age', must be one of '%s'",
                $this->container['visual_check_of_age'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['visual_check_of_age']) && !preg_match("/A16|A18/", $this->container['visual_check_of_age'])) {
            $invalidProperties[] = "invalid value for 'visual_check_of_age', must be conform to the pattern /A16|A18/.";
        }

        $allowedValues = $this->getEndorsementAllowableValues();
        if (!is_null($this->container['endorsement']) && !in_array($this->container['endorsement'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'endorsement', must be one of '%s'",
                $this->container['endorsement'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['individual_sender_requirement']) && !preg_match("/[a-zA-Z0-9]{2}/", $this->container['individual_sender_requirement'])) {
            $invalidProperties[] = "invalid value for 'individual_sender_requirement', must be conform to the pattern /[a-zA-Z0-9]{2}/.";
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
     * Gets preferred_neighbour
     *
     * @return string|null
     */
    public function getPreferredNeighbour()
    {
        return $this->container['preferred_neighbour'];
    }

    /**
     * Sets preferred_neighbour
     *
     * @param string|null $preferred_neighbour Preferred neighbour. Can be specified as text.
     *
     * @return self
     */
    public function setPreferredNeighbour($preferred_neighbour)
    {
        if (is_null($preferred_neighbour)) {
            throw new \InvalidArgumentException('non-nullable preferred_neighbour cannot be null');
        }
        if ((mb_strlen($preferred_neighbour) > 100)) {
            throw new \InvalidArgumentException('invalid length for $preferred_neighbour when calling VAS., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($preferred_neighbour) < 0)) {
            throw new \InvalidArgumentException('invalid length for $preferred_neighbour when calling VAS., must be bigger than or equal to 0.');
        }

        $this->container['preferred_neighbour'] = $preferred_neighbour;

        return $this;
    }

    /**
     * Gets preferred_location
     *
     * @return string|null
     */
    public function getPreferredLocation()
    {
        return $this->container['preferred_location'];
    }

    /**
     * Sets preferred_location
     *
     * @param string|null $preferred_location Preferred location. Can be specified as text.
     *
     * @return self
     */
    public function setPreferredLocation($preferred_location)
    {
        if (is_null($preferred_location)) {
            throw new \InvalidArgumentException('non-nullable preferred_location cannot be null');
        }
        if ((mb_strlen($preferred_location) > 100)) {
            throw new \InvalidArgumentException('invalid length for $preferred_location when calling VAS., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($preferred_location) < 0)) {
            throw new \InvalidArgumentException('invalid length for $preferred_location when calling VAS., must be bigger than or equal to 0.');
        }

        $this->container['preferred_location'] = $preferred_location;

        return $this;
    }

    /**
     * Gets visual_check_of_age
     *
     * @return string|null
     */
    public function getVisualCheckOfAge()
    {
        return $this->container['visual_check_of_age'];
    }

    /**
     * Sets visual_check_of_age
     *
     * @param string|null $visual_check_of_age if used it will trigger checking the age of recipient
     *
     * @return self
     */
    public function setVisualCheckOfAge($visual_check_of_age)
    {
        if (is_null($visual_check_of_age)) {
            throw new \InvalidArgumentException('non-nullable visual_check_of_age cannot be null');
        }
        $allowedValues = $this->getVisualCheckOfAgeAllowableValues();
        if (!in_array($visual_check_of_age, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'visual_check_of_age', must be one of '%s'",
                    $visual_check_of_age,
                    implode("', '", $allowedValues)
                )
            );
        }

        if ((!preg_match("/A16|A18/", ObjectSerializer::toString($visual_check_of_age)))) {
            throw new \InvalidArgumentException("invalid value for \$visual_check_of_age when calling VAS., must conform to the pattern /A16|A18/.");
        }

        $this->container['visual_check_of_age'] = $visual_check_of_age;

        return $this;
    }

    /**
     * Gets named_person_only
     *
     * @return bool|null
     */
    public function getNamedPersonOnly()
    {
        return $this->container['named_person_only'];
    }

    /**
     * Sets named_person_only
     *
     * @param bool|null $named_person_only Delivery can only be signed for by yourself personally.
     *
     * @return self
     */
    public function setNamedPersonOnly($named_person_only)
    {
        if (is_null($named_person_only)) {
            throw new \InvalidArgumentException('non-nullable named_person_only cannot be null');
        }
        $this->container['named_person_only'] = $named_person_only;

        return $this;
    }

    /**
     * Gets ident_check
     *
     * @return \Spy\DHLParcel\Model\VASIdentCheck|null
     */
    public function getIdentCheck()
    {
        return $this->container['ident_check'];
    }

    /**
     * Sets ident_check
     *
     * @param \Spy\DHLParcel\Model\VASIdentCheck|null $ident_check ident_check
     *
     * @return self
     */
    public function setIdentCheck($ident_check)
    {
        if (is_null($ident_check)) {
            throw new \InvalidArgumentException('non-nullable ident_check cannot be null');
        }
        $this->container['ident_check'] = $ident_check;

        return $this;
    }

    /**
     * Gets signed_for_by_recipient
     *
     * @return bool|null
     */
    public function getSignedForByRecipient()
    {
        return $this->container['signed_for_by_recipient'];
    }

    /**
     * Sets signed_for_by_recipient
     *
     * @param bool|null $signed_for_by_recipient Delivery must be signed for by the recipient and not by DHL staff
     *
     * @return self
     */
    public function setSignedForByRecipient($signed_for_by_recipient)
    {
        if (is_null($signed_for_by_recipient)) {
            throw new \InvalidArgumentException('non-nullable signed_for_by_recipient cannot be null');
        }
        $this->container['signed_for_by_recipient'] = $signed_for_by_recipient;

        return $this;
    }

    /**
     * Gets endorsement
     *
     * @return string|null
     */
    public function getEndorsement()
    {
        return $this->container['endorsement'];
    }

    /**
     * Sets endorsement
     *
     * @param string|null $endorsement Instructions and endorsement how to treat international undeliverable shipment. By default, shipments are returned if undeliverable. There are country specific rules whether the shipment is returned immediately or after a grace period.
     *
     * @return self
     */
    public function setEndorsement($endorsement)
    {
        if (is_null($endorsement)) {
            throw new \InvalidArgumentException('non-nullable endorsement cannot be null');
        }
        $allowedValues = $this->getEndorsementAllowableValues();
        if (!in_array($endorsement, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'endorsement', must be one of '%s'",
                    $endorsement,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['endorsement'] = $endorsement;

        return $this;
    }

    /**
     * Gets preferred_day
     *
     * @return \DateTime|null
     */
    public function getPreferredDay()
    {
        return $this->container['preferred_day'];
    }

    /**
     * Sets preferred_day
     *
     * @param \DateTime|null $preferred_day Preferred day of delivery in format YYYY-MM-DD. Shipper can request a preferred day of delivery. The preferred day should be between 2 and 6 working days after handover to DHL.
     *
     * @return self
     */
    public function setPreferredDay($preferred_day)
    {
        if (is_null($preferred_day)) {
            throw new \InvalidArgumentException('non-nullable preferred_day cannot be null');
        }
        $this->container['preferred_day'] = $preferred_day;

        return $this;
    }

    /**
     * Gets no_neighbour_delivery
     *
     * @return bool|null
     */
    public function getNoNeighbourDelivery()
    {
        return $this->container['no_neighbour_delivery'];
    }

    /**
     * Sets no_neighbour_delivery
     *
     * @param bool|null $no_neighbour_delivery Delivery can only be signed for by yourself personally or by members of your household.
     *
     * @return self
     */
    public function setNoNeighbourDelivery($no_neighbour_delivery)
    {
        if (is_null($no_neighbour_delivery)) {
            throw new \InvalidArgumentException('non-nullable no_neighbour_delivery cannot be null');
        }
        $this->container['no_neighbour_delivery'] = $no_neighbour_delivery;

        return $this;
    }

    /**
     * Gets additional_insurance
     *
     * @return \Spy\DHLParcel\Model\Value|null
     */
    public function getAdditionalInsurance()
    {
        return $this->container['additional_insurance'];
    }

    /**
     * Sets additional_insurance
     *
     * @param \Spy\DHLParcel\Model\Value|null $additional_insurance additional_insurance
     *
     * @return self
     */
    public function setAdditionalInsurance($additional_insurance)
    {
        if (is_null($additional_insurance)) {
            throw new \InvalidArgumentException('non-nullable additional_insurance cannot be null');
        }
        $this->container['additional_insurance'] = $additional_insurance;

        return $this;
    }

    /**
     * Gets bulky_goods
     *
     * @return bool|null
     */
    public function getBulkyGoods()
    {
        return $this->container['bulky_goods'];
    }

    /**
     * Sets bulky_goods
     *
     * @param bool|null $bulky_goods Leaving this out is same as setting to false. Sperrgut.
     *
     * @return self
     */
    public function setBulkyGoods($bulky_goods)
    {
        if (is_null($bulky_goods)) {
            throw new \InvalidArgumentException('non-nullable bulky_goods cannot be null');
        }
        $this->container['bulky_goods'] = $bulky_goods;

        return $this;
    }

    /**
     * Gets cash_on_delivery
     *
     * @return \Spy\DHLParcel\Model\VASCashOnDelivery|null
     */
    public function getCashOnDelivery()
    {
        return $this->container['cash_on_delivery'];
    }

    /**
     * Sets cash_on_delivery
     *
     * @param \Spy\DHLParcel\Model\VASCashOnDelivery|null $cash_on_delivery cash_on_delivery
     *
     * @return self
     */
    public function setCashOnDelivery($cash_on_delivery)
    {
        if (is_null($cash_on_delivery)) {
            throw new \InvalidArgumentException('non-nullable cash_on_delivery cannot be null');
        }
        $this->container['cash_on_delivery'] = $cash_on_delivery;

        return $this;
    }

    /**
     * Gets individual_sender_requirement
     *
     * @return string|null
     */
    public function getIndividualSenderRequirement()
    {
        return $this->container['individual_sender_requirement'];
    }

    /**
     * Sets individual_sender_requirement
     *
     * @param string|null $individual_sender_requirement Special instructions for delivery. 2 character code, possible values agreed in contract.
     *
     * @return self
     */
    public function setIndividualSenderRequirement($individual_sender_requirement)
    {
        if (is_null($individual_sender_requirement)) {
            throw new \InvalidArgumentException('non-nullable individual_sender_requirement cannot be null');
        }

        if ((!preg_match("/[a-zA-Z0-9]{2}/", ObjectSerializer::toString($individual_sender_requirement)))) {
            throw new \InvalidArgumentException("invalid value for \$individual_sender_requirement when calling VAS., must conform to the pattern /[a-zA-Z0-9]{2}/.");
        }

        $this->container['individual_sender_requirement'] = $individual_sender_requirement;

        return $this;
    }

    /**
     * Gets premium
     *
     * @return bool|null
     */
    public function getPremium()
    {
        return $this->container['premium'];
    }

    /**
     * Sets premium
     *
     * @param bool|null $premium Choice of premium vs economy parcel. Availability is country dependent and may be manipulated by DHL if choice is not available. Please review the label.
     *
     * @return self
     */
    public function setPremium($premium)
    {
        if (is_null($premium)) {
            throw new \InvalidArgumentException('non-nullable premium cannot be null');
        }
        $this->container['premium'] = $premium;

        return $this;
    }

    /**
     * Gets closest_drop_point
     *
     * @return bool|null
     */
    public function getClosestDropPoint()
    {
        return $this->container['closest_drop_point'];
    }

    /**
     * Sets closest_drop_point
     *
     * @param bool|null $closest_drop_point Closest Droppoint Delivery to the droppoint closest to the address of the recipient of the shipment. For this kind of delivery either the phone number and/or the e-mail address of the receiver is mandatory. For shipments using DHL Paket International it is recommended that you choose one of the three delivery types: Economy, Premium, CDP. Otherwise, the current default for the receiver country will be picked.
     *
     * @return self
     */
    public function setClosestDropPoint($closest_drop_point)
    {
        if (is_null($closest_drop_point)) {
            throw new \InvalidArgumentException('non-nullable closest_drop_point cannot be null');
        }
        $this->container['closest_drop_point'] = $closest_drop_point;

        return $this;
    }

    /**
     * Gets parcel_outlet_routing
     *
     * @return string|null
     */
    public function getParcelOutletRouting()
    {
        return $this->container['parcel_outlet_routing'];
    }

    /**
     * Sets parcel_outlet_routing
     *
     * @param string|null $parcel_outlet_routing Undeliverable domestic shipment can be forwarded and held at retail. Notification to email (fallback: consignee email) will be used.
     *
     * @return self
     */
    public function setParcelOutletRouting($parcel_outlet_routing)
    {
        if (is_null($parcel_outlet_routing)) {
            throw new \InvalidArgumentException('non-nullable parcel_outlet_routing cannot be null');
        }
        $this->container['parcel_outlet_routing'] = $parcel_outlet_routing;

        return $this;
    }

    /**
     * Gets dhl_retoure
     *
     * @return \Spy\DHLParcel\Model\VASDhlRetoure|null
     */
    public function getDhlRetoure()
    {
        return $this->container['dhl_retoure'];
    }

    /**
     * Sets dhl_retoure
     *
     * @param \Spy\DHLParcel\Model\VASDhlRetoure|null $dhl_retoure dhl_retoure
     *
     * @return self
     */
    public function setDhlRetoure($dhl_retoure)
    {
        if (is_null($dhl_retoure)) {
            throw new \InvalidArgumentException('non-nullable dhl_retoure cannot be null');
        }
        $this->container['dhl_retoure'] = $dhl_retoure;

        return $this;
    }

    /**
     * Gets postal_delivery_duty_paid
     *
     * @return bool|null
     */
    public function getPostalDeliveryDutyPaid()
    {
        return $this->container['postal_delivery_duty_paid'];
    }

    /**
     * Sets postal_delivery_duty_paid
     *
     * @param bool|null $postal_delivery_duty_paid All import duties are paid by the shipper.
     *
     * @return self
     */
    public function setPostalDeliveryDutyPaid($postal_delivery_duty_paid)
    {
        if (is_null($postal_delivery_duty_paid)) {
            throw new \InvalidArgumentException('non-nullable postal_delivery_duty_paid cannot be null');
        }
        $this->container['postal_delivery_duty_paid'] = $postal_delivery_duty_paid;

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

