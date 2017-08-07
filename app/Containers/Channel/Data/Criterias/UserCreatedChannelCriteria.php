<?php
/**
 * Created by PhpStorm.
 * User: Drummer
 * Date: 07.08.2017
 * Time: 21:16
 */

namespace App\Containers\Channel\Data\Criterias;


use App\Containers\User\Models\User;
use App\Ship\Parents\Criterias\Criteria;
use Prettus\Repository\Contracts\RepositoryInterface;

class UserCreatedChannelCriteria extends Criteria
{
    /**
     * @var User
     */
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
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
        return $model->where('creator_id', $this->user->id);
    }
}