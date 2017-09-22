<?php


namespace App\Containers\Message\Data\Seeders;


use App\Containers\Channel\Models\Channel;
use App\Containers\Message\Models\Message;
use App\Ship\Parents\Seeders\Seeder;

/**
 * Class MessageSeeder_3
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
class MessageSeeder_3 extends Seeder
{
    public function run()
    {
        $channels = Channel::all();

        factory(Channel::class, 50)->make(function (Message $message) use ($channels) {
            $message->channel_id = $channels->random()->id;

            $message->save();
        });
    }
}