<?php

namespace App\Containers\Channel\UI\API\Controllers;

use App\Containers\Channel\Actions\CreateChannelAction;
use App\Containers\Channel\Actions\DeleteChannelAction;
use App\Containers\Channel\Actions\GetChannelAction;
use App\Containers\Channel\Actions\GetChannelListAction;
use App\Containers\Channel\Actions\RestoreChannelAction;
use App\Containers\Channel\Actions\SearchChannelAction;
use App\Containers\Channel\Actions\UpdateChannelDataAction;
use App\Containers\Channel\UI\API\Requests\CreateChannelRequest;
use App\Containers\Channel\UI\API\Requests\DeleteChannelRequest;
use App\Containers\Channel\UI\API\Requests\GetChannelListRequest;
use App\Containers\Channel\UI\API\Requests\GetChannelRequest;
use App\Containers\Channel\UI\API\Requests\RestoreChannelRequest;
use App\Containers\Channel\UI\API\Requests\SearchChannelRequest;
use App\Containers\Channel\UI\API\Requests\UpdateChannelDataRequest;
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

    /**
     * @param UpdateChannelDataRequest $request
     * @return mixed
     */
    public function updateChannelData(UpdateChannelDataRequest $request)
    {
        $channel = $this->call(UpdateChannelDataAction::class, [$request]);
        return $this->transform($channel, new ChannelTransformer());
    }

    /**
     * @param DeleteChannelRequest $request
     * @return mixed
     */
    public function deleteChannel(DeleteChannelRequest $request)
    {
        $this->call(DeleteChannelAction::class, [$request]);
        return $this->json([
            'data' => [
                'message' => 'Channel deleted successfully.',
                'success' => true
            ]
        ]);
    }

    /**
     * @param RestoreChannelRequest $request
     * @return mixed
     */
    public function restoreChannel(RestoreChannelRequest $request)
    {
        $this->call(RestoreChannelAction::class, [$request]);
        return $this->json([
            'data' => [
                'message' => 'Channel restored successfully.',
                'success' => true
            ]
        ]);
    }

    public function searchChannel(SearchChannelRequest $request)
    {
        $list = $this->call(SearchChannelAction::class, [$request]);

        return $this->transform($list, ChannelTransformer::class);
    }
}