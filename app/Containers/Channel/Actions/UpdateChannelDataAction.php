<?php

namespace App\Containers\Channel\Actions;

use App\Containers\Channel\Tasks\UpdateChannelDataTask;
use App\Containers\Channel\UI\API\Requests\UpdateChannelDataRequest;
use App\Ship\Parents\Actions\Action;
use Illuminate\Support\Facades\Hash;

class UpdateChannelDataAction extends Action
{
    /**
     * @param UpdateChannelDataRequest $request
     * @return mixed
     */
    public function run(UpdateChannelDataRequest $request)
    {
        $data = $request->all();
        if(isset($data['password'])) {
            $data['password'] = Hash::make($data['password']);
        }
        return $this->call(UpdateChannelDataTask::class, [$data, $request->id]);
    }
}
