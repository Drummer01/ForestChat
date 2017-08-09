<?php

namespace App\Containers\Channel\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class ChannelRoleRepository
 */
class ChannelRoleRepository extends Repository
{
    protected $container = 'Channel';

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
