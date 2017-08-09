<?php

namespace App\Containers\Channel\Exceptions;

use App\Ship\Parents\Exceptions\Exception;
use Symfony\Component\HttpFoundation\Response;

class FailedUpdateChannelException extends Exception
{
    public $httpStatusCode = Response::HTTP_BAD_REQUEST;

    public $message = 'An error occured while updating channel data.';
}
