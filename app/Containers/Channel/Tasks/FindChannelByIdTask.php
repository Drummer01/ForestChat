<?php

namespace App\Containers\Channel\Tasks;

use App\Containers\Channel\Data\Repositories\ChannelRepository;
use App\Containers\Channel\Exceptions\ChannelNotFoundException;
use App\Containers\Channel\Models\Channel;
use App\Ship\Criterias\Eloquent\WithTrashedCriteria;
use App\Ship\Parents\Exceptions\Exception;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

/**
 * Class FindChannelByIdTask
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
class FindChannelByIdTask extends Task
{
    /**
     * @param $id
     * @return Channel
     */
    public function run($id)
    {
        try {
            return App::make(ChannelRepository::class)
                ->pushCriteria(new WithTrashedCriteria())
                ->find($id);
        } catch (\Exception $e) {
            throw (new ChannelNotFoundException())->debug($e);
        }
    }
}
