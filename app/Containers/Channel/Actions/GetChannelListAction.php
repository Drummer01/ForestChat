<?php

namespace App\Containers\Channel\Actions;

use App\Containers\Channel\Tasks\GetChannelListTask;
use App\Containers\Channel\UI\API\Requests\GetChannelListRequest;
use App\Ship\Parents\Actions\Action;

class GetChannelListAction extends Action
{
    /**
     * @param GetChannelListRequest $request
     * @return mixed
     */
    public function run(GetChannelListRequest $request)
    {
        return $this->call(GetChannelListTask::class, []);
    }
}
