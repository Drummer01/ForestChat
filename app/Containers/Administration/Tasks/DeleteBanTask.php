<?php

namespace App\Containers\Administration\Tasks;

use App\Containers\Administration\Data\Repositories\BanRepository;
use App\Containers\Administration\Models\Ban;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;

/**
 * Class DeleteBanTask
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
class DeleteBanTask extends Task
{
    /**
     * @param int|Ban $ban
     *
     * @return mixed
     */
    public function run($ban)
    {
        if($ban instanceof Ban) {
            $ban = $ban->id;
        }

        return App::make(BanRepository::class)->delete($ban);
    }
}
