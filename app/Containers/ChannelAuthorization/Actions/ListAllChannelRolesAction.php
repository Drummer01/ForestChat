<?php

namespace App\Containers\ChannelAuthorization\Actions;

use App\Containers\Channel\Tasks\FindChannelByIdTask;
use App\Containers\ChannelAuthorization\Tasks\ListAllChannelRolesTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class ListAllChannelRolesAction extends Action
{
    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function run(Request $request)
    {
        $channel = $this->call(FindChannelByIdTask::class, [$request->id]);
        return $channel->roles;
    }
}
