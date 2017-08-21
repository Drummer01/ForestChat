<?php

namespace App\Containers\ChannelAuthorization\Middlewares;


use App\Containers\Channel\Exceptions\ChannelNotFoundException;
use App\Containers\Channel\Models\Channel;
use App\Containers\ChannelAuthorization\Exceptions\UserBannedFromChannelException;
use App\Ship\Parents\Requests\Request;
use Closure;

/**
 * Class ForbidBannedUser
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
class ForbidBannedUser
{
    /**
     * @param Request $request
     * @param Closure $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $channel = Channel::find($request->id);
        $user = $request->user();
        $user->withChannel($channel);

        if($user->isBanned()) {
            throw new UserBannedFromChannelException();
        }

        return $next($request);
    }
}