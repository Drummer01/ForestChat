<?php

namespace App\Containers\Administration\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class BanRepository
 */
class BanRepository extends Repository
{

    protected $container = 'Administration';

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
