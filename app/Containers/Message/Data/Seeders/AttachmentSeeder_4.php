<?php


namespace App\Containers\Message\Data\Seeders;


use App\Containers\Message\Models\Attachment;
use App\Containers\Message\Models\Message;
use App\Ship\Parents\Seeders\Seeder;

/**
 * Class AttachmentSeeder_4
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
class AttachmentSeeder_4 extends Seeder
{
    public function run()
    {
        $messages = Message::all();

        factory(Attachment::class, 20)->make()->each(function (Attachment $attachment) use ($messages) {
            $attachment->message_id = $messages->random()->id;

            $attachment->save();
        });
    }
}