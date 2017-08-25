<?php

namespace App\Containers\Channel\Tasks;

use App\Containers\Channel\Models\Channel;
use App\Ship\Parents\Tasks\Task;

class ListChannelMembersTask extends Task
{
    /**
     * @param Channel $channel
     * @return mixed
     */
    public function run(Channel $channel)
    {
        /**
         * TODO: Refactor this disgusting piece of code
         * The issue is User models doesn't come with attached Channel model and we could't get user's channel roles
         *  :(
         */
        $members = $channel->members;
        foreach ($members as $member) {
            $member->withChannel($channel);
        }

        return $members;
    }
}