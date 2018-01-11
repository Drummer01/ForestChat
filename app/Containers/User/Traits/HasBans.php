<?php
/**
 * Created by PhpStorm.
 * User: Drummer
 * Date: 16.08.2017
 * Time: 23:25
 */

namespace App\Containers\User\Traits;


use App\Containers\Administration\Models\Ban;

trait HasBans
{
    /**
     * @return mixed
     */
    public function bans()
    {
        if($this->channel) {
            return $this->hasMany(Ban::class)->where('channel_id', $this->channel->id);
        }
        return $this->hasMany(Ban::class);
    }

    /**
     * @return bool
     */
    public function isBanned()
    {
        return $this->bans->isNotEmpty();
    }

    /**
     * @return bool
     */
    public function isNotBanned()
    {
        return !$this->isBanned();
    }
}