<?php

/**
 * @apiGroup           Channel
 * @apiName            getChannel
 *
 * @api                {POST} /v1/channel/{id} Get channel details
 * @apiDescription     Get channel details
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
    "real_id": 5,
    "meta": {
    "include": [],
        "custom": []
    }
}
*/

$router->get('channel/{id}', [
    'uses'  => 'Controller@getChannel',
    'middleware' => [
        'auth:api'
    ],
])->where('id', '[0-9]+');