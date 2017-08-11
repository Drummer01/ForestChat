<?php

namespace App\Containers\Authentication\Providers;

use Apiato\Core\Loaders\RoutesLoaderTrait;
use App\Containers\Channel\Models\Channel;
use App\Containers\Channel\Models\ChannelRole;
use App\Containers\Channel\Policies\ChannelPolicy;
use App\Containers\Channel\Policies\ChannelRolePolicy;
use App\Ship\Parents\Providers\AuthProvider as ParentAuthProvider;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
use Laravel\Passport\Passport;
use Route;

/**
 * Class ShipAuthServiceProvider
 *
 * This class is provided by Laravel as default provider,
 * to register authorization policies.
 *
 * A.K.A App\Providers\AuthServiceProvider.php
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class AuthProvider extends ParentAuthProvider
{
    use RoutesLoaderTrait;

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Channel::class      => ChannelPolicy::class,
        ChannelRole::class  => ChannelRolePolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $this->registerPassport();
    }

    /**
     * @void
     */
    private function registerPassport()
    {
        $routeGroupArray = $this->getRouteGroup('/v1');

        Route::group($routeGroupArray, function () {
            Passport::routes();
        });

        if (Config::get('apiato.api.enabled-implicit-grant')) {
            Passport::enableImplicitGrant();
        }

        Passport::tokensExpireIn(Carbon::now()->addMinutes(Config::get('apiato.api.expires-in')));

        Passport::refreshTokensExpireIn(Carbon::now()->addMinutes(Config::get('apiato.api.refresh-expires-in')));
    }
}
