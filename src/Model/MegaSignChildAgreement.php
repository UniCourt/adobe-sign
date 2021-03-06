<?php
/**
 * MegaSignChildAgreement
 *
 * PHP version 5
 *
 * @category Class
 * @package  Adobe\ESign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 6.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.4
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Adobe\ESign\Model;

use \ArrayAccess;
use \Adobe\ESign\ObjectSerializer;

/**
 * MegaSignChildAgreement Class Doc Comment
 *
 * @category Class
 * @package  Adobe\ESign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MegaSignChildAgreement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MegaSignChildAgreement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'displayDate' => '\DateTime',
        'esign' => 'bool',
        'name' => 'string',
        'id' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'displayDate' => 'date',
        'esign' => null,
        'name' => null,
        'id' => null,
        'status' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'displayDate' => 'displayDate',
        'esign' => 'esign',
        'name' => 'name',
        'id' => 'id',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'displayDate' => 'setDisplayDate',
        'esign' => 'setEsign',
        'name' => 'setName',
        'id' => 'setId',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'displayDate' => 'getDisplayDate',
        'esign' => 'getEsign',
        'name' => 'getName',
        'id' => 'getId',
        'status' => 'getStatus'
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
        return self::$swaggerModelName;
    }

    const STATUS_WAITING_FOR_MY_SIGNATURE = 'WAITING_FOR_MY_SIGNATURE';
    const STATUS_WAITING_FOR_MY_APPROVAL = 'WAITING_FOR_MY_APPROVAL';
    const STATUS_WAITING_FOR_MY_DELEGATION = 'WAITING_FOR_MY_DELEGATION';
    const STATUS_WAITING_FOR_MY_ACKNOWLEDGEMENT = 'WAITING_FOR_MY_ACKNOWLEDGEMENT';
    const STATUS_WAITING_FOR_MY_ACCEPTANCE = 'WAITING_FOR_MY_ACCEPTANCE';
    const STATUS_WAITING_FOR_MY_FORM_FILLING = 'WAITING_FOR_MY_FORM_FILLING';
    const STATUS_OUT_FOR_SIGNATURE = 'OUT_FOR_SIGNATURE';
    const STATUS_OUT_FOR_APPROVAL = 'OUT_FOR_APPROVAL';
    const STATUS_OUT_FOR_DELIVERY = 'OUT_FOR_DELIVERY';
    const STATUS_OUT_FOR_ACCEPTANCE = 'OUT_FOR_ACCEPTANCE';
    const STATUS_OUT_FOR_FORM_FILLING = 'OUT_FOR_FORM_FILLING';
    const STATUS_SIGNED = 'SIGNED';
    const STATUS_APPROVED = 'APPROVED';
    const STATUS_FORM_FILLED = 'FORM_FILLED';
    const STATUS_DELIVERED = 'DELIVERED';
    const STATUS_ACCEPTED = 'ACCEPTED';
    const STATUS_ARCHIVED = 'ARCHIVED';
    const STATUS_CANCELLED = 'CANCELLED';
    const STATUS_EXPIRED = 'EXPIRED';
    const STATUS_WAITING_FOR_AUTHORING = 'WAITING_FOR_AUTHORING';
    const STATUS_WAITING_FOR_PREFILL = 'WAITING_FOR_PREFILL';
    const STATUS_DRAFT = 'DRAFT';
    const STATUS_DOCUMENTS_NOT_YET_PROCESSED = 'DOCUMENTS_NOT_YET_PROCESSED';
    const STATUS_WAITING_FOR_MY_VERIFICATION = 'WAITING_FOR_MY_VERIFICATION';
    const STATUS_WAITING_FOR_VERIFICATION = 'WAITING_FOR_VERIFICATION';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_WAITING_FOR_MY_SIGNATURE,
            self::STATUS_WAITING_FOR_MY_APPROVAL,
            self::STATUS_WAITING_FOR_MY_DELEGATION,
            self::STATUS_WAITING_FOR_MY_ACKNOWLEDGEMENT,
            self::STATUS_WAITING_FOR_MY_ACCEPTANCE,
            self::STATUS_WAITING_FOR_MY_FORM_FILLING,
            self::STATUS_OUT_FOR_SIGNATURE,
            self::STATUS_OUT_FOR_APPROVAL,
            self::STATUS_OUT_FOR_DELIVERY,
            self::STATUS_OUT_FOR_ACCEPTANCE,
            self::STATUS_OUT_FOR_FORM_FILLING,
            self::STATUS_SIGNED,
            self::STATUS_APPROVED,
            self::STATUS_FORM_FILLED,
            self::STATUS_DELIVERED,
            self::STATUS_ACCEPTED,
            self::STATUS_ARCHIVED,
            self::STATUS_CANCELLED,
            self::STATUS_EXPIRED,
            self::STATUS_WAITING_FOR_AUTHORING,
            self::STATUS_WAITING_FOR_PREFILL,
            self::STATUS_DRAFT,
            self::STATUS_DOCUMENTS_NOT_YET_PROCESSED,
            self::STATUS_WAITING_FOR_MY_VERIFICATION,
            self::STATUS_WAITING_FOR_VERIFICATION,
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
        $this->container['displayDate'] = isset($data['displayDate']) ? $data['displayDate'] : null;
        $this->container['esign'] = isset($data['esign']) ? $data['esign'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets displayDate
     *
     * @return \DateTime
     */
    public function getDisplayDate()
    {
        return $this->container['displayDate'];
    }

    /**
     * Sets displayDate
     *
     * @param \DateTime $displayDate The display date for the agreement. Format would be yyyy-MM-dd'T'HH:mm:ssZ. For example, e.g 2016-02-25T18:46:19Z represents UTC time
     *
     * @return $this
     */
    public function setDisplayDate($displayDate)
    {
        $this->container['displayDate'] = $displayDate;

        return $this;
    }

    /**
     * Gets esign
     *
     * @return bool
     */
    public function getEsign()
    {
        return $this->container['esign'];
    }

    /**
     * Sets esign
     *
     * @param bool $esign True if this is an e-sign document
     *
     * @return $this
     */
    public function setEsign($esign)
    {
        $this->container['esign'] = $esign;

        return $this;
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
     * @param string $name Name of the Agreement
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The unique identifier of the agreement.If provided in POST, it will simply be ignored
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status This is a server generated attribute which provides the detailed status of an agreement with respect to the apiCaller
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


