<?php

/**
 * @apiGroup           Channel
 * @apiName            searchChannel
 *
 * @api                {GET} /v1/channel?search=name:Test Search channel by fields
 * @apiDescription     Retrieve channel list by search query
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated user
 *
 * @apiParam           {String}  search Search query
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "data": [
        {
            "object": "Channel",
            "id": "3jko75zeraly46mv",
            "name": "Testone",
            "has_password": false,
            "image_url": null,
            "created_at": {
            "date": "2017-08-07 18:23:42.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2017-08-07 18:23:42.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "real_id": 4
        },
        {
            "object": "Channel",
            "id": "mq60er83ba5xkv9y",
            "name": "Test1",
            "has_password": true,
            "image_url": "https://camo.githubusercontent.com/6725e0ce0448eda919e7b765b16c641256de86ad/68747470733a2f2f73332d75732d776573742d322e616d617a6f6e6177732e636f6d2f6769746875622d70726f6a6563742d696d616765732f6c61726176656c2d617574682f316c61726176656c2d61757468322d6c6f67696e2e6a7067",
            "created_at": {
            "date": "2017-08-07 18:28:23.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2017-08-09 08:09:26.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "real_id": 5
        },
        {
            "object": "Channel",
            "id": "d3obrvzlya405mex",
            "name": "Testone",
            "has_password": false,
            "image_url": null,
            "created_at": {
            "date": "2017-08-07 18:30:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2017-08-07 18:30:08.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "real_id": 6
        },
        {
            "object": "Channel",
            "id": "xp9y35z5p80rje7b",
            "name": "Testone",
            "has_password": false,
            "image_url": null,
            "created_at": {
            "date": "2017-08-07 18:30:13.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "updated_at": {
            "date": "2017-08-07 18:30:13.000000",
                "timezone_type": 3,
                "timezone": "UTC"
            },
            "real_id": 7
        }
    ],
    "meta": {
    "include": [],
        "custom": [],
        "pagination": {
        "total": 4,
            "count": 4,
            "per_page": 10,
            "current_page": 1,
            "total_pages": 1,
            "links": []
        }
    }
}
*/

$router->get('channel', [
    'uses'  => 'Controller@searchChannel',
    'middleware' => [
      'auth:api',
    ],
]);
