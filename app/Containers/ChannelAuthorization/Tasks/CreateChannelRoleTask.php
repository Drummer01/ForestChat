<?php

namespace App\Containers\ChannelAuthorization\Tasks;

use App\Containers\ChannelAuthorization\Data\Repositories\ChannelRoleRepository;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class CreateChannelRoleTask extends Task
{
    public function run(array $data)
    {
        try {
            return App::make(ChannelRoleRepository::class)->create($data);
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
