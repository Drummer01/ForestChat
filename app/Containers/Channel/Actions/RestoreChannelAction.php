<?php

namespace App\Containers\Channel\Actions;

use App\Containers\Channel\Exceptions\FailedRestoreChannelException;
use App\Containers\Channel\Tasks\FindChannelByIdTask;
use App\Containers\Channel\Tasks\RestoreChannelTask;
use App\Containers\Channel\Tasks\UpdateChannelDataTask;
use App\Containers\Channel\UI\API\Requests\RestoreChannelRequest;
use App\Ship\Parents\Actions\Action;

/**
 * Class RestoreChannelAction
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
class RestoreChannelAction extends Action
{
    /**
     * @param RestoreChannelRequest $request
     * @return bool
     */
    public function run(RestoreChannelRequest $request)
    {
        try {
            $channel = $this->call(FindChannelByIdTask::class, [$request->id]);
            return $this->call(RestoreChannelTask::class, [$channel]);
        } catch (\Exception $e) {
            throw (new FailedRestoreChannelException())->debug($e);
        }
    }
}
