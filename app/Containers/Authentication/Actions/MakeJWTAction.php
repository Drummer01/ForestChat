<?php

namespace App\Containers\Authentication\Actions;

use App\Containers\Authentication\Tasks\GetAuthenticatedUserTask;
use App\Containers\Authentication\Tasks\MakeJWTTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class MakeJWTAction extends Action
{
    public function run(Request $request)
    {
        $user = $this->call(GetAuthenticatedUserTask::class);
        $claims = ['id' => $user->id, 'name' => $user->name];

        return $this->call(MakeJWTTask::class, [$user, $claims]);
    }
}
