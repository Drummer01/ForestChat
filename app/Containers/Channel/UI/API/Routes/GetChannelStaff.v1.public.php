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
    "data": [
        {
            "object": "ChannelRole",
            "id": "bjmqv0aq3894epgo",
            "name": "administrator",
            "display_name": "Administrator",
            "color": null,
            "created_at": null,
            "updated_at": null,
            "real_id": 2,
            "members": {
            "data": [
                    {
                        "object": "User",
                        "id": "bjmqv0aq3894epgo",
                        "name": "Drummer",
                        "email": null,
                        "created_at": {
                        "date": "2017-08-07 14:21:16.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "updated_at": {
                        "date": "2017-08-07 14:21:16.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "real_id": 2,
                        "deleted_at": null
                    },
                    {
                        "object": "User",
                        "id": "bjmqv0aq3894epgo",
                        "name": "Drummer",
                        "email": null,
                        "created_at": {
                        "date": "2017-08-07 14:21:16.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "updated_at": {
                        "date": "2017-08-07 14:21:16.000000",
                            "timezone_type": 3,
                            "timezone": "UTC"
                        },
                        "real_id": 2,
                        "deleted_at": null
                    }
                ]
            }
        },
        {
            "object": "ChannelRole",
            "id": "e9rjvba6xay5gxqm",
            "name": "moderator",
            "display_name": "Moderator",
            "color": null,
            "created_at": null,
            "updated_at": {
            "date": "2017-08-11 17:10:57.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "real_id": 1,
            "members": {
            "data": []
            }
        }
    ],
    "meta": {
    "include": [
        "members"
    ],
        "custom": []
    }
}
*/

$router->get('channel/{id}/staff', [
    'uses'  => 'Controller@getStaff',
    'middleware' => [
      'auth:api',
    ],
]);
