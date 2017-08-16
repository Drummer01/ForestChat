<?php

namespace App\Containers\Administration\UI\API\Controllers;

use App\Containers\Administration\Actions\BanUserAction;
use App\Containers\Administration\UI\API\Requests\BanUserRequest;
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
}
