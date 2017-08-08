<?php
/**
 * Created by PhpStorm.
 * User: Drummer
 * Date: 08.08.2017
 * Time: 12:18
 */

namespace App\Containers\Channel\Data\Criterias;


use App\Ship\Parents\Criterias\Criteria;
use Prettus\Repository\Contracts\RepositoryInterface;

class ThisChannelCriteria extends Criteria
{
    /**
     * @var integer
     */
    private $channelId;

    public function __construct($channelId)
    {
        $this->channelId = $channelId;
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
        return $model->where('channel_id', $this->channelId);
    }
}