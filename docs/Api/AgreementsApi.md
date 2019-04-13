# Adobe\ESign\AgreementsApi

All URIs are relative to *https://secure.na1.echosign.com/api/rest/v6*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTemplateFieldsToAgreement**](AgreementsApi.md#addTemplateFieldsToAgreement) | **POST** /agreements/{agreementId}/formFields | Adds template fields to an agreement
[**createAgreement**](AgreementsApi.md#createAgreement) | **POST** /agreements | Creates an agreement. Sends it out for signatures, and returns the agreementID in the response to the client.
[**createAgreementView**](AgreementsApi.md#createAgreementView) | **POST** /agreements/{agreementId}/views | Retrieves the latest state view url of agreement.
[**createDelegatedParticipantSets**](AgreementsApi.md#createDelegatedParticipantSets) | **POST** /agreements/{agreementId}/members/participantSets/{participantSetId}/delegatedParticipantSets | Creates a participantSet to which the agreement is forwarded for taking appropriate action.
[**createReminderOnParticipant**](AgreementsApi.md#createReminderOnParticipant) | **POST** /agreements/{agreementId}/reminders | Creates a reminder on the specified participants of an agreement identified by agreementId in the path.
[**createShareOnAgreement**](AgreementsApi.md#createShareOnAgreement) | **POST** /agreements/{agreementId}/members/share | Share an agreement with someone.
[**deleteDocumentsOfAgreement**](AgreementsApi.md#deleteDocumentsOfAgreement) | **DELETE** /agreements/{agreementId}/documents | Deletes all the documents of an agreement.
[**getAgreementAuditTrail**](AgreementsApi.md#getAgreementAuditTrail) | **GET** /agreements/{agreementId}/auditTrail | Retrieves the audit trail of an agreement identified by agreementId.
[**getAgreementCombinedDocument**](AgreementsApi.md#getAgreementCombinedDocument) | **GET** /agreements/{agreementId}/combinedDocument | Retrieves a single combined PDF document for the documents associated with an agreement.
[**getAgreementCombinedDocumentPagesInfo**](AgreementsApi.md#getAgreementCombinedDocumentPagesInfo) | **GET** /agreements/{agreementId}/combinedDocument/pagesInfo | Retrieves info of all pages of a combined PDF document for the documents associated with an agreement.
[**getAgreementCombinedDocumentUrl**](AgreementsApi.md#getAgreementCombinedDocumentUrl) | **GET** /agreements/{agreementId}/combinedDocument/url | Retrieves url of all visible pages of all the documents associated with an agreement.
[**getAgreementEvents**](AgreementsApi.md#getAgreementEvents) | **GET** /agreements/{agreementId}/events | Retrieves the events information for an agreement.
[**getAgreementFormData**](AgreementsApi.md#getAgreementFormData) | **GET** /agreements/{agreementId}/formData | Retrieves data entered into the interactive form fields of the agreement.
[**getAgreementInfo**](AgreementsApi.md#getAgreementInfo) | **GET** /agreements/{agreementId} | Retrieves the current status of an agreement.
[**getAgreementNoteForApiUser**](AgreementsApi.md#getAgreementNoteForApiUser) | **GET** /agreements/{agreementId}/me/note | Retrieves the latest note associated with an agreement.
[**getAgreementParticipantSet**](AgreementsApi.md#getAgreementParticipantSet) | **GET** /agreements/{agreementId}/members/participantSets/{participantSetId} | Retrieves the participant set of an agreement identified by agreementId in the path.
[**getAgreementReminder**](AgreementsApi.md#getAgreementReminder) | **GET** /agreements/{agreementId}/reminders/{reminderId} | Retrieves a specific reminder associated with an agreement
[**getAgreementReminders**](AgreementsApi.md#getAgreementReminders) | **GET** /agreements/{agreementId}/reminders | Retrieves the reminders of an agreement, identified by agreementId in the path.
[**getAgreementSecurityOptionsForParticipation**](AgreementsApi.md#getAgreementSecurityOptionsForParticipation) | **GET** /agreements/{agreementId}/members/participantSets/{participantSetId}/participants/{participantId}/securityOptions | Retrieves the security options for a particular participant.
[**getAllAgreements**](AgreementsApi.md#getAllAgreements) | **GET** /agreements | Retrieves agreements for the user.
[**getAllDocumentsImageUrlsOfAgreement**](AgreementsApi.md#getAllDocumentsImageUrlsOfAgreement) | **GET** /agreements/{agreementId}/documents/imageUrls | Retrieves image urls of all visible pages of all the documents associated with an agreement.
[**getAllDocumentsOfAgreement**](AgreementsApi.md#getAllDocumentsOfAgreement) | **GET** /agreements/{agreementId}/documents | Retrieves the IDs of the documents of an agreement identified by agreementId.
[**getAllMembers**](AgreementsApi.md#getAllMembers) | **GET** /agreements/{agreementId}/members | Retrieves information of members of the agreement.
[**getDocumentImageUrlsOfAgreement**](AgreementsApi.md#getDocumentImageUrlsOfAgreement) | **GET** /agreements/{agreementId}/documents/{documentId}/imageUrls | Retrieves image urls of all visible pages of a document associated with an agreement.
[**getDocumentOfAgreement**](AgreementsApi.md#getDocumentOfAgreement) | **GET** /agreements/{agreementId}/documents/{documentId} | Retrieves the file stream of a document of an agreement.
[**getFormFields**](AgreementsApi.md#getFormFields) | **GET** /agreements/{agreementId}/formFields | Retrieves details of form fields of an agreement.
[**getMergeInfo**](AgreementsApi.md#getMergeInfo) | **GET** /agreements/{agreementId}/formFields/mergeInfo | Retrieves the merge info stored with an agreement.
[**getSigningUrl**](AgreementsApi.md#getSigningUrl) | **GET** /agreements/{agreementId}/signingUrls | Retrieves the URL for the e-sign page for the current signer(s) of an agreement.
[**rejectAgreementForParticipation**](AgreementsApi.md#rejectAgreementForParticipation) | **PUT** /agreements/{agreementId}/members/participantSets/{participantSetId}/participants/{participantId}/reject | Rejects the agreement for a participant.
[**updateAgreement**](AgreementsApi.md#updateAgreement) | **PUT** /agreements/{agreementId} | Updates the agreement in draft state, or update the expirationTime on an existing agreement that is already out for signature.
[**updateAgreementMergeInfo**](AgreementsApi.md#updateAgreementMergeInfo) | **PUT** /agreements/{agreementId}/formFields/mergeInfo | Set the merge info for an agreement.
[**updateAgreementNoteForApiUser**](AgreementsApi.md#updateAgreementNoteForApiUser) | **PUT** /agreements/{agreementId}/me/note | Updates the latest note associated with an agreement.
[**updateAgreementReminder**](AgreementsApi.md#updateAgreementReminder) | **PUT** /agreements/{agreementId}/reminders/{reminderId} | Updates an existing reminder for an agreement
[**updateAgreementSecurityOptionsForParticipation**](AgreementsApi.md#updateAgreementSecurityOptionsForParticipation) | **PUT** /agreements/{agreementId}/members/participantSets/{participantSetId}/participants/{participantId}/securityOptions | Updates the security options for a particular participant.
[**updateAgreementState**](AgreementsApi.md#updateAgreementState) | **PUT** /agreements/{agreementId}/state | Updates the state of an agreement identified by agreementId in the path.
[**updateAgreementVisibility**](AgreementsApi.md#updateAgreementVisibility) | **PUT** /agreements/{agreementId}/me/visibility | Updates the visibility of an agreement.
[**updateFormFields**](AgreementsApi.md#updateFormFields) | **PUT** /agreements/{agreementId}/formFields | Updates form fields of an agreement.  This will replace all fields in AUTHORING mode agreements, and will replace all fields except for text tag generated fields in DRAFT mode agreements.
[**updateParticipantSet**](AgreementsApi.md#updateParticipantSet) | **PUT** /agreements/{agreementId}/members/participantSets/{participantSetId} | Updates the participant set of an agreement identified by agreementId in the path.


# **addTemplateFieldsToAgreement**
> \Adobe\ESign\Model\AgreementFormFields addTemplateFieldsToAgreement($authorization, $ifMatch, $agreementId, $formFieldPostInfo, $xApiUser, $xOnBehalfOfUser)

Adds template fields to an agreement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_write')\" oncontextmenu=\"this.href=oauthDoc('agreement_write')\" target=\"oauthDoc\">agreement_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$ifMatch = "ifMatch_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$formFieldPostInfo = new \Adobe\ESign\Model\FormFieldPostInfo(); // \Adobe\ESign\Model\FormFieldPostInfo | List of form fields to add or replace
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->addTemplateFieldsToAgreement($authorization, $ifMatch, $agreementId, $formFieldPostInfo, $xApiUser, $xOnBehalfOfUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->addTemplateFieldsToAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **ifMatch** | **string**| The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **formFieldPostInfo** | [**\Adobe\ESign\Model\FormFieldPostInfo**](../Model/FormFieldPostInfo.md)| List of form fields to add or replace |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

[**\Adobe\ESign\Model\AgreementFormFields**](../Model/AgreementFormFields.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAgreement**
> \Adobe\ESign\Model\AgreementCreationResponse createAgreement($authorization, $agreementInfo, $xApiUser, $xOnBehalfOfUser)

Creates an agreement. Sends it out for signatures, and returns the agreementID in the response to the client.

This is a primary endpoint which is used to create a new agreement. An agreement can be created using transientDocument, libraryDocument or a URL. You can create an agreement in one of the 3 mentioned states: a) <b>DRAFT</b> - to incrementally build the agreement before sending out, b) <b>AUTHORING</b> - to add/edit form fields in the agreement, c) <b>IN_PROCESS</b> - to immediately send the agreement. You can use the PUT /agreements/{agreementId}/state endpoint to transition an agreement between the above mentioned states. An allowed transition would follow the following sequence: DRAFT -> AUTHORING -> IN_PROCESS -> CANCELLED.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_write')\" oncontextmenu=\"this.href=oauthDoc('agreement_write')\" target=\"oauthDoc\">agreement_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementInfo = new \Adobe\ESign\Model\AgreementCreationInfo(); // \Adobe\ESign\Model\AgreementCreationInfo | Information about the agreement that you want to create.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->createAgreement($authorization, $agreementInfo, $xApiUser, $xOnBehalfOfUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->createAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementInfo** | [**\Adobe\ESign\Model\AgreementCreationInfo**](../Model/AgreementCreationInfo.md)| Information about the agreement that you want to create. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

[**\Adobe\ESign\Model\AgreementCreationResponse**](../Model/AgreementCreationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAgreementView**
> \Adobe\ESign\Model\AgreementViews createAgreementView($authorization, $agreementId, $agreementViewInfo, $xApiUser, $xOnBehalfOfUser)

Retrieves the latest state view url of agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a> - agreement read is always required</li><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('user_login')\" oncontextmenu=\"this.href=oauthDoc('user_login')\" target=\"oauthDoc\">user_login</a> - Required additionally if the autoLoginUser parameter is set to true</li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$agreementViewInfo = new \Adobe\ESign\Model\AgreementViewInfo(); // \Adobe\ESign\Model\AgreementViewInfo | Name of the required view and its desired configuration.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->createAgreementView($authorization, $agreementId, $agreementViewInfo, $xApiUser, $xOnBehalfOfUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->createAgreementView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt; - agreement read is always required&lt;/li&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_login&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_login&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;user_login&lt;/a&gt; - Required additionally if the autoLoginUser parameter is set to true&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **agreementViewInfo** | [**\Adobe\ESign\Model\AgreementViewInfo**](../Model/AgreementViewInfo.md)| Name of the required view and its desired configuration. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

[**\Adobe\ESign\Model\AgreementViews**](../Model/AgreementViews.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDelegatedParticipantSets**
> \Adobe\ESign\Model\DelegationResponse createDelegatedParticipantSets($authorization, $agreementId, $participantSetId, $delegatedParticipantSetInfo, $xApiUser)

Creates a participantSet to which the agreement is forwarded for taking appropriate action.

Participants marked as delegator can call this API endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_write')\" oncontextmenu=\"this.href=oauthDoc('agreement_write')\" target=\"oauthDoc\">agreement_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$participantSetId = "participantSetId_example"; // string | The participant set identifier
$delegatedParticipantSetInfo = new \Adobe\ESign\Model\DelegatedParticipantSetInfo(); // \Adobe\ESign\Model\DelegatedParticipantSetInfo | Information about the delegate participant Set
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.

try {
    $result = $apiInstance->createDelegatedParticipantSets($authorization, $agreementId, $participantSetId, $delegatedParticipantSetInfo, $xApiUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->createDelegatedParticipantSets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **participantSetId** | **string**| The participant set identifier |
 **delegatedParticipantSetInfo** | [**\Adobe\ESign\Model\DelegatedParticipantSetInfo**](../Model/DelegatedParticipantSetInfo.md)| Information about the delegate participant Set |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]

### Return type

[**\Adobe\ESign\Model\DelegationResponse**](../Model/DelegationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createReminderOnParticipant**
> \Adobe\ESign\Model\ReminderCreationResult createReminderOnParticipant($authorization, $agreementId, $reminderInfo, $xApiUser, $xOnBehalfOfUser)

Creates a reminder on the specified participants of an agreement identified by agreementId in the path.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_write')\" oncontextmenu=\"this.href=oauthDoc('agreement_write')\" target=\"oauthDoc\">agreement_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$reminderInfo = new \Adobe\ESign\Model\ReminderInfo(); // \Adobe\ESign\Model\ReminderInfo | The information about a reminder associated with a recipient of an agreement.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->createReminderOnParticipant($authorization, $agreementId, $reminderInfo, $xApiUser, $xOnBehalfOfUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->createReminderOnParticipant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **reminderInfo** | [**\Adobe\ESign\Model\ReminderInfo**](../Model/ReminderInfo.md)| The information about a reminder associated with a recipient of an agreement. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

[**\Adobe\ESign\Model\ReminderCreationResult**](../Model/ReminderCreationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createShareOnAgreement**
> \Adobe\ESign\Model\ShareCreationResponseList createShareOnAgreement($authorization, $agreementId, $shareCreationInfoList, $xApiUser, $xOnBehalfOfUser)

Share an agreement with someone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_write')\" oncontextmenu=\"this.href=oauthDoc('agreement_write')\" target=\"oauthDoc\">agreement_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$shareCreationInfoList = new \Adobe\ESign\Model\ShareCreationInfoList(); // \Adobe\ESign\Model\ShareCreationInfoList | List of agreement share creation information objects.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->createShareOnAgreement($authorization, $agreementId, $shareCreationInfoList, $xApiUser, $xOnBehalfOfUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->createShareOnAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **shareCreationInfoList** | [**\Adobe\ESign\Model\ShareCreationInfoList**](../Model/ShareCreationInfoList.md)| List of agreement share creation information objects. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

[**\Adobe\ESign\Model\ShareCreationResponseList**](../Model/ShareCreationResponseList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDocumentsOfAgreement**
> deleteDocumentsOfAgreement($authorization, $ifMatch, $agreementId, $xApiUser, $xOnBehalfOfUser)

Deletes all the documents of an agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_retention')\" oncontextmenu=\"this.href=oauthDoc('agreement_retention')\" target=\"oauthDoc\">agreement_retention</a></li></ul>in the format <b>'Bearer {accessToken}'.
$ifMatch = "ifMatch_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->deleteDocumentsOfAgreement($authorization, $ifMatch, $agreementId, $xApiUser, $xOnBehalfOfUser);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->deleteDocumentsOfAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_retention&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_retention&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_retention&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **ifMatch** | **string**| The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgreementAuditTrail**
> string getAgreementAuditTrail($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch)

Retrieves the audit trail of an agreement identified by agreementId.

PDF file stream containing audit trail information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getAgreementAuditTrail($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getAgreementAuditTrail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/pdf;encoding=base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgreementCombinedDocument**
> string getAgreementCombinedDocument($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $versionId, $participantId, $attachSupportingDocuments, $attachAuditReport)

Retrieves a single combined PDF document for the documents associated with an agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.
$versionId = "versionId_example"; // string | The version identifier of agreement as provided by the API which retrieves information of a specific agreement. If not provided then latest version will be used.
$participantId = "participantId_example"; // string | The participant identifier to be used to retrieve documents. If not mentioned, the participation of api caller is used.
$attachSupportingDocuments = true; // bool | When set to true, attach corresponding supporting documents to the signed agreement PDF. Default value of this parameter is true.
$attachAuditReport = true; // bool | When set to true, attach an audit report to the signed agreement PDF. Default value is false

try {
    $result = $apiInstance->getAgreementCombinedDocument($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $versionId, $participantId, $attachSupportingDocuments, $attachAuditReport);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getAgreementCombinedDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]
 **versionId** | **string**| The version identifier of agreement as provided by the API which retrieves information of a specific agreement. If not provided then latest version will be used. | [optional]
 **participantId** | **string**| The participant identifier to be used to retrieve documents. If not mentioned, the participation of api caller is used. | [optional]
 **attachSupportingDocuments** | **bool**| When set to true, attach corresponding supporting documents to the signed agreement PDF. Default value of this parameter is true. | [optional]
 **attachAuditReport** | **bool**| When set to true, attach an audit report to the signed agreement PDF. Default value is false | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/pdf;encoding=base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgreementCombinedDocumentPagesInfo**
> \Adobe\ESign\Model\CombinedDocumentPagesInfo getAgreementCombinedDocumentPagesInfo($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $includeSupportingDocumentsPagesInfo)

Retrieves info of all pages of a combined PDF document for the documents associated with an agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.
$includeSupportingDocumentsPagesInfo = true; // bool | When set to true, returns info of all pages of supporting documents as well. Else, return the info of pages of only the original document.

try {
    $result = $apiInstance->getAgreementCombinedDocumentPagesInfo($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $includeSupportingDocumentsPagesInfo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getAgreementCombinedDocumentPagesInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]
 **includeSupportingDocumentsPagesInfo** | **bool**| When set to true, returns info of all pages of supporting documents as well. Else, return the info of pages of only the original document. | [optional]

### Return type

[**\Adobe\ESign\Model\CombinedDocumentPagesInfo**](../Model/CombinedDocumentPagesInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgreementCombinedDocumentUrl**
> \Adobe\ESign\Model\DocumentUrl getAgreementCombinedDocumentUrl($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $versionId, $participantId, $attachSupportingDocuments, $attachAuditReport)

Retrieves url of all visible pages of all the documents associated with an agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$versionId = "versionId_example"; // string | The version identifier of agreement as provided by the API which retrieves information of a specific agreement. If not provided then latest version will be used.
$participantId = "participantId_example"; // string | The participant identifier to be used to retrieve documents. If not mentioned, the participation of api caller is used.
$attachSupportingDocuments = true; // bool | When set to true, attach corresponding supporting documents to the signed agreement PDF. Default value of this parameter is true.
$attachAuditReport = true; // bool | When set to true, attach an audit report to the signed agreement PDF. Default value is false

try {
    $result = $apiInstance->getAgreementCombinedDocumentUrl($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $versionId, $participantId, $attachSupportingDocuments, $attachAuditReport);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getAgreementCombinedDocumentUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **versionId** | **string**| The version identifier of agreement as provided by the API which retrieves information of a specific agreement. If not provided then latest version will be used. | [optional]
 **participantId** | **string**| The participant identifier to be used to retrieve documents. If not mentioned, the participation of api caller is used. | [optional]
 **attachSupportingDocuments** | **bool**| When set to true, attach corresponding supporting documents to the signed agreement PDF. Default value of this parameter is true. | [optional]
 **attachAuditReport** | **bool**| When set to true, attach an audit report to the signed agreement PDF. Default value is false | [optional]

### Return type

[**\Adobe\ESign\Model\DocumentUrl**](../Model/DocumentUrl.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgreementEvents**
> \Adobe\ESign\Model\AgreementEventList getAgreementEvents($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch)

Retrieves the events information for an agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getAgreementEvents($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getAgreementEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

[**\Adobe\ESign\Model\AgreementEventList**](../Model/AgreementEventList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgreementFormData**
> string getAgreementFormData($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch)

Retrieves data entered into the interactive form fields of the agreement.

This API can only be called by the creator of the agreement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getAgreementFormData($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getAgreementFormData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgreementInfo**
> \Adobe\ESign\Model\AgreementInfo getAgreementInfo($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch)

Retrieves the current status of an agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getAgreementInfo($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getAgreementInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

[**\Adobe\ESign\Model\AgreementInfo**](../Model/AgreementInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgreementNoteForApiUser**
> \Adobe\ESign\Model\Note getAgreementNoteForApiUser($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser)

Retrieves the latest note associated with an agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->getAgreementNoteForApiUser($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getAgreementNoteForApiUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

[**\Adobe\ESign\Model\Note**](../Model/Note.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgreementParticipantSet**
> \Adobe\ESign\Model\DetailedParticipantSetInfo getAgreementParticipantSet($authorization, $agreementId, $participantSetId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch)

Retrieves the participant set of an agreement identified by agreementId in the path.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$participantSetId = "participantSetId_example"; // string | The participant set identifier
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getAgreementParticipantSet($authorization, $agreementId, $participantSetId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getAgreementParticipantSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **participantSetId** | **string**| The participant set identifier |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

[**\Adobe\ESign\Model\DetailedParticipantSetInfo**](../Model/DetailedParticipantSetInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgreementReminder**
> \Adobe\ESign\Model\ReminderInfo getAgreementReminder($authorization, $agreementId, $reminderId, $xApiUser, $xOnBehalfOfUser)

Retrieves a specific reminder associated with an agreement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$reminderId = "reminderId_example"; // string | The reminder identifier
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->getAgreementReminder($authorization, $agreementId, $reminderId, $xApiUser, $xOnBehalfOfUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getAgreementReminder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **reminderId** | **string**| The reminder identifier |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

[**\Adobe\ESign\Model\ReminderInfo**](../Model/ReminderInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgreementReminders**
> \Adobe\ESign\Model\RemindersResponse getAgreementReminders($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $status)

Retrieves the reminders of an agreement, identified by agreementId in the path.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$status = "status_example"; // string | A comma-separated list of reminder statuses of the reminders which should be returned in the response. Currently supported values are ACTIVE, CANCELLED, COMPLETE

try {
    $result = $apiInstance->getAgreementReminders($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getAgreementReminders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **status** | **string**| A comma-separated list of reminder statuses of the reminders which should be returned in the response. Currently supported values are ACTIVE, CANCELLED, COMPLETE | [optional]

### Return type

[**\Adobe\ESign\Model\RemindersResponse**](../Model/RemindersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAgreementSecurityOptionsForParticipation**
> \Adobe\ESign\Model\ParticipantSecurityOption getAgreementSecurityOptionsForParticipation($authorization, $agreementId, $participantSetId, $participantId, $ifNoneMatch, $xApiUser)

Retrieves the security options for a particular participant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$participantSetId = "participantSetId_example"; // string | The participant set identifier
$participantId = "participantId_example"; // string | The participant identifier
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.

try {
    $result = $apiInstance->getAgreementSecurityOptionsForParticipation($authorization, $agreementId, $participantSetId, $participantId, $ifNoneMatch, $xApiUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getAgreementSecurityOptionsForParticipation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **participantSetId** | **string**| The participant set identifier |
 **participantId** | **string**| The participant identifier |
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]

### Return type

[**\Adobe\ESign\Model\ParticipantSecurityOption**](../Model/ParticipantSecurityOption.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllAgreements**
> \Adobe\ESign\Model\UserAgreements getAllAgreements($authorization, $xApiUser, $xOnBehalfOfUser, $externalId, $showHiddenAgreements, $cursor, $pageSize)

Retrieves agreements for the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$externalId = "externalId_example"; // string | Case-sensitive ExternalID for which you would like to retrieve agreement information. ExternalId is passed in the call to the agreement creation API.
$showHiddenAgreements = true; // bool | A query parameter to fetch all the hidden agreements along with the visible agreements. Default value is false.
$cursor = "cursor_example"; // string | Used to navigate through the pages. If not provided, returns the first page.
$pageSize = 56; // int | Number of intended items in the response page. If not provided, it is decided by the application settings.

try {
    $result = $apiInstance->getAllAgreements($authorization, $xApiUser, $xOnBehalfOfUser, $externalId, $showHiddenAgreements, $cursor, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getAllAgreements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **externalId** | **string**| Case-sensitive ExternalID for which you would like to retrieve agreement information. ExternalId is passed in the call to the agreement creation API. | [optional]
 **showHiddenAgreements** | **bool**| A query parameter to fetch all the hidden agreements along with the visible agreements. Default value is false. | [optional]
 **cursor** | **string**| Used to navigate through the pages. If not provided, returns the first page. | [optional]
 **pageSize** | **int**| Number of intended items in the response page. If not provided, it is decided by the application settings. | [optional]

### Return type

[**\Adobe\ESign\Model\UserAgreements**](../Model/UserAgreements.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllDocumentsImageUrlsOfAgreement**
> \Adobe\ESign\Model\DocumentsImageUrlsInfo getAllDocumentsImageUrlsOfAgreement($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $versionId, $participantId, $imageSizes, $includeSupportingDocumentsImageUrls, $showImageAvailabilityOnly)

Retrieves image urls of all visible pages of all the documents associated with an agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$versionId = "versionId_example"; // string | The version identifier of agreement as provided by the API which retrieves information of a specific agreement. If not provided then latest version will be used.
$participantId = "participantId_example"; // string | The participant identifier to be used to retrieve documents. If not mentioned, the participation of api caller is used.
$imageSizes = "imageSizes_example"; // string | A comma separated list of image sizes i.e. {FIXED_WIDTH_50px, FIXED_WIDTH_250px, FIXED_WIDTH_675px, ZOOM_50_PERCENT, ZOOM_75_PERCENT, ZOOM_100_PERCENT, ZOOM_125_PERCENT, ZOOM_150_PERCENT, ZOOM_200_PERCENT}. Default sizes returned are {FIXED_WIDTH_50px, FIXED_WIDTH_250px, FIXED_WIDTH_675px, ZOOM_100_PERCENT}.
$includeSupportingDocumentsImageUrls = true; // bool | When set to true, returns image urls of supporting documents as well. Else, returns image urls of only the original documents.
$showImageAvailabilityOnly = true; // bool | When set to true, returns only image availability. Else, returns both image urls and its availability.

try {
    $result = $apiInstance->getAllDocumentsImageUrlsOfAgreement($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $versionId, $participantId, $imageSizes, $includeSupportingDocumentsImageUrls, $showImageAvailabilityOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getAllDocumentsImageUrlsOfAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **versionId** | **string**| The version identifier of agreement as provided by the API which retrieves information of a specific agreement. If not provided then latest version will be used. | [optional]
 **participantId** | **string**| The participant identifier to be used to retrieve documents. If not mentioned, the participation of api caller is used. | [optional]
 **imageSizes** | **string**| A comma separated list of image sizes i.e. {FIXED_WIDTH_50px, FIXED_WIDTH_250px, FIXED_WIDTH_675px, ZOOM_50_PERCENT, ZOOM_75_PERCENT, ZOOM_100_PERCENT, ZOOM_125_PERCENT, ZOOM_150_PERCENT, ZOOM_200_PERCENT}. Default sizes returned are {FIXED_WIDTH_50px, FIXED_WIDTH_250px, FIXED_WIDTH_675px, ZOOM_100_PERCENT}. | [optional]
 **includeSupportingDocumentsImageUrls** | **bool**| When set to true, returns image urls of supporting documents as well. Else, returns image urls of only the original documents. | [optional]
 **showImageAvailabilityOnly** | **bool**| When set to true, returns only image availability. Else, returns both image urls and its availability. | [optional]

### Return type

[**\Adobe\ESign\Model\DocumentsImageUrlsInfo**](../Model/DocumentsImageUrlsInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllDocumentsOfAgreement**
> \Adobe\ESign\Model\AgreementDocuments getAllDocumentsOfAgreement($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $versionId, $participantId, $supportingDocumentContentFormat)

Retrieves the IDs of the documents of an agreement identified by agreementId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.
$versionId = "versionId_example"; // string | The version identifier of agreement as provided by the API which retrieves information of a specific agreement. If not provided then latest version will be used.
$participantId = "participantId_example"; // string | The participant identifier to be used to retrieve documents. If not mentioned, the participation of api caller is used.
$supportingDocumentContentFormat = "supportingDocumentContentFormat_example"; // string | Content format of the supported documents. It can have two possible values ORIGINAL or CONVERTED_PDF. Default value is CONVERTED_PDF.

try {
    $result = $apiInstance->getAllDocumentsOfAgreement($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $versionId, $participantId, $supportingDocumentContentFormat);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getAllDocumentsOfAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]
 **versionId** | **string**| The version identifier of agreement as provided by the API which retrieves information of a specific agreement. If not provided then latest version will be used. | [optional]
 **participantId** | **string**| The participant identifier to be used to retrieve documents. If not mentioned, the participation of api caller is used. | [optional]
 **supportingDocumentContentFormat** | **string**| Content format of the supported documents. It can have two possible values ORIGINAL or CONVERTED_PDF. Default value is CONVERTED_PDF. | [optional]

### Return type

[**\Adobe\ESign\Model\AgreementDocuments**](../Model/AgreementDocuments.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllMembers**
> \Adobe\ESign\Model\MembersInfo getAllMembers($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $includeNextParticipantSet)

Retrieves information of members of the agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.
$includeNextParticipantSet = true; // bool | A query parameter to fetch next active participation members. Default value is false.

try {
    $result = $apiInstance->getAllMembers($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $includeNextParticipantSet);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getAllMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]
 **includeNextParticipantSet** | **bool**| A query parameter to fetch next active participation members. Default value is false. | [optional]

### Return type

[**\Adobe\ESign\Model\MembersInfo**](../Model/MembersInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentImageUrlsOfAgreement**
> \Adobe\ESign\Model\AgreementDocumentImageUrlsInfo getDocumentImageUrlsOfAgreement($authorization, $agreementId, $documentId, $xApiUser, $xOnBehalfOfUser, $imageSizes, $showImageAvailabilityOnly, $startPage, $endPage)

Retrieves image urls of all visible pages of a document associated with an agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$documentId = "documentId_example"; // string | The document identifier, as retrieved from the API which fetches the documents of a specified agreement
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$imageSizes = "imageSizes_example"; // string | A comma separated list of image sizes i.e. {FIXED_WIDTH_50px, FIXED_WIDTH_250px, FIXED_WIDTH_675px, ZOOM_50_PERCENT, ZOOM_75_PERCENT, ZOOM_100_PERCENT, ZOOM_125_PERCENT, ZOOM_150_PERCENT, ZOOM_200_PERCENT}. Default sizes returned are {FIXED_WIDTH_50px, FIXED_WIDTH_250px, FIXED_WIDTH_675px, ZOOM_100_PERCENT}.
$showImageAvailabilityOnly = true; // bool | When set to true, returns only image availability. Else, returns both image urls and its availability.
$startPage = 56; // int | Start of page number range for which imageUrls are requested. Starting page number should be greater than 0.
$endPage = 56; // int | End of page number range for which imageUrls are requested.

try {
    $result = $apiInstance->getDocumentImageUrlsOfAgreement($authorization, $agreementId, $documentId, $xApiUser, $xOnBehalfOfUser, $imageSizes, $showImageAvailabilityOnly, $startPage, $endPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getDocumentImageUrlsOfAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **documentId** | **string**| The document identifier, as retrieved from the API which fetches the documents of a specified agreement |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **imageSizes** | **string**| A comma separated list of image sizes i.e. {FIXED_WIDTH_50px, FIXED_WIDTH_250px, FIXED_WIDTH_675px, ZOOM_50_PERCENT, ZOOM_75_PERCENT, ZOOM_100_PERCENT, ZOOM_125_PERCENT, ZOOM_150_PERCENT, ZOOM_200_PERCENT}. Default sizes returned are {FIXED_WIDTH_50px, FIXED_WIDTH_250px, FIXED_WIDTH_675px, ZOOM_100_PERCENT}. | [optional]
 **showImageAvailabilityOnly** | **bool**| When set to true, returns only image availability. Else, returns both image urls and its availability. | [optional]
 **startPage** | **int**| Start of page number range for which imageUrls are requested. Starting page number should be greater than 0. | [optional]
 **endPage** | **int**| End of page number range for which imageUrls are requested. | [optional]

### Return type

[**\Adobe\ESign\Model\AgreementDocumentImageUrlsInfo**](../Model/AgreementDocumentImageUrlsInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentOfAgreement**
> string getDocumentOfAgreement($authorization, $agreementId, $documentId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch)

Retrieves the file stream of a document of an agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$documentId = "documentId_example"; // string | The document identifier, as retrieved from the API which fetches the documents of a specified agreement
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getDocumentOfAgreement($authorization, $agreementId, $documentId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getDocumentOfAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **documentId** | **string**| The document identifier, as retrieved from the API which fetches the documents of a specified agreement |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*, *_/_*;encoding=base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFormFields**
> \Adobe\ESign\Model\AgreementFormFields getFormFields($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $participantEmail)

Retrieves details of form fields of an agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.
$participantEmail = "participantEmail_example"; // string | The email address of the participant to be used to retrieve its associated form fields.

try {
    $result = $apiInstance->getFormFields($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $participantEmail);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getFormFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]
 **participantEmail** | **string**| The email address of the participant to be used to retrieve its associated form fields. | [optional]

### Return type

[**\Adobe\ESign\Model\AgreementFormFields**](../Model/AgreementFormFields.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMergeInfo**
> \Adobe\ESign\Model\FormFieldMergeInfo getMergeInfo($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser)

Retrieves the merge info stored with an agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->getMergeInfo($authorization, $agreementId, $xApiUser, $xOnBehalfOfUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getMergeInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

[**\Adobe\ESign\Model\FormFieldMergeInfo**](../Model/FormFieldMergeInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSigningUrl**
> \Adobe\ESign\Model\SigningUrlResponse getSigningUrl($authorization, $agreementId, $xApiUser, $ifNoneMatch)

Retrieves the URL for the e-sign page for the current signer(s) of an agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_write')\" oncontextmenu=\"this.href=oauthDoc('agreement_write')\" target=\"oauthDoc\">agreement_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getSigningUrl($authorization, $agreementId, $xApiUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getSigningUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

[**\Adobe\ESign\Model\SigningUrlResponse**](../Model/SigningUrlResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rejectAgreementForParticipation**
> rejectAgreementForParticipation($authorization, $ifMatch, $agreementId, $participantSetId, $participantId, $agreementRejectionInfo, $xApiUser)

Rejects the agreement for a participant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_write')\" oncontextmenu=\"this.href=oauthDoc('agreement_write')\" target=\"oauthDoc\">agreement_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$ifMatch = "ifMatch_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$participantSetId = "participantSetId_example"; // string | The participant set identifier
$participantId = "participantId_example"; // string | The participant identifier
$agreementRejectionInfo = new \Adobe\ESign\Model\AgreementRejectionInfo(); // \Adobe\ESign\Model\AgreementRejectionInfo | Participant rejection information required for rejecting the agreement
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.

try {
    $apiInstance->rejectAgreementForParticipation($authorization, $ifMatch, $agreementId, $participantSetId, $participantId, $agreementRejectionInfo, $xApiUser);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->rejectAgreementForParticipation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **ifMatch** | **string**| The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **participantSetId** | **string**| The participant set identifier |
 **participantId** | **string**| The participant identifier |
 **agreementRejectionInfo** | [**\Adobe\ESign\Model\AgreementRejectionInfo**](../Model/AgreementRejectionInfo.md)| Participant rejection information required for rejecting the agreement |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAgreement**
> updateAgreement($authorization, $ifMatch, $agreementId, $agreementInfo, $xApiUser, $xOnBehalfOfUser)

Updates the agreement in draft state, or update the expirationTime on an existing agreement that is already out for signature.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_write')\" oncontextmenu=\"this.href=oauthDoc('agreement_write')\" target=\"oauthDoc\">agreement_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$ifMatch = "ifMatch_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$agreementInfo = new \Adobe\ESign\Model\AgreementInfo(); // \Adobe\ESign\Model\AgreementInfo | Information necessary to update a modifiable agreement that is presently out for signature.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateAgreement($authorization, $ifMatch, $agreementId, $agreementInfo, $xApiUser, $xOnBehalfOfUser);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->updateAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **ifMatch** | **string**| The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **agreementInfo** | [**\Adobe\ESign\Model\AgreementInfo**](../Model/AgreementInfo.md)| Information necessary to update a modifiable agreement that is presently out for signature. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAgreementMergeInfo**
> updateAgreementMergeInfo($authorization, $ifMatch, $agreementId, $formFieldMergeInfo, $xApiUser, $xOnBehalfOfUser)

Set the merge info for an agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_write')\" oncontextmenu=\"this.href=oauthDoc('agreement_write')\" target=\"oauthDoc\">agreement_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$ifMatch = "ifMatch_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$formFieldMergeInfo = new \Adobe\ESign\Model\FormFieldMergeInfo(); // \Adobe\ESign\Model\FormFieldMergeInfo | A mapping indicating the default values to set for form fields
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateAgreementMergeInfo($authorization, $ifMatch, $agreementId, $formFieldMergeInfo, $xApiUser, $xOnBehalfOfUser);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->updateAgreementMergeInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **ifMatch** | **string**| The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **formFieldMergeInfo** | [**\Adobe\ESign\Model\FormFieldMergeInfo**](../Model/FormFieldMergeInfo.md)| A mapping indicating the default values to set for form fields |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/pdf, text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAgreementNoteForApiUser**
> updateAgreementNoteForApiUser($authorization, $agreementId, $note, $xApiUser, $xOnBehalfOfUser)

Updates the latest note associated with an agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_write')\" oncontextmenu=\"this.href=oauthDoc('agreement_write')\" target=\"oauthDoc\">agreement_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$note = new \Adobe\ESign\Model\Note(); // \Adobe\ESign\Model\Note | The note to be associated with the agreement.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateAgreementNoteForApiUser($authorization, $agreementId, $note, $xApiUser, $xOnBehalfOfUser);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->updateAgreementNoteForApiUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **note** | [**\Adobe\ESign\Model\Note**](../Model/Note.md)| The note to be associated with the agreement. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAgreementReminder**
> updateAgreementReminder($authorization, $agreementId, $reminderId, $reminderInfo, $xApiUser, $xOnBehalfOfUser)

Updates an existing reminder for an agreement

You can only update an ACTIVE reminder, and can only update the status to 'CANCELED', update reminderParticipantIds, or update note.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_write')\" oncontextmenu=\"this.href=oauthDoc('agreement_write')\" target=\"oauthDoc\">agreement_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$reminderId = "reminderId_example"; // string | The reminder identifier
$reminderInfo = new \Adobe\ESign\Model\ReminderInfo(); // \Adobe\ESign\Model\ReminderInfo | The information about a reminder associated with a recipient of an agreement.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateAgreementReminder($authorization, $agreementId, $reminderId, $reminderInfo, $xApiUser, $xOnBehalfOfUser);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->updateAgreementReminder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **reminderId** | **string**| The reminder identifier |
 **reminderInfo** | [**\Adobe\ESign\Model\ReminderInfo**](../Model/ReminderInfo.md)| The information about a reminder associated with a recipient of an agreement. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAgreementSecurityOptionsForParticipation**
> updateAgreementSecurityOptionsForParticipation($authorization, $ifMatch, $agreementId, $participantSetId, $participantId, $participantSecurityOption, $xApiUser)

Updates the security options for a particular participant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_write')\" oncontextmenu=\"this.href=oauthDoc('agreement_write')\" target=\"oauthDoc\">agreement_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$ifMatch = "ifMatch_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$participantSetId = "participantSetId_example"; // string | The participant set identifier
$participantId = "participantId_example"; // string | The participant identifier
$participantSecurityOption = new \Adobe\ESign\Model\ParticipantSecurityOption(); // \Adobe\ESign\Model\ParticipantSecurityOption | Security options that apply to the participant
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.

try {
    $apiInstance->updateAgreementSecurityOptionsForParticipation($authorization, $ifMatch, $agreementId, $participantSetId, $participantId, $participantSecurityOption, $xApiUser);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->updateAgreementSecurityOptionsForParticipation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **ifMatch** | **string**| The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **participantSetId** | **string**| The participant set identifier |
 **participantId** | **string**| The participant identifier |
 **participantSecurityOption** | [**\Adobe\ESign\Model\ParticipantSecurityOption**](../Model/ParticipantSecurityOption.md)| Security options that apply to the participant |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAgreementState**
> updateAgreementState($authorization, $ifMatch, $agreementId, $agreementStateInfo, $xApiUser, $xOnBehalfOfUser)

Updates the state of an agreement identified by agreementId in the path.

This endpoint can be used by originator/sender of an agreement to transition between the states of agreement. An allowed transition would follow the following sequence: DRAFT -> AUTHORING -> IN_PROCESS -> CANCELLED.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_write')\" oncontextmenu=\"this.href=oauthDoc('agreement_write')\" target=\"oauthDoc\">agreement_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$ifMatch = "ifMatch_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$agreementStateInfo = new \Adobe\ESign\Model\AgreementStateInfo(); // \Adobe\ESign\Model\AgreementStateInfo | 
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateAgreementState($authorization, $ifMatch, $agreementId, $agreementStateInfo, $xApiUser, $xOnBehalfOfUser);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->updateAgreementState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **ifMatch** | **string**| The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **agreementStateInfo** | [**\Adobe\ESign\Model\AgreementStateInfo**](../Model/AgreementStateInfo.md)|  |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAgreementVisibility**
> updateAgreementVisibility($authorization, $agreementId, $visibilityInfo, $xApiUser, $xOnBehalfOfUser)

Updates the visibility of an agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_write')\" oncontextmenu=\"this.href=oauthDoc('agreement_write')\" target=\"oauthDoc\">agreement_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$visibilityInfo = new \Adobe\ESign\Model\VisibilityInfo(); // \Adobe\ESign\Model\VisibilityInfo | Information to update visibility of agreement
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateAgreementVisibility($authorization, $agreementId, $visibilityInfo, $xApiUser, $xOnBehalfOfUser);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->updateAgreementVisibility: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **visibilityInfo** | [**\Adobe\ESign\Model\VisibilityInfo**](../Model/VisibilityInfo.md)| Information to update visibility of agreement |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFormFields**
> \Adobe\ESign\Model\AgreementFormFields updateFormFields($authorization, $ifMatch, $agreementId, $formFieldPutInfo, $xApiUser, $xOnBehalfOfUser)

Updates form fields of an agreement.  This will replace all fields in AUTHORING mode agreements, and will replace all fields except for text tag generated fields in DRAFT mode agreements.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_write')\" oncontextmenu=\"this.href=oauthDoc('agreement_write')\" target=\"oauthDoc\">agreement_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$ifMatch = "ifMatch_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$formFieldPutInfo = new \Adobe\ESign\Model\FormFieldPutInfo(); // \Adobe\ESign\Model\FormFieldPutInfo | List of form fields to add or replace
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->updateFormFields($authorization, $ifMatch, $agreementId, $formFieldPutInfo, $xApiUser, $xOnBehalfOfUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->updateFormFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **ifMatch** | **string**| The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **formFieldPutInfo** | [**\Adobe\ESign\Model\FormFieldPutInfo**](../Model/FormFieldPutInfo.md)| List of form fields to add or replace |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

[**\Adobe\ESign\Model\AgreementFormFields**](../Model/AgreementFormFields.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateParticipantSet**
> updateParticipantSet($authorization, $ifMatch, $agreementId, $participantSetId, $detailedParticipantSetInfo, $xApiUser, $xOnBehalfOfUser)

Updates the participant set of an agreement identified by agreementId in the path.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_write')\" oncontextmenu=\"this.href=oauthDoc('agreement_write')\" target=\"oauthDoc\">agreement_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$ifMatch = "ifMatch_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$agreementId = "agreementId_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$participantSetId = "participantSetId_example"; // string | The participant set identifier
$detailedParticipantSetInfo = new \Adobe\ESign\Model\DetailedParticipantSetInfo(); // \Adobe\ESign\Model\DetailedParticipantSetInfo | The new participant set info.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateParticipantSet($authorization, $ifMatch, $agreementId, $participantSetId, $detailedParticipantSetInfo, $xApiUser, $xOnBehalfOfUser);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->updateParticipantSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **ifMatch** | **string**| The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned. |
 **agreementId** | **string**| The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements. |
 **participantSetId** | **string**| The participant set identifier |
 **detailedParticipantSetInfo** | [**\Adobe\ESign\Model\DetailedParticipantSetInfo**](../Model/DetailedParticipantSetInfo.md)| The new participant set info. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

