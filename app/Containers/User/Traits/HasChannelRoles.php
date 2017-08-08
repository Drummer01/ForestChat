<?php
/**
 * Created by PhpStorm.
 * User: Drummer
 * Date: 08.08.2017
 * Time: 14:58
 */

namespace App\Containers\User\Traits;


use App\Containers\Authorization\Data\Repositories\RoleRepository;
use App\Containers\Channel\Data\Criterias\ThisChannelCriteria;
use App\Containers\Channel\Data\Criterias\ThisChannelRoleCriteria;
use App\Containers\Channel\Models\Channel;
use App\Containers\Channel\Models\ChannelRole;
use App\Ship\Criterias\Eloquent\ThisUserCriteria;
use Illuminate\Support\Facades\App;

trait HasChannelRoles
{
    /**
     * @return mixed
     */
    public function channelRoles()
    {
        return $this->belongsToMany(ChannelRole::class, 'channel_users_roles', 'user_id', 'role_id');
    }

    /**
     * @param $roleId
     * @param Channel $channel
     * @return bool
     */
    public function hasChannelRole($roleId, Channel $channel)
    {
        $roleRepo = App::make(RoleRepository::class);
        $roleRepo->pushCriteria(new ThisChannelCriteria($channel->id));
        $roleRepo->pushCriteria(new ThisChannelRoleCriteria($roleId));
        $roleRepo->pushCriteria(new ThisUserCriteria($this->id));
        return !is_null($roleRepo->first());
    }
}