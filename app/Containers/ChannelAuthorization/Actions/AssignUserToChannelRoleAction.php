<?php

namespace App\Containers\ChannelAuthorization\Actions;

use App\Containers\Channel\Tasks\FindChannelByIdTask;
use App\Containers\ChannelAuthorization\Models\ChannelRole;
use App\Containers\ChannelAuthorization\Tasks\AssignUserToChannelRoleTask;
use App\Containers\ChannelAuthorization\Tasks\GetChannelRoleTask;
use App\Containers\ChannelAuthorization\UI\API\Requests\AssignUserToChannelRoleRequest;
use App\Containers\User\Tasks\FindUserByIdTask;
use App\Ship\Parents\Actions\Action;

class AssignUserToChannelRoleAction extends Action
{
    /**
     * @param AssignUserToChannelRoleRequest $request
     * @return array|ChannelRole
     */
    public function run(AssignUserToChannelRoleRequest $request)
    {
        $user = $this->call(FindUserByIdTask::class, [$request->user_id]);

        $channel = $this->call(FindChannelByIdTask::class, [$request->id]);

        if(!is_array($rolesIds = $request->channel_roles_ids)) {
            $rolesIds = [$request->channel_roles_ids];
        }

        foreach ($rolesIds as $roleId) {
            $roles[] = $this->call(GetChannelRoleTask::class, [$roleId]);
        }

        return $this->call(AssignUserToChannelRoleTask::class, [$user, $channel, $roles]);
    }
}
