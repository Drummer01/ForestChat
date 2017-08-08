<?php
/**
 * Created by PhpStorm.
 * User: Drummer
 * Date: 08.08.2017
 * Time: 15:37
 */

namespace App\Containers\Channel\Data\Criterias;


use App\Ship\Parents\Criterias\Criteria;
use Prettus\Repository\Contracts\RepositoryInterface;

class ThisChannelRoleCriteria extends Criteria
{
    /**
     * @var integer
     */
    private $roleId;

    public function __construct($roleId)
    {
        $this->roleId = $roleId;
    }

    /**
     * Apply criteria in query repository
     *
     * @param                     $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        return $model->where('role_id', $this->roleId);
    }
}