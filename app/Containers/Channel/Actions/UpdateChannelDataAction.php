<?php

namespace App\Containers\Channel\Actions;

use App\Containers\Channel\Tasks\UpdateChannelDataTask;
use App\Containers\Channel\UI\API\Requests\UpdateChannelDataRequest;
use App\Ship\Parents\Actions\Action;

class UpdateChannelDataAction extends Action
{
    /**
     * @param UpdateChannelDataRequest $request
     * @return mixed
     */
    public function run(UpdateChannelDataRequest $request)
    {
        return $this->call(UpdateChannelDataTask::class, [$request->all(), $request->id]);
    }
}
