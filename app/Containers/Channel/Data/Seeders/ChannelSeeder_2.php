<?php


namespace App\Containers\Channel\Data\Seeders;


use App\Containers\Channel\Models\Channel;
use App\Containers\User\Models\User;
use App\Ship\Parents\Seeders\Seeder;

/**
 * Class ChannelSeeder_2
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
class ChannelSeeder_2 extends Seeder
{
    public function run()
    {
        $users = User::all();

        factory(User::class, 40)->make()->each(function (Channel $channel) use ($users) {
            $channel->creator_id = $users->random()->id;

            $channel->save();
        });
    }
}