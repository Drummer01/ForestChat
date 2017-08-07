<?php

namespace App\Containers\Channel\Tasks;

use App\Containers\Channel\Data\Repositories\ChannelRepository;
use App\Containers\Channel\Exceptions\ChannelNotFoundException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class FindChannelByIdTask extends Task
{
    public function run($id)
    {
        try {
            return App::make(ChannelRepository::class)->find($id);
        } catch (\Exception $e) {
            throw (new ChannelNotFoundException())->debug($e);
        }
    }
}
