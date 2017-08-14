<?php

namespace App\Containers\ChannelAuthorization\Actions;

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
        return $this->call(ListAllChannelRolesTask::class, [$request->id]);
    }
}
