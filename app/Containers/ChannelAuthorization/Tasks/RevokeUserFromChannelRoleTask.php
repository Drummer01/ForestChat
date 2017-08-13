<?php

namespace App\Containers\ChannelAuthorization\Tasks;

use App\Containers\Channel\Models\Channel;
use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;

class RevokeUserFromChannelRoleTask extends Task
{
    /**
     * @param User $user
     * @param Channel $channel
     * @param array ...$roleIds
     * @return mixed
     */
    public function run(User $user, Channel $channel, ...$roleIds)
    {
        foreach ($roleIds as $roleId) {
            $user->removeChannelRole($channel, $roleId);
        }
        return $user->channelRolesForChannel($channel)->get();
    }
}
