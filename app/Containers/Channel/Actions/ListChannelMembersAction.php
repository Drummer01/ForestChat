<?php

namespace App\Containers\Channel\Actions;

use App\Containers\Channel\Tasks\FindChannelByIdTask;
use App\Containers\Channel\Tasks\ListChannelMembersTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class ListChannelMembersAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $channel = $this->call(FindChannelByIdTask::class, [$request->id]);
        return $this->call(ListChannelMembersTask::class, [$channel]);
    }
}
