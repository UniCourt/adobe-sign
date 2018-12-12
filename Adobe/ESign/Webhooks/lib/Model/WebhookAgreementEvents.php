<?php
/**
 * WebhookAgreementEvents
 *
 * PHP version 5
 *
 * @category Class
 * @package  Adobe\ESign\Webhooks
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 6.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Adobe\ESign\Webhooks\Model;

use \ArrayAccess;
use \Adobe\ESign\Webhooks\ObjectSerializer;

/**
 * WebhookAgreementEvents Class Doc Comment
 *
 * @category Class
 * @package  Adobe\ESign\Webhooks
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebhookAgreementEvents implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebhookAgreementEvents';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'include_detailed_info' => 'bool',
        'include_participants_info' => 'bool',
        'include_signed_documents' => 'bool',
        'include_documents_info' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'include_detailed_info' => null,
        'include_participants_info' => null,
        'include_signed_documents' => null,
        'include_documents_info' => null
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
        'include_detailed_info' => 'includeDetailedInfo',
        'include_participants_info' => 'includeParticipantsInfo',
        'include_signed_documents' => 'includeSignedDocuments',
        'include_documents_info' => 'includeDocumentsInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'include_detailed_info' => 'setIncludeDetailedInfo',
        'include_participants_info' => 'setIncludeParticipantsInfo',
        'include_signed_documents' => 'setIncludeSignedDocuments',
        'include_documents_info' => 'setIncludeDocumentsInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'include_detailed_info' => 'getIncludeDetailedInfo',
        'include_participants_info' => 'getIncludeParticipantsInfo',
        'include_signed_documents' => 'getIncludeSignedDocuments',
        'include_documents_info' => 'getIncludeDocumentsInfo'
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
        $this->container['include_detailed_info'] = isset($data['include_detailed_info']) ? $data['include_detailed_info'] : null;
        $this->container['include_participants_info'] = isset($data['include_participants_info']) ? $data['include_participants_info'] : null;
        $this->container['include_signed_documents'] = isset($data['include_signed_documents']) ? $data['include_signed_documents'] : null;
        $this->container['include_documents_info'] = isset($data['include_documents_info']) ? $data['include_documents_info'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets include_detailed_info
     *
     * @return bool
     */
    public function getIncludeDetailedInfo()
    {
        return $this->container['include_detailed_info'];
    }

    /**
     * Sets include_detailed_info
     *
     * @param bool $include_detailed_info Determines whether agreement detailed info will be returned in the response payload
     *
     * @return $this
     */
    public function setIncludeDetailedInfo($include_detailed_info)
    {
        $this->container['include_detailed_info'] = $include_detailed_info;

        return $this;
    }

    /**
     * Gets include_participants_info
     *
     * @return bool
     */
    public function getIncludeParticipantsInfo()
    {
        return $this->container['include_participants_info'];
    }

    /**
     * Sets include_participants_info
     *
     * @param bool $include_participants_info Determines whether participants info will be returned in the response payload
     *
     * @return $this
     */
    public function setIncludeParticipantsInfo($include_participants_info)
    {
        $this->container['include_participants_info'] = $include_participants_info;

        return $this;
    }

    /**
     * Gets include_signed_documents
     *
     * @return bool
     */
    public function getIncludeSignedDocuments()
    {
        return $this->container['include_signed_documents'];
    }

    /**
     * Sets include_signed_documents
     *
     * @param bool $include_signed_documents Determines whether documents will be returned in webhook response payload. If set to true, signed document will be returned in base 64 encoded format in JSON when signing is complete
     *
     * @return $this
     */
    public function setIncludeSignedDocuments($include_signed_documents)
    {
        $this->container['include_signed_documents'] = $include_signed_documents;

        return $this;
    }

    /**
     * Gets include_documents_info
     *
     * @return bool
     */
    public function getIncludeDocumentsInfo()
    {
        return $this->container['include_documents_info'];
    }

    /**
     * Sets include_documents_info
     *
     * @param bool $include_documents_info Determines whether document info will be returned in the response payload
     *
     * @return $this
     */
    public function setIncludeDocumentsInfo($include_documents_info)
    {
        $this->container['include_documents_info'] = $include_documents_info;

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


