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
        $model = $this->belongsToMany(ChannelRole::class, 'user_has_channel_role', 'user_id', 'channel_role_id')
            ->withPivot( 'channel_id' );
        if($this->channel) {
            return $model->wherePivot('channel_id', $this->channel->id);
        }
        return $model;
    }

    /**
     * @param $roles int|string|array|ChannelRole|Collection
     * @return bool
     */
    public function hasChannelRole($roles)
    {
        if(is_numeric($roles)) {
            return $this->channelRoles->contains('id', $roles);
        }

        if(is_string($roles)) {
            return $this->channelRoles->contains('name', $roles);
        }

        if($roles instanceof ChannelRole) {
            return $this->channelRoles->contains($roles->id);
        }

        if(is_array($roles)) {
            foreach ($roles as $role) {
                if($this->hasChannelRole($role)) {
                    return true;
                }
            }

            return false;
        }

        return false;
    }

    /***
     * @param array|ChannelRole ...$roles
     * @return $this
     */
    public function assignChannelRole(...$roles)
    {
        $roles = collect($roles)
            ->flatten()
            ->map(function ($role) {
                return $role->id;
            })
            ->all();

        $this->channelRoles()->attach($roles, ['channel_id' => $this->channel->id]);

        return $this;
    }

    /**
     * @param $roleId
     * @return $this
     */
    public function removeChannelRole($roleId)
    {
        $this->channelRoles()->detach($roleId);
        return $this;
    }
}