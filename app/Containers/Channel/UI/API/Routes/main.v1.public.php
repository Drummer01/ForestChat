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
