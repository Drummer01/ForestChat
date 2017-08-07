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
        'auth:api',
        'can:create,'.\App\Containers\Channel\Models\Channel::class
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
 * @api                {POST} /v1/channels Endpoint title here..
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
