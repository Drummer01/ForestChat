<?php

/**
 * @apiGroup           ChannelAuthorization
 * @apiName            listAllChannelRoles
 *
 * @api                {GET} /v1/channel/{id}/roles List Channel Roles
 * @apiDescription     Retrieve list of custom and default channel roles
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated user
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
        "created_at": null,
        "updated_at": null,
        "real_id": 2
    },
    {
        "object": "ChannelRole",
        "id": "e9rjvba6xay5gxqm",
        "name": "moderator",
        "display_name": "Moderator",
        "created_at": null,
        "updated_at": {
            "date": "2017-08-11 17:10:57.000000",
            "timezone_type": 3,
            "timezone": "UTC"
        },
        "real_id": 1
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

$router->get('channel/{id}/roles', [
    'uses'  => 'Controller@listAllChannelRoles',
    'middleware' => [
      'auth:api',
    ],
]);
