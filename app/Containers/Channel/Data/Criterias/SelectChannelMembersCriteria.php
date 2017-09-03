<?php


namespace App\Containers\Channel\Data\Criterias;


use App\Containers\Channel\Models\Channel;
use App\Ship\Parents\Criterias\Criteria;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class SelectChannelMembersCriteria
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
class SelectChannelMembersCriteria extends Criteria
{
    /**
     * @var $channel
     */
    private $channel;

    /**
     * SelectChannelMembersCriteria constructor.
     * @param Channel $channel
     */
    public function __construct(Channel $channel)
    {
        $this->channel = $channel;
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
        return $this->channel->members();
    }
}