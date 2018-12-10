# MegasignEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**acting_user_email** | **string** | Email address of the user that created the event | [optional] 
**acting_user_ip_address** | **string** | The IP address of the user that created the event | [optional] 
**acting_user_name** | **string** | The name of the acting user | [optional] 
**comment** | **string** | The event comment. For RECALLED or REJECTED, the reason given by the user that initiates the event. For DELEGATE or SHARE, the message from the acting user to the participant | [optional] 
**date** | [**\DateTime**](\DateTime.md) | The date of the audit event. Format would be yyyy-MM-dd&#39;T&#39;HH:mm:ssZ. For example, e.g 2016-02-25T18:46:19Z represents UTC time | [optional] 
**description** | **string** | A description of the audit event | [optional] 
**device_location** | [**\Swagger\Client\Model\DeviceLocation**](DeviceLocation.md) | Location of the device that generated the event (This value may be null due to limited privileges) | [optional] 
**device_phone_number** | **string** | Phone number from the device used when the participation is completed on a mobile phone | [optional] 
**digital_signature_info** | [**\Swagger\Client\Model\DigitalSignatureInfo**](DigitalSignatureInfo.md) | This is present for ESIGNED events when the participation is signed digitally | [optional] 
**initiating_user_email** | **string** | Email address of the user that initiated the event on behalf of the acting user when the account is shared. Will be empty if there is no account sharing in effect | [optional] 
**initiating_user_name** | **string** | Full name of the user that initiated the event on behalf of the acting user when the account is shared. Will be empty if there is no account sharing in effect | [optional] 
**participant_email** | **string** | Email address of the user that is the participant for the event. This may be different than the acting user for certain event types. For example, for a DELEGATION event, this is the user who was delegated to | [optional] 
**participant_id** | **string** | The unique identifier of the participant for the event. This may be different than the acting user for certain event types. For example, for a DELEGATION event, this is the user who was delegated to | [optional] 
**participant_role** | **string** | Role assumed by all participants in the participant set the participant belongs to (signer, approver etc.). | [optional] 
**synchronization_id** | **string** | A unique identifier linking offline events to synchronization events (specified for offline signing events and synchronization events, else null) | [optional] 
**type** | **string** | Type of MegaSign event | [optional] 
**vault_event_id** | **string** | The identifier assigned by the vault provider for the vault event (if vaulted, otherwise null) | [optional] 
**vault_provider_name** | **string** | Name of the vault provider for the vault event (if vaulted, otherwise null) | [optional] 
**version_id** | **string** | An ID which uniquely identifies the version of the document associated with this audit event | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


