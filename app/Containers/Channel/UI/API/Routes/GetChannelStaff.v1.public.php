<?php

/**
 * @apiGroup           Channel
 * @apiName            getStaff
 *
 * @api                {GET} /v1/channel/{id}/staff Staff
 * @apiDescription     Retrieve channel staff members
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated user
 *
 * @apiParam           {Number}  id Channel identifier
 *
 * @apiHeader          Accept application/json
 * @apiHeader          Authorization Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ91QiLCJhbGciOiJIUzI1NiJ1..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

$router->get('channel/{id}/staff', [
    'uses'  => 'Controller@getStaff',
    'middleware' => [
      'auth:api',
    ],
]);
