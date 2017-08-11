<?php

namespace App\Containers\ChannelAuthorization\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class ChannelRoleRepository
 */
class ChannelRoleRepository extends Repository
{

    protected $container = 'ChannelAuthorization';

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
