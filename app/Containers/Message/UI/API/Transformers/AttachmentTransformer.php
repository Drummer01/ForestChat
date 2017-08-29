<?php

namespace App\Containers\Message\UI\API\Transformers;

use App\Containers\Message\Models\Attachment;
use App\Ship\Parents\Transformers\Transformer;

class AttachmentTransformer extends Transformer
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
     * @param Attachment $entity
     * @return array
     */
    public function transform(Attachment $entity)
    {
        $response = [
            'object' => 'Attachment',
            'id' => $entity->getHashedKey(),
            'type' => $entity->type,
            'source' => $entity->original_source,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,
        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
        ], $response);

        return $response;
    }
}
