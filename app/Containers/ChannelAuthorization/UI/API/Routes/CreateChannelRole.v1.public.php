<?php

/**
 * @apiGroup           ChannelAuthorization
 * @apiName            createChannelRole
 *
 * @api                {POST} /v1/channel/{id}/roles Create channel role
 * @apiDescription     Channel admins or global admins can create their own channel roles
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated user
 *
 * @apiParam           {Number} id  Channel ID
 * @apiParam           {String} name  Role name
 * @apiParam           {String} display_name  Display name
 * @apiParam           {String} description  Role description
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

$router->post('channel/{id}/roles', [
    'uses'  => 'Controller@createChannelRole',
    'middleware' => [
      'auth:api',
    ],
]);
