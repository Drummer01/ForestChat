<?php

namespace App\Containers\Channel\Actions;

use App\Containers\Authentication\Tasks\GetAuthenticatedUserTask;
use App\Containers\Channel\Tasks\CreateChannelTask;
use App\Containers\Channel\UI\API\Requests\CreateChannelRequest;
use App\Containers\ChannelAuthorization\Tasks\AssignUserToChannelRoleTask;
use App\Containers\ChannelAuthorization\Tasks\GetChannelRoleTask;
use App\Ship\Parents\Actions\Action;

class CreateChannelAction extends Action
{
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

        //assign administrator role to channel owner
        $adminRole = $this->call(GetChannelRoleTask::class, [null, 'administrator']);
        $this->call(AssignUserToChannelRoleTask::class, [$user, $channel, $adminRole]);

        return $channel;
    }
}
