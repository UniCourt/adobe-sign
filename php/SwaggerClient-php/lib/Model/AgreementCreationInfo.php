<?php
/**
 * AgreementCreationInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * AgreementCreationInfo Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AgreementCreationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AgreementCreationInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'locale' => 'string',
        'vaulting_info' => '\Swagger\Client\Model\VaultingInfo',
        'security_option' => '\Swagger\Client\Model\SecurityOption',
        'post_sign_option' => '\Swagger\Client\Model\PostSignOption',
        'ccs' => '\Swagger\Client\Model\AgreementCcInfo[]',
        'document_visibility_enabled' => 'bool',
        'sender_email' => 'string',
        'id' => 'string',
        'state' => 'string',
        'merge_field_info' => '\Swagger\Client\Model\MergefieldInfo[]',
        'first_reminder_delay' => 'int',
        'email_option' => '\Swagger\Client\Model\EmailOption',
        'signature_type' => 'string',
        'external_id' => '\Swagger\Client\Model\ExternalId',
        'message' => 'string',
        'device_info' => '\Swagger\Client\Model\OfflineDeviceInfo',
        'reminder_frequency' => 'string',
        'created_date' => '\DateTime',
        'participant_sets_info' => '\Swagger\Client\Model\ParticipantSetInfo[]',
        'expiration_time' => '\Swagger\Client\Model\\DateTime',
        'form_field_layer_templates' => '\Swagger\Client\Model\FileInfo[]',
        'name' => 'string',
        'file_infos' => '\Swagger\Client\Model\FileInfo[]',
        'workflow_id' => 'string',
        'status' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'locale' => null,
        'vaulting_info' => null,
        'security_option' => null,
        'post_sign_option' => null,
        'ccs' => null,
        'document_visibility_enabled' => null,
        'sender_email' => null,
        'id' => null,
        'state' => null,
        'merge_field_info' => null,
        'first_reminder_delay' => null,
        'email_option' => null,
        'signature_type' => null,
        'external_id' => null,
        'message' => null,
        'device_info' => null,
        'reminder_frequency' => null,
        'created_date' => 'date',
        'participant_sets_info' => null,
        'expiration_time' => null,
        'form_field_layer_templates' => null,
        'name' => null,
        'file_infos' => null,
        'workflow_id' => null,
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
        'locale' => 'locale',
        'vaulting_info' => 'vaultingInfo',
        'security_option' => 'securityOption',
        'post_sign_option' => 'postSignOption',
        'ccs' => 'ccs',
        'document_visibility_enabled' => 'documentVisibilityEnabled',
        'sender_email' => 'senderEmail',
        'id' => 'id',
        'state' => 'state',
        'merge_field_info' => 'mergeFieldInfo',
        'first_reminder_delay' => 'firstReminderDelay',
        'email_option' => 'emailOption',
        'signature_type' => 'signatureType',
        'external_id' => 'externalId',
        'message' => 'message',
        'device_info' => 'deviceInfo',
        'reminder_frequency' => 'reminderFrequency',
        'created_date' => 'createdDate',
        'participant_sets_info' => 'participantSetsInfo',
        'expiration_time' => 'expirationTime',
        'form_field_layer_templates' => 'formFieldLayerTemplates',
        'name' => 'name',
        'file_infos' => 'fileInfos',
        'workflow_id' => 'workflowId',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'locale' => 'setLocale',
        'vaulting_info' => 'setVaultingInfo',
        'security_option' => 'setSecurityOption',
        'post_sign_option' => 'setPostSignOption',
        'ccs' => 'setCcs',
        'document_visibility_enabled' => 'setDocumentVisibilityEnabled',
        'sender_email' => 'setSenderEmail',
        'id' => 'setId',
        'state' => 'setState',
        'merge_field_info' => 'setMergeFieldInfo',
        'first_reminder_delay' => 'setFirstReminderDelay',
        'email_option' => 'setEmailOption',
        'signature_type' => 'setSignatureType',
        'external_id' => 'setExternalId',
        'message' => 'setMessage',
        'device_info' => 'setDeviceInfo',
        'reminder_frequency' => 'setReminderFrequency',
        'created_date' => 'setCreatedDate',
        'participant_sets_info' => 'setParticipantSetsInfo',
        'expiration_time' => 'setExpirationTime',
        'form_field_layer_templates' => 'setFormFieldLayerTemplates',
        'name' => 'setName',
        'file_infos' => 'setFileInfos',
        'workflow_id' => 'setWorkflowId',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'locale' => 'getLocale',
        'vaulting_info' => 'getVaultingInfo',
        'security_option' => 'getSecurityOption',
        'post_sign_option' => 'getPostSignOption',
        'ccs' => 'getCcs',
        'document_visibility_enabled' => 'getDocumentVisibilityEnabled',
        'sender_email' => 'getSenderEmail',
        'id' => 'getId',
        'state' => 'getState',
        'merge_field_info' => 'getMergeFieldInfo',
        'first_reminder_delay' => 'getFirstReminderDelay',
        'email_option' => 'getEmailOption',
        'signature_type' => 'getSignatureType',
        'external_id' => 'getExternalId',
        'message' => 'getMessage',
        'device_info' => 'getDeviceInfo',
        'reminder_frequency' => 'getReminderFrequency',
        'created_date' => 'getCreatedDate',
        'participant_sets_info' => 'getParticipantSetsInfo',
        'expiration_time' => 'getExpirationTime',
        'form_field_layer_templates' => 'getFormFieldLayerTemplates',
        'name' => 'getName',
        'file_infos' => 'getFileInfos',
        'workflow_id' => 'getWorkflowId',
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

    const STATE_AUTHORING = 'AUTHORING';
    const STATE_DRAFT = 'DRAFT';
    const STATE_IN_PROCESS = 'IN_PROCESS';
    const SIGNATURE_TYPE_ESIGN = 'ESIGN';
    const SIGNATURE_TYPE_WRITTEN = 'WRITTEN';
    const REMINDER_FREQUENCY_DAILY_UNTIL_SIGNED = 'DAILY_UNTIL_SIGNED';
    const REMINDER_FREQUENCY_WEEKDAILY_UNTIL_SIGNED = 'WEEKDAILY_UNTIL_SIGNED';
    const REMINDER_FREQUENCY_EVERY_OTHER_DAY_UNTIL_SIGNED = 'EVERY_OTHER_DAY_UNTIL_SIGNED';
    const REMINDER_FREQUENCY_EVERY_THIRD_DAY_UNTIL_SIGNED = 'EVERY_THIRD_DAY_UNTIL_SIGNED';
    const REMINDER_FREQUENCY_EVERY_FIFTH_DAY_UNTIL_SIGNED = 'EVERY_FIFTH_DAY_UNTIL_SIGNED';
    const REMINDER_FREQUENCY_WEEKLY_UNTIL_SIGNED = 'WEEKLY_UNTIL_SIGNED';
    const STATUS_OUT_FOR_SIGNATURE = 'OUT_FOR_SIGNATURE';
    const STATUS_OUT_FOR_DELIVERY = 'OUT_FOR_DELIVERY';
    const STATUS_OUT_FOR_ACCEPTANCE = 'OUT_FOR_ACCEPTANCE';
    const STATUS_OUT_FOR_FORM_FILLING = 'OUT_FOR_FORM_FILLING';
    const STATUS_OUT_FOR_APPROVAL = 'OUT_FOR_APPROVAL';
    const STATUS_AUTHORING = 'AUTHORING';
    const STATUS_CANCELLED = 'CANCELLED';
    const STATUS_SIGNED = 'SIGNED';
    const STATUS_APPROVED = 'APPROVED';
    const STATUS_DELIVERED = 'DELIVERED';
    const STATUS_ACCEPTED = 'ACCEPTED';
    const STATUS_FORM_FILLED = 'FORM_FILLED';
    const STATUS_EXPIRED = 'EXPIRED';
    const STATUS_ARCHIVED = 'ARCHIVED';
    const STATUS_PREFILL = 'PREFILL';
    const STATUS_WIDGET_WAITING_FOR_VERIFICATION = 'WIDGET_WAITING_FOR_VERIFICATION';
    const STATUS_DRAFT = 'DRAFT';
    const STATUS_DOCUMENTS_NOT_YET_PROCESSED = 'DOCUMENTS_NOT_YET_PROCESSED';
    const STATUS_WAITING_FOR_FAXIN = 'WAITING_FOR_FAXIN';
    const STATUS_WAITING_FOR_VERIFICATION = 'WAITING_FOR_VERIFICATION';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_AUTHORING,
            self::STATE_DRAFT,
            self::STATE_IN_PROCESS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSignatureTypeAllowableValues()
    {
        return [
            self::SIGNATURE_TYPE_ESIGN,
            self::SIGNATURE_TYPE_WRITTEN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReminderFrequencyAllowableValues()
    {
        return [
            self::REMINDER_FREQUENCY_DAILY_UNTIL_SIGNED,
            self::REMINDER_FREQUENCY_WEEKDAILY_UNTIL_SIGNED,
            self::REMINDER_FREQUENCY_EVERY_OTHER_DAY_UNTIL_SIGNED,
            self::REMINDER_FREQUENCY_EVERY_THIRD_DAY_UNTIL_SIGNED,
            self::REMINDER_FREQUENCY_EVERY_FIFTH_DAY_UNTIL_SIGNED,
            self::REMINDER_FREQUENCY_WEEKLY_UNTIL_SIGNED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OUT_FOR_SIGNATURE,
            self::STATUS_OUT_FOR_DELIVERY,
            self::STATUS_OUT_FOR_ACCEPTANCE,
            self::STATUS_OUT_FOR_FORM_FILLING,
            self::STATUS_OUT_FOR_APPROVAL,
            self::STATUS_AUTHORING,
            self::STATUS_CANCELLED,
            self::STATUS_SIGNED,
            self::STATUS_APPROVED,
            self::STATUS_DELIVERED,
            self::STATUS_ACCEPTED,
            self::STATUS_FORM_FILLED,
            self::STATUS_EXPIRED,
            self::STATUS_ARCHIVED,
            self::STATUS_PREFILL,
            self::STATUS_WIDGET_WAITING_FOR_VERIFICATION,
            self::STATUS_DRAFT,
            self::STATUS_DOCUMENTS_NOT_YET_PROCESSED,
            self::STATUS_WAITING_FOR_FAXIN,
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
        $this->container['locale'] = isset($data['locale']) ? $data['locale'] : null;
        $this->container['vaulting_info'] = isset($data['vaulting_info']) ? $data['vaulting_info'] : null;
        $this->container['security_option'] = isset($data['security_option']) ? $data['security_option'] : null;
        $this->container['post_sign_option'] = isset($data['post_sign_option']) ? $data['post_sign_option'] : null;
        $this->container['ccs'] = isset($data['ccs']) ? $data['ccs'] : null;
        $this->container['document_visibility_enabled'] = isset($data['document_visibility_enabled']) ? $data['document_visibility_enabled'] : null;
        $this->container['sender_email'] = isset($data['sender_email']) ? $data['sender_email'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['merge_field_info'] = isset($data['merge_field_info']) ? $data['merge_field_info'] : null;
        $this->container['first_reminder_delay'] = isset($data['first_reminder_delay']) ? $data['first_reminder_delay'] : null;
        $this->container['email_option'] = isset($data['email_option']) ? $data['email_option'] : null;
        $this->container['signature_type'] = isset($data['signature_type']) ? $data['signature_type'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['device_info'] = isset($data['device_info']) ? $data['device_info'] : null;
        $this->container['reminder_frequency'] = isset($data['reminder_frequency']) ? $data['reminder_frequency'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['participant_sets_info'] = isset($data['participant_sets_info']) ? $data['participant_sets_info'] : null;
        $this->container['expiration_time'] = isset($data['expiration_time']) ? $data['expiration_time'] : null;
        $this->container['form_field_layer_templates'] = isset($data['form_field_layer_templates']) ? $data['form_field_layer_templates'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['file_infos'] = isset($data['file_infos']) ? $data['file_infos'] : null;
        $this->container['workflow_id'] = isset($data['workflow_id']) ? $data['workflow_id'] : null;
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

        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSignatureTypeAllowableValues();
        if (!is_null($this->container['signature_type']) && !in_array($this->container['signature_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'signature_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getReminderFrequencyAllowableValues();
        if (!is_null($this->container['reminder_frequency']) && !in_array($this->container['reminder_frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reminder_frequency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string $locale The locale associated with this agreement - specifies the language for the signing page and emails, for example en_US or fr_FR. If none specified, defaults to the language configured for the agreement sender
     *
     * @return $this
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets vaulting_info
     *
     * @return \Swagger\Client\Model\VaultingInfo
     */
    public function getVaultingInfo()
    {
        return $this->container['vaulting_info'];
    }

    /**
     * Sets vaulting_info
     *
     * @param \Swagger\Client\Model\VaultingInfo $vaulting_info Vaulting properties that allows Adobe Sign to securely store documents with a vault provider
     *
     * @return $this
     */
    public function setVaultingInfo($vaulting_info)
    {
        $this->container['vaulting_info'] = $vaulting_info;

        return $this;
    }

    /**
     * Gets security_option
     *
     * @return \Swagger\Client\Model\SecurityOption
     */
    public function getSecurityOption()
    {
        return $this->container['security_option'];
    }

    /**
     * Sets security_option
     *
     * @param \Swagger\Client\Model\SecurityOption $security_option Optional secondary security parameters for the agreement. Should not be provided in offline agreement creation.
     *
     * @return $this
     */
    public function setSecurityOption($security_option)
    {
        $this->container['security_option'] = $security_option;

        return $this;
    }

    /**
     * Gets post_sign_option
     *
     * @return \Swagger\Client\Model\PostSignOption
     */
    public function getPostSignOption()
    {
        return $this->container['post_sign_option'];
    }

    /**
     * Sets post_sign_option
     *
     * @param \Swagger\Client\Model\PostSignOption $post_sign_option URL and associated properties for the success page the user will be taken to after completing the signing process. Should not be provided in offline agreement creation.
     *
     * @return $this
     */
    public function setPostSignOption($post_sign_option)
    {
        $this->container['post_sign_option'] = $post_sign_option;

        return $this;
    }

    /**
     * Gets ccs
     *
     * @return \Swagger\Client\Model\AgreementCcInfo[]
     */
    public function getCcs()
    {
        return $this->container['ccs'];
    }

    /**
     * Sets ccs
     *
     * @param \Swagger\Client\Model\AgreementCcInfo[] $ccs A list of one or more CCs that will be copied in the agreement transaction. The CCs will each receive an email at the beginning of the transaction and also when the final document is signed. The email addresses will also receive a copy of the document, attached as a PDF file. Should not be provided in offline agreement creation.
     *
     * @return $this
     */
    public function setCcs($ccs)
    {
        $this->container['ccs'] = $ccs;

        return $this;
    }

    /**
     * Gets document_visibility_enabled
     *
     * @return bool
     */
    public function getDocumentVisibilityEnabled()
    {
        return $this->container['document_visibility_enabled'];
    }

    /**
     * Sets document_visibility_enabled
     *
     * @param bool $document_visibility_enabled If set to true, enable limited document visibility. Should not be provided in offline agreement creation.
     *
     * @return $this
     */
    public function setDocumentVisibilityEnabled($document_visibility_enabled)
    {
        $this->container['document_visibility_enabled'] = $document_visibility_enabled;

        return $this;
    }

    /**
     * Gets sender_email
     *
     * @return string
     */
    public function getSenderEmail()
    {
        return $this->container['sender_email'];
    }

    /**
     * Sets sender_email
     *
     * @param string $sender_email Email of agreement sender. Only provided in GET. Can not be provided in POST/PUT request. If provided in POST/PUT, it will be ignored
     *
     * @return $this
     */
    public function setSenderEmail($sender_email)
    {
        $this->container['sender_email'] = $sender_email;

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
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state The state in which the agreement should land. The state field can only be provided in POST calls, will never get returned in GET /agreements/{ID} and will be ignored if provided in PUT /agreements/{ID} call. The eventual status of the agreement can be obtained from GET /agreements/ID
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($state) && !in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets merge_field_info
     *
     * @return \Swagger\Client\Model\MergefieldInfo[]
     */
    public function getMergeFieldInfo()
    {
        return $this->container['merge_field_info'];
    }

    /**
     * Sets merge_field_info
     *
     * @param \Swagger\Client\Model\MergefieldInfo[] $merge_field_info Optional default values for fields to merge into the document. The values will be presented to the signers for editable fields; for read-only fields the provided values will not be editable during the signing process. Merging data into fields is currently not supported when used with libraryDocumentId or libraryDocumentName. Only file and url are currently supported
     *
     * @return $this
     */
    public function setMergeFieldInfo($merge_field_info)
    {
        $this->container['merge_field_info'] = $merge_field_info;

        return $this;
    }

    /**
     * Gets first_reminder_delay
     *
     * @return int
     */
    public function getFirstReminderDelay()
    {
        return $this->container['first_reminder_delay'];
    }

    /**
     * Sets first_reminder_delay
     *
     * @param int $first_reminder_delay Integer which specifies the delay in hours before sending the first reminder.<br>This is an optional field. The minimum value allowed is 1 hour and the maximum value can’t be more than the difference of agreement creation and expiry time of the agreement in hours.<br>If this is not specified but the reminder frequency is specified, then the first reminder will be sent based on frequency.<br>i.e. if the reminder is created with frequency specified as daily, the firstReminderDelay will be 24 hours. Should not be provided in offline agreement creation.
     *
     * @return $this
     */
    public function setFirstReminderDelay($first_reminder_delay)
    {
        $this->container['first_reminder_delay'] = $first_reminder_delay;

        return $this;
    }

    /**
     * Gets email_option
     *
     * @return \Swagger\Client\Model\EmailOption
     */
    public function getEmailOption()
    {
        return $this->container['email_option'];
    }

    /**
     * Sets email_option
     *
     * @param \Swagger\Client\Model\EmailOption $email_option Email configurations for the agreement. Should not be provided in offline agreement creation.
     *
     * @return $this
     */
    public function setEmailOption($email_option)
    {
        $this->container['email_option'] = $email_option;

        return $this;
    }

    /**
     * Gets signature_type
     *
     * @return string
     */
    public function getSignatureType()
    {
        return $this->container['signature_type'];
    }

    /**
     * Sets signature_type
     *
     * @param string $signature_type Specifies the type of signature you would like to request - written or e-signature. The possible values are <br> ESIGN : Agreement needs to be signed electronically <br>, WRITTEN : Agreement will be signed using handwritten signature and signed document will be uploaded into the system
     *
     * @return $this
     */
    public function setSignatureType($signature_type)
    {
        $allowedValues = $this->getSignatureTypeAllowableValues();
        if (!is_null($signature_type) && !in_array($signature_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'signature_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['signature_type'] = $signature_type;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return \Swagger\Client\Model\ExternalId
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param \Swagger\Client\Model\ExternalId $external_id An arbitrary value from your system, which can be specified at sending time and then later returned or queried. Should not be provided in offline agreement creation.
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string $message An optional message to the participants, describing what is being sent or why their signature is required
     *
     * @return $this
     */
    public function setMessage($message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets device_info
     *
     * @return \Swagger\Client\Model\OfflineDeviceInfo
     */
    public function getDeviceInfo()
    {
        return $this->container['device_info'];
    }

    /**
     * Sets device_info
     *
     * @param \Swagger\Client\Model\OfflineDeviceInfo $device_info Device info of the offline device. It should only be provided in case of offline agreement creation.
     *
     * @return $this
     */
    public function setDeviceInfo($device_info)
    {
        $this->container['device_info'] = $device_info;

        return $this;
    }

    /**
     * Gets reminder_frequency
     *
     * @return string
     */
    public function getReminderFrequency()
    {
        return $this->container['reminder_frequency'];
    }

    /**
     * Sets reminder_frequency
     *
     * @param string $reminder_frequency Optional parameter that sets how often you want to send reminders to the participants. If it is not specified, the default frequency set for the account will be used. Should not be provided in offline agreement creation. If provided in PUT as a different value than the current one, an error will be thrown.
     *
     * @return $this
     */
    public function setReminderFrequency($reminder_frequency)
    {
        $allowedValues = $this->getReminderFrequencyAllowableValues();
        if (!is_null($reminder_frequency) && !in_array($reminder_frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reminder_frequency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reminder_frequency'] = $reminder_frequency;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param \DateTime $created_date Date when agreement was created. This is a server generated attributed and can not be provided in POST/PUT calls. Format would be yyyy-MM-dd'T'HH:mm:ssZ. For example, e.g 2016-02-25T18:46:19Z represents UTC time
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets participant_sets_info
     *
     * @return \Swagger\Client\Model\ParticipantSetInfo[]
     */
    public function getParticipantSetsInfo()
    {
        return $this->container['participant_sets_info'];
    }

    /**
     * Sets participant_sets_info
     *
     * @param \Swagger\Client\Model\ParticipantSetInfo[] $participant_sets_info A list of one or more participant set. A participant set may have one or more participant. If any member of the participant set takes the action that has been assigned to the set(Sign/Approve/Acknowledge etc ), the action is considered as the action taken by whole participation set. For regular (non-MegaSign) documents, there is no limit on the number of electronic signatures in a single document. Written signatures are limited to four per document
     *
     * @return $this
     */
    public function setParticipantSetsInfo($participant_sets_info)
    {
        $this->container['participant_sets_info'] = $participant_sets_info;

        return $this;
    }

    /**
     * Gets expiration_time
     *
     * @return \Swagger\Client\Model\\DateTime
     */
    public function getExpirationTime()
    {
        return $this->container['expiration_time'];
    }

    /**
     * Sets expiration_time
     *
     * @param \Swagger\Client\Model\\DateTime $expiration_time Time after which Agreement expires and needs to be signed before it. Format should be yyyy-MM-dd'T'HH:mm:ssZ. For example, e.g 2016-02-25T18:46:19Z represents UTC time. Should not be provided in offline agreement creation.
     *
     * @return $this
     */
    public function setExpirationTime($expiration_time)
    {
        $this->container['expiration_time'] = $expiration_time;

        return $this;
    }

    /**
     * Gets form_field_layer_templates
     *
     * @return \Swagger\Client\Model\FileInfo[]
     */
    public function getFormFieldLayerTemplates()
    {
        return $this->container['form_field_layer_templates'];
    }

    /**
     * Sets form_field_layer_templates
     *
     * @param \Swagger\Client\Model\FileInfo[] $form_field_layer_templates Specifies the form field layer template or source of form fields to apply on the files in this transaction. If specified, the FileInfo for this parameter must refer to a form field layer template via libraryDocumentId or libraryDocumentName, or if specified via transientDocumentId or documentURL, it must be of a supported file type. Note: Only one of the four parameters in every FileInfo object must be specified
     *
     * @return $this
     */
    public function setFormFieldLayerTemplates($form_field_layer_templates)
    {
        $this->container['form_field_layer_templates'] = $form_field_layer_templates;

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
     * @param string $name The name of the agreement that will be used to identify it, in emails, website and other places
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets file_infos
     *
     * @return \Swagger\Client\Model\FileInfo[]
     */
    public function getFileInfos()
    {
        return $this->container['file_infos'];
    }

    /**
     * Sets file_infos
     *
     * @param \Swagger\Client\Model\FileInfo[] $file_infos A list of one or more files (or references to files) that will be sent out for signature. If more than one file is provided, they will be combined into one PDF before being sent out. Note: Only one of the four parameters in every FileInfo object must be specified
     *
     * @return $this
     */
    public function setFileInfos($file_infos)
    {
        $this->container['file_infos'] = $file_infos;

        return $this;
    }

    /**
     * Gets workflow_id
     *
     * @return string
     */
    public function getWorkflowId()
    {
        return $this->container['workflow_id'];
    }

    /**
     * Sets workflow_id
     *
     * @param string $workflow_id The identifier of custom workflow which defines the routing path of an agreement. Should not be provided in offline agreement creation.
     *
     * @return $this
     */
    public function setWorkflowId($workflow_id)
    {
        $this->container['workflow_id'] = $workflow_id;

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
     * @param string $status This is a server generated attribute which provides the detailed status of an agreement.
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


