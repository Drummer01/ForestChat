<?php

/**
 * @apiGroup           Channel
 * @apiName            createChannel
 *
 * @api                {POST} /v1/channel/create Create
 * @apiDescription     Create new channel
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated user
 *
 * @apiParam           {String{4..40}} name
 * @apiParam           {String} [password]
 * @apiParam           {String} [image_url]
 *
 * @apiHeader          Accept application/json
 * @apiHeader          Authorization Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ91QiLCJhbGciOiJIUzI1NiJ1..
 * @apiHeader          Content-Type application/json
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
    "object": "Channel",
    "id": "6wgjb98vg8mr0y75",
    "name": "Hello",
    "has_password": true,
    "image_url": null,
    "created_at": {
    "date": "2017-08-18 18:49:19.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    },
    "updated_at": {
    "date": "2017-08-18 18:49:19.000000",
        "timezone_type": 3,
        "timezone": "UTC"
    },
    "real_id": 13,
    "meta": {
    "include": [],
        "custom": []
    }
}
*/

$router->post('channel/create', [
    'uses'  => 'Controller@createChannel',
    'middleware' => [
        'auth:api'
    ],
]);