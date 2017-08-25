<?php

namespace App\Containers\Channel\Actions;

use App\Containers\Authentication\Tasks\GetAuthenticatedUserTask;
use App\Containers\Channel\Tasks\CreateChannelTask;
use App\Containers\Channel\UI\API\Requests\CreateChannelRequest;
use App\Containers\ChannelAuthorization\Tasks\AssignUserToChannelRoleTask;
use App\Containers\ChannelAuthorization\Tasks\CreateChannelRoleTask;
use App\Containers\ChannelAuthorization\Tasks\GetChannelRoleTask;
use App\Ship\Parents\Actions\Action;

class CreateChannelAction extends Action
{

    private $defaultChannelRolesData = [
        [
            'name' => 'administrator',
            'display_name' => 'Administrator',
            'color' => '#073b8e'
        ],
        [
            'name' => 'moderator',
            'display_name' => 'Moderator',
            'color' => '#870484'
        ]
    ];

    /**
     * @param CreateChannelRequest $request
     * @return mixed
     */
    public function run(CreateChannelRequest $request)
    {
        $user = $this->call(GetAuthenticatedUserTask::class, []);

        $channel = $this->call(CreateChannelTask::class, [
            $user->id,
            $request->name,
            $request->password,
            $request->image_url
        ]);

        /**
         * Create default channel roles for newly created channel
         * Administrator, Moderator
         */
        foreach ($this->defaultChannelRolesData as $roleData) {
            $roleData['channel_id'] = $channel->id;
            $this->call(CreateChannelRoleTask::class, [$roleData]);
        }

        //assign administrator role to channel owner
        $adminRole = $this->call(GetChannelRoleTask::class, [$channel, 'administrator']);
        $this->call(AssignUserToChannelRoleTask::class, [$user, $channel, $adminRole]);

        return $channel;
    }
}
