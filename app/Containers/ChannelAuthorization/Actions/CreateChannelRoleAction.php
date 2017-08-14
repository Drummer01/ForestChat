<?php

namespace App\Containers\ChannelAuthorization\Actions;

use App\Containers\ChannelAuthorization\Tasks\CreateChannelRoleTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class CreateChannelRoleAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $data = $request->all();
        $data['channel_id'] = $request->id;
        return $this->call(CreateChannelRoleTask::class, [$data]);
    }
}
