<?php
/**
 * LibraryView
 *
 * PHP version 5
 *
 * @category Class
 * @package  Adobe\ESign\
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

namespace Adobe\ESign\\Model;

use \ArrayAccess;
use \Adobe\ESign\\ObjectSerializer;

/**
 * LibraryView Class Doc Comment
 *
 * @category Class
 * @package  Adobe\ESign\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LibraryView implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LibraryView';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'is_current' => 'bool',
        'embedded_code' => 'string',
        'expiration' => '\DateTime',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'is_current' => null,
        'embedded_code' => null,
        'expiration' => 'date',
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
        'is_current' => 'isCurrent',
        'embedded_code' => 'embeddedCode',
        'expiration' => 'expiration',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_current' => 'setIsCurrent',
        'embedded_code' => 'setEmbeddedCode',
        'expiration' => 'setExpiration',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_current' => 'getIsCurrent',
        'embedded_code' => 'getEmbeddedCode',
        'expiration' => 'getExpiration',
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
        $this->container['is_current'] = isset($data['is_current']) ? $data['is_current'] : null;
        $this->container['embedded_code'] = isset($data['embedded_code']) ? $data['embedded_code'] : null;
        $this->container['expiration'] = isset($data['expiration']) ? $data['expiration'] : null;
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
     * Gets is_current
     *
     * @return bool
     */
    public function getIsCurrent()
    {
        return $this->container['is_current'];
    }

    /**
     * Sets is_current
     *
     * @param bool $is_current True if this view is the current view
     *
     * @return $this
     */
    public function setIsCurrent($is_current)
    {
        $this->container['is_current'] = $is_current;

        return $this;
    }

    /**
     * Gets embedded_code
     *
     * @return string
     */
    public function getEmbeddedCode()
    {
        return $this->container['embedded_code'];
    }

    /**
     * Sets embedded_code
     *
     * @param string $embedded_code Embedded code of url of resource
     *
     * @return $this
     */
    public function setEmbeddedCode($embedded_code)
    {
        $this->container['embedded_code'] = $embedded_code;

        return $this;
    }

    /**
     * Gets expiration
     *
     * @return \DateTime
     */
    public function getExpiration()
    {
        return $this->container['expiration'];
    }

    /**
     * Sets expiration
     *
     * @param \DateTime $expiration Expiration of user url
     *
     * @return $this
     */
    public function setExpiration($expiration)
    {
        $this->container['expiration'] = $expiration;

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
     * @param string $url Url of resource location
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


