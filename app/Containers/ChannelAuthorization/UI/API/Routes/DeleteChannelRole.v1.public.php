<?php

/**
 * @apiGroup           ChannelAuthorization
 * @apiName            deleteChannelRole
 *
 * @api                {DELETE} /v1/channel/{id}/roles/{role_id} Delete Channel Role
 * @apiDescription     Allows user to delete custom roles
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated user
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "message": "Channel Role (xp9y35z5p80rje7b) Deleted Successfully."
}
 */

$router->delete('channel/{id}/roles/{role_id}', [
    'uses'  => 'Controller@deleteChannelRole',
    'middleware' => [
      'auth:api',
    ],
]);
