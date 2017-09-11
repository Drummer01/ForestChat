<?php

namespace App\Containers\Authentication\Tasks;

use App\Containers\User\Models\User;
use App\Ship\Parents\Tasks\Task;
use Illuminate\Support\Facades\App;
use Tymon\JWTAuth\JWTAuth;

class MakeJWTTask extends Task
{
    public function run(User $user, array $claims)
    {
        $auth = App::make(JWTAuth::class);

        return [
            'realtime-token' => $auth->fromUser($user, $claims)
        ];
    }
}
