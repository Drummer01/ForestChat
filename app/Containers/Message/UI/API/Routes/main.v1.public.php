<?php

/**
 * @apiGroup           Message
 * @apiName            getChannelMessageHistory
 *
 * @api                {GET} /v1/channels/{id}/history Endpoint title here..
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

$router->get('channel/{id}/history', [
    'uses'  => 'Controller@getChannelMessageHistory',
    'middleware' => [
        'auth:api',
        'prevent-banned-user'
    ],
]);


