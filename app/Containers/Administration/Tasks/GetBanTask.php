<?php

namespace App\Containers\Administration\Tasks;

use App\Containers\Administration\Data\Repositories\BanRepository;
use App\Containers\Administration\Exceptions\BanNotFoundException;
use App\Containers\Administration\Models\Ban;
use App\Containers\Channel\Data\Criterias\ThisChannelCriteria;
use App\Ship\Criterias\Eloquent\ThisEqualThatCriteria;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class GetBanTask extends Task
{
    /**
     * @param int $banId
     * @param int $channelId
     *
     * @return Ban
     */
    public function run($channelId, $banId)
    {
        $ban = App::make(BanRepository::class)
            ->pushCriteria(new ThisChannelCriteria($channelId))
            ->pushCriteria(new ThisEqualThatCriteria('id', $banId))
            ->first();

        if(!$ban) {
            throw new BanNotFoundException();
        }

        return $ban;
    }
}
