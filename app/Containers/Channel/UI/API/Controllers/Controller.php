<?php

namespace App\Containers\Channel\UI\API\Controllers;

use App\Containers\Channel\Actions\CreateChannelAction;
use App\Containers\Channel\UI\API\Requests\CreateChannelRequest;
use App\Containers\Channel\UI\API\Transformers\ChannelTransformer;
use App\Ship\Parents\Controllers\ApiController;

class Controller extends ApiController
{
    /**
     * @param CreateChannelRequest $request
     * @return mixed
     */
    public function createChannel(CreateChannelRequest $request)
    {
        $channel = $this->call(CreateChannelAction::class, [$request]);
        return $this->transform($channel, new ChannelTransformer());
    }
}
