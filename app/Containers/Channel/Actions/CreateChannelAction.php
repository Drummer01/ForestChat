<?php

namespace App\Containers\Channel\Actions;

use App\Containers\Authentication\Tasks\GetAuthenticatedUserTask;
use App\Containers\Channel\Tasks\CreateChannelTask;
use App\Containers\Channel\UI\API\Requests\CreateChannelRequest;
use App\Ship\Parents\Actions\Action;

class CreateChannelAction extends Action
{
    /**
     * @param CreateChannelRequest $request
     * @return mixed
     */
    public function run(CreateChannelRequest $request)
    {
        $user = $this->call(GetAuthenticatedUserTask::class, []);
        return $this->call(CreateChannelTask::class, [
            $user->id,
            $request->name,
            $request->password,
            $request->image_url
        ]);
    }
}
