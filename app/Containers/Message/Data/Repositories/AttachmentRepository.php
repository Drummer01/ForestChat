<?php

namespace App\Containers\Message\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class AttachmentRepository
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
class AttachmentRepository extends Repository
{
    protected $container = "Message";

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
