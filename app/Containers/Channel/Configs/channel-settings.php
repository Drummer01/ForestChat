<?php

return [

     /*
     |--------------------------------------------------------------------------
     | Creation limit
     |--------------------------------------------------------------------------
     |
     | Determine count of channel user can create per specific time (default 1 day)
     */
    'creation_limit' => env("CHANNEL_CREATION_LIMIT", 3),

    'default_channel_roles' => [
        [
            'name' => 'administrator',
            'display_name' => 'Administrator',
            'color' => '#073b8e',
            'permissions' => [
                'remove-channel',
                'update-channel',
                'manage-channel-bans',
                'manage-staff-access',
                'manage-channel-roles',
                'kick-users'
            ]
        ],
        [
            'name' => 'moderator',
            'display_name' => 'Moderator',
            'color' => '#870484',
            'permissions' => [
                'update-channel',
                'kick-users'
            ]
        ]
    ]
];