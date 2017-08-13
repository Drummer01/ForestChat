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
use Illuminate\Support\Collection;

trait HasChannelRoles
{
    /**
     * @return mixed
     */
    public function channelRoles()
    {
        return $this->belongsToMany(ChannelRole::class, 'user_has_channel_role', 'user_id', 'channel_role_id')
            ->withPivot( 'channel_id' );
    }

    public function channelRolesForChannel(Channel $channel)
    {
        return $this->channelRoles()->where('user_has_channel_role.channel_id', $channel->id);
    }

    /**
     * @param $roles array|ChannelRole|Collection
     * @param Channel $channel
     * @return bool
     */
    public function hasChannelRole($roles, Channel $channel)
    {
        if($roles instanceof ChannelRole) {
            return $this->hasSingleChannelRole($roles->id, $channel);
        }

        if(is_array($roles)) {
            foreach ($roles as $role) {
                if($this->hasChannelRole($role, $channel)) {
                    return true;
                }
            }

            return false;
        }

        return false;
    }

    /***
     * @param Channel $channel
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
        $this->channelRolesForChannel($channel)->detach($roleId);
        return $this;
    }

    private function hasSingleChannelRole($roleId, Channel $channel)
    {
        return $this->channelRolesForChannel($channel)->contains('role_id', $roleId);
    }
}