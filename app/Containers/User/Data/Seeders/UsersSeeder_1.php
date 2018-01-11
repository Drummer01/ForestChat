<?php


namespace App\Containers\User\Data\Seeders;


use App\Containers\User\Tasks\CreateUserByCredentialsTask;
use App\Ship\Parents\Seeders\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\App;


class UsersSeeder_1 extends Seeder
{
    /**
     *
     */
    public function run()
    {
        $faker = Faker::create();
        App::make(CreateUserByCredentialsTask::class)->run($faker->password, $faker->userName);
    }
}