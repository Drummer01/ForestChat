<?php
/**
 * Created by PhpStorm.
 * User: Drummer
 * Date: 07.08.2017
 * Time: 20:32
 */

namespace App\Containers\Channel\Policies;


use App\Containers\Channel\Data\Criterias\UserCreatedChannelCriteria;
use App\Containers\Channel\Data\Repositories\ChannelRepository;
use App\Containers\Channel\Models\Channel;
use App\Containers\Channel\Models\ChannelRole;
use App\Containers\User\Models\User;
use App\Ship\Criterias\Eloquent\CreatedTodayCriteria;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\App;

class ChannelPolicy
{
    use HandlesAuthorization;

    const CHANNEL_CREATION_LIMIT = 3;

    /**
     * Limits channel creation per day
     * @param User $user
     * @return bool
     */
    public function create(User $user)
    {
        $repo = App::make(ChannelRepository::class);
        $repo->pushCriteria(new UserCreatedChannelCriteria($user));
        $repo->pushCriteria(new CreatedTodayCriteria());
        $count = $repo->all()->count();

        return $count < self::CHANNEL_CREATION_LIMIT;
    }

    /**
     * Allow channel owners and admins see hidden channels info
     * @param User $user
     * @param Channel $channel
     * @return bool
     */
    public function view(User $user, Channel $channel)
    {
        return $channel->hidden == 1 ? $this->isOwnChannelOrHasAdminRole($user, $channel) : true;
    }

    /**
     * Users
     * @param User $user
     * @param Channel $channel
     * @return bool
     */
    public function update(User $user, Channel $channel)
    {
        return $this->isOwnChannelOrHasAdminRole($user, $channel);
    }

    /**
     * @param User $user
     * @param Channel $channel
     * @return bool
     */
    public function delete(User $user, Channel $channel)
    {
        return $this->isOwnChannelOrHasAdminRole($user, $channel);
    }
    /**
     * @param User $user
     * @param Channel $channel
     * @return bool
     */
    protected function isOwnChannelOrHasAdminRole(User $user, Channel $channel)
    {
        return $user->id === $channel->creator_id
        || $user->hasRole('Admin')
        || $user->hasChannelRole(ChannelRole::ADMINISTRATOR, $channel);
    }
}