<?php
/**
 * Created by PhpStorm.
 * User: Drummer
 * Date: 11.08.2017
 * Time: 16:23
 */

namespace App\Containers\Channel\Traits;


use App\Containers\Channel\Models\Channel;
use App\Containers\ChannelAuthorization\Models\ChannelRole;
use App\Containers\User\Models\User;

trait ChannelOwning
{
    /**
     * @param User $user
     * @param Channel $channel
     * @return bool
     */
    protected function isOwnChannelOrHasAdminRole(User $user, Channel $channel)
    {
        return $user->id === $channel->creator_id
            || $user->hasRole('Admin')
            || $user->withChannel($channel)->hasChannelRole('administrator');
    }
}