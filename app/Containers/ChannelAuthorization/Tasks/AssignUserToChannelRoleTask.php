<?php

namespace App\Containers\ChannelAuthorization\Tasks;

use App\Containers\Channel\Models\Channel;
use App\Containers\ChannelAuthorization\Exceptions\FailedAssignUserToChannelRoleException;
use App\Containers\ChannelAuthorization\Models\ChannelRole;
use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;

class AssignUserToChannelRoleTask extends Task
{
    /**
     * @param User $user
     * @param Channel $channel
     * @param array|ChannelRole $roles
     * @return array|ChannelRole
     */
    public function run(User $user, Channel $channel, array $roles)
    {
        try {
            return $user->assignChannelRole($channel, $roles)->channelRoles;
        } catch (\Exception $e) {
            throw (new FailedAssignUserToChannelRoleException())->debug($e);
        }
    }
}
