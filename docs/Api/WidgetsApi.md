# Adobe\ESign\WidgetsApi

All URIs are relative to *https://secure.na1.echosign.com/api/rest/v6*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createShareOnWidget**](WidgetsApi.md#createShareOnWidget) | **POST** /widgets/{widgetId}/members/share | Share a widget with someone.
[**createWidget**](WidgetsApi.md#createWidget) | **POST** /widgets | Creates a widget and and returns the widgetId in the response to the client.
[**getAllDocumentsOfWidget**](WidgetsApi.md#getAllDocumentsOfWidget) | **GET** /widgets/{widgetId}/documents | Retrieves the IDs of the documents associated with widget.
[**getAllWidgetMembers**](WidgetsApi.md#getAllWidgetMembers) | **GET** /widgets/{widgetId}/members | Retrieves detailed member info along with IDs for different types of participants.
[**getDocumentOfWidget**](WidgetsApi.md#getDocumentOfWidget) | **GET** /widgets/{widgetId}/documents/{documentId} | Retrieves the file stream of a document of a widget.
[**getWidgetAgreements**](WidgetsApi.md#getWidgetAgreements) | **GET** /widgets/{widgetId}/agreements | Retrieves agreements for the widget.
[**getWidgetAllDocumentsImageUrls**](WidgetsApi.md#getWidgetAllDocumentsImageUrls) | **GET** /widgets/{widgetId}/documents/imageUrls | Retrieves image urls of all visible pages of a document associated with a widget.
[**getWidgetAuditTrail**](WidgetsApi.md#getWidgetAuditTrail) | **GET** /widgets/{widgetId}/auditTrail | Retrieves the audit trail of a widget identified by widgetId.
[**getWidgetCombinedDocument**](WidgetsApi.md#getWidgetCombinedDocument) | **GET** /widgets/{widgetId}/combinedDocument | Retrieves a single combined PDF document for the documents associated with a widget.
[**getWidgetEvents**](WidgetsApi.md#getWidgetEvents) | **GET** /widgets/{widgetId}/events | Retrieves the events information for a widget.
[**getWidgetFormData**](WidgetsApi.md#getWidgetFormData) | **GET** /widgets/{widgetId}/formData | Retrieves data entered by the user into interactive form fields at the time they signed the widget
[**getWidgetInfo**](WidgetsApi.md#getWidgetInfo) | **GET** /widgets/{widgetId} | Retrieves the details of a widget.
[**getWidgetNoteForApiUser**](WidgetsApi.md#getWidgetNoteForApiUser) | **GET** /widgets/{widgetId}/me/note | Retrieves the latest note of a widget for the API user.
[**getWidgetParticipantSet**](WidgetsApi.md#getWidgetParticipantSet) | **GET** /widgets/{widgetId}/members/participantSets/{participantSetId} | Retrieves the participant set of a widget identified by widgetId in the path.
[**getWidgetSecurityOptionsForParticipation**](WidgetsApi.md#getWidgetSecurityOptionsForParticipation) | **GET** /widgets/{widgetId}/members/participantSets/{participantSetId}/participants/{participantId}/securityOptions | Retrieves the security options for a particular participant.
[**getWidgetView**](WidgetsApi.md#getWidgetView) | **POST** /widgets/{widgetId}/views | Retrieves the requested views for a widget.
[**getWidgets**](WidgetsApi.md#getWidgets) | **GET** /widgets | Retrieves widgets for a user.
[**updateWidget**](WidgetsApi.md#updateWidget) | **PUT** /widgets/{widgetId} | Updates a widget.
[**updateWidgetNoteForApiUser**](WidgetsApi.md#updateWidgetNoteForApiUser) | **PUT** /widgets/{widgetId}/me/note | Updates the latest note of a widget for the API user.
[**updateWidgetSecurityOptionsForParticipation**](WidgetsApi.md#updateWidgetSecurityOptionsForParticipation) | **PUT** /widgets/{widgetId}/members/participantSets/{participantSetId}/participants/{participantId}/securityOptions | Updates the security options for a particular participant.
[**updateWidgetState**](WidgetsApi.md#updateWidgetState) | **PUT** /widgets/{widgetId}/state | Updates the state of a widget identified by widgetId in the path.
[**updateWidgetVisibility**](WidgetsApi.md#updateWidgetVisibility) | **PUT** /widgets/{widgetId}/me/visibility | Updates the visibility of widget.


# **createShareOnWidget**
> \Adobe\ESign\Model\ShareCreationResponseList createShareOnWidget($authorization, $widgetId, $shareCreationInfoList, $xApiUser, $xOnBehalfOfUser)

Share a widget with someone.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_write')\" oncontextmenu=\"this.href=oauthDoc('widget_write')\" target=\"oauthDoc\">widget_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widgetId = "widgetId_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$shareCreationInfoList = new \Adobe\ESign\Model\ShareCreationInfoList(); // \Adobe\ESign\Model\ShareCreationInfoList | List of agreement share creation information objects.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->createShareOnWidget($authorization, $widgetId, $shareCreationInfoList, $xApiUser, $xOnBehalfOfUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->createShareOnWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widgetId** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
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

# **createWidget**
> \Adobe\ESign\Model\WidgetCreationResponse createWidget($authorization, $widgetInfo, $xApiUser, $xOnBehalfOfUser)

Creates a widget and and returns the widgetId in the response to the client.

This is a primary endpoint which is used to create a new widget. You can create a widget in one of the 3 mentioned states: a) <b>DRAFT</b> - to incrementally build the widget, b) <b>AUTHORING</b> - to add/edit form fields in the widget, c) <b>ACTIVE</b> - to immediately host the widget. You can use the PUT /widgets/{widgetId}/state endpoint to transition a widget between the above mentioned states. An allowed transition would follow the any of the following sequences: DRAFT->AUTHORING->ACTIVE, ACTIVE<->INACTIVE, DRAFT->CANCELLED.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_write')\" oncontextmenu=\"this.href=oauthDoc('widget_write')\" target=\"oauthDoc\">widget_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widgetInfo = new \Adobe\ESign\Model\WidgetCreationInfoV6(); // \Adobe\ESign\Model\WidgetCreationInfoV6 | Information about the widget that you want to create.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->createWidget($authorization, $widgetInfo, $xApiUser, $xOnBehalfOfUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->createWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widgetInfo** | [**\Adobe\ESign\Model\WidgetCreationInfoV6**](../Model/WidgetCreationInfoV6.md)| Information about the widget that you want to create. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

[**\Adobe\ESign\Model\WidgetCreationResponse**](../Model/WidgetCreationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllDocumentsOfWidget**
> \Adobe\ESign\Model\WidgetDocuments getAllDocumentsOfWidget($authorization, $widgetId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $versionId, $participantId)

Retrieves the IDs of the documents associated with widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widgetId = "widgetId_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.
$versionId = "versionId_example"; // string | The version identifier of widget as provided by the API which retrieves information of a specific widget. If not provided then latest version will be used.
$participantId = "participantId_example"; // string | The ID of the participant to be used to retrieve documents. If not mentioned, the participation of api caller is used.

try {
    $result = $apiInstance->getAllDocumentsOfWidget($authorization, $widgetId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $versionId, $participantId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getAllDocumentsOfWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widgetId** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]
 **versionId** | **string**| The version identifier of widget as provided by the API which retrieves information of a specific widget. If not provided then latest version will be used. | [optional]
 **participantId** | **string**| The ID of the participant to be used to retrieve documents. If not mentioned, the participation of api caller is used. | [optional]

### Return type

[**\Adobe\ESign\Model\WidgetDocuments**](../Model/WidgetDocuments.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllWidgetMembers**
> \Adobe\ESign\Model\WidgetMembersInfo getAllWidgetMembers($authorization, $widgetId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch)

Retrieves detailed member info along with IDs for different types of participants.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widgetId = "widgetId_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getAllWidgetMembers($authorization, $widgetId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getAllWidgetMembers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widgetId** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

[**\Adobe\ESign\Model\WidgetMembersInfo**](../Model/WidgetMembersInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentOfWidget**
> string getDocumentOfWidget($authorization, $widgetId, $documentId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch)

Retrieves the file stream of a document of a widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widgetId = "widgetId_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$documentId = "documentId_example"; // string | The document identifier, as retrieved from the API which fetches the documents of a specified widget
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getDocumentOfWidget($authorization, $widgetId, $documentId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getDocumentOfWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widgetId** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **documentId** | **string**| The document identifier, as retrieved from the API which fetches the documents of a specified widget |
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

# **getWidgetAgreements**
> \Adobe\ESign\Model\WidgetAgreements getWidgetAgreements($authorization, $widgetId, $xApiUser, $xOnBehalfOfUser, $showHiddenAgreements, $cursor, $pageSize)

Retrieves agreements for the widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widgetId = "widgetId_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$showHiddenAgreements = true; // bool | A query parameter to fetch all the hidden agreements along with the visible agreements. Default value is false.
$cursor = "cursor_example"; // string | Used to navigate through the pages. If not provided, returns the first page.
$pageSize = 56; // int | Number of intended items in the response page. If not provided, it is decided by the application settings.

try {
    $result = $apiInstance->getWidgetAgreements($authorization, $widgetId, $xApiUser, $xOnBehalfOfUser, $showHiddenAgreements, $cursor, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetAgreements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widgetId** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **showHiddenAgreements** | **bool**| A query parameter to fetch all the hidden agreements along with the visible agreements. Default value is false. | [optional]
 **cursor** | **string**| Used to navigate through the pages. If not provided, returns the first page. | [optional]
 **pageSize** | **int**| Number of intended items in the response page. If not provided, it is decided by the application settings. | [optional]

### Return type

[**\Adobe\ESign\Model\WidgetAgreements**](../Model/WidgetAgreements.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgetAllDocumentsImageUrls**
> \Adobe\ESign\Model\WidgetDocumentsImageUrlsInfo getWidgetAllDocumentsImageUrls($authorization, $widgetId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $imageSizes, $showImageAvailabilityOnly)

Retrieves image urls of all visible pages of a document associated with a widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widgetId = "widgetId_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.
$imageSizes = "imageSizes_example"; // string | A comma separated list of image sizes i.e. {FIXED_WIDTH_50px, FIXED_WIDTH_250px, FIXED_WIDTH_675px, ZOOM_50_PERCENT, ZOOM_75_PERCENT, ZOOM_100_PERCENT, ZOOM_125_PERCENT, ZOOM_150_PERCENT, ZOOM_200_PERCENT}. Default sizes returned are {FIXED_WIDTH_50px, FIXED_WIDTH_250px, FIXED_WIDTH_675px, ZOOM_100_PERCENT}.
$showImageAvailabilityOnly = true; // bool | When set to true, returns only image availability. Else, returns both image urls and its availability.

try {
    $result = $apiInstance->getWidgetAllDocumentsImageUrls($authorization, $widgetId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $imageSizes, $showImageAvailabilityOnly);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetAllDocumentsImageUrls: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widgetId** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]
 **imageSizes** | **string**| A comma separated list of image sizes i.e. {FIXED_WIDTH_50px, FIXED_WIDTH_250px, FIXED_WIDTH_675px, ZOOM_50_PERCENT, ZOOM_75_PERCENT, ZOOM_100_PERCENT, ZOOM_125_PERCENT, ZOOM_150_PERCENT, ZOOM_200_PERCENT}. Default sizes returned are {FIXED_WIDTH_50px, FIXED_WIDTH_250px, FIXED_WIDTH_675px, ZOOM_100_PERCENT}. | [optional]
 **showImageAvailabilityOnly** | **bool**| When set to true, returns only image availability. Else, returns both image urls and its availability. | [optional]

### Return type

[**\Adobe\ESign\Model\WidgetDocumentsImageUrlsInfo**](../Model/WidgetDocumentsImageUrlsInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgetAuditTrail**
> string getWidgetAuditTrail($authorization, $widgetId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch)

Retrieves the audit trail of a widget identified by widgetId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widgetId = "widgetId_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getWidgetAuditTrail($authorization, $widgetId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetAuditTrail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widgetId** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
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

# **getWidgetCombinedDocument**
> string getWidgetCombinedDocument($authorization, $widgetId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $versionId, $participantId, $attachAuditReport)

Retrieves a single combined PDF document for the documents associated with a widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widgetId = "widgetId_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.
$versionId = "versionId_example"; // string | The version identifier of widget as provided by the API which retrieves information of a specific widget. If not provided then latest version will be used.
$participantId = "participantId_example"; // string | The ID of the participant to be used to retrieve documents. If not mentioned, the participation of api caller is used.
$attachAuditReport = true; // bool | When set to YES, attach an audit report to the signed Widget PDF. Default value is false

try {
    $result = $apiInstance->getWidgetCombinedDocument($authorization, $widgetId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $versionId, $participantId, $attachAuditReport);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetCombinedDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widgetId** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]
 **versionId** | **string**| The version identifier of widget as provided by the API which retrieves information of a specific widget. If not provided then latest version will be used. | [optional]
 **participantId** | **string**| The ID of the participant to be used to retrieve documents. If not mentioned, the participation of api caller is used. | [optional]
 **attachAuditReport** | **bool**| When set to YES, attach an audit report to the signed Widget PDF. Default value is false | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/pdf;encoding=base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgetEvents**
> \Adobe\ESign\Model\WidgetEventList getWidgetEvents($authorization, $widgetId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch)

Retrieves the events information for a widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widgetId = "widgetId_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getWidgetEvents($authorization, $widgetId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widgetId** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

[**\Adobe\ESign\Model\WidgetEventList**](../Model/WidgetEventList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgetFormData**
> string getWidgetFormData($authorization, $widgetId, $xApiUser, $xOnBehalfOfUser)

Retrieves data entered by the user into interactive form fields at the time they signed the widget

CSV file stream containing form data information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widgetId = "widgetId_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->getWidgetFormData($authorization, $widgetId, $xApiUser, $xOnBehalfOfUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetFormData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widgetId** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
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

# **getWidgetInfo**
> \Adobe\ESign\Model\WidgetCreationInfoV6 getWidgetInfo($authorization, $widgetId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch)

Retrieves the details of a widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widgetId = "widgetId_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getWidgetInfo($authorization, $widgetId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widgetId** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

[**\Adobe\ESign\Model\WidgetCreationInfoV6**](../Model/WidgetCreationInfoV6.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgetNoteForApiUser**
> \Adobe\ESign\Model\Note getWidgetNoteForApiUser($authorization, $widgetId, $xApiUser, $xOnBehalfOfUser)

Retrieves the latest note of a widget for the API user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widgetId = "widgetId_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->getWidgetNoteForApiUser($authorization, $widgetId, $xApiUser, $xOnBehalfOfUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetNoteForApiUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widgetId** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
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

# **getWidgetParticipantSet**
> \Adobe\ESign\Model\DetailedWidgetParticipantSetInfo getWidgetParticipantSet($authorization, $widgetId, $participantSetId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch)

Retrieves the participant set of a widget identified by widgetId in the path.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widgetId = "widgetId_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$participantSetId = "participantSetId_example"; // string | The participant set identifier
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getWidgetParticipantSet($authorization, $widgetId, $participantSetId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetParticipantSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widgetId** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **participantSetId** | **string**| The participant set identifier |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

[**\Adobe\ESign\Model\DetailedWidgetParticipantSetInfo**](../Model/DetailedWidgetParticipantSetInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgetSecurityOptionsForParticipation**
> \Adobe\ESign\Model\ParticipantSecurityOption getWidgetSecurityOptionsForParticipation($authorization, $widgetId, $participantSetId, $participantId, $ifNoneMatch, $xApiUser)

Retrieves the security options for a particular participant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widgetId = "widgetId_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$participantSetId = "participantSetId_example"; // string | The participant set identifier
$participantId = "participantId_example"; // string | The participant identifier
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.

try {
    $result = $apiInstance->getWidgetSecurityOptionsForParticipation($authorization, $widgetId, $participantSetId, $participantId, $ifNoneMatch, $xApiUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetSecurityOptionsForParticipation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widgetId** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
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

# **getWidgetView**
> \Adobe\ESign\Model\WidgetViews getWidgetView($authorization, $widgetId, $widgetViewInfo, $xApiUser, $xOnBehalfOfUser)

Retrieves the requested views for a widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a> - widget read is always required</li><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('user_login')\" oncontextmenu=\"this.href=oauthDoc('user_login')\" target=\"oauthDoc\">user_login</a> - Required additionally if the autoLoginUser parameter is set to true</li></ul>in the format <b>'Bearer {accessToken}'.
$widgetId = "widgetId_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$widgetViewInfo = new \Adobe\ESign\Model\WidgetViewInfo(); // \Adobe\ESign\Model\WidgetViewInfo | Name of the required view and its desired configuration.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->getWidgetView($authorization, $widgetId, $widgetViewInfo, $xApiUser, $xOnBehalfOfUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgetView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt; - widget read is always required&lt;/li&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_login&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_login&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;user_login&lt;/a&gt; - Required additionally if the autoLoginUser parameter is set to true&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widgetId** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **widgetViewInfo** | [**\Adobe\ESign\Model\WidgetViewInfo**](../Model/WidgetViewInfo.md)| Name of the required view and its desired configuration. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

[**\Adobe\ESign\Model\WidgetViews**](../Model/WidgetViews.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWidgets**
> \Adobe\ESign\Model\UserWidgets getWidgets($authorization, $xApiUser, $xOnBehalfOfUser, $showHiddenWidgets, $cursor, $pageSize)

Retrieves widgets for a user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_read')\" oncontextmenu=\"this.href=oauthDoc('widget_read')\" target=\"oauthDoc\">widget_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$showHiddenWidgets = true; // bool | A query parameter to fetch all the hidden widgets along with the visible widgets. Default value is false.
$cursor = "cursor_example"; // string | Used to navigate through the pages. If not provided, returns the first page.
$pageSize = 56; // int | Number of intended items in the response page. If not provided, it is decided by the application settings.

try {
    $result = $apiInstance->getWidgets($authorization, $xApiUser, $xOnBehalfOfUser, $showHiddenWidgets, $cursor, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->getWidgets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **showHiddenWidgets** | **bool**| A query parameter to fetch all the hidden widgets along with the visible widgets. Default value is false. | [optional]
 **cursor** | **string**| Used to navigate through the pages. If not provided, returns the first page. | [optional]
 **pageSize** | **int**| Number of intended items in the response page. If not provided, it is decided by the application settings. | [optional]

### Return type

[**\Adobe\ESign\Model\UserWidgets**](../Model/UserWidgets.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWidget**
> updateWidget($authorization, $ifMatch, $widgetId, $widgetInfo, $xApiUser, $xOnBehalfOfUser)

Updates a widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_write')\" oncontextmenu=\"this.href=oauthDoc('widget_write')\" target=\"oauthDoc\">widget_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$ifMatch = "ifMatch_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$widgetId = "widgetId_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$widgetInfo = new \Adobe\ESign\Model\WidgetInfo(); // \Adobe\ESign\Model\WidgetInfo | Widget update information object.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateWidget($authorization, $ifMatch, $widgetId, $widgetInfo, $xApiUser, $xOnBehalfOfUser);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->updateWidget: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **ifMatch** | **string**| The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned. |
 **widgetId** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **widgetInfo** | [**\Adobe\ESign\Model\WidgetInfo**](../Model/WidgetInfo.md)| Widget update information object. |
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

# **updateWidgetNoteForApiUser**
> updateWidgetNoteForApiUser($authorization, $widgetId, $note, $xApiUser, $xOnBehalfOfUser)

Updates the latest note of a widget for the API user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_write')\" oncontextmenu=\"this.href=oauthDoc('widget_write')\" target=\"oauthDoc\">widget_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widgetId = "widgetId_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$note = new \Adobe\ESign\Model\Note(); // \Adobe\ESign\Model\Note | The note to be associated with the widget.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateWidgetNoteForApiUser($authorization, $widgetId, $note, $xApiUser, $xOnBehalfOfUser);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->updateWidgetNoteForApiUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widgetId** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **note** | [**\Adobe\ESign\Model\Note**](../Model/Note.md)| The note to be associated with the widget. |
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

# **updateWidgetSecurityOptionsForParticipation**
> updateWidgetSecurityOptionsForParticipation($authorization, $ifMatch, $widgetId, $participantSetId, $participantId, $participantSecurityOption, $xApiUser)

Updates the security options for a particular participant.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_write')\" oncontextmenu=\"this.href=oauthDoc('widget_write')\" target=\"oauthDoc\">widget_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$ifMatch = "ifMatch_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$widgetId = "widgetId_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$participantSetId = "participantSetId_example"; // string | The participant set identifier
$participantId = "participantId_example"; // string | The participant identifier
$participantSecurityOption = new \Adobe\ESign\Model\ParticipantSecurityOption(); // \Adobe\ESign\Model\ParticipantSecurityOption | Security options that apply to the participant
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.

try {
    $apiInstance->updateWidgetSecurityOptionsForParticipation($authorization, $ifMatch, $widgetId, $participantSetId, $participantId, $participantSecurityOption, $xApiUser);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->updateWidgetSecurityOptionsForParticipation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **ifMatch** | **string**| The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned. |
 **widgetId** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
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

# **updateWidgetState**
> updateWidgetState($authorization, $ifMatch, $widgetId, $widgetStateInfo, $xApiUser, $xOnBehalfOfUser)

Updates the state of a widget identified by widgetId in the path.

This endpoint can be used by creator of the widget to transition between the states of widget. An allowed transition would follow any of the following sequence :  DRAFT->AUTHORING->ACTIVE, ACTIVE<->INACTIVE, DRAFT->CANCELLED.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_write')\" oncontextmenu=\"this.href=oauthDoc('widget_write')\" target=\"oauthDoc\">widget_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$ifMatch = "ifMatch_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$widgetId = "widgetId_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$widgetStateInfo = new \Adobe\ESign\Model\WidgetStateInfo(); // \Adobe\ESign\Model\WidgetStateInfo | 
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateWidgetState($authorization, $ifMatch, $widgetId, $widgetStateInfo, $xApiUser, $xOnBehalfOfUser);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->updateWidgetState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **ifMatch** | **string**| The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned. |
 **widgetId** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **widgetStateInfo** | [**\Adobe\ESign\Model\WidgetStateInfo**](../Model/WidgetStateInfo.md)|  |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWidgetVisibility**
> updateWidgetVisibility($authorization, $widgetId, $visibilityInfo, $xApiUser, $xOnBehalfOfUser)

Updates the visibility of widget.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\WidgetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('widget_write')\" oncontextmenu=\"this.href=oauthDoc('widget_write')\" target=\"oauthDoc\">widget_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$widgetId = "widgetId_example"; // string | The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets.
$visibilityInfo = new \Adobe\ESign\Model\VisibilityInfo(); // \Adobe\ESign\Model\VisibilityInfo | Information to update visibility of widget
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateWidgetVisibility($authorization, $widgetId, $visibilityInfo, $xApiUser, $xOnBehalfOfUser);
} catch (Exception $e) {
    echo 'Exception when calling WidgetsApi->updateWidgetVisibility: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;widget_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;widget_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **widgetId** | **string**| The widget identifier, as returned by the widget creation API or retrieved from the API to fetch widgets. |
 **visibilityInfo** | [**\Adobe\ESign\Model\VisibilityInfo**](../Model/VisibilityInfo.md)| Information to update visibility of widget |
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

