<?php

namespace App\Containers\Channel\Actions;

use App\Containers\Channel\Tasks\FindChannelByIdTask;
use App\Containers\Channel\Tasks\GetChannelStaffTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

/**
 * Class GetChannelStaffAction
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
class GetChannelStaffAction extends Action
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function run(Request $request)
    {
        $channel = $this->call(FindChannelByIdTask::class, [$request->id]);

        return $channel->roles;
    }
}
