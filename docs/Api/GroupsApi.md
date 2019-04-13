# Adobe\ESign\GroupsApi

All URIs are relative to *https://secure.na1.echosign.com/api/rest/v6*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGroupDetails**](GroupsApi.md#getGroupDetails) | **GET** /groups/{groupId} | Retrieves detailed information about the group.
[**getGroups**](GroupsApi.md#getGroups) | **GET** /groups | Retrieves all the groups in an account.
[**getUsersInGroup**](GroupsApi.md#getUsersInGroup) | **GET** /groups/{groupId}/users | Retrieves all the users in a group.


# **getGroupDetails**
> \Adobe\ESign\Model\DetailedGroupInfo getGroupDetails($authorization, $groupId, $xApiUser)

Retrieves detailed information about the group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('user_read')\" oncontextmenu=\"this.href=oauthDoc('user_read')\" target=\"oauthDoc\">user_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$groupId = "groupId_example"; // string | The group identifier, as returned by the group creation API or retrieved from the API to fetch groups
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.

try {
    $result = $apiInstance->getGroupDetails($authorization, $groupId, $xApiUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroupDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;user_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **groupId** | **string**| The group identifier, as returned by the group creation API or retrieved from the API to fetch groups |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]

### Return type

[**\Adobe\ESign\Model\DetailedGroupInfo**](../Model/DetailedGroupInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroups**
> \Adobe\ESign\Model\GroupsInfo getGroups($authorization, $xApiUser, $cursor, $pageSize)

Retrieves all the groups in an account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('user_read')\" oncontextmenu=\"this.href=oauthDoc('user_read')\" target=\"oauthDoc\">user_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$cursor = "cursor_example"; // string | Used to navigate through the pages. If not provided, returns the first page.
$pageSize = 56; // int | Number of intended items in the response page. If not provided, it is decided by the application settings.

try {
    $result = $apiInstance->getGroups($authorization, $xApiUser, $cursor, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;user_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **cursor** | **string**| Used to navigate through the pages. If not provided, returns the first page. | [optional]
 **pageSize** | **int**| Number of intended items in the response page. If not provided, it is decided by the application settings. | [optional]

### Return type

[**\Adobe\ESign\Model\GroupsInfo**](../Model/GroupsInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersInGroup**
> \Adobe\ESign\Model\GroupUsersInfo getUsersInGroup($authorization, $groupId, $xApiUser, $cursor, $pageSize)

Retrieves all the users in a group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('user_read')\" oncontextmenu=\"this.href=oauthDoc('user_read')\" target=\"oauthDoc\">user_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$groupId = "groupId_example"; // string | The group identifier, as returned by the group creation API or retrieved from the API to fetch groups
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$cursor = "cursor_example"; // string | Used to navigate through the pages. If not provided, returns the first page.
$pageSize = 56; // int | Number of intended items in the response page. If not provided, it is decided by the application settings.

try {
    $result = $apiInstance->getUsersInGroup($authorization, $groupId, $xApiUser, $cursor, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->getUsersInGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;user_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **groupId** | **string**| The group identifier, as returned by the group creation API or retrieved from the API to fetch groups |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **cursor** | **string**| Used to navigate through the pages. If not provided, returns the first page. | [optional]
 **pageSize** | **int**| Number of intended items in the response page. If not provided, it is decided by the application settings. | [optional]

### Return type

[**\Adobe\ESign\Model\GroupUsersInfo**](../Model/GroupUsersInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

