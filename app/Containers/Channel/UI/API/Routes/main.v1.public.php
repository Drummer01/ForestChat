<?php

/**
 * @apiGroup           Channel
 * @apiName            createChannel
 *
 * @api                {POST} /v1/channels/create Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

$router->post('channels/create', [
    'uses'  => 'Controller@createChannel',
    'middleware' => [
        'auth:api'
    ],
]);

/**
 * @apiGroup           Channel
 * @apiName            getChannel
 *
 * @api                {POST} /v1/channels/{id} Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
// Insert the response of the request here...
}
 */

$router->get('channels/{id}', [
    'uses'  => 'Controller@getChannel',
    'middleware' => [
        'auth:api'
    ],
])->where('id', '[0-9]+');

/**
 * @apiGroup           Channel
 * @apiName            getChannelsList
 *
 * @api                {GET} /v1/channels Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
// Insert the response of the request here...
}
 */

$router->get('channels', [
    'uses'  => 'Controller@getChannelsList',
    'middleware' => [
        'auth:api'
    ],
]);

/**
 * @apiGroup           Channel
 * @apiName            getChannelMessageHistory
 *
 * @api                {GET} /v1/channels/1/history Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
// Insert the response of the request here...
}
 */

$router->get('channels', [
    'uses'  => 'Controller@getChannelsList',
    'middleware' => [
        'auth:api'
    ]
]);

/**
 * @apiGroup           Channel
 * @apiName            updateChannelData
 *
 * @api                {PUT} /v1/channels/1 Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
// Insert the response of the request here...
}
 */

$router->put('channels/{id}', [
    'uses'  => 'Controller@updateChannelData',
    'middleware' => [
        'auth:api'
    ]
])->where('id', '[0-9]+');

/**
 * @apiGroup           Channel
 * @apiName            deleteChannel
 *
 * @api                {DELETE} /v1/channels/1 Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
// Insert the response of the request here...
}
 */

$router->delete('channels/{id}', [
    'uses'  => 'Controller@deleteChannel',
    'middleware' => [
        'auth:api'
    ]
])->where('id', '[0-9]+');


/**
 * @apiGroup           Channel
 * @apiName            restoreChannel
 *
 * @api                {DELETE} /v1/channels/1 Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
// Insert the response of the request here...
}
 */

$router->put('channels/{id}/restore', [
    'uses'  => 'Controller@restoreChannel',
    'middleware' => [
        'auth:api'
    ]
])->where('id', '[0-9]+');
