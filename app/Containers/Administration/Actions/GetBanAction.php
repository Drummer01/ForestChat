<?php

namespace App\Containers\Administration\Actions;

use App\Containers\Administration\Tasks\GetBanTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class GetBanAction extends Action
{
    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function run(Request $request)
    {
        return $this->call(GetBanTask::class, [
            $request->id,
            $request->ban_id
        ]);
    }
}
