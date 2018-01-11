<?php

namespace App\Containers\ChannelAuthorization\Providers;

use App\Ship\Parents\Providers\MainProvider;

/**
 * Class MainServiceProvider
 *
 * @author Andriy Butnar <xpaand4@gmail.com>
 */
class MainServiceProvider extends MainProvider
{
    /**
     * @var array
     */
    public $serviceProviders = [
        MiddlewareServiceProvider::class
    ];
}