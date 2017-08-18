<?php

namespace App\Containers\Channel\Tasks;

use App\Containers\Channel\Data\Repositories\ChannelRepository;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

/**
 * Class SearchChannelTask
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
class SearchChannelTask extends Task
{
    /**
     * @param $name
     */
    public function run($name)
    {
        return App::make(ChannelRepository::class)->findByField('name', $name);
    }
}
