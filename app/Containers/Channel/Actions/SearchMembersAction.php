<?php

namespace App\Containers\Channel\Actions;

use App\Containers\Channel\Tasks\FindChannelByIdTask;
use App\Containers\Channel\Tasks\SearchMembersTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

/**
 * Class SearchMembersAction
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
class SearchMembersAction extends Action
{
    public function run(Request $request)
    {
        $channel = $this->call(FindChannelByIdTask::class, [$request->id]);
        return $this->call(SearchMembersTask::class, [$channel, $request->name]);
    }
}
