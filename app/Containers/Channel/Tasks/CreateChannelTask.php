<?php

namespace App\Containers\Channel\Tasks;

use App\Containers\Channel\Data\Repositories\ChannelRepository;
use App\Containers\Channel\Exceptions\FailedCreateChannelException;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;

class CreateChannelTask extends Task
{
    public function run($creator_id, $name, $password = null, $image_url = null)
    {
        try {
            $channel = App::make(ChannelRepository::class)->create([
                'name'          => $name,
                'password'      => is_null($password) ? '' : Hash::make($password),
                'image_url'     => $image_url,
                'creator_id'    => $creator_id
            ]);

        } catch (Exception $e) {
            throw (new FailedCreateChannelException())->debug($e);
        }
        return $channel;
    }
}
