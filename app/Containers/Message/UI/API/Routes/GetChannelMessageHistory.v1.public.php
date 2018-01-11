<?php
/**
 * @apiGroup           Message
 * @apiName            getChannelMessageHistory
 *
 * @api                {GET} /v1/channels/{id}/history Get history
 * @apiDescription     Retrieve message history for specified channel
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
    "data": [
        {
            "object": "Message",
            "id": "e9rjvba6xay5gxqm",
            "text": "Hey",
            "type": "message/text",
            "created_at": {
            "date": "2017-08-25 00:00:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": null,
            "sender": {
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
                }
            }
        },
        {
            "object": "Message",
            "id": "bjmqv0aq3894epgo",
            "text": "Yoyo",
            "type": "message/text",
            "created_at": {
            "date": "2017-08-25 00:00:00.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": null,
            "sender": {
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
                }
            }
        }
    ],
    "meta": {
    "include": [],
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

$router->get('channel/{id}/history', [
    'uses'  => 'Controller@getChannelMessageHistory',
    'middleware' => [
        'auth:api',
        'prevent-banned-user'
    ],
]);

