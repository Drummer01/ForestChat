<?php

namespace App\Containers\Administration\Tasks;

use App\Containers\Administration\Data\Repositories\BanRepository;
use App\Containers\Channel\Data\Criterias\ThisChannelCriteria;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class ListChannelBansTask extends Task
{
    /**
     * @param $channelId
     *
     * @return mixed
     */
    public function run($channelId)
    {
        return App::make(BanRepository::class)
            ->pushCriteria(new ThisChannelCriteria($channelId))
            ->paginate();
    }
}
