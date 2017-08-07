<?php

namespace App\Containers\User\Tasks;

use App\Containers\User\Data\Repositories\UserRepository;
use App\Containers\User\Exceptions\AccountFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;

/**
 * Class CreateUserByCredentialsTask.
 *
 * @author Mahmoud Zalt <mahmoud@zalt.me>
 */
class CreateUserByCredentialsTask extends Task
{
    /**
     * @param $password
     * @param null $name
     * @return mixed
     *
     */
    public function run($password, $name)
    {
        try {
            // create new user
            $user = App::make(UserRepository::class)->create([
                'password'  => Hash::make($password),
                'name'      => $name,
            ]);

        } catch (Exception $e) {
            throw (new AccountFailedException())->debug($e);
        }

        return $user;
    }

}
