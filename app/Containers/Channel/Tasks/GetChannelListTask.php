<?php

namespace App\Containers\Channel\Tasks;

use App\Containers\Channel\Data\Criterias\HiddenChannelCriteria;
use App\Containers\Channel\Data\Repositories\ChannelRepository;
use App\Containers\Channel\Exceptions\ChannelNotFoundException;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class GetChannelListTask extends Task
{
    public function run()
    {
        try {
            return App::make(ChannelRepository::class)
                ->pushCriteria(new HiddenChannelCriteria(false))
                ->paginate();
        } catch (\Exception $e) {
            throw (new ChannelNotFoundException())->debug($e);
        }
    }
}
