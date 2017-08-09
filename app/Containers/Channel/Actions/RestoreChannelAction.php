<?php

namespace App\Containers\Channel\Actions;

use App\Containers\Channel\Exceptions\FailedRestoreChannelException;
use App\Containers\Channel\Tasks\UpdateChannelDataTask;
use App\Containers\Channel\UI\API\Requests\RestoreChannelRequest;
use App\Ship\Parents\Actions\Action;

class RestoreChannelAction extends Action
{
    /**
     * @param RestoreChannelRequest $request
     * @return bool
     */
    public function run(RestoreChannelRequest $request)
    {
        $data = ['hidden' => false];
        try {
            $this->call(UpdateChannelDataTask::class, [$data, $request->id]);
        } catch (\Exception $e) {
            throw (new FailedRestoreChannelException())->debug($e);
        }
        return true;
    }
}
