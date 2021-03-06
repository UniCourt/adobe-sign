<?php
/**
 * FormFieldHyperlink
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
 * FormFieldHyperlink Class Doc Comment
 *
 * @category Class
 * @description Hyperlink-specific data for hyperlink form fields
 * @package  Adobe\ESign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FormFieldHyperlink implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FormFieldHyperlink';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'linkType' => 'string',
        'documentLocation' => '\Adobe\ESign\Model\FormFieldLocation',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'linkType' => null,
        'documentLocation' => null,
        'url' => null
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
        'linkType' => 'linkType',
        'documentLocation' => 'documentLocation',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'linkType' => 'setLinkType',
        'documentLocation' => 'setDocumentLocation',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'linkType' => 'getLinkType',
        'documentLocation' => 'getDocumentLocation',
        'url' => 'getUrl'
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

    const LINK_TYPE_INTERNAL = 'INTERNAL';
    const LINK_TYPE_EXTERNAL = 'EXTERNAL';
    const LINK_TYPE_FROM_TEXT = 'FROM_TEXT';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLinkTypeAllowableValues()
    {
        return [
            self::LINK_TYPE_INTERNAL,
            self::LINK_TYPE_EXTERNAL,
            self::LINK_TYPE_FROM_TEXT,
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
        $this->container['linkType'] = isset($data['linkType']) ? $data['linkType'] : null;
        $this->container['documentLocation'] = isset($data['documentLocation']) ? $data['documentLocation'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getLinkTypeAllowableValues();
        if (!is_null($this->container['linkType']) && !in_array($this->container['linkType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'linkType', must be one of '%s'",
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
     * Gets linkType
     *
     * @return string
     */
    public function getLinkType()
    {
        return $this->container['linkType'];
    }

    /**
     * Sets linkType
     *
     * @param string $linkType Type of link in an agreement.
     *
     * @return $this
     */
    public function setLinkType($linkType)
    {
        $allowedValues = $this->getLinkTypeAllowableValues();
        if (!is_null($linkType) && !in_array($linkType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'linkType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['linkType'] = $linkType;

        return $this;
    }

    /**
     * Gets documentLocation
     *
     * @return \Adobe\ESign\Model\FormFieldLocation
     */
    public function getDocumentLocation()
    {
        return $this->container['documentLocation'];
    }

    /**
     * Sets documentLocation
     *
     * @param \Adobe\ESign\Model\FormFieldLocation $documentLocation Location on the document pointed by the link in case of INTERNAL type link
     *
     * @return $this
     */
    public function setDocumentLocation($documentLocation)
    {
        $this->container['documentLocation'] = $documentLocation;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url URL, in case of EXTERNAL type link
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

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


