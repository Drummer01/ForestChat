<?php

namespace App\Containers\Administration\Actions;

use App\Containers\Administration\Tasks\DeleteBanTask;
use App\Containers\Administration\Tasks\GetBanTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

/**
 * Class DeleteBanAction
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
class DeleteBanAction extends Action
{
    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function run(Request $request)
    {
        $ban = $this->call(GetBanTask::class, [$request->id, $request->ban_id]);

        $this->call(DeleteBanTask::class, [$ban]);

        return $ban;
    }
}
