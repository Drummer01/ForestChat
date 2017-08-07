<?php
/**
 * Created by PhpStorm.
 * User: Drummer
 * Date: 08.08.2017
 * Time: 0:32
 */

namespace App\Containers\Channel\Data\Criterias;


use App\Ship\Parents\Criterias\Criteria;
use Prettus\Repository\Contracts\RepositoryInterface;

class HiddenChannelCriteria extends Criteria
{

    /**
     * @var bool
     */
    private $showHidden;

    public function __construct($showHidden)
    {
        $this->showHidden = (bool) $showHidden;
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
        return $model->where('hidden', $this->showHidden);
    }
}