<?php

namespace App\Containers\User\UI\API\Transformers;

use App\Containers\Administration\UI\API\Transformers\BanTransformer;
use App\Containers\Authorization\UI\API\Transformers\RoleTransformer;
use App\Containers\Channel\UI\API\Transformers\ChannelTransformer;
use App\Containers\User\Models\User;
use App\Ship\Parents\Transformers\Transformer;

/**
 * Class UserTransformer.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class UserTransformer extends Transformer
{

    /**
     * @var  array
     */
    protected $availableIncludes = [
        'roles',
        'bans',
        'channels'
    ];

    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @param \App\Containers\User\Models\User $user
     *
     * @return array
     */
    public function transform(User $user)
    {
        $response = [
            'object'               => 'User',
            'id'                   => $user->getHashedKey(),
            'name'                 => $user->name,
            'email'                => $user->email,

            'created_at'           => $user->created_at,
            'updated_at'           => $user->updated_at,
//            'readable_created_at'  => $user->created_at->diffForHumans(),
//            'readable_updated_at'  => $user->updated_at->diffForHumans(),
        ];

        $response = $this->ifAdmin([
            'real_id'    => $user->id,
            'deleted_at' => $user->deleted_at,
        ], $response);

        return $response;
    }

    public function includeRoles(User $user)
    {
        return $this->collection($user->roles, new RoleTransformer());
    }

    public function includeBans(User $user)
    {
        return $this->collection($user->bans, new BanTransformer());
    }

    public function includeChannels(User $user)
    {
        return $this->collection($user->channels, new ChannelTransformer());
    }

}
