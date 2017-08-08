<?php

namespace App\Containers\Message\UI\API\Controllers;

use App\Containers\Channel\UI\API\Requests\GetChannelRequest;
use App\Containers\Message\Actions\GetChannelMessageHistory;
use App\Containers\Message\UI\API\Transformers\MessageTransformer;
use App\Ship\Parents\Controllers\ApiController;

class Controller extends ApiController
{
    /**
     * @param GetChannelRequest $request
     * @return mixed
     */
    public function getChannelMessageHistory(GetChannelRequest $request)
    {
        $messages = $this->call(GetChannelMessageHistory::class, [$request]);
        return $this->transform($messages, new MessageTransformer());
    }
}
