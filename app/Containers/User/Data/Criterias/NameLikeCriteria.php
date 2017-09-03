<?php


namespace App\Containers\User\Data\Criterias;
use App\Ship\Parents\Criterias\Criteria;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class NameLikeCriteria
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
class NameLikeCriteria extends Criteria
{
    /**
     * @var string
     */
    private $name;

    /**
     * NameLikeCriteria constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
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
        return $model->where('name', 'like', "%$this->name%");
    }
}