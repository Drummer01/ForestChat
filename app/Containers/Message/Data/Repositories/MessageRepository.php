<?php

namespace App\Containers\Message\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class MessageRepository
 */
class MessageRepository extends Repository
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
