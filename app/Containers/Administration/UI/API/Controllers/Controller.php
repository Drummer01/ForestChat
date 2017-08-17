<?php

namespace App\Containers\Administration\UI\API\Controllers;

use App\Containers\Administration\Actions\BanUserAction;
use App\Containers\Administration\Actions\GetBanAction;
use App\Containers\Administration\Actions\ListChannelBansAction;
use App\Containers\Administration\UI\API\Requests\BanUserRequest;
use App\Containers\Administration\UI\API\Requests\GetBanRequest;
use App\Containers\Administration\UI\API\Requests\ListChannelBansRequest;
use App\Containers\Administration\UI\API\Transformers\BanTransformer;
use App\Containers\User\Actions\GetAuthenticatedUserAction;
use App\Ship\Parents\Controllers\ApiController;

class Controller extends ApiController
{
    /**
     * @param BanUserRequest $request
     * @return mixed
     */
    public function banUser(BanUserRequest $request)
    {
        $ban = $this->call(BanUserAction::class, [$request]);

        return $this->transform($ban, BanTransformer::class);
    }

    /**
     * @param GetBanRequest $request
     *
     * @return mixed
     */
    public function getBan(GetBanRequest $request)
    {
        $ban = $this->call(GetBanAction::class, [$request]);

        return $this->transform($ban, BanTransformer::class);
    }

    /**
     * @param ListChannelBansRequest $request
     *
     * @return mixed
     */
    public function listChannelBans(ListChannelBansRequest $request)
    {
        $list = $this->call(ListChannelBansAction::class, [$request]);

        return $this->transform($list, BanTransformer::class);
    }
}
