<?php

namespace App\Containers\Channel\Tasks;

use App\Containers\Channel\Data\Criterias\SelectChannelMembersCriteria;
use App\Containers\Channel\Data\Criterias\ThisChannelCriteria;
use App\Containers\Channel\Data\Repositories\ChannelRepository;
use App\Containers\Channel\Models\Channel;
use App\Containers\User\Data\Criterias\NameLikeCriteria;
use App\Containers\User\Data\Repositories\UserRepository;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

/**
 * Class SearchMembersTask
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
class SearchMembersTask extends Task
{
    /**
     * @param Channel $channel
     *
     * @return $this
     */
    public function run(Channel $channel, $name)
    {
        $members = App::make(ChannelRepository::class)
            ->pushCriteria(new SelectChannelMembersCriteria($channel))
            ->pushCriteria(new NameLikeCriteria($name))
            ->paginate();

        foreach ($members as $member) {
            $member->withChannel($channel);
        }

        return $members;
    }
}
