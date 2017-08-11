<?php

namespace App\Containers\ChannelAuthorization\Tasks;

use App\Containers\ChannelAuthorization\Data\Repositories\ChannelRoleRepository;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class GetChannelRoleTask extends Task
{
    public function run($roleId)
    {
        return App::make(ChannelRoleRepository::class)->findWhere(['id' => $roleId]);
    }
}
