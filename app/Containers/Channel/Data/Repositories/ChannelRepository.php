<?php

namespace App\Containers\Channel\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class ChannelRepository
 */
class ChannelRepository extends Repository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id'    => '=',
        'name'  => 'like',
    ];

    public function boot()
    {
		parent::boot();
        // probably do some stuff here ...
    }
}
