<?php

namespace App\Containers\ChannelAuthorization\Tasks;

use App\Containers\Channel\Data\Criterias\ThisChannelCriteria;
use App\Containers\ChannelAuthorization\Data\Repositories\ChannelRoleRepository;
use App\Ship\Criterias\Eloquent\OrThisEqualThatCriteria;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class ListAllChannelRolesTask extends Task
{
    /**
     * @param $id integer Channel ID
     */
    public function run($id)
    {
        $repo = App::make(ChannelRoleRepository::class);

        //retrieve default roles along with custom
        $repo->pushCriteria(new ThisChannelCriteria($id));
        $repo->pushCriteria(new OrThisEqualThatCriteria('channel_id', 0));

        return $repo->paginate();
    }
}
