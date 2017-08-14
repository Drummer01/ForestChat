<?php

namespace App\Containers\ChannelAuthorization\Tasks;

use App\Containers\ChannelAuthorization\Data\Repositories\ChannelRoleRepository;
use App\Containers\ChannelAuthorization\Models\ChannelRole;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class DeleteChannelRoleTask extends Task
{
    /**
     * @param Integer|ChannelRole $role
     *
     * @return bool
     */
    public function run($role)
    {
        if($role instanceof ChannelRole) {
            $role = $role->id;
        }

        return App::make(ChannelRoleRepository::class)->delete($role);
    }
}
