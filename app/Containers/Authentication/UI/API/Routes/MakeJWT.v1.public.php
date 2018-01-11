<?php

/**
 * @apiGroup           Authentication
 * @apiName            makeJWTToken
 *
 * @api                {GET} /v1/realtime/jwt Endpoint title here..
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

$router->get('realtime/jwt', [
    'uses'  => 'Controller@makeJWTToken',
    'middleware' => [
      'auth:api',
    ],
]);
