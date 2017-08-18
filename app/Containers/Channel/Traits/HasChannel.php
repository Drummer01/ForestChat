<?php

namespace App\Containers\Channel\Traits;


use App\Containers\Channel\Models\Channel;

/**
 * Class HasChannel
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
trait HasChannel
{
    /**
     * @var Channel
     */
    private $channel;

    /**
     * @param null|Channel $channel
     *
     * @return $this
     */
    public function withChannel($channel)
    {
        $this->channel = $channel;
        return $this;
    }
}