<?php

namespace App\Containers\Channel\Tasks;

use App\Containers\Channel\Models\Channel;
use App\Ship\Parents\Tasks\Task;

/**
 * Class GetChannelStaffTask
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
class GetChannelStaffTask extends Task
{
    /**
     * @param Channel $channel
     * @return array
     */
    public function run(Channel $channel)
    {
        return $channel->roles;
    }
}
