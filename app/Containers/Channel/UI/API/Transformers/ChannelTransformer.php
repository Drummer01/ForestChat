<?php

namespace App\Containers\Channel\UI\API\Transformers;

use App\Containers\Channel\Models\Channel;
use App\Containers\Message\UI\API\Transformers\MessageTransformer;
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
        'lastMessage'
    ];

    /**
     * @param Channel $entity
     * @return array
     */
    public function transform(Channel $entity)
    {
        $response = [

            'object'        => 'Channel',
            'id'            => $entity->getHashedKey(),
            'name'          => $entity->name,
            'has_password'  => $entity->hasPassword(),
            'image_url'     => $entity->image_url,
            'created_at'    => $entity->created_at,
            'updated_at'    => $entity->updated_at,


        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
        ], $response);

        return $response;
    }

    /**
     * @param Channel $channel
     * @return mixed
     */
    public function includeLastMessage(Channel $channel)
    {
        $message = $channel->messages()->first();
        return is_null($message) ? $this->null() : $this->item($message, new MessageTransformer());
    }
}
