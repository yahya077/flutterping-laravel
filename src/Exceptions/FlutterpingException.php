<?php

namespace Flutterping\Exceptions;

use Exception;

class FlutterpingException extends Exception
{
    /**
     * The error code for this exception.
     *
     * @var string
     */
    protected $errorCode;

    /**
     * Create a new exception instance.
     *
     * @return void
     */
    public function __construct(
        string $message = 'An error occurred in Flutterping.',
        string $errorCode = 'flutterping_error',
        int $code = 0,
        ?\Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
        $this->errorCode = $errorCode;
    }

    /**
     * Get the error code for this exception.
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }
}
