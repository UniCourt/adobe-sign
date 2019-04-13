# Adobe\ESign\MegaSignsApi

All URIs are relative to *https://secure.na1.echosign.com/api/rest/v6*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMegaSign**](MegaSignsApi.md#createMegaSign) | **POST** /megaSigns | Send an agreement out for signature to multiple recipients. Each recipient will receive and sign their own copy of the agreement.
[**getChildAgreementsInfoFile**](MegaSignsApi.md#getChildAgreementsInfoFile) | **GET** /megaSigns/{megaSignId}/childAgreementsInfo/{childAgreementsInfoFileId} | Retrieves the file stream of the original childAgreementsInfoFile that was uploaded by sender while creating the MegaSign.
[**getMegaSignChildAgreements**](MegaSignsApi.md#getMegaSignChildAgreements) | **GET** /megaSigns/{megaSignId}/agreements | Get all the child agreements of the specified MegaSign parent agreement.
[**getMegaSignCombinedDocument**](MegaSignsApi.md#getMegaSignCombinedDocument) | **GET** /megaSigns/{megaSignId}/combinedDocument | Retrieves a single combined PDF document for the documents associated with the MegaSign parent agreement.
[**getMegaSignEvents**](MegaSignsApi.md#getMegaSignEvents) | **GET** /megaSigns/{megaSignId}/events | Retrieves the events information for the MegaSign parent agreement.
[**getMegaSignFormData**](MegaSignsApi.md#getMegaSignFormData) | **GET** /megaSigns/{megaSignId}/formData | Retrieves data entered by recipients into interactive form fields at the time they signed the child agreements of the specified MegaSign agreement
[**getMegaSignInfo**](MegaSignsApi.md#getMegaSignInfo) | **GET** /megaSigns/{megaSignId} | Get detailed information of the specified MegaSign parent agreement.
[**getMegaSignView**](MegaSignsApi.md#getMegaSignView) | **POST** /megaSigns/{megaSignId}/views | Retrieves the requested views of mega sign agreement.
[**getMegaSigns**](MegaSignsApi.md#getMegaSigns) | **GET** /megaSigns | Retrieves MegaSign parent agreements for a user.
[**updateMegaSignState**](MegaSignsApi.md#updateMegaSignState) | **PUT** /megaSigns/{megaSignId}/state | Updates the state of a MegaSign identified by MegaSignId in the path.


# **createMegaSign**
> \Adobe\ESign\Model\MegaSignCreationResponse createMegaSign($authorization, $megaSignInfo, $xApiUser, $xOnBehalfOfUser)

Send an agreement out for signature to multiple recipients. Each recipient will receive and sign their own copy of the agreement.

This is a primary endpoint which is used to create a new megaSign. A megaSign can be created using transientDocument, libraryDocument or a URL. You can create a megaSign in <b>IN_PROCESS</b> - Create a megaSign in this state to immediately send it. You can use the PUT/megaSigns/{megaSignId}/state endpoint to transition the state of megaSign. An allowed transition would follow the following sequence: IN_PROCESS -> CANCELLED.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\MegaSignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_write')\" oncontextmenu=\"this.href=oauthDoc('agreement_write')\" target=\"oauthDoc\">agreement_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$megaSignInfo = new \Adobe\ESign\Model\MegaSignCreationInfo(); // \Adobe\ESign\Model\MegaSignCreationInfo | Information about the MegaSign that you want to send.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->createMegaSign($authorization, $megaSignInfo, $xApiUser, $xOnBehalfOfUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MegaSignsApi->createMegaSign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **megaSignInfo** | [**\Adobe\ESign\Model\MegaSignCreationInfo**](../Model/MegaSignCreationInfo.md)| Information about the MegaSign that you want to send. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

[**\Adobe\ESign\Model\MegaSignCreationResponse**](../Model/MegaSignCreationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChildAgreementsInfoFile**
> string getChildAgreementsInfoFile($authorization, $megaSignId, $childAgreementsInfoFileId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch)

Retrieves the file stream of the original childAgreementsInfoFile that was uploaded by sender while creating the MegaSign.

CSV file stream containing form data information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\MegaSignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$megaSignId = "megaSignId_example"; // string | The identifier of the MegaSign parent agreement, as returned by the megaSign creation API or retrieved from the API to fetch megaSign agreements
$childAgreementsInfoFileId = "childAgreementsInfoFileId_example"; // string | The identifier of the childAgreementsInfoFile that has been uploaded by sender while creating the megaSign or retrieved from the API to fetch megaSignInfo
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getChildAgreementsInfoFile($authorization, $megaSignId, $childAgreementsInfoFileId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MegaSignsApi->getChildAgreementsInfoFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **megaSignId** | **string**| The identifier of the MegaSign parent agreement, as returned by the megaSign creation API or retrieved from the API to fetch megaSign agreements |
 **childAgreementsInfoFileId** | **string**| The identifier of the childAgreementsInfoFile that has been uploaded by sender while creating the megaSign or retrieved from the API to fetch megaSignInfo |
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

# **getMegaSignChildAgreements**
> \Adobe\ESign\Model\MegaSignChildAgreements getMegaSignChildAgreements($authorization, $megaSignId, $xApiUser, $xOnBehalfOfUser, $cursor, $pageSize)

Get all the child agreements of the specified MegaSign parent agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\MegaSignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$megaSignId = "megaSignId_example"; // string | The identifier of the MegaSign parent agreement, as returned by the megaSign creation API or retrieved from the API to fetch megaSign agreements
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$cursor = "cursor_example"; // string | Used to navigate through the pages. If not provided, returns the first page.
$pageSize = 56; // int | Number of intended items in the response page. If not provided, it is decided by the application settings.

try {
    $result = $apiInstance->getMegaSignChildAgreements($authorization, $megaSignId, $xApiUser, $xOnBehalfOfUser, $cursor, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MegaSignsApi->getMegaSignChildAgreements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **megaSignId** | **string**| The identifier of the MegaSign parent agreement, as returned by the megaSign creation API or retrieved from the API to fetch megaSign agreements |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **cursor** | **string**| Used to navigate through the pages. If not provided, returns the first page. | [optional]
 **pageSize** | **int**| Number of intended items in the response page. If not provided, it is decided by the application settings. | [optional]

### Return type

[**\Adobe\ESign\Model\MegaSignChildAgreements**](../Model/MegaSignChildAgreements.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMegaSignCombinedDocument**
> string getMegaSignCombinedDocument($authorization, $megaSignId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $attachAuditReport)

Retrieves a single combined PDF document for the documents associated with the MegaSign parent agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\MegaSignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$megaSignId = "megaSignId_example"; // string | The identifier of the MegaSign parent agreement, as returned by the megaSign creation API or retrieved from the API to fetch megaSign agreements
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.
$attachAuditReport = true; // bool | When set to true attach an audit report to the MegaSign document PDF. Default value will be false.

try {
    $result = $apiInstance->getMegaSignCombinedDocument($authorization, $megaSignId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $attachAuditReport);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MegaSignsApi->getMegaSignCombinedDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **megaSignId** | **string**| The identifier of the MegaSign parent agreement, as returned by the megaSign creation API or retrieved from the API to fetch megaSign agreements |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]
 **attachAuditReport** | **bool**| When set to true attach an audit report to the MegaSign document PDF. Default value will be false. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/pdf;encoding=base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMegaSignEvents**
> \Adobe\ESign\Model\MegasignEventList getMegaSignEvents($authorization, $megaSignId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch)

Retrieves the events information for the MegaSign parent agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\MegaSignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$megaSignId = "megaSignId_example"; // string | The identifier of the MegaSign parent agreement, as returned by the megaSign creation API or retrieved from the API to fetch megaSign agreements
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getMegaSignEvents($authorization, $megaSignId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MegaSignsApi->getMegaSignEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **megaSignId** | **string**| The identifier of the MegaSign parent agreement, as returned by the megaSign creation API or retrieved from the API to fetch megaSign agreements |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

[**\Adobe\ESign\Model\MegasignEventList**](../Model/MegasignEventList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMegaSignFormData**
> string getMegaSignFormData($authorization, $megaSignId, $xApiUser, $xOnBehalfOfUser)

Retrieves data entered by recipients into interactive form fields at the time they signed the child agreements of the specified MegaSign agreement

CSV file stream containing form data information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\MegaSignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$megaSignId = "megaSignId_example"; // string | The identifier of the MegaSign parent agreement, as returned by the megaSign creation API or retrieved from the API to fetch megaSign agreements
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->getMegaSignFormData($authorization, $megaSignId, $xApiUser, $xOnBehalfOfUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MegaSignsApi->getMegaSignFormData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **megaSignId** | **string**| The identifier of the MegaSign parent agreement, as returned by the megaSign creation API or retrieved from the API to fetch megaSign agreements |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMegaSignInfo**
> \Adobe\ESign\Model\MegaSignCreationInfo getMegaSignInfo($authorization, $megaSignId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch)

Get detailed information of the specified MegaSign parent agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\MegaSignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$megaSignId = "megaSignId_example"; // string | The identifier of the MegaSign parent agreement, as returned by the megaSign creation API or retrieved from the API to fetch megaSign agreements
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getMegaSignInfo($authorization, $megaSignId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MegaSignsApi->getMegaSignInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **megaSignId** | **string**| The identifier of the MegaSign parent agreement, as returned by the megaSign creation API or retrieved from the API to fetch megaSign agreements |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

[**\Adobe\ESign\Model\MegaSignCreationInfo**](../Model/MegaSignCreationInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMegaSignView**
> \Adobe\ESign\Model\MegaSignViewResponse getMegaSignView($authorization, $megaSignId, $megaSignViewInfo, $xApiUser, $xOnBehalfOfUser)

Retrieves the requested views of mega sign agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\MegaSignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a> - agreement read is always required</li><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('user_login')\" oncontextmenu=\"this.href=oauthDoc('user_login')\" target=\"oauthDoc\">user_login</a> - Required additionally if the autoLoginUser parameter is set to true</li></ul>in the format <b>'Bearer {accessToken}'.
$megaSignId = "megaSignId_example"; // string | The identifier of the MegaSign parent agreement, as returned by the megaSign creation API or retrieved from the API to fetch megaSign agreements
$megaSignViewInfo = new \Adobe\ESign\Model\MegaSignViewInfo(); // \Adobe\ESign\Model\MegaSignViewInfo | Name of the required view and its desired configuration.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->getMegaSignView($authorization, $megaSignId, $megaSignViewInfo, $xApiUser, $xOnBehalfOfUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MegaSignsApi->getMegaSignView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt; - agreement read is always required&lt;/li&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_login&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_login&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;user_login&lt;/a&gt; - Required additionally if the autoLoginUser parameter is set to true&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **megaSignId** | **string**| The identifier of the MegaSign parent agreement, as returned by the megaSign creation API or retrieved from the API to fetch megaSign agreements |
 **megaSignViewInfo** | [**\Adobe\ESign\Model\MegaSignViewInfo**](../Model/MegaSignViewInfo.md)| Name of the required view and its desired configuration. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

[**\Adobe\ESign\Model\MegaSignViewResponse**](../Model/MegaSignViewResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMegaSigns**
> \Adobe\ESign\Model\MegaSigns getMegaSigns($authorization, $xApiUser, $xOnBehalfOfUser, $cursor, $pageSize)

Retrieves MegaSign parent agreements for a user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\MegaSignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_read')\" oncontextmenu=\"this.href=oauthDoc('agreement_read')\" target=\"oauthDoc\">agreement_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$cursor = "cursor_example"; // string | Used to navigate through the pages. If not provided, returns the first page.
$pageSize = 56; // int | Number of intended items in the response page. If not provided, it is decided by the application settings.

try {
    $result = $apiInstance->getMegaSigns($authorization, $xApiUser, $xOnBehalfOfUser, $cursor, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MegaSignsApi->getMegaSigns: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **cursor** | **string**| Used to navigate through the pages. If not provided, returns the first page. | [optional]
 **pageSize** | **int**| Number of intended items in the response page. If not provided, it is decided by the application settings. | [optional]

### Return type

[**\Adobe\ESign\Model\MegaSigns**](../Model/MegaSigns.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMegaSignState**
> updateMegaSignState($authorization, $ifMatch, $megaSignId, $megaSignStateInfo, $xApiUser, $xOnBehalfOfUser)

Updates the state of a MegaSign identified by MegaSignId in the path.

This endpoint can be used by creator of the MegaSign to transition between the states of megaSign. An allowed transition would follow the following sequence :  IN_PROCESS->CANCELLED.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\MegaSignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('agreement_write')\" oncontextmenu=\"this.href=oauthDoc('agreement_write')\" target=\"oauthDoc\">agreement_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$ifMatch = "ifMatch_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$megaSignId = "megaSignId_example"; // string | The identifier of the MegaSign parent agreement, as returned by the megaSign creation API or retrieved from the API to fetch megaSign agreements
$megaSignStateInfo = new \Adobe\ESign\Model\MegaSignStateInfo(); // \Adobe\ESign\Model\MegaSignStateInfo | MegaSign state update information object.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateMegaSignState($authorization, $ifMatch, $megaSignId, $megaSignStateInfo, $xApiUser, $xOnBehalfOfUser);
} catch (Exception $e) {
    echo 'Exception when calling MegaSignsApi->updateMegaSignState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;agreement_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;agreement_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **ifMatch** | **string**| The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned. |
 **megaSignId** | **string**| The identifier of the MegaSign parent agreement, as returned by the megaSign creation API or retrieved from the API to fetch megaSign agreements |
 **megaSignStateInfo** | [**\Adobe\ESign\Model\MegaSignStateInfo**](../Model/MegaSignStateInfo.md)| MegaSign state update information object. |
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

