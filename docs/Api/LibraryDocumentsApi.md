# Adobe\ESign\LibraryDocumentsApi

All URIs are relative to *https://secure.na1.echosign.com/api/rest/v6*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLibraryDocument**](LibraryDocumentsApi.md#createLibraryDocument) | **POST** /libraryDocuments | Creates a template that is placed in the library of the user for reuse.
[**createLibraryDocumentView**](LibraryDocumentsApi.md#createLibraryDocumentView) | **POST** /libraryDocuments/{libraryDocumentId}/views | Retrieves the latest state view url of a library document.
[**getAllDocumentsOfLibraryDocument**](LibraryDocumentsApi.md#getAllDocumentsOfLibraryDocument) | **GET** /libraryDocuments/{libraryDocumentId}/documents | Retrieves the IDs of the documents associated with library document.
[**getAllLibraryDocuments**](LibraryDocumentsApi.md#getAllLibraryDocuments) | **GET** /libraryDocuments | Retrieves library documents for a user.
[**getDocumentImageUrlsOfLibraryDocument**](LibraryDocumentsApi.md#getDocumentImageUrlsOfLibraryDocument) | **GET** /libraryDocuments/{libraryDocumentId}/documents/{documentId}/imageUrls | Retrieves image urls of all visible pages of a document associated with a library document.
[**getDocumentOfLibraryDocument**](LibraryDocumentsApi.md#getDocumentOfLibraryDocument) | **GET** /libraryDocuments/{libraryDocumentId}/documents/{documentId} | Retrieves the file stream of a document of library document.
[**getLibraryDocumentAuditTrail**](LibraryDocumentsApi.md#getLibraryDocumentAuditTrail) | **GET** /libraryDocuments/{libraryDocumentId}/auditTrail | Retrieves the audit trail associated with a library document.
[**getLibraryDocumentCombinedDocument**](LibraryDocumentsApi.md#getLibraryDocumentCombinedDocument) | **GET** /libraryDocuments/{libraryDocumentId}/combinedDocument | Retrieves the combined document associated with a library document.
[**getLibraryDocumentEvents**](LibraryDocumentsApi.md#getLibraryDocumentEvents) | **GET** /libraryDocuments/{libraryDocumentId}/events | Retrieves the events information for a library document.
[**getLibraryDocumentFormData**](LibraryDocumentsApi.md#getLibraryDocumentFormData) | **GET** /libraryDocuments/{libraryDocumentId}/formData | Retrieves data entered into the interactive form fields of the library document.
[**getLibraryDocumentInfo**](LibraryDocumentsApi.md#getLibraryDocumentInfo) | **GET** /libraryDocuments/{libraryDocumentId} | Retrieves the details of a library document.
[**getLibraryDocumentNoteForApiUser**](LibraryDocumentsApi.md#getLibraryDocumentNoteForApiUser) | **GET** /libraryDocuments/{libraryDocumentId}/me/note | Retrieves the latest note of a library document for the API user.
[**updateLibraryDocument**](LibraryDocumentsApi.md#updateLibraryDocument) | **PUT** /libraryDocuments/{libraryDocumentId} | Updates the library document.
[**updateLibraryDocumentNoteForApiUser**](LibraryDocumentsApi.md#updateLibraryDocumentNoteForApiUser) | **PUT** /libraryDocuments/{libraryDocumentId}/me/note | Updates the latest note of a library document for the API user.
[**updateLibraryDocumentState**](LibraryDocumentsApi.md#updateLibraryDocumentState) | **PUT** /libraryDocuments/{libraryDocumentId}/state | Updates the library document&#39;s state.
[**updateLibraryDocumentVisibility**](LibraryDocumentsApi.md#updateLibraryDocumentVisibility) | **PUT** /libraryDocuments/{libraryDocumentId}/me/visibility | Updates the visibility of library document.


# **createLibraryDocument**
> \Adobe\ESign\Model\LibraryDocumentCreationResponse createLibraryDocument($authorization, $libraryDocumentInfo, $xApiUser, $xOnBehalfOfUser)

Creates a template that is placed in the library of the user for reuse.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\LibraryDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('library_write')\" oncontextmenu=\"this.href=oauthDoc('library_write')\" target=\"oauthDoc\">library_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$libraryDocumentInfo = new \Adobe\ESign\Model\LibraryDocumentCreationInfoV6(); // \Adobe\ESign\Model\LibraryDocumentCreationInfoV6 | Information about the library document that you want to create.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->createLibraryDocument($authorization, $libraryDocumentInfo, $xApiUser, $xOnBehalfOfUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryDocumentsApi->createLibraryDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;library_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **libraryDocumentInfo** | [**\Adobe\ESign\Model\LibraryDocumentCreationInfoV6**](../Model/LibraryDocumentCreationInfoV6.md)| Information about the library document that you want to create. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

[**\Adobe\ESign\Model\LibraryDocumentCreationResponse**](../Model/LibraryDocumentCreationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLibraryDocumentView**
> \Adobe\ESign\Model\LibraryDocumentViewResponse createLibraryDocumentView($authorization, $libraryDocumentId, $libraryViewInfo, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch)

Retrieves the latest state view url of a library document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\LibraryDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('library_read')\" oncontextmenu=\"this.href=oauthDoc('library_read')\" target=\"oauthDoc\">library_read</a> - library document read is always required</li><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('user_login')\" oncontextmenu=\"this.href=oauthDoc('user_login')\" target=\"oauthDoc\">user_login</a> - Required additionally if the autoLoginUser parameter is set to true</li></ul>in the format <b>'Bearer {accessToken}'.
$libraryDocumentId = "libraryDocumentId_example"; // string | The document identifier, as retrieved from the API to fetch library documents.
$libraryViewInfo = new \Adobe\ESign\Model\LibraryViewInfo(); // \Adobe\ESign\Model\LibraryViewInfo | Name of the required view and its desired configuration.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->createLibraryDocumentView($authorization, $libraryDocumentId, $libraryViewInfo, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryDocumentsApi->createLibraryDocumentView: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;library_read&lt;/a&gt; - library document read is always required&lt;/li&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_login&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_login&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;user_login&lt;/a&gt; - Required additionally if the autoLoginUser parameter is set to true&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **libraryDocumentId** | **string**| The document identifier, as retrieved from the API to fetch library documents. |
 **libraryViewInfo** | [**\Adobe\ESign\Model\LibraryViewInfo**](../Model/LibraryViewInfo.md)| Name of the required view and its desired configuration. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

[**\Adobe\ESign\Model\LibraryDocumentViewResponse**](../Model/LibraryDocumentViewResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllDocumentsOfLibraryDocument**
> \Adobe\ESign\Model\Documents getAllDocumentsOfLibraryDocument($authorization, $libraryDocumentId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $versionId)

Retrieves the IDs of the documents associated with library document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\LibraryDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('library_read')\" oncontextmenu=\"this.href=oauthDoc('library_read')\" target=\"oauthDoc\">library_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$libraryDocumentId = "libraryDocumentId_example"; // string | The document identifier, as retrieved from the API to fetch library documents.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.
$versionId = "versionId_example"; // string | The version identifier of library_document as provided by the API which retrieves information of a specific library document. If not provided then latest version will be used.

try {
    $result = $apiInstance->getAllDocumentsOfLibraryDocument($authorization, $libraryDocumentId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $versionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryDocumentsApi->getAllDocumentsOfLibraryDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;library_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **libraryDocumentId** | **string**| The document identifier, as retrieved from the API to fetch library documents. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]
 **versionId** | **string**| The version identifier of library_document as provided by the API which retrieves information of a specific library document. If not provided then latest version will be used. | [optional]

### Return type

[**\Adobe\ESign\Model\Documents**](../Model/Documents.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllLibraryDocuments**
> \Adobe\ESign\Model\LibraryDocuments getAllLibraryDocuments($authorization, $xApiUser, $xOnBehalfOfUser, $showHiddenLibraryDocuments, $cursor, $pageSize)

Retrieves library documents for a user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\LibraryDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('library_read')\" oncontextmenu=\"this.href=oauthDoc('library_read')\" target=\"oauthDoc\">library_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$showHiddenLibraryDocuments = true; // bool | A query parameter to fetch all the hidden library documents along with the visible library documents. Default value is false.
$cursor = "cursor_example"; // string | Used to navigate through the pages. If not provided, returns the first page.
$pageSize = 56; // int | Number of intended items in the response page. If not provided, it is decided by the application settings.

try {
    $result = $apiInstance->getAllLibraryDocuments($authorization, $xApiUser, $xOnBehalfOfUser, $showHiddenLibraryDocuments, $cursor, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryDocumentsApi->getAllLibraryDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;library_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **showHiddenLibraryDocuments** | **bool**| A query parameter to fetch all the hidden library documents along with the visible library documents. Default value is false. | [optional]
 **cursor** | **string**| Used to navigate through the pages. If not provided, returns the first page. | [optional]
 **pageSize** | **int**| Number of intended items in the response page. If not provided, it is decided by the application settings. | [optional]

### Return type

[**\Adobe\ESign\Model\LibraryDocuments**](../Model/LibraryDocuments.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentImageUrlsOfLibraryDocument**
> \Adobe\ESign\Model\DocumentImageUrlsInfo getDocumentImageUrlsOfLibraryDocument($authorization, $libraryDocumentId, $documentId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $imageSizes, $startPage, $endPage)

Retrieves image urls of all visible pages of a document associated with a library document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\LibraryDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('library_read')\" oncontextmenu=\"this.href=oauthDoc('library_read')\" target=\"oauthDoc\">library_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$libraryDocumentId = "libraryDocumentId_example"; // string | The document identifier, as retrieved from the API to fetch library documents.
$documentId = "documentId_example"; // string | The document identifier, as retrieved from the API which fetches the documents of a specified library document
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.
$imageSizes = "imageSizes_example"; // string | A comma separated list of image sizes i.e. {FIXED_WIDTH_50px, FIXED_WIDTH_250px, FIXED_WIDTH_675px, ZOOM_50_PERCENT, ZOOM_75_PERCENT, ZOOM_100_PERCENT, ZOOM_125_PERCENT, ZOOM_150_PERCENT, ZOOM_200_PERCENT}. Default sizes returned are {FIXED_WIDTH_50px, FIXED_WIDTH_250px, FIXED_WIDTH_675px, ZOOM_100_PERCENT}.
$startPage = 56; // int | Start of page number range for which imageUrls are requested. Starting page number should be greater than 0.
$endPage = 56; // int | End of page number range for which imageUrls are requested.

try {
    $result = $apiInstance->getDocumentImageUrlsOfLibraryDocument($authorization, $libraryDocumentId, $documentId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $imageSizes, $startPage, $endPage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryDocumentsApi->getDocumentImageUrlsOfLibraryDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;library_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **libraryDocumentId** | **string**| The document identifier, as retrieved from the API to fetch library documents. |
 **documentId** | **string**| The document identifier, as retrieved from the API which fetches the documents of a specified library document |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]
 **imageSizes** | **string**| A comma separated list of image sizes i.e. {FIXED_WIDTH_50px, FIXED_WIDTH_250px, FIXED_WIDTH_675px, ZOOM_50_PERCENT, ZOOM_75_PERCENT, ZOOM_100_PERCENT, ZOOM_125_PERCENT, ZOOM_150_PERCENT, ZOOM_200_PERCENT}. Default sizes returned are {FIXED_WIDTH_50px, FIXED_WIDTH_250px, FIXED_WIDTH_675px, ZOOM_100_PERCENT}. | [optional]
 **startPage** | **int**| Start of page number range for which imageUrls are requested. Starting page number should be greater than 0. | [optional]
 **endPage** | **int**| End of page number range for which imageUrls are requested. | [optional]

### Return type

[**\Adobe\ESign\Model\DocumentImageUrlsInfo**](../Model/DocumentImageUrlsInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentOfLibraryDocument**
> string getDocumentOfLibraryDocument($authorization, $libraryDocumentId, $documentId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch)

Retrieves the file stream of a document of library document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\LibraryDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('library_read')\" oncontextmenu=\"this.href=oauthDoc('library_read')\" target=\"oauthDoc\">library_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$libraryDocumentId = "libraryDocumentId_example"; // string | The document identifier, as retrieved from the API to fetch library documents.
$documentId = "documentId_example"; // string | The document identifier, as retrieved from the API which fetches the documents of a specified library document
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getDocumentOfLibraryDocument($authorization, $libraryDocumentId, $documentId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryDocumentsApi->getDocumentOfLibraryDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;library_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **libraryDocumentId** | **string**| The document identifier, as retrieved from the API to fetch library documents. |
 **documentId** | **string**| The document identifier, as retrieved from the API which fetches the documents of a specified library document |
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

# **getLibraryDocumentAuditTrail**
> string getLibraryDocumentAuditTrail($authorization, $libraryDocumentId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch)

Retrieves the audit trail associated with a library document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\LibraryDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('library_read')\" oncontextmenu=\"this.href=oauthDoc('library_read')\" target=\"oauthDoc\">library_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$libraryDocumentId = "libraryDocumentId_example"; // string | The document identifier, as retrieved from the API to fetch library documents.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getLibraryDocumentAuditTrail($authorization, $libraryDocumentId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryDocumentsApi->getLibraryDocumentAuditTrail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;library_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **libraryDocumentId** | **string**| The document identifier, as retrieved from the API to fetch library documents. |
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

# **getLibraryDocumentCombinedDocument**
> string getLibraryDocumentCombinedDocument($authorization, $libraryDocumentId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $attachAuditReport)

Retrieves the combined document associated with a library document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\LibraryDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('library_read')\" oncontextmenu=\"this.href=oauthDoc('library_read')\" target=\"oauthDoc\">library_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$libraryDocumentId = "libraryDocumentId_example"; // string | The document identifier, as retrieved from the API to fetch library documents.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.
$attachAuditReport = true; // bool | When set to YES attach an audit report to the library document PDF. Default value will be false.

try {
    $result = $apiInstance->getLibraryDocumentCombinedDocument($authorization, $libraryDocumentId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch, $attachAuditReport);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryDocumentsApi->getLibraryDocumentCombinedDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;library_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **libraryDocumentId** | **string**| The document identifier, as retrieved from the API to fetch library documents. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]
 **attachAuditReport** | **bool**| When set to YES attach an audit report to the library document PDF. Default value will be false. | [optional]

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/pdf;encoding=base64

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLibraryDocumentEvents**
> \Adobe\ESign\Model\LibraryDocumentEventList getLibraryDocumentEvents($authorization, $libraryDocumentId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch)

Retrieves the events information for a library document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\LibraryDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('library_read')\" oncontextmenu=\"this.href=oauthDoc('library_read')\" target=\"oauthDoc\">library_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$libraryDocumentId = "libraryDocumentId_example"; // string | The document identifier, as retrieved from the API to fetch library documents.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getLibraryDocumentEvents($authorization, $libraryDocumentId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryDocumentsApi->getLibraryDocumentEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;library_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **libraryDocumentId** | **string**| The document identifier, as retrieved from the API to fetch library documents. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

[**\Adobe\ESign\Model\LibraryDocumentEventList**](../Model/LibraryDocumentEventList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLibraryDocumentFormData**
> string getLibraryDocumentFormData($authorization, $libraryDocumentId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch)

Retrieves data entered into the interactive form fields of the library document.

This API can only be called by the creator of the library document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\LibraryDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('library_read')\" oncontextmenu=\"this.href=oauthDoc('library_read')\" target=\"oauthDoc\">library_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$libraryDocumentId = "libraryDocumentId_example"; // string | The document identifier, as retrieved from the API to fetch library documents.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getLibraryDocumentFormData($authorization, $libraryDocumentId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryDocumentsApi->getLibraryDocumentFormData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;library_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **libraryDocumentId** | **string**| The document identifier, as retrieved from the API to fetch library documents. |
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

# **getLibraryDocumentInfo**
> \Adobe\ESign\Model\LibraryDocumentCreationInfoV6 getLibraryDocumentInfo($authorization, $libraryDocumentId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch)

Retrieves the details of a library document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\LibraryDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('library_read')\" oncontextmenu=\"this.href=oauthDoc('library_read')\" target=\"oauthDoc\">library_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$libraryDocumentId = "libraryDocumentId_example"; // string | The document identifier, as retrieved from the API to fetch library documents.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account
$ifNoneMatch = "ifNoneMatch_example"; // string | Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn't changed.

try {
    $result = $apiInstance->getLibraryDocumentInfo($authorization, $libraryDocumentId, $xApiUser, $xOnBehalfOfUser, $ifNoneMatch);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryDocumentsApi->getLibraryDocumentInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;library_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **libraryDocumentId** | **string**| The document identifier, as retrieved from the API to fetch library documents. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]
 **ifNoneMatch** | **string**| Pass the value of the e-tag header obtained from the previous response to the same request to get a RESOURCE_NOT_MODIFIED(304) if the resource hasn&#39;t changed. | [optional]

### Return type

[**\Adobe\ESign\Model\LibraryDocumentCreationInfoV6**](../Model/LibraryDocumentCreationInfoV6.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLibraryDocumentNoteForApiUser**
> \Adobe\ESign\Model\Note getLibraryDocumentNoteForApiUser($authorization, $libraryDocumentId, $xApiUser, $xOnBehalfOfUser)

Retrieves the latest note of a library document for the API user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\LibraryDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('library_read')\" oncontextmenu=\"this.href=oauthDoc('library_read')\" target=\"oauthDoc\">library_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$libraryDocumentId = "libraryDocumentId_example"; // string | The document identifier, as retrieved from the API to fetch library documents.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->getLibraryDocumentNoteForApiUser($authorization, $libraryDocumentId, $xApiUser, $xOnBehalfOfUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LibraryDocumentsApi->getLibraryDocumentNoteForApiUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;library_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **libraryDocumentId** | **string**| The document identifier, as retrieved from the API to fetch library documents. |
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

# **updateLibraryDocument**
> updateLibraryDocument($authorization, $ifMatch, $libraryDocumentId, $libraryDocumentInfo, $xApiUser, $xOnBehalfOfUser)

Updates the library document.

Currently status, name, sharingMode and templateTypes of the library document can only be updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\LibraryDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('library_write')\" oncontextmenu=\"this.href=oauthDoc('library_write')\" target=\"oauthDoc\">library_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$ifMatch = "ifMatch_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$libraryDocumentId = "libraryDocumentId_example"; // string | The document identifier, as retrieved from the API to fetch library documents.
$libraryDocumentInfo = new \Adobe\ESign\Model\LibraryDocumentInfo(); // \Adobe\ESign\Model\LibraryDocumentInfo | Information about the library document that you want to create.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateLibraryDocument($authorization, $ifMatch, $libraryDocumentId, $libraryDocumentInfo, $xApiUser, $xOnBehalfOfUser);
} catch (Exception $e) {
    echo 'Exception when calling LibraryDocumentsApi->updateLibraryDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;library_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **ifMatch** | **string**| The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned. |
 **libraryDocumentId** | **string**| The document identifier, as retrieved from the API to fetch library documents. |
 **libraryDocumentInfo** | [**\Adobe\ESign\Model\LibraryDocumentInfo**](../Model/LibraryDocumentInfo.md)| Information about the library document that you want to create. |
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

# **updateLibraryDocumentNoteForApiUser**
> updateLibraryDocumentNoteForApiUser($authorization, $libraryDocumentId, $note, $xApiUser, $xOnBehalfOfUser)

Updates the latest note of a library document for the API user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\LibraryDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('library_write')\" oncontextmenu=\"this.href=oauthDoc('library_write')\" target=\"oauthDoc\">library_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$libraryDocumentId = "libraryDocumentId_example"; // string | The document identifier, as retrieved from the API to fetch library documents.
$note = new \Adobe\ESign\Model\Note(); // \Adobe\ESign\Model\Note | The note to be associated with the library document.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateLibraryDocumentNoteForApiUser($authorization, $libraryDocumentId, $note, $xApiUser, $xOnBehalfOfUser);
} catch (Exception $e) {
    echo 'Exception when calling LibraryDocumentsApi->updateLibraryDocumentNoteForApiUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;library_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **libraryDocumentId** | **string**| The document identifier, as retrieved from the API to fetch library documents. |
 **note** | [**\Adobe\ESign\Model\Note**](../Model/Note.md)| The note to be associated with the library document. |
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

# **updateLibraryDocumentState**
> updateLibraryDocumentState($authorization, $ifMatch, $libraryDocumentId, $libraryDocumentStateInfo, $xApiUser, $xOnBehalfOfUser)

Updates the library document's state.

Currently state can be changed from AUTHORING to ACTIVE.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\LibraryDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('library_write')\" oncontextmenu=\"this.href=oauthDoc('library_write')\" target=\"oauthDoc\">library_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$ifMatch = "ifMatch_example"; // string | The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned.
$libraryDocumentId = "libraryDocumentId_example"; // string | The document identifier, as retrieved from the API to fetch library documents.
$libraryDocumentStateInfo = new \Adobe\ESign\Model\LibraryDocumentStateInfo(); // \Adobe\ESign\Model\LibraryDocumentStateInfo | Information about the state of library document to which you want to update
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateLibraryDocumentState($authorization, $ifMatch, $libraryDocumentId, $libraryDocumentStateInfo, $xApiUser, $xOnBehalfOfUser);
} catch (Exception $e) {
    echo 'Exception when calling LibraryDocumentsApi->updateLibraryDocumentState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;library_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **ifMatch** | **string**| The server will only update the resource if it matches the listed ETag otherwise error RESOURCE_MODIFIED(412) is returned. |
 **libraryDocumentId** | **string**| The document identifier, as retrieved from the API to fetch library documents. |
 **libraryDocumentStateInfo** | [**\Adobe\ESign\Model\LibraryDocumentStateInfo**](../Model/LibraryDocumentStateInfo.md)| Information about the state of library document to which you want to update |
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

# **updateLibraryDocumentVisibility**
> updateLibraryDocumentVisibility($authorization, $libraryDocumentId, $visibilityInfo, $xApiUser, $xOnBehalfOfUser)

Updates the visibility of library document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\LibraryDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('library_write')\" oncontextmenu=\"this.href=oauthDoc('library_write')\" target=\"oauthDoc\">library_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$libraryDocumentId = "libraryDocumentId_example"; // string | The document identifier, as retrieved from the API to fetch library documents.
$visibilityInfo = new \Adobe\ESign\Model\VisibilityInfo(); // \Adobe\ESign\Model\VisibilityInfo | Information to update visibility of agreement
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $apiInstance->updateLibraryDocumentVisibility($authorization, $libraryDocumentId, $visibilityInfo, $xApiUser, $xOnBehalfOfUser);
} catch (Exception $e) {
    echo 'Exception when calling LibraryDocumentsApi->updateLibraryDocumentVisibility: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;library_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;library_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **libraryDocumentId** | **string**| The document identifier, as retrieved from the API to fetch library documents. |
 **visibilityInfo** | [**\Adobe\ESign\Model\VisibilityInfo**](../Model/VisibilityInfo.md)| Information to update visibility of agreement |
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

