<?php

namespace App\Containers\Authentication\UI\API\Controllers;

use App\Containers\Authentication\Actions\ApiLoginAction;
use App\Containers\Authentication\Actions\ApiLogoutAction;
use App\Containers\Authentication\Actions\ProxyApiLoginAction;
use App\Containers\Authentication\Actions\ApiRefreshAction;
use App\Containers\Authentication\UI\API\Requests\LoginRequest;
use App\Containers\Authentication\UI\API\Requests\LogoutRequest;
use App\Containers\Authentication\UI\API\Requests\RefreshRequest;
use App\Ship\Parents\Controllers\ApiController;
use Illuminate\Support\Facades\Cookie;

/**
 * Class Controller
 *
 * @author  Mahmoud Zalt  <mahmoud@zalt.me>
 */
class Controller extends ApiController
{

    /**
     * @param \App\Containers\Authentication\UI\API\Requests\LogoutRequest $request
     *
     * @return  $this
     */
    public function logout(LogoutRequest $request)
    {
        $this->call(ApiLogoutAction::class, [$request]);

        return $this->accepted([
            'message' => 'Token revoked successfully.',
        ])->withCookie(Cookie::forget('refreshToken'));
    }


    /**
     * @param \App\Containers\Authentication\UI\API\Requests\RefreshRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh(RefreshRequest $request)
    {
        $result = $this->call(ApiRefreshAction::class, [
            $request,
            env('CLIENT_WEB_ADMIN_ID'),
            env('CLIENT_WEB_ADMIN_SECRET'),
        ]);

        return $this->json($result['response-content'])->withCookie($result['refresh-cookie']);
    }

    /**
     * @param LoginRequest $request
     * @return string
     */
    public function loginWithCredentials(LoginRequest $request)
    {
        $result = $this->call(ApiLoginAction::class, [
            $request,
            env('CLIENT_WEB_ADMIN_ID'),
            env('CLIENT_WEB_ADMIN_SECRET'),
        ]);

        return $this->json($result['response-content'])->withCookie($result['refresh-cookie']);
    }
}
