<?php
/**
 * CustomsDetails
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
 * CustomsDetails Class Doc Comment
 *
 * @category Class
 * @description For international shipments, this section contains information necessary for customs about the exported goods. ExportDocument can contain one or more positions as child element. This data is also transferred as electronic declaration to customs. The custom details are mandatory depending on whether the parcel will go to a country outside the European Customs Union. For DHL Parcel International (V53WPAK) CN23 will returned as a separate document, while for Warenpost International the customs information will be printed onto the shipment label (CN22).
 * @package  Spy\DHLParcel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomsDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * Return an object with the Model Fields
      *
      * @return CustomsDetailsModelFields
      */
    public static function GetModelFields(): CustomsDetailsModelFields
    {
        return new CustomsDetailsModelFields();
    }

    /**
      * Return an object with the Model Attributes
      *
      * @return CustomsDetailsModelAttributes
      */
    public static function GetModelAttributes(): CustomsDetailsModelAttributes
    {
        return new CustomsDetailsModelAttributes();
    }

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomsDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'invoice_no' => 'string',
        'export_type' => 'string',
        'export_description' => 'string',
        'shipping_conditions' => 'string',
        'permit_no' => 'string',
        'attestation_no' => 'string',
        'has_electronic_export_notification' => 'bool',
        'mrn' => 'string',
        'postal_charges' => '\Spy\DHLParcel\Model\Value',
        'office_of_origin' => 'string',
        'shipper_customs_ref' => 'string',
        'consignee_customs_ref' => 'string',
        'items' => '\Spy\DHLParcel\Model\Commodity[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'invoice_no' => null,
        'export_type' => null,
        'export_description' => null,
        'shipping_conditions' => null,
        'permit_no' => null,
        'attestation_no' => null,
        'has_electronic_export_notification' => null,
        'mrn' => null,
        'postal_charges' => null,
        'office_of_origin' => null,
        'shipper_customs_ref' => null,
        'consignee_customs_ref' => null,
        'items' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'invoice_no' => false,
        'export_type' => false,
        'export_description' => false,
        'shipping_conditions' => false,
        'permit_no' => false,
        'attestation_no' => false,
        'has_electronic_export_notification' => false,
        'mrn' => false,
        'postal_charges' => false,
        'office_of_origin' => false,
        'shipper_customs_ref' => false,
        'consignee_customs_ref' => false,
        'items' => false
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
        'invoice_no' => 'invoiceNo',
        'export_type' => 'exportType',
        'export_description' => 'exportDescription',
        'shipping_conditions' => 'shippingConditions',
        'permit_no' => 'permitNo',
        'attestation_no' => 'attestationNo',
        'has_electronic_export_notification' => 'hasElectronicExportNotification',
        'mrn' => 'MRN',
        'postal_charges' => 'postalCharges',
        'office_of_origin' => 'officeOfOrigin',
        'shipper_customs_ref' => 'shipperCustomsRef',
        'consignee_customs_ref' => 'consigneeCustomsRef',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'invoice_no' => 'setInvoiceNo',
        'export_type' => 'setExportType',
        'export_description' => 'setExportDescription',
        'shipping_conditions' => 'setShippingConditions',
        'permit_no' => 'setPermitNo',
        'attestation_no' => 'setAttestationNo',
        'has_electronic_export_notification' => 'setHasElectronicExportNotification',
        'mrn' => 'setMrn',
        'postal_charges' => 'setPostalCharges',
        'office_of_origin' => 'setOfficeOfOrigin',
        'shipper_customs_ref' => 'setShipperCustomsRef',
        'consignee_customs_ref' => 'setConsigneeCustomsRef',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'invoice_no' => 'getInvoiceNo',
        'export_type' => 'getExportType',
        'export_description' => 'getExportDescription',
        'shipping_conditions' => 'getShippingConditions',
        'permit_no' => 'getPermitNo',
        'attestation_no' => 'getAttestationNo',
        'has_electronic_export_notification' => 'getHasElectronicExportNotification',
        'mrn' => 'getMrn',
        'postal_charges' => 'getPostalCharges',
        'office_of_origin' => 'getOfficeOfOrigin',
        'shipper_customs_ref' => 'getShipperCustomsRef',
        'consignee_customs_ref' => 'getConsigneeCustomsRef',
        'items' => 'getItems'
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

    public const EXPORT_TYPE_OTHER = 'OTHER';
    public const EXPORT_TYPE_PRESENT = 'PRESENT';
    public const EXPORT_TYPE_COMMERCIAL_SAMPLE = 'COMMERCIAL_SAMPLE';
    public const EXPORT_TYPE_DOCUMENT = 'DOCUMENT';
    public const EXPORT_TYPE_RETURN_OF_GOODS = 'RETURN_OF_GOODS';
    public const EXPORT_TYPE_COMMERCIAL_GOODS = 'COMMERCIAL_GOODS';
    public const SHIPPING_CONDITIONS_DDU = 'DDU';
    public const SHIPPING_CONDITIONS_DAP = 'DAP';
    public const SHIPPING_CONDITIONS_DDP = 'DDP';
    public const SHIPPING_CONDITIONS_DDX = 'DDX';
    public const SHIPPING_CONDITIONS_DXV = 'DXV';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExportTypeAllowableValues()
    {
        return [
            self::EXPORT_TYPE_OTHER,
            self::EXPORT_TYPE_PRESENT,
            self::EXPORT_TYPE_COMMERCIAL_SAMPLE,
            self::EXPORT_TYPE_DOCUMENT,
            self::EXPORT_TYPE_RETURN_OF_GOODS,
            self::EXPORT_TYPE_COMMERCIAL_GOODS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getShippingConditionsAllowableValues()
    {
        return [
            self::SHIPPING_CONDITIONS_DDU,
            self::SHIPPING_CONDITIONS_DAP,
            self::SHIPPING_CONDITIONS_DDP,
            self::SHIPPING_CONDITIONS_DDX,
            self::SHIPPING_CONDITIONS_DXV,
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
        $this->setIfExists('invoice_no', $data ?? [], null);
        $this->setIfExists('export_type', $data ?? [], null);
        $this->setIfExists('export_description', $data ?? [], null);
        $this->setIfExists('shipping_conditions', $data ?? [], null);
        $this->setIfExists('permit_no', $data ?? [], null);
        $this->setIfExists('attestation_no', $data ?? [], null);
        $this->setIfExists('has_electronic_export_notification', $data ?? [], null);
        $this->setIfExists('mrn', $data ?? [], null);
        $this->setIfExists('postal_charges', $data ?? [], null);
        $this->setIfExists('office_of_origin', $data ?? [], null);
        $this->setIfExists('shipper_customs_ref', $data ?? [], null);
        $this->setIfExists('consignee_customs_ref', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
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

        if (!is_null($this->container['invoice_no']) && (mb_strlen($this->container['invoice_no']) > 35)) {
            $invalidProperties[] = "invalid value for 'invoice_no', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['invoice_no']) && (mb_strlen($this->container['invoice_no']) < 0)) {
            $invalidProperties[] = "invalid value for 'invoice_no', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['export_type'] === null) {
            $invalidProperties[] = "'export_type' can't be null";
        }
        $allowedValues = $this->getExportTypeAllowableValues();
        if (!is_null($this->container['export_type']) && !in_array($this->container['export_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'export_type', must be one of '%s'",
                $this->container['export_type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['export_description']) && (mb_strlen($this->container['export_description']) > 80)) {
            $invalidProperties[] = "invalid value for 'export_description', the character length must be smaller than or equal to 80.";
        }

        if (!is_null($this->container['export_description']) && (mb_strlen($this->container['export_description']) < 0)) {
            $invalidProperties[] = "invalid value for 'export_description', the character length must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getShippingConditionsAllowableValues();
        if (!is_null($this->container['shipping_conditions']) && !in_array($this->container['shipping_conditions'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'shipping_conditions', must be one of '%s'",
                $this->container['shipping_conditions'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['permit_no']) && (mb_strlen($this->container['permit_no']) > 30)) {
            $invalidProperties[] = "invalid value for 'permit_no', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['permit_no']) && (mb_strlen($this->container['permit_no']) < 0)) {
            $invalidProperties[] = "invalid value for 'permit_no', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['attestation_no']) && (mb_strlen($this->container['attestation_no']) > 30)) {
            $invalidProperties[] = "invalid value for 'attestation_no', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['attestation_no']) && (mb_strlen($this->container['attestation_no']) < 0)) {
            $invalidProperties[] = "invalid value for 'attestation_no', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['mrn']) && (mb_strlen($this->container['mrn']) > 18)) {
            $invalidProperties[] = "invalid value for 'mrn', the character length must be smaller than or equal to 18.";
        }

        if ($this->container['postal_charges'] === null) {
            $invalidProperties[] = "'postal_charges' can't be null";
        }
        if (!is_null($this->container['office_of_origin']) && (mb_strlen($this->container['office_of_origin']) > 35)) {
            $invalidProperties[] = "invalid value for 'office_of_origin', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['office_of_origin']) && (mb_strlen($this->container['office_of_origin']) < 0)) {
            $invalidProperties[] = "invalid value for 'office_of_origin', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['shipper_customs_ref']) && (mb_strlen($this->container['shipper_customs_ref']) > 35)) {
            $invalidProperties[] = "invalid value for 'shipper_customs_ref', the character length must be smaller than or equal to 35.";
        }

        if (!is_null($this->container['consignee_customs_ref']) && (mb_strlen($this->container['consignee_customs_ref']) > 35)) {
            $invalidProperties[] = "invalid value for 'consignee_customs_ref', the character length must be smaller than or equal to 35.";
        }

        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
        }
        if ((count($this->container['items']) > 99)) {
            $invalidProperties[] = "invalid value for 'items', number of items must be less than or equal to 99.";
        }

        if ((count($this->container['items']) < 1)) {
            $invalidProperties[] = "invalid value for 'items', number of items must be greater than or equal to 1.";
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
     * Gets invoice_no
     *
     * @return string|null
     */
    public function getInvoiceNo()
    {
        return $this->container['invoice_no'];
    }

    /**
     * Sets invoice_no
     *
     * @param string|null $invoice_no Invoice number
     *
     * @return self
     */
    public function setInvoiceNo($invoice_no)
    {
        if (is_null($invoice_no)) {
            throw new \InvalidArgumentException('non-nullable invoice_no cannot be null');
        }
        if ((mb_strlen($invoice_no) > 35)) {
            throw new \InvalidArgumentException('invalid length for $invoice_no when calling CustomsDetails., must be smaller than or equal to 35.');
        }
        if ((mb_strlen($invoice_no) < 0)) {
            throw new \InvalidArgumentException('invalid length for $invoice_no when calling CustomsDetails., must be bigger than or equal to 0.');
        }

        $this->container['invoice_no'] = $invoice_no;

        return $this;
    }

    /**
     * Gets export_type
     *
     * @return string
     */
    public function getExportType()
    {
        return $this->container['export_type'];
    }

    /**
     * Sets export_type
     *
     * @param string $export_type This contains the category of goods contained in parcel.
     *
     * @return self
     */
    public function setExportType($export_type)
    {
        if (is_null($export_type)) {
            throw new \InvalidArgumentException('non-nullable export_type cannot be null');
        }
        $allowedValues = $this->getExportTypeAllowableValues();
        if (!in_array($export_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'export_type', must be one of '%s'",
                    $export_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['export_type'] = $export_type;

        return $this;
    }

    /**
     * Gets export_description
     *
     * @return string|null
     */
    public function getExportDescription()
    {
        return $this->container['export_description'];
    }

    /**
     * Sets export_description
     *
     * @param string|null $export_description Mandatory if exporttype is 'OTHER'
     *
     * @return self
     */
    public function setExportDescription($export_description)
    {
        if (is_null($export_description)) {
            throw new \InvalidArgumentException('non-nullable export_description cannot be null');
        }
        if ((mb_strlen($export_description) > 80)) {
            throw new \InvalidArgumentException('invalid length for $export_description when calling CustomsDetails., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($export_description) < 0)) {
            throw new \InvalidArgumentException('invalid length for $export_description when calling CustomsDetails., must be bigger than or equal to 0.');
        }

        $this->container['export_description'] = $export_description;

        return $this;
    }

    /**
     * Gets shipping_conditions
     *
     * @return string|null
     */
    public function getShippingConditions()
    {
        return $this->container['shipping_conditions'];
    }

    /**
     * Sets shipping_conditions
     *
     * @param string|null $shipping_conditions Aka 'Terms of Trade' aka 'Frankatur'. The attribute is exclusively used for the product Europaket (V54EPAK). DDU is deprecated (use DAP instead).
     *
     * @return self
     */
    public function setShippingConditions($shipping_conditions)
    {
        if (is_null($shipping_conditions)) {
            throw new \InvalidArgumentException('non-nullable shipping_conditions cannot be null');
        }
        $allowedValues = $this->getShippingConditionsAllowableValues();
        if (!in_array($shipping_conditions, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'shipping_conditions', must be one of '%s'",
                    $shipping_conditions,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['shipping_conditions'] = $shipping_conditions;

        return $this;
    }

    /**
     * Gets permit_no
     *
     * @return string|null
     */
    public function getPermitNo()
    {
        return $this->container['permit_no'];
    }

    /**
     * Sets permit_no
     *
     * @param string|null $permit_no Permit number. Very rarely needed. Mostly relevant for higher value goods. An example use case would be an item made from crocodile leather which requires dedicated license / permit identified by that number.
     *
     * @return self
     */
    public function setPermitNo($permit_no)
    {
        if (is_null($permit_no)) {
            throw new \InvalidArgumentException('non-nullable permit_no cannot be null');
        }
        if ((mb_strlen($permit_no) > 30)) {
            throw new \InvalidArgumentException('invalid length for $permit_no when calling CustomsDetails., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($permit_no) < 0)) {
            throw new \InvalidArgumentException('invalid length for $permit_no when calling CustomsDetails., must be bigger than or equal to 0.');
        }

        $this->container['permit_no'] = $permit_no;

        return $this;
    }

    /**
     * Gets attestation_no
     *
     * @return string|null
     */
    public function getAttestationNo()
    {
        return $this->container['attestation_no'];
    }

    /**
     * Sets attestation_no
     *
     * @param string|null $attestation_no Attest or certification identified by this number. Very rarely needed. An example use case would be a medical shipment referring to an attestation that a certain amount of medicine may be imported within e.g. the current quarter of the year.
     *
     * @return self
     */
    public function setAttestationNo($attestation_no)
    {
        if (is_null($attestation_no)) {
            throw new \InvalidArgumentException('non-nullable attestation_no cannot be null');
        }
        if ((mb_strlen($attestation_no) > 30)) {
            throw new \InvalidArgumentException('invalid length for $attestation_no when calling CustomsDetails., must be smaller than or equal to 30.');
        }
        if ((mb_strlen($attestation_no) < 0)) {
            throw new \InvalidArgumentException('invalid length for $attestation_no when calling CustomsDetails., must be bigger than or equal to 0.');
        }

        $this->container['attestation_no'] = $attestation_no;

        return $this;
    }

    /**
     * Gets has_electronic_export_notification
     *
     * @return bool|null
     */
    public function getHasElectronicExportNotification()
    {
        return $this->container['has_electronic_export_notification'];
    }

    /**
     * Sets has_electronic_export_notification
     *
     * @param bool|null $has_electronic_export_notification flag confirming whether electronic record for export was made
     *
     * @return self
     */
    public function setHasElectronicExportNotification($has_electronic_export_notification)
    {
        if (is_null($has_electronic_export_notification)) {
            throw new \InvalidArgumentException('non-nullable has_electronic_export_notification cannot be null');
        }
        $this->container['has_electronic_export_notification'] = $has_electronic_export_notification;

        return $this;
    }

    /**
     * Gets mrn
     *
     * @return string|null
     */
    public function getMrn()
    {
        return $this->container['mrn'];
    }

    /**
     * Sets mrn
     *
     * @param string|null $mrn mrn
     *
     * @return self
     */
    public function setMrn($mrn)
    {
        if (is_null($mrn)) {
            throw new \InvalidArgumentException('non-nullable mrn cannot be null');
        }
        if ((mb_strlen($mrn) > 18)) {
            throw new \InvalidArgumentException('invalid length for $mrn when calling CustomsDetails., must be smaller than or equal to 18.');
        }

        $this->container['mrn'] = $mrn;

        return $this;
    }

    /**
     * Gets postal_charges
     *
     * @return \Spy\DHLParcel\Model\Value
     */
    public function getPostalCharges()
    {
        return $this->container['postal_charges'];
    }

    /**
     * Sets postal_charges
     *
     * @param \Spy\DHLParcel\Model\Value $postal_charges postal_charges
     *
     * @return self
     */
    public function setPostalCharges($postal_charges)
    {
        if (is_null($postal_charges)) {
            throw new \InvalidArgumentException('non-nullable postal_charges cannot be null');
        }
        $this->container['postal_charges'] = $postal_charges;

        return $this;
    }

    /**
     * Gets office_of_origin
     *
     * @return string|null
     */
    public function getOfficeOfOrigin()
    {
        return $this->container['office_of_origin'];
    }

    /**
     * Sets office_of_origin
     *
     * @param string|null $office_of_origin Optional. Will appear on CN23.
     *
     * @return self
     */
    public function setOfficeOfOrigin($office_of_origin)
    {
        if (is_null($office_of_origin)) {
            throw new \InvalidArgumentException('non-nullable office_of_origin cannot be null');
        }
        if ((mb_strlen($office_of_origin) > 35)) {
            throw new \InvalidArgumentException('invalid length for $office_of_origin when calling CustomsDetails., must be smaller than or equal to 35.');
        }
        if ((mb_strlen($office_of_origin) < 0)) {
            throw new \InvalidArgumentException('invalid length for $office_of_origin when calling CustomsDetails., must be bigger than or equal to 0.');
        }

        $this->container['office_of_origin'] = $office_of_origin;

        return $this;
    }

    /**
     * Gets shipper_customs_ref
     *
     * @return string|null
     */
    public function getShipperCustomsRef()
    {
        return $this->container['shipper_customs_ref'];
    }

    /**
     * Sets shipper_customs_ref
     *
     * @param string|null $shipper_customs_ref Optional. The customs reference is used by customs authorities to identify economics operators an/or other persons involved. With the given reference, granted authorizations and/or relevant processes in customs clearance an/or taxation can be taken into account. Aka Zoll-Nummer or EORI-Number but dependent on destination.
     *
     * @return self
     */
    public function setShipperCustomsRef($shipper_customs_ref)
    {
        if (is_null($shipper_customs_ref)) {
            throw new \InvalidArgumentException('non-nullable shipper_customs_ref cannot be null');
        }
        if ((mb_strlen($shipper_customs_ref) > 35)) {
            throw new \InvalidArgumentException('invalid length for $shipper_customs_ref when calling CustomsDetails., must be smaller than or equal to 35.');
        }

        $this->container['shipper_customs_ref'] = $shipper_customs_ref;

        return $this;
    }

    /**
     * Gets consignee_customs_ref
     *
     * @return string|null
     */
    public function getConsigneeCustomsRef()
    {
        return $this->container['consignee_customs_ref'];
    }

    /**
     * Sets consignee_customs_ref
     *
     * @param string|null $consignee_customs_ref Optional. The customs reference is used by customs authorities to identify economics operators an/or other persons involved. With the given reference, granted authorizations and/or relevant processes in customs clearance an/or taxation can be taken into account. Aka Zoll-Nummer or EORI-Number but dependent on destination.
     *
     * @return self
     */
    public function setConsigneeCustomsRef($consignee_customs_ref)
    {
        if (is_null($consignee_customs_ref)) {
            throw new \InvalidArgumentException('non-nullable consignee_customs_ref cannot be null');
        }
        if ((mb_strlen($consignee_customs_ref) > 35)) {
            throw new \InvalidArgumentException('invalid length for $consignee_customs_ref when calling CustomsDetails., must be smaller than or equal to 35.');
        }

        $this->container['consignee_customs_ref'] = $consignee_customs_ref;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \Spy\DHLParcel\Model\Commodity[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \Spy\DHLParcel\Model\Commodity[] $items Commodity types in that package
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }

        if ((count($items) > 99)) {
            throw new \InvalidArgumentException('invalid value for $items when calling CustomsDetails., number of items must be less than or equal to 99.');
        }
        if ((count($items) < 1)) {
            throw new \InvalidArgumentException('invalid length for $items when calling CustomsDetails., number of items must be greater than or equal to 1.');
        }
        $this->container['items'] = $items;

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


