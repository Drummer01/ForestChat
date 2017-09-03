<?php

/**
 * @apiGroup           Channel
 * @apiName            searchChannelMembers
 *
 * @api                {GET} /v1/channel/{id}/members/search?name=:name Search channel members
 * @apiDescription     List channel members by name
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated user
 *
 * @apiParam           {String} name
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
            "date": "2017-08-28 15:23:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2017-08-28 15:23:58.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            }
        },
        {
            "object": "User",
            "id": "bjmqv0aq3894epgo",
            "name": "Drummer",
            "email": null,
            "created_at": {
            "date": "2017-08-28 15:24:42.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2017-08-28 15:24:42.000000",
                "timezone_type": 3,
                "timezone": "UTC"
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
        "custom": [],
        "pagination": {
        "total": 2,
            "count": 2,
            "per_page": 10,
            "current_page": 1,
            "total_pages": 1,
            "links": []
        }
    }
}
*/

$router->get('channel/{id}/members/search', [
    'uses'  => 'Controller@searchChannelMembers',
    'middleware' => [
      'auth:api',
    ],
]);
