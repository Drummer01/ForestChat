<?php

namespace App\Containers\Channel\UI\API\Controllers;

use App\Containers\Channel\Actions\CreateChannelAction;
use App\Containers\Channel\Actions\DeleteChannelAction;
use App\Containers\Channel\Actions\GetChannelAction;
use App\Containers\Channel\Actions\GetChannelListAction;
use App\Containers\Channel\Actions\GetChannelStaffAction;
use App\Containers\Channel\Actions\ListChannelMembersAction;
use App\Containers\Channel\Actions\RestoreChannelAction;
use App\Containers\Channel\Actions\SearchChannelAction;
use App\Containers\Channel\Actions\UpdateChannelDataAction;
use App\Containers\Channel\UI\API\Requests\CreateChannelRequest;
use App\Containers\Channel\UI\API\Requests\DeleteChannelRequest;
use App\Containers\Channel\UI\API\Requests\GetChannelListRequest;
use App\Containers\Channel\UI\API\Requests\GetChannelRequest;
use App\Containers\Channel\UI\API\Requests\GetChannelStaffRequest;
use App\Containers\Channel\UI\API\Requests\ListChannelMembersRequest;
use App\Containers\Channel\UI\API\Requests\RestoreChannelRequest;
use App\Containers\Channel\UI\API\Requests\SearchChannelRequest;
use App\Containers\Channel\UI\API\Requests\UpdateChannelDataRequest;
use App\Containers\Channel\UI\API\Transformers\ChannelTransformer;
use App\Containers\ChannelAuthorization\Actions\ListAllChannelRolesAction;
use App\Containers\ChannelAuthorization\UI\API\Transformers\ChannelRoleTransformer;
use App\Containers\User\UI\API\Transformers\UserTransformer;
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

    /**
     * @param SearchChannelRequest $request
     * @return mixed
     */
    public function searchChannel(SearchChannelRequest $request)
    {
        $list = $this->call(SearchChannelAction::class, [$request]);

        return $this->transform($list, ChannelTransformer::class);
    }

    /**
     * @param GetChannelStaffRequest $request
     * @return mixed
     */
    public function getStaff(GetChannelStaffRequest $request)
    {
        $roles = $this->call(ListAllChannelRolesAction::class, [$request]);

        return $this->transform($roles, ChannelRoleTransformer::class, ['members']);
    }

    /**
     * @param ListChannelMembersRequest $request
     * @return mixed
     */
    public function listChannelMembers(ListChannelMembersRequest $request)
    {
        $members = $this->call(ListChannelMembersAction::class, [$request]);

        return $this->transform($members, UserTransformer::class, ['channel-roles']);
    }
}