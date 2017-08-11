<?php

namespace App\Containers\ChannelAuthorization\UI\API\Controllers;

use App\Containers\ChannelAuthorization\Actions\AssignUserToChannelRoleAction;
use App\Containers\ChannelAuthorization\Models\ChannelRole;
use App\Containers\ChannelAuthorization\UI\API\Requests\AssignUserToChannelRoleRequest;
use App\Containers\ChannelAuthorization\UI\API\Transformers\ChannelRoleTransformer;
use App\Ship\Parents\Controllers\ApiController;

class Controller extends ApiController
{
    /**
     * @param AssignUserToChannelRoleRequest $request
     * @return array|ChannelRole
     */
    public function assignUserToChannelRole(AssignUserToChannelRoleRequest $request)
    {
        //TODO: Authrorize
        $roles = $this->call(AssignUserToChannelRoleAction::class, [$request]);
        return $this->transform($roles, ChannelRoleTransformer::class);
    }
}
