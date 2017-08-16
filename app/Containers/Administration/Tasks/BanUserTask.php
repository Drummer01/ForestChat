<?php

namespace App\Containers\Administration\Tasks;

use App\Containers\Administration\Data\Repositories\BanRepository;
use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

class BanUserTask extends Task
{

    public function run(User $admin, $channelId, $userId, $expire, $reason)
    {
        return App::make(BanRepository::class)->create([
            'channel_id'    => $channelId,
            'user_id'       => $userId,
            'admin_id'      => $admin->id,
            'expire'        => $expire,
            'reason'        => $reason
        ]);
    }
}
