# FormField

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**radioCheckType** | **string** | The type of radio button (if field is radio button, identified by inputType). | [optional] 
**borderColor** | **string** | Color of the border of the field in RGB or HEX format | [optional] 
**valueExpression** | **string** | Expression to calculate value of the form field | [optional] 
**maskingText** | **string** | Text to mask the masked form field | [optional] 
**defaultValue** | **string** | Default value of the form field | [optional] 
**masked** | **bool** | true if the input entered by the signer has to be masked (like password), false if it shouldn&#39;t be | [optional] 
**minLength** | **int** | Minimum length of the input text field in terms of no. of characters | [optional] 
**origin** | **string** | Origin of Form Field | [optional] 
**tooltip** | **string** | Text that appears while hovering over the field | [optional] 
**hiddenOptions** | **string[]** | Text values which are hidden in a drop down form field | [optional] 
**required** | **bool** | true if it is a mandatory field to be filled by the signer, else false | [optional] 
**validationData** | **string** | Further data for validating input with regards to the field&#39;s specified format. The contents and interpretation of formatData depends on the value of validation. | [optional] 
**minValue** | **double** | Lower bound of the number that can be entered by the signer | [optional] 
**borderWidth** | **double** | Width of the border of the field in pixels | [optional] 
**urlOverridable** | **bool** | For widget text fields only - true if the default value may come from the URL, else false | [optional] 
**inputType** | **string** | Input type of the form field | [optional] 
**borderStyle** | **string** | Style of the border of the field. | [optional] 
**calculated** | **bool** | true if this field&#39;s value is calculated from an expression, else false | [optional] 
**contentType** | **string** | Content Type of the form field. | [optional] 
**validation** | **string** | Rule for validating the field value. | [optional] 
**displayLabel** | **string** | Display label attached to the field | [optional] 
**hyperlink** | [**\Adobe\ESign\Model\FormFieldHyperlink**](FormFieldHyperlink.md) | Hyperlink-specific data (e.g. as url, link type) | [optional] 
**backgroundColor** | **string** | Background color of the form field in RGB or HEX format | [optional] 
**visible** | **bool** | If set to false, then the form field is hidden.  Otherwise, it is visible. | [optional] 
**displayFormatType** | **string** | Format type of the text field. | [optional] 
**maxValue** | **double** | Upper bound of the number that can be entered by the signer | [optional] 
**validationErrMsg** | **string** | Error message to be shown to the signer if filled value doesn&#39;t match the validations of the form field | [optional] 
**displayFormat** | **string** | Format of the value of the field to be displayed based on the displayFormatType property. | [optional] 
**visibleOptions** | **string[]** | Text values which are visible in a drop down form field | [optional] 
**readOnly** | **bool** | true if it is a read-only field, else false | [optional] 
**fontName** | **string** | Font name of the form field | [optional] 
**conditionalAction** | [**\Adobe\ESign\Model\FormFieldConditionalAction**](FormFieldConditionalAction.md) | A predicate (or set of predicates) that determines whether this field is visible and enabled. | [optional] 
**name** | **string** | The name of the form field | [optional] 
**fontSize** | **double** | Font size of the form field in points | [optional] 
**locations** | [**\Adobe\ESign\Model\FormFieldLocation[]**](FormFieldLocation.md) | All locations in a document where the form field is placed | [optional] 
**assignee** | **string** | Who the field is assigned to.  Either a participant set id, null, NOBODY or PREFILL. | [optional] 
**alignment** | **string** | Alignment of the text. | [optional] 
**fontColor** | **string** | Font color of the form field in RGB or HEX format | [optional] 
**maxLength** | **int** | Maximum length of the input text field in terms of no. of characters | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


