<?php

namespace App\Containers\ChannelAuthorization\Exceptions;

use App\Ship\Parents\Exceptions\Exception;
use Symfony\Component\HttpFoundation\Response;

class FailedAssignUserToChannelRoleException extends Exception
{
    public $httpStatusCode = Response::HTTP_CONFLICT;

    public $message = 'Failed to assign user to channel role.';
}
