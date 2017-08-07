<?php

namespace App\Containers\User\Actions;

use App\Containers\User\Tasks\CreateUserByCredentialsTask;
use App\Containers\User\Tasks\FireUserCreatedEventTask;
use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;

/**
 * Class RegisterUserAction.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class RegisterUserAction extends Action
{

    /**
     * @param \App\Ship\Parents\Requests\Request $request
     *
     * @return  mixed
     */
    public function run(Request $request)
    {
        // create user record in the database and return it.
        return $this->call(CreateUserByCredentialsTask::class, [
            $request->password,
            $request->name,
        ]);
    }
}
