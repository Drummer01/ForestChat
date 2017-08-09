<?php

namespace App\Containers\Channel\Actions;

use App\Containers\Channel\Exceptions\FailedDeleteChannelException;
use App\Containers\Channel\Tasks\UpdateChannelDataTask;
use App\Containers\Channel\UI\API\Requests\DeleteChannelRequest;
use App\Ship\Parents\Actions\Action;

class DeleteChannelAction extends Action
{
    /**
     * @param DeleteChannelRequest $request
     * @return mixed
     */
    public function run(DeleteChannelRequest $request)
    {
        $data = ['hidden' => true];
        try {
            $this->call(UpdateChannelDataTask::class, [$data, $request->id]);
        } catch (\Exception $e) {
            throw (new FailedDeleteChannelException())->debug($e);
        }
        return true;
    }
}
