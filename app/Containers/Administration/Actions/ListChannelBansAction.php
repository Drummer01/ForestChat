<?php

namespace App\Containers\Administration\Actions;

use App\Containers\Administration\Tasks\ListChannelBansTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

class ListChannelBansAction extends Action
{
    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function run(Request $request)
    {
        return $this->call(ListChannelBansTask::class, [$request->id]);
    }
}
