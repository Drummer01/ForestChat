<?php

namespace App\Containers\ChannelAuthorization\Actions;

use App\Containers\Channel\Tasks\FindChannelByIdTask;
use App\Containers\ChannelAuthorization\Tasks\RevokeUserFromChannelRoleTask;
use App\Containers\User\Tasks\FindUserByIdTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class RevokeUserFromChannelRoleAction extends Action
{
    public function run(Request $request)
    {
        $user = $this->call(FindUserByIdTask::class, [$request->user_id]);

        $channel = $this->call(FindChannelByIdTask::class, [$request->id]);

        if(!is_array($rolesIds = $request->channel_roles_ids)) {
            $rolesIds = [$request->channel_roles_ids];
        }


        return $this->call(RevokeUserFromChannelRoleTask::class, [$user, $channel, $rolesIds]);
    }
}
