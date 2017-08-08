<?php

namespace App\Containers\Message\UI\API\Transformers;

use App\Containers\Message\Models\Message;
use App\Containers\User\UI\API\Transformers\UserTransformer;
use App\Ship\Parents\Transformers\Transformer;

class MessageTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [
        'sender'
    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [
    ];

    /**
     * @param Message $entity
     * @return array
     */
    public function transform(Message $entity)
    {
        $response = [

            'object' => 'Message',
            'id' => $entity->getHashedKey(),
            'text' => $entity->text,
            'type' => $entity->type,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,
        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
        ], $response);

        return $response;
    }

    /**
     * @param Message $message
     * @return \League\Fractal\Resource\Item
     */
    public function includeSender(Message $message)
    {
        return $this->item($message->user, new UserTransformer());
    }
}
