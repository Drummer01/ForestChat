<?php

namespace App\Containers\Channel\Actions;

use App\Containers\Channel\Exceptions\FailedDeleteChannelException;
use App\Containers\Channel\Tasks\DeleteChannelTask;
use App\Containers\Channel\Tasks\FindChannelByIdTask;
use App\Containers\Channel\Tasks\UpdateChannelDataTask;
use App\Containers\Channel\UI\API\Requests\DeleteChannelRequest;
use App\Ship\Parents\Actions\Action;

/**
 * Class DeleteChannelAction
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
class DeleteChannelAction extends Action
{
    /**
     * @param DeleteChannelRequest $request
     * @return mixed
     */
    public function run(DeleteChannelRequest $request)
    {
        try {
            $channel = $this->call(FindChannelByIdTask::class, [$request->id]);
            return $this->call(DeleteChannelTask::class, [$channel]);
        } catch (\Exception $e) {
            throw (new FailedDeleteChannelException())->debug($e);
        }
    }
}
