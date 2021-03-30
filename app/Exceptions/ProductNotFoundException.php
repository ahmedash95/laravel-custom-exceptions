<?php


namespace App\Exceptions;


use Symfony\Component\HttpFoundation\Response;

class ProductNotFoundException extends APIExceptions
{
    public function __construct($message = null)
    {
        $message = $message ?? "Product Not Found";
        parent::__construct($message, Response::HTTP_NOT_FOUND);
    }
}
