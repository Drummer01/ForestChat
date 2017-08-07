<?php

/**
 * @apiGroup           Authentication
 * @apiName            loginWithCredentials
 *
 * @api                {POST} /v1/login Endpoint title here..
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

$router->post('login', [
    'uses'  => 'Controller@loginWithCredentials'
]);

/**
 * @apiGroup           OAuth2
 * @apiName            ClientAdminWebAppRefreshProxy
 * @api                {post} /v1/clients/web/admin/refresh Refresh
 * @apiDescription     Refresh access token based on refreshToken http cookie.
 *
 * @apiVersion         1.0.0
 *
 * @apiSuccessExample  {json}       Success-Response:
 * HTTP/1.1 200 OK
{
"token_type": "Bearer",
"expires_in": 315360000,
"access_token": "eyJ0eXAiOiJKV1QiLCJhbG..."
}
 */

$router->post('refresh', [
    'uses'  => 'Controller@proxyRefreshForAdminWebClient',
]);

/**
 * @apiGroup           OAuth2
 * @apiName            Logout
 * @api                {post} /v1/logout
 * @apiDescription     User Logout. (Revoking Access Token)
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated User
 *
 * @apiSuccessExample  {json}       Success-Response:
 * HTTP/1.1 202 Accepted
{
"message": "Token revoked successfully."
}
 */
$router->post('logout', [
    'uses'  => 'Controller@logout',
    'middleware' => [
        'auth:api',
    ],
]);


