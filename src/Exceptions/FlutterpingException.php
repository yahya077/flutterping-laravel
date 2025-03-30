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
     * @param  string  $message
     * @param  string  $errorCode
     * @param  int  $code
     * @param  \Throwable|null  $previous
     * @return void
     */
    public function __construct(
        string $message = 'An error occurred in Flutterping.',
        string $errorCode = 'flutterping_error',
        int $code = 0,
        \Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
        $this->errorCode = $errorCode;
    }

    /**
     * Get the error code for this exception.
     *
     * @return string
     */
    public function getErrorCode(): string
    {
        return $this->errorCode;
    }
} 