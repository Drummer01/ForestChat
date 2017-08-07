<?php

namespace App\Containers\Authentication\Actions;

use App\Containers\Authentication\Tasks\CallOAuthServerTask;
use App\Containers\Authentication\Tasks\MakeRefreshCookieTask;
use App\Containers\Authentication\UI\API\Requests\LoginRequest;
use App\Ship\Parents\Actions\Action;

class ApiLoginAction extends Action
{
    /**
     * @param LoginRequest $request
     * @param $clientId
     * @param $clientPassword
     * @return array
     */
    public function run(LoginRequest $request, $clientId, $clientPassword)
    {
        $requestData = [
            'grant_type'    => 'password',
            'client_id'     => $clientId,
            'client_secret' => $clientPassword,
            'username'      => $request->name,
            'password'      => $request->password,
            'scope'         => '',
        ];

        $responseContent = $this->call(CallOAuthServerTask::class, [$requestData]);

        $refreshCookie = $this->call(MakeRefreshCookieTask::class, [$responseContent['refresh_token']]);

        // Make sure we only send the refresh_token in the cookie
        unset($responseContent['refresh_token']);

        return [
            'response-content' => $responseContent,
            'refresh-cookie'   => $refreshCookie,
        ];
    }
}
