<?php

/**
 * @apiGroup           Administration
 * @apiName            deleteBan
 *
 * @api                {DELETE} /v1/channel/{id}/bans/{ban_id} Delete ban
 * @apiDescription     Disable active ban
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated Admin
 *
 * @apiParam           {Number}  id Channel identifier
 * @apiParam           {Number}  ban_id Ban identifier
 *
 * @apiHeader          Accept application/json
 * @apiHeader          Authorization Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ91QiLCJhbGciOiJIUzI1NiJ1..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "message": "Channel Ban (30kgwl8y6ao9jr46) Deleted Successfully."
}
*/

$router->delete('channel/{id}/bans/{ban_id}', [
    'uses'  => 'Controller@deleteBan',
    'middleware' => [
      'auth:api',
    ],
]);
