<?php

/**
 * @apiGroup           Channel
 * @apiName            deleteChannel
 *
 * @api                {DELETE} /v1/channel/:id Delete
 * @apiDescription     Delete channel
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated user
 *
 * @apiParam           {Number} id Channel identifier
 *
 * @apiHeader          Accept application/json
 * @apiHeader          Authorization Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ91QiLCJhbGciOiJIUzI1NiJ1..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 202 OK
{
    "data": {
        "message": "Channel deleted successfully."
    }
}
*/

$router->delete('channel/{id}', [
    'uses'  => 'Controller@deleteChannel',
    'middleware' => [
        'auth:api'
    ]
])->where('id', '[0-9]+');