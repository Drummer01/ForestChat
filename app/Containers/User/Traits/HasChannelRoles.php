<?php
/**
 * Created by PhpStorm.
 * User: Drummer
 * Date: 08.08.2017
 * Time: 14:58
 */

namespace App\Containers\User\Traits;

use App\Containers\Channel\Models\Channel;
use App\Containers\ChannelAuthorization\Models\ChannelRole;

trait HasChannelRoles
{
    /**
     * @return mixed
     */
    public function channelRoles()
    {
        return $this->belongsToMany(ChannelRole::class, 'user_has_channel_role', 'user_id', 'role_id')
            ->withPivot( 'channel_id' );
    }

    /**
     * @param $roleId
     * @param Channel $channel
     * @return bool
     */
    public function hasChannelRole($roleId, Channel $channel)
    {
        return $this->channelRoles->contains(function ($value, $key) use ($roleId, $channel) {
            return $value->pivot->role_id == $roleId && $value->pivot->channel_id == $channel->id;
        });
    }

    /***
     * @param array|ChannelRole ...$roles
     * @return $this
     */
    public function assignChannelRole(Channel $channel, ...$roles)
    {
        $roles = collect($roles)
            ->flatten()
            ->map(function ($role) {
                return $role->id;
            })
            ->all();

        $this->channelRoles()->attach($roles, ['channel_id' => $channel->id]);

        return $this;
    }

    /**
     * @param Channel $channel
     * @param $roleId
     * @return $this
     */
    public function removeChannelRole(Channel $channel, $roleId)
    {
        $this->channelRoles()->detach($roleId);
        return $this;
    }
}