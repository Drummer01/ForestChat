<?php

namespace App\Containers\ChannelAuthorization\UI\API\Transformers;

use App\Containers\Channel\UI\API\Transformers\ChannelTransformer;
use App\Containers\ChannelAuthorization\Models\ChannelRole;
use App\Containers\User\UI\API\Transformers\UserTransformer;
use App\Ship\Parents\Transformers\Transformer;

class ChannelRoleTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [
    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [
        'users',
        'channel'
    ];

    /**
     * @param ChannelRole $entity
     * @return array
     */
    public function transform(ChannelRole $entity)
    {
        $response = [
            'object' => 'ChannelRole',
            'id' => $entity->getHashedKey(),
            'name' => $entity->name,
            'display_name' => $entity->display_name,
            'color'   => $entity->color,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,
        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
        ], $response);

        return $response;
    }

    public function includeUsers(ChannelRole $role)
    {
        return $this->collection($role->users, new UserTransformer());
    }

    public function includeChannel(ChannelRole $role)
    {
        return $this->item($role->channel, new ChannelTransformer());
    }
}
