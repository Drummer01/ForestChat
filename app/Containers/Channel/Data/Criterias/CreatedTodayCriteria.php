<?php
/**
 * Created by PhpStorm.
 * User: Drummer
 * Date: 07.08.2017
 * Time: 21:01
 */

namespace App\Containers\Channel\Data\Criterias;


use App\Ship\Parents\Criterias\Criteria;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Contracts\RepositoryInterface;

//TODO: MOVE TO SHIP
class CreatedTodayCriteria extends Criteria
{

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
        return $model->whereDate('created_at', DB::raw('CURDATE()'));
    }
}