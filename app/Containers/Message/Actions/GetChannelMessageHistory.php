<?php

namespace App\Containers\Message\Actions;

use App\Containers\Channel\UI\API\Requests\GetChannelRequest;
use App\Containers\Message\Tasks\GetDescendingMessageHistory;
use App\Ship\Parents\Actions\Action;

class GetChannelMessageHistory extends Action
{
    /**
     * @param GetChannelRequest $request
     * @return mixed
     */
    public function run(GetChannelRequest $request)
    {
        return $this->call(GetDescendingMessageHistory::class, [$request->id]);
    }
}
