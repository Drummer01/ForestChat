<?php


/**
 * @apiGroup           ChannelAuthorization
 * @apiName            assignUserToChannelRole
 *
 * @api                {POST} /v1/channel/{id}/roles/assign Assign user to channel role
 * @apiDescription     Assign user to channel role, it may be custom or default roles
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String} id Channel ID
 * @apiParam           {Array} channel_roles_ids Channel roles IDs
 * @apiParam           {Array} user User ID
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": [
        {
            "object": "ChannelRole",
            "id": "e9rjvba6xay5gxqm",
            "name": "moderator",
            "display_name": "Moderator",
            "created_at": null,
            "updated_at": {
                "date": "2017-08-11 17:10:57.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        }
    ],
    "meta": {
        "include": [],
        "custom": []
    }
}
 */
$router->post('channel/{id}/roles/assign', [
    'uses'  => 'Controller@assignUserToChannelRole',
    'middleware' => [
      'auth:api',
    ],
]);
