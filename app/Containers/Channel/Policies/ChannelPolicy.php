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
use App\Containers\User\Models\User;
use App\Ship\Criterias\Eloquent\CreatedTodayCriteria;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\App;

class ChannelPolicy
{
    use HandlesAuthorization;

    const CHANNEL_CREATION_LIMIT = 3;

    /**
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
}