<?php

namespace App\Containers\Channel\Tasks;

use App\Containers\Channel\Data\Repositories\ChannelRepository;
use App\Containers\Channel\Exceptions\FailedUpdateChannelException;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;

class UpdateChannelDataTask extends Task
{
    /**
     * @param array $data
     * @param $id
     */
    public function run(array $data, $id)
    {
        try {
            return App::make(ChannelRepository::class)->update($data, $id);
        } catch (\Exception $e) {
            throw (new FailedUpdateChannelException())->debug($e);
        }
    }
}
