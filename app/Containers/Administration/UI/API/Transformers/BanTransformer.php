<?php

namespace App\Containers\Administration\UI\API\Transformers;

use App\Containers\Administration\Models\Ban;
use App\Containers\Channel\UI\API\Transformers\ChannelTransformer;
use App\Containers\User\Models\User;
use App\Containers\User\UI\API\Transformers\UserTransformer;
use App\Ship\Parents\Transformers\Transformer;

class BanTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [
        'user',
        'admin',
        'channel'
    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [
    ];

    /**
     * @param Ban $entity
     * @return array
     */
    public function transform(Ban $entity)
    {
        $response = [

            'object' => 'Ban',
            'id' => $entity->getHashedKey(),
            'reason' => $entity->reason,
            'expire' => $entity->expire,
            'is_expired' => $entity->isExpired(),
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,
        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
        ], $response);

        return $response;
    }

    public function includeUser(Ban $ban)
    {
        return $this->item($ban->user, new UserTransformer());
    }

    public function includeAdmin(Ban $ban)
    {
        return $this->item($ban->admin, new UserTransformer());
    }

    public function includeChannel(Ban $ban)
    {
        return $this->item($ban->channel, new ChannelTransformer());
    }
}
