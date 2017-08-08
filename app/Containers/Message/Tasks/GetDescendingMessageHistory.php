<?php

namespace App\Containers\Message\Tasks;

use App\Containers\Channel\Data\Criterias\ThisChannelCriteria;
use App\Containers\Message\Data\Repositories\MessageRepository;
use App\Containers\Message\Exceptions\MessageNotFoundException;
use App\Ship\Criterias\Eloquent\OrderByCreationDateDescendingCriteria;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class GetDescendingMessageHistory extends Task
{
    /**
     * @param $id
     * @return mixed
     */
    public function run($id)
    {
        try {
            return App::make(MessageRepository::class)
                ->pushCriteria(new ThisChannelCriteria($id))
                ->pushCriteria(new OrderByCreationDateDescendingCriteria())
                ->paginate();
        } catch (\Exception $e) {
            throw (new MessageNotFoundException())->debug($e);
        }
    }
}
