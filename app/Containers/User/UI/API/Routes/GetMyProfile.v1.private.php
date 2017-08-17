<?php

/**
 * @apiGroup           User
 * @apiName            getMyProfile
 *
 * @api                {GET} /v1/my/profile Get own User
 * @apiDescription     Get the own profile (some sort of alias for GET /users/xyz - however, you don't need to specify the ID)
 *
 * @apiVersion         1.0.0
 * @apiPermission      Authenticated user
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
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
    "deleted_at": null,
    "roles": {
    "data": [
            {
                "object": "Role",
                "id": "e9rjvba6xay5gxqm",
                "name": "admin",
                "description": "Administrator",
                "display_name": "Administrator",
                "permissions": {
                "data": [
                        {
                            "object": "Permission",
                            "id": "e9rjvba6xay5gxqm",
                            "name": "manage-roles",
                            "description": "Create, Update, Delete, List, Attach/detach permissions to Roles and List Permissions.",
                            "display_name": null
                        },
                        {
                            "object": "Permission",
                            "id": "bjmqv0aq3894epgo",
                            "name": "create-admins",
                            "description": "Create new Users (Admins) from the dashboard.",
                            "display_name": null
                        },
                        {
                            "object": "Permission",
                            "id": "6klydqagxz9mnegr",
                            "name": "manage-admins-access",
                            "description": "Assign users to Roles.",
                            "display_name": null
                        },
                        {
                            "object": "Permission",
                            "id": "3jko75zeraly46mv",
                            "name": "access-dashboard",
                            "description": "Access the admins dashboard.",
                            "display_name": null
                        },
                        {
                            "object": "Permission",
                            "id": "mq60er83ba5xkv9y",
                            "name": "search-users",
                            "description": "Find a User in the DB.",
                            "display_name": null
                        },
                        {
                            "object": "Permission",
                            "id": "d3obrvzlya405mex",
                            "name": "list-users",
                            "description": "List all Users.",
                            "display_name": null
                        },
                        {
                            "object": "Permission",
                            "id": "xp9y35z5p80rje7b",
                            "name": "update-users",
                            "description": "Update a User.",
                            "display_name": null
                        },
                        {
                            "object": "Permission",
                            "id": "vlp9dnzmyz7xw305",
                            "name": "delete-users",
                            "description": "Delete a User.",
                            "display_name": null
                        },
                        {
                            "object": "Permission",
                            "id": "kg7vpeajmawldnbo",
                            "name": "refresh-users",
                            "description": "Refresh User data.",
                            "display_name": null
                        }
                    ]
                }
            }
        ]
    },
    "meta": {
    "include": [
        "roles",
        "bans",
        "channels"
    ],
        "custom": []
    }
}
*/

$router->get('my/profile', [
    'uses'  => 'Controller@getMyProfile',
    'middleware' => [
      'auth:api',
    ],
]);
