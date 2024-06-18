# # LabelDataResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | [**\Spy\DHLParcel\Model\RequestStatus**](RequestStatus.md) |  | [optional]
**items** | [**\Spy\DHLParcel\Model\ResponseItem[]**](ResponseItem.md) | If the request contains a multi element array (e.g. multiple shipments), then the order of the items in the response corresponds to the order of the items in the request. For consistency, if the request contains only one item then the response contains a single element array. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
