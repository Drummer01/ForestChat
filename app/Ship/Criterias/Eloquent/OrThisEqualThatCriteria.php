<?php
/**
 * Created by PhpStorm.
 * User: Drummer
 * Date: 14.08.2017
 * Time: 21:34
 */

namespace App\Ship\Criterias\Eloquent;


use App\Ship\Parents\Criterias\Criteria;
use Prettus\Repository\Contracts\RepositoryInterface;

class OrThisEqualThatCriteria extends Criteria
{

    /**
     * @var
     */
    private $field;

    /**
     * @var
     */
    private $value;

    /**
     * @param $field
     * @param $value
     */
    public function __construct($field, $value)
    {
        $this->field = $field;
        $this->value = $value;
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
        return $model->orWhere($this->field, $this->value);
    }
}