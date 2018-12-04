# SwaggerClient-php
No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 6.0.0
- Build package: io.swagger.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_write')\" oncontextmenu=\"this.href=oauthDoc('agreement_write')\" target=\"oauthDoc\">agreement_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$if_match = "if_match_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$agreement_id = "agreement_id_example"; // string | The agreement identifier, as returned by the agreement creation API or retrieved from the API to fetch agreements.
$form_field_post_info = new \Swagger\Client\Model\FormFieldPostInfo(); // \Swagger\Client\Model\FormFieldPostInfo | List of form fields to add or replace
$x_api_user = "x_api_user_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$x_on_behalf_of_user = "x_on_behalf_of_user_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->addTemplateFieldsToAgreement($authorization, $if_match, $agreement_id, $form_field_post_info, $x_api_user, $x_on_behalf_of_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->addTemplateFieldsToAgreement: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://upstreamtest.na2.echosign.com/api/rest/v6*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AgreementsApi* | [**addTemplateFieldsToAgreement**](docs/Api/AgreementsApi.md#addtemplatefieldstoagreement) | **POST** /agreements/{agreementId}/formFields | Adds template fields to an agreement
*AgreementsApi* | [**createAgreement**](docs/Api/AgreementsApi.md#createagreement) | **POST** /agreements | Creates an agreement. Sends it out for signatures, and returns the agreementID in the response to the client.
*AgreementsApi* | [**createAgreementView**](docs/Api/AgreementsApi.md#createagreementview) | **POST** /agreements/{agreementId}/views | Retrieves the latest state view url of agreement.
*AgreementsApi* | [**createDelegatedParticipantSets**](docs/Api/AgreementsApi.md#createdelegatedparticipantsets) | **POST** /agreements/{agreementId}/members/participantSets/{participantSetId}/delegatedParticipantSets | Creates a participantSet to which the agreement is forwarded for taking appropriate action.
*AgreementsApi* | [**createReminderOnParticipant**](docs/Api/AgreementsApi.md#createreminderonparticipant) | **POST** /agreements/{agreementId}/reminders | Creates a reminder on the specified participants of an agreement identified by agreementId in the path.
*AgreementsApi* | [**createShareOnAgreement**](docs/Api/AgreementsApi.md#createshareonagreement) | **POST** /agreements/{agreementId}/members/share | Share an agreement with someone.
*AgreementsApi* | [**deleteDocuments**](docs/Api/AgreementsApi.md#deletedocuments) | **DELETE** /agreements/{agreementId}/documents | Deletes all the documents of an agreement.
*AgreementsApi* | [**getAgreementInfo**](docs/Api/AgreementsApi.md#getagreementinfo) | **GET** /agreements/{agreementId} | Retrieves the current status of an agreement.
*AgreementsApi* | [**getAgreementNoteForApiUser**](docs/Api/AgreementsApi.md#getagreementnoteforapiuser) | **GET** /agreements/{agreementId}/me/note | Retrieves the latest note associated with an agreement.
*AgreementsApi* | [**getAgreementReminder**](docs/Api/AgreementsApi.md#getagreementreminder) | **GET** /agreements/{agreementId}/reminders/{reminderId} | Retrieves a specific reminder associated with an agreement
*AgreementsApi* | [**getAgreementReminders**](docs/Api/AgreementsApi.md#getagreementreminders) | **GET** /agreements/{agreementId}/reminders | Retrieves the reminders of an agreement, identified by agreementId in the path.
*AgreementsApi* | [**getAgreements**](docs/Api/AgreementsApi.md#getagreements) | **GET** /agreements | Retrieves agreements for the user.
*AgreementsApi* | [**getAllDocuments**](docs/Api/AgreementsApi.md#getalldocuments) | **GET** /agreements/{agreementId}/documents | Retrieves the IDs of the documents of an agreement identified by agreementId.
*AgreementsApi* | [**getAllDocumentsImageUrls**](docs/Api/AgreementsApi.md#getalldocumentsimageurls) | **GET** /agreements/{agreementId}/documents/imageUrls | Retrieves image urls of all visible pages of all the documents associated with an agreement.
*AgreementsApi* | [**getAllMembers**](docs/Api/AgreementsApi.md#getallmembers) | **GET** /agreements/{agreementId}/members | Retrieves information of members of the agreement.
*AgreementsApi* | [**getAuditTrail**](docs/Api/AgreementsApi.md#getaudittrail) | **GET** /agreements/{agreementId}/auditTrail | Retrieves the audit trail of an agreement identified by agreementId.
*AgreementsApi* | [**getCombinedDocument**](docs/Api/AgreementsApi.md#getcombineddocument) | **GET** /agreements/{agreementId}/combinedDocument | Retrieves a single combined PDF document for the documents associated with an agreement.
*AgreementsApi* | [**getCombinedDocumentPagesInfo**](docs/Api/AgreementsApi.md#getcombineddocumentpagesinfo) | **GET** /agreements/{agreementId}/combinedDocument/pagesInfo | Retrieves info of all pages of a combined PDF document for the documents associated with an agreement.
*AgreementsApi* | [**getCombinedDocumentUrl**](docs/Api/AgreementsApi.md#getcombineddocumenturl) | **GET** /agreements/{agreementId}/combinedDocument/url | Retrieves url of all visible pages of all the documents associated with an agreement.
*AgreementsApi* | [**getDocument**](docs/Api/AgreementsApi.md#getdocument) | **GET** /agreements/{agreementId}/documents/{documentId} | Retrieves the file stream of a document of an agreement.
*AgreementsApi* | [**getDocumentImageUrls**](docs/Api/AgreementsApi.md#getdocumentimageurls) | **GET** /agreements/{agreementId}/documents/{documentId}/imageUrls | Retrieves image urls of all visible pages of a document associated with an agreement.
*AgreementsApi* | [**getEvents**](docs/Api/AgreementsApi.md#getevents) | **GET** /agreements/{agreementId}/events | Retrieves the events information for an agreement.
*AgreementsApi* | [**getFormData**](docs/Api/AgreementsApi.md#getformdata) | **GET** /agreements/{agreementId}/formData | Retrieves data entered into the interactive form fields of the agreement.
*AgreementsApi* | [**getFormFields**](docs/Api/AgreementsApi.md#getformfields) | **GET** /agreements/{agreementId}/formFields | Retrieves details of form fields of an agreement.
*AgreementsApi* | [**getMergeInfo**](docs/Api/AgreementsApi.md#getmergeinfo) | **GET** /agreements/{agreementId}/formFields/mergeInfo | Retrieves the merge info stored with an agreement.
*AgreementsApi* | [**getParticipantSet**](docs/Api/AgreementsApi.md#getparticipantset) | **GET** /agreements/{agreementId}/members/participantSets/{participantSetId} | Retrieves the participant set of an agreement identified by agreementId in the path.
*AgreementsApi* | [**getSigningUrl**](docs/Api/AgreementsApi.md#getsigningurl) | **GET** /agreements/{agreementId}/signingUrls | Retrieves the URL for the e-sign page for the current signer(s) of an agreement.
*AgreementsApi* | [**rejectAgreementForParticipation**](docs/Api/AgreementsApi.md#rejectagreementforparticipation) | **PUT** /agreements/{agreementId}/members/participantSets/{participantSetId}/participants/{participantId}/reject | Rejects the agreement for a participant.
*AgreementsApi* | [**updateAgreement**](docs/Api/AgreementsApi.md#updateagreement) | **PUT** /agreements/{agreementId} | Updates the agreement in draft state, or update the expirationTime on an existing agreement that is already out for signature.
*AgreementsApi* | [**updateAgreementMergeInfo**](docs/Api/AgreementsApi.md#updateagreementmergeinfo) | **PUT** /agreements/{agreementId}/formFields/mergeInfo | Set the merge info for an agreement.
*AgreementsApi* | [**updateAgreementNoteForApiUser**](docs/Api/AgreementsApi.md#updateagreementnoteforapiuser) | **PUT** /agreements/{agreementId}/me/note | Updates the latest note associated with an agreement.
*AgreementsApi* | [**updateAgreementReminder**](docs/Api/AgreementsApi.md#updateagreementreminder) | **PUT** /agreements/{agreementId}/reminders/{reminderId} | Updates an existing reminder for an agreement
*AgreementsApi* | [**updateAgreementState**](docs/Api/AgreementsApi.md#updateagreementstate) | **PUT** /agreements/{agreementId}/state | Updates the state of an agreement identified by agreementId in the path.
*AgreementsApi* | [**updateAgreementVisibility**](docs/Api/AgreementsApi.md#updateagreementvisibility) | **PUT** /agreements/{agreementId}/me/visibility | Updates the visibility of an agreement.
*AgreementsApi* | [**updateFormFields**](docs/Api/AgreementsApi.md#updateformfields) | **PUT** /agreements/{agreementId}/formFields | Updates form fields of an agreement.
*AgreementsApi* | [**updateParticipantSet**](docs/Api/AgreementsApi.md#updateparticipantset) | **PUT** /agreements/{agreementId}/members/participantSets/{participantSetId} | Updates the participant set of an agreement identified by agreementId in the path.


## Documentation For Models

 - [AgreementCancellationInfo](docs/Model/AgreementCancellationInfo.md)
 - [AgreementCcInfo](docs/Model/AgreementCcInfo.md)
 - [AgreementCreationInfo](docs/Model/AgreementCreationInfo.md)
 - [AgreementCreationResponse](docs/Model/AgreementCreationResponse.md)
 - [AgreementDocumentImageUrlsInfo](docs/Model/AgreementDocumentImageUrlsInfo.md)
 - [AgreementDocuments](docs/Model/AgreementDocuments.md)
 - [AgreementEvent](docs/Model/AgreementEvent.md)
 - [AgreementEventList](docs/Model/AgreementEventList.md)
 - [AgreementFormFields](docs/Model/AgreementFormFields.md)
 - [AgreementInfo](docs/Model/AgreementInfo.md)
 - [AgreementRejectionInfo](docs/Model/AgreementRejectionInfo.md)
 - [AgreementStateInfo](docs/Model/AgreementStateInfo.md)
 - [AgreementView](docs/Model/AgreementView.md)
 - [AgreementViewInfo](docs/Model/AgreementViewInfo.md)
 - [AgreementViews](docs/Model/AgreementViews.md)
 - [CCParticipantInfo](docs/Model/CCParticipantInfo.md)
 - [CombinedDocumentPagesInfo](docs/Model/CombinedDocumentPagesInfo.md)
 - [CommonViewConfiguration](docs/Model/CommonViewConfiguration.md)
 - [ComposeViewConfiguration](docs/Model/ComposeViewConfiguration.md)
 - [DelegatedParticipantInfo](docs/Model/DelegatedParticipantInfo.md)
 - [DelegatedParticipantSecurityOption](docs/Model/DelegatedParticipantSecurityOption.md)
 - [DelegatedParticipantSetInfo](docs/Model/DelegatedParticipantSetInfo.md)
 - [DelegationResponse](docs/Model/DelegationResponse.md)
 - [DetailedParticipantInfo](docs/Model/DetailedParticipantInfo.md)
 - [DetailedParticipantSetInfo](docs/Model/DetailedParticipantSetInfo.md)
 - [DeviceLocation](docs/Model/DeviceLocation.md)
 - [DigitalSignatureInfo](docs/Model/DigitalSignatureInfo.md)
 - [DisplayParticipantInfo](docs/Model/DisplayParticipantInfo.md)
 - [DisplayParticipantSetInfo](docs/Model/DisplayParticipantSetInfo.md)
 - [Document](docs/Model/Document.md)
 - [DocumentImageUrls](docs/Model/DocumentImageUrls.md)
 - [DocumentImageUrlsInfo](docs/Model/DocumentImageUrlsInfo.md)
 - [DocumentPageInfo](docs/Model/DocumentPageInfo.md)
 - [DocumentUrl](docs/Model/DocumentUrl.md)
 - [DocumentsImageUrlsInfo](docs/Model/DocumentsImageUrlsInfo.md)
 - [EmailOption](docs/Model/EmailOption.md)
 - [ExternalId](docs/Model/ExternalId.md)
 - [FileInfo](docs/Model/FileInfo.md)
 - [FileUploadOptions](docs/Model/FileUploadOptions.md)
 - [FormField](docs/Model/FormField.md)
 - [FormFieldConditionPredicate](docs/Model/FormFieldConditionPredicate.md)
 - [FormFieldConditionalAction](docs/Model/FormFieldConditionalAction.md)
 - [FormFieldHyperlink](docs/Model/FormFieldHyperlink.md)
 - [FormFieldLocation](docs/Model/FormFieldLocation.md)
 - [FormFieldMergeInfo](docs/Model/FormFieldMergeInfo.md)
 - [FormFieldPostInfo](docs/Model/FormFieldPostInfo.md)
 - [FormFieldPutInfo](docs/Model/FormFieldPutInfo.md)
 - [MembersInfo](docs/Model/MembersInfo.md)
 - [MergefieldInfo](docs/Model/MergefieldInfo.md)
 - [Note](docs/Model/Note.md)
 - [OfflineDeviceInfo](docs/Model/OfflineDeviceInfo.md)
 - [PageImageUrl](docs/Model/PageImageUrl.md)
 - [PageInfo](docs/Model/PageInfo.md)
 - [ParticipantSecurityOption](docs/Model/ParticipantSecurityOption.md)
 - [ParticipantSetInfo](docs/Model/ParticipantSetInfo.md)
 - [ParticipantSetMemberInfo](docs/Model/ParticipantSetMemberInfo.md)
 - [PhoneInfo](docs/Model/PhoneInfo.md)
 - [PostSignOption](docs/Model/PostSignOption.md)
 - [ReminderCreationResult](docs/Model/ReminderCreationResult.md)
 - [ReminderInfo](docs/Model/ReminderInfo.md)
 - [RemindersResponse](docs/Model/RemindersResponse.md)
 - [SecurityOption](docs/Model/SecurityOption.md)
 - [SendOptions](docs/Model/SendOptions.md)
 - [SenderInfo](docs/Model/SenderInfo.md)
 - [ShareCreationInfo](docs/Model/ShareCreationInfo.md)
 - [ShareCreationInfoList](docs/Model/ShareCreationInfoList.md)
 - [ShareCreationResponse](docs/Model/ShareCreationResponse.md)
 - [ShareCreationResponseList](docs/Model/ShareCreationResponseList.md)
 - [ShareParticipantInfo](docs/Model/ShareParticipantInfo.md)
 - [SigningUrl](docs/Model/SigningUrl.md)
 - [SigningUrlResponse](docs/Model/SigningUrlResponse.md)
 - [SigningUrlSetInfo](docs/Model/SigningUrlSetInfo.md)
 - [SupportingDocument](docs/Model/SupportingDocument.md)
 - [URLFileInfo](docs/Model/URLFileInfo.md)
 - [UserAgreement](docs/Model/UserAgreement.md)
 - [UserAgreements](docs/Model/UserAgreements.md)
 - [VaultingInfo](docs/Model/VaultingInfo.md)
 - [VisibilityInfo](docs/Model/VisibilityInfo.md)


## Documentation For Authorization

 All endpoints do not require authorization.


## Author




