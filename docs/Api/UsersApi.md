# Adobe\ESign\UsersApi

All URIs are relative to *https://secure.na1.echosign.com/api/rest/v6*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getGroupsOfUser**](UsersApi.md#getGroupsOfUser) | **GET** /users/{userId}/groups | Retrieves the groups of the user.
[**getUserDetail**](UsersApi.md#getUserDetail) | **GET** /users/{userId} | Retrieves detailed information about the user in the caller account.
[**getUserViews**](UsersApi.md#getUserViews) | **POST** /users/{userId}/views | Retrieves the URL of manage, account settings and user profile page.
[**getUsers**](UsersApi.md#getUsers) | **GET** /users | Retrieves all the users in an account.
[**modifyUser**](UsersApi.md#modifyUser) | **PUT** /users/{userId} | Update an user.
[**modifyUserState**](UsersApi.md#modifyUserState) | **PUT** /users/{userId}/state | Activate/Deactivate a given user.
[**updateGroupsOfUser**](UsersApi.md#updateGroupsOfUser) | **PUT** /users/{userId}/groups | Updates the groups of the user.


# **getGroupsOfUser**
> \Adobe\ESign\Model\UserGroupsInfo getGroupsOfUser($authorization, $userId, $xApiUser)

Retrieves the groups of the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('user_read')\" oncontextmenu=\"this.href=oauthDoc('user_read')\" target=\"oauthDoc\">user_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$userId = "userId_example"; // string | The user identifier, as returned by the user creation API or retrieved from the API to fetch users. To get the details for the token owner, UserId can be replaced by \"me\" without quotes.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.

try {
    $result = $apiInstance->getGroupsOfUser($authorization, $userId, $xApiUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getGroupsOfUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;user_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **userId** | **string**| The user identifier, as returned by the user creation API or retrieved from the API to fetch users. To get the details for the token owner, UserId can be replaced by \&quot;me\&quot; without quotes. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]

### Return type

[**\Adobe\ESign\Model\UserGroupsInfo**](../Model/UserGroupsInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserDetail**
> \Adobe\ESign\Model\DetailedUserInfo getUserDetail($authorization, $userId, $xApiUser)

Retrieves detailed information about the user in the caller account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('user_read')\" oncontextmenu=\"this.href=oauthDoc('user_read')\" target=\"oauthDoc\">user_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$userId = "userId_example"; // string | The user identifier, as returned by the user creation API or retrieved from the API to fetch users. To get the details for the token owner, UserId can be replaced by \"me\" without quotes.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.

try {
    $result = $apiInstance->getUserDetail($authorization, $userId, $xApiUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;user_read&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **userId** | **string**| The user identifier, as returned by the user creation API or retrieved from the API to fetch users. To get the details for the token owner, UserId can be replaced by \&quot;me\&quot; without quotes. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]

### Return type

[**\Adobe\ESign\Model\DetailedUserInfo**](../Model/DetailedUserInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserViews**
> \Adobe\ESign\Model\UserViewResponse getUserViews($authorization, $userId, $userViewInfo, $xApiUser, $xOnBehalfOfUser)

Retrieves the URL of manage, account settings and user profile page.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('user_read')\" oncontextmenu=\"this.href=oauthDoc('user_read')\" target=\"oauthDoc\">user_read</a> - user read is always required</li><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('user_login')\" oncontextmenu=\"this.href=oauthDoc('user_login')\" target=\"oauthDoc\">user_login</a> - Required additionally if the autoLoginUser parameter is set to true</li></ul>in the format <b>'Bearer {accessToken}'.
$userId = "userId_example"; // string | The user identifier, as returned by the user creation API or retrieved from the API to fetch users. To get the details for the token owner, UserId can be replaced by \"me\" without quotes.
$userViewInfo = new \Adobe\ESign\Model\UserViewInfo(); // \Adobe\ESign\Model\UserViewInfo | Name of the required view and its desired configuration.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$xOnBehalfOfUser = "xOnBehalfOfUser_example"; // string | The userId or email in the format <b>userid:{userId} OR email:{email}.</b> of the user that has shared his/her account

try {
    $result = $apiInstance->getUserViews($authorization, $userId, $userViewInfo, $xApiUser, $xOnBehalfOfUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUserViews: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_read&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_read&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;user_read&lt;/a&gt; - user read is always required&lt;/li&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_login&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_login&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;user_login&lt;/a&gt; - Required additionally if the autoLoginUser parameter is set to true&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **userId** | **string**| The user identifier, as returned by the user creation API or retrieved from the API to fetch users. To get the details for the token owner, UserId can be replaced by \&quot;me\&quot; without quotes. |
 **userViewInfo** | [**\Adobe\ESign\Model\UserViewInfo**](../Model/UserViewInfo.md)| Name of the required view and its desired configuration. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]
 **xOnBehalfOfUser** | **string**| The userId or email in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; of the user that has shared his/her account | [optional]

### Return type

[**\Adobe\ESign\Model\UserViewResponse**](../Model/UserViewResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsers**
> \Adobe\ESign\Model\UsersInfo getUsers($authorization, $xApiUser, $cursor, $pageSize)

Retrieves all the users in an account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('user_read')\" oncontextmenu=\"this.href=oauthDoc('user_read')\" target=\"oauthDoc\">user_read</a></li></ul>in the format <b>'Bearer {accessToken}'.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.
$cursor = "cursor_example"; // string | Used to navigate through the pages. If not provided, returns the first page.
$pageSize = 56; // int | Number of intended items in the response page. If not provided, it is decided by the application settings.

try {
    $result = $apiInstance->getUsers($authorization, $xApiUser, $cursor, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->getUsers: ', $e->getMessage(), PHP_EOL;
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

[**\Adobe\ESign\Model\UsersInfo**](../Model/UsersInfo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyUser**
> modifyUser($authorization, $userId, $detailedUserInfo, $xApiUser)

Update an user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('user_write')\" oncontextmenu=\"this.href=oauthDoc('user_write')\" target=\"oauthDoc\">user_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$userId = "userId_example"; // string | The user identifier, as provided by GET /users or POST /users
$detailedUserInfo = new \Adobe\ESign\Model\DetailedUserInfo(); // \Adobe\ESign\Model\DetailedUserInfo | Information necessary to update a user.
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.

try {
    $apiInstance->modifyUser($authorization, $userId, $detailedUserInfo, $xApiUser);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->modifyUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;user_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **userId** | **string**| The user identifier, as provided by GET /users or POST /users |
 **detailedUserInfo** | [**\Adobe\ESign\Model\DetailedUserInfo**](../Model/DetailedUserInfo.md)| Information necessary to update a user. |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **modifyUserState**
> \Adobe\ESign\Model\UserStatusUpdateResponse modifyUserState($authorization, $userId, $userStateInfo, $xApiUser)

Activate/Deactivate a given user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('user_write')\" oncontextmenu=\"this.href=oauthDoc('user_write')\" target=\"oauthDoc\">user_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$userId = "userId_example"; // string | The user identifier, as returned by the user creation API or retrieved from the API to fetch users. To update the details for the token owner, UserId can be replaced by \"me\" without quotes.
$userStateInfo = new \Adobe\ESign\Model\UserStateInfo(); // \Adobe\ESign\Model\UserStateInfo | 
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.

try {
    $result = $apiInstance->modifyUserState($authorization, $userId, $userStateInfo, $xApiUser);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->modifyUserState: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;user_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **userId** | **string**| The user identifier, as returned by the user creation API or retrieved from the API to fetch users. To update the details for the token owner, UserId can be replaced by \&quot;me\&quot; without quotes. |
 **userStateInfo** | [**\Adobe\ESign\Model\UserStateInfo**](../Model/UserStateInfo.md)|  |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]

### Return type

[**\Adobe\ESign\Model\UserStatusUpdateResponse**](../Model/UserStatusUpdateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateGroupsOfUser**
> updateGroupsOfUser($authorization, $userId, $userGroupsInfo, $xApiUser)

Updates the groups of the user.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Adobe\ESign\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$authorization = "authorization_example"; // string | An <a href=\"#\" onclick=\"this.href=oauthDoc()\" oncontextmenu=\"this.href=oauthDoc()\" target=\"oauthDoc\">OAuth Access Token</a> with scopes:<ul><li style='list-style-type: square'><a href=\"#\" onclick=\"this.href=oauthDoc('user_write')\" oncontextmenu=\"this.href=oauthDoc('user_write')\" target=\"oauthDoc\">user_write</a></li></ul>in the format <b>'Bearer {accessToken}'.
$userId = "userId_example"; // string | The user identifier, as returned by the user creation API or retrieved from the API to fetch users. To update the details for the token owner, UserId can be replaced by \"me\" without quotes.
$userGroupsInfo = new \Adobe\ESign\Model\UserGroupsInfo(); // \Adobe\ESign\Model\UserGroupsInfo | 
$xApiUser = "xApiUser_example"; // string | The userId or email of API caller using the account or group token in the format <b>userid:{userId} OR email:{email}.</b> If it is not specified, then the caller is inferred from the token.

try {
    $apiInstance->updateGroupsOfUser($authorization, $userId, $userGroupsInfo, $xApiUser);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->updateGroupsOfUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| An &lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc()\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;OAuth Access Token&lt;/a&gt; with scopes:&lt;ul&gt;&lt;li style&#x3D;&#39;list-style-type: square&#39;&gt;&lt;a href&#x3D;\&quot;#\&quot; onclick&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_write&#39;)\&quot; oncontextmenu&#x3D;\&quot;this.href&#x3D;oauthDoc(&#39;user_write&#39;)\&quot; target&#x3D;\&quot;oauthDoc\&quot;&gt;user_write&lt;/a&gt;&lt;/li&gt;&lt;/ul&gt;in the format &lt;b&gt;&#39;Bearer {accessToken}&#39;. |
 **userId** | **string**| The user identifier, as returned by the user creation API or retrieved from the API to fetch users. To update the details for the token owner, UserId can be replaced by \&quot;me\&quot; without quotes. |
 **userGroupsInfo** | [**\Adobe\ESign\Model\UserGroupsInfo**](../Model/UserGroupsInfo.md)|  |
 **xApiUser** | **string**| The userId or email of API caller using the account or group token in the format &lt;b&gt;userid:{userId} OR email:{email}.&lt;/b&gt; If it is not specified, then the caller is inferred from the token. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

