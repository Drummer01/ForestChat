<?php

namespace App\Containers\Channel\UI\API\Controllers;

use App\Containers\Channel\Actions\CreateChannelAction;
use App\Containers\Channel\Actions\GetChannelAction;
use App\Containers\Channel\Actions\GetChannelListAction;
use App\Containers\Channel\UI\API\Requests\CreateChannelRequest;
use App\Containers\Channel\UI\API\Requests\GetChannelListRequest;
use App\Containers\Channel\UI\API\Requests\GetChannelRequest;
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

    /**
     * @param GetChannelRequest $request
     * @return mixed
     */
    public function getChannel(GetChannelRequest $request)
    {
        $channel = $this->call(GetChannelAction::class, [$request]);
        $this->authorize('view', $channel);
        return $this->transform($channel, new ChannelTransformer());
    }

    /**
     * @param GetChannelListRequest $request
     * @return mixed
     */
    public function getChannelsList(GetChannelListRequest $request)
    {
        $list = $this->call(GetChannelListAction::class, [$request]);
        return $this->transform($list, new ChannelTransformer());
    }
}
