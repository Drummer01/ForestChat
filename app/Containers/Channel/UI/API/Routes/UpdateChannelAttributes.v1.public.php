<?php

/**
 * @apiGroup           Channel
 * @apiName            updateChannelData
 *
 * @api                {PUT} /v1/channel/1 Update channel details
 * @apiDescription     Update channel details
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated user
 *
 * @apiParam           {Number} id Channel identifier
 * @apiParam           {String{4..40}} [name]
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

$router->put('channel/{id}', [
    'uses'  => 'Controller@updateChannelData',
    'middleware' => [
        'auth:api'
    ]
])->where('id', '[0-9]+');