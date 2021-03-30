<?php


namespace App\Exceptions;


use RuntimeException;
use Throwable;

abstract class APIExceptions extends RuntimeException
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
