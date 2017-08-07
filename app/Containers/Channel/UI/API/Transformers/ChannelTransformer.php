<?php

namespace App\Containers\Channel\UI\API\Transformers;

use App\Containers\Channel\Models\Channel;
use App\Ship\Parents\Transformers\Transformer;

class ChannelTransformer extends Transformer
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
     * @param Channel $entity
     * @return array
     */
    public function transform(Channel $entity)
    {
        $response = [

            'object' => 'Channel',
            'id' => $entity->getHashedKey(),
            'name' => $entity->name,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,


        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
        ], $response);

        return $response;
    }
}
