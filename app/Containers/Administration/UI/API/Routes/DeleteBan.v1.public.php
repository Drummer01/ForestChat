<?php

/**
 * @apiGroup           Administration
 * @apiName            deleteBan
 *
 * @api                {DELETE} /v1/channel/{id}/bans/{ban_id} Endpoint title here..
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

$router->delete('channel/{id}/bans/{ban_id}', [
    'uses'  => 'Controller@deleteBan',
    'middleware' => [
      'auth:api',
    ],
]);
