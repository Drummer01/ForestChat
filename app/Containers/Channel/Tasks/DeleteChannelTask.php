<?php

namespace App\Containers\Channel\Tasks;

use App\Containers\Channel\Models\Channel;
use App\Ship\Parents\Tasks\Task;

/**
 * Class DeleteChannelTask
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
class DeleteChannelTask extends Task
{
    /**
     * @param Channel $channel
     * @return bool|null
     */
    public function run(Channel $channel)
    {
        return $channel->delete();
    }
}
