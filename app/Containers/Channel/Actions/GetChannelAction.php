<?php

namespace App\Containers\Channel\Actions;

use App\Containers\Channel\Tasks\FindChannelByIdTask;
use App\Containers\Channel\UI\API\Requests\GetChannelRequest;
use App\Ship\Parents\Actions\Action;

class GetChannelAction extends Action
{
    /**
     * @param GetChannelRequest $request
     * @return mixed
     */
    public function run(GetChannelRequest $request)
    {
        return $this->call(FindChannelByIdTask::class, [$request->id]);
    }
}
