<?php

namespace App\Containers\Administration\Exceptions;

use App\Ship\Parents\Exceptions\Exception;
use Symfony\Component\HttpFoundation\Response;

class BanNotFoundException extends Exception
{
    public $httpStatusCode = Response::HTTP_NOT_FOUND;

    public $message = 'Ban not found.';
}
