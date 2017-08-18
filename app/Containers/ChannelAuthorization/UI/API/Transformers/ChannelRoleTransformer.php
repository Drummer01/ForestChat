<?php

namespace App\Containers\ChannelAuthorization\UI\API\Transformers;

use App\Containers\ChannelAuthorization\Models\ChannelRole;
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
}
