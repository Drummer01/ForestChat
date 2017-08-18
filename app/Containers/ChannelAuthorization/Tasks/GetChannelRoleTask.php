<?php

namespace App\Containers\ChannelAuthorization\Tasks;

use App\Containers\Channel\Models\Channel;
use App\Containers\ChannelAuthorization\Data\Repositories\ChannelRoleRepository;
use App\Containers\ChannelAuthorization\Exceptions\ChannelRoleNotFoundException;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class GetChannelRoleTask extends Task
{
    /**
     * @param null|Channel $channel
     * @param integer|string $roleIdOrName
     * @return mixed
     */
    public function run($channel, $roleIdOrName)
    {
        $query = is_numeric($roleIdOrName) ? ['id' => $roleIdOrName] : ['name' => $roleIdOrName];
        $query['channel_id'] = is_null($channel) ? 0 : $channel->id;

        $role = App::make(ChannelRoleRepository::class)->findWhere($query)->first();

        if(!$role) {
            throw new ChannelRoleNotFoundException();
        }

        return $role;
    }
}
