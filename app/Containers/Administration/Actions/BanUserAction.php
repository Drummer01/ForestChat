<?php

namespace App\Containers\Administration\Actions;

use App\Containers\Administration\Tasks\BanUserTask;
use App\Containers\Authentication\Tasks\GetAuthenticatedUserTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class BanUserAction extends Action
{

    public function run(Request $request)
    {
        $admin = $this->call(GetAuthenticatedUserTask::class, []);

        return $this->call(BanUserTask::class, [
            $admin,
            $request->id,
            $request->user_id,
            $request->expire,
            $request->reason
        ]);
    }
}
