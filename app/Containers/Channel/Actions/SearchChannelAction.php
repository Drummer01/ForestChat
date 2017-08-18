<?php

namespace App\Containers\Channel\Actions;

use App\Containers\Channel\Tasks\SearchChannelTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

/**
 * Class SearchChannelAction
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
class SearchChannelAction extends Action
{
    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function run(Request $request)
    {
        return $this->call(SearchChannelTask::class, [$request->name]);
    }
}
