<?php

namespace App\Containers\ChannelAuthorization\Actions;

use App\Containers\ChannelAuthorization\Tasks\DeleteChannelRoleTask;
use App\Containers\ChannelAuthorization\Tasks\GetChannelRoleTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class DeleteChannelRoleAction extends Action
{
    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function run(Request $request)
    {
        $role = $this->call(GetChannelRoleTask::class, [$request->role_id]);
        $this->call(DeleteChannelRoleTask::class, [$role]);

        return $role;
    }
}
