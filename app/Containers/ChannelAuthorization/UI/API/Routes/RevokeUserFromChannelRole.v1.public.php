<?php

/**
 * @apiGroup           ChannelAuthorization
 * @apiName            revokeUserFromChannelRole
 *
 * @api                {POST} /v1/channel/{id}/roles/revoke Endpoint title here..
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

$router->post('channel/{id}/roles/revoke', [
    'uses'  => 'Controller@revokeUserFromChannelRole',
    'middleware' => [
      'auth:api',
    ],
]);
