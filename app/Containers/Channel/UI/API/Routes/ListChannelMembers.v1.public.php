<?php

/**
 * @apiGroup           Channel
 * @apiName            listChannelMembers
 *
 * @api                {GET} /v1/channel/{id}/members List members
 * @apiDescription     List all channel members with their roles ( if has any )
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated user
 *
 * @apiParam           {Number}  id Channel id
 *
 * @apiHeader          Accept application/json
 * @apiHeader          Authorization Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ91QiLCJhbGciOiJIUzI1NiJ1..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": [
        {
            "object": "User",
            "id": "e9rjvba6xay5gxqm",
            "name": "Super Admin",
            "email": "admin@admin.com",
            "created_at": {
            "date": "2017-08-22 21:51:52.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2017-08-22 21:51:52.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "channel-roles": {
            "data": []
            }
        },
        {
            "object": "User",
            "id": "mq60er83ba5xkv9y",
            "name": "Drummer",
            "email": null,
            "created_at": {
            "date": "2017-08-22 22:11:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2017-08-22 22:11:12.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "channel-roles": {
            "data": [
                    {
                        "object": "ChannelRole",
                        "id": "xp9y35z5p80rje7b",
                        "name": "administrator",
                        "display_name": "Administrator",
                        "color": "#073b8e",
                        "created_at": {
                        "date": "2017-08-25 15:39:38.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "updated_at": {
                        "date": "2017-08-25 15:39:38.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        }
                    }
                ]
            }
        }
    ],
    "meta": {
    "include": [
        "roles",
        "bans",
        "channels",
        "channel-roles"
    ],
        "custom": []
    }
}
*/

$router->get('channel/{id}/members', [
    'uses'  => 'Controller@listChannelMembers',
    'middleware' => [
      'auth:api',
    ],
]);
