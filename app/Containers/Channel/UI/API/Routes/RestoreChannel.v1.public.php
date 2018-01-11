<?php

/**
 * @apiGroup           Channel
 * @apiName            restoreChannel
 *
 * @api                {PUT} /v1/channel/1/restore Restore
 * @apiDescription     Restore channel, so it will be visible in list
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
 * HTTP/1.1 202 Accepted
{
    "data": {
        "message": "Channel restored successfully."
    }
}
*/

$router->put('channel/{id}/restore', [
    'uses'  => 'Controller@restoreChannel',
    'middleware' => [
        'auth:api'
    ]
])->where('id', '[0-9]+');