<?php

namespace Flutterping\Exceptions;

class InvalidAppVersionException extends FlutterpingException
{
    /**
     * Create a new exception instance.
     *
     * @param  string  $message
     * @param  int  $code
     * @param  \Throwable|null  $previous
     * @return void
     */
    public function __construct(
        string $message = 'Invalid app version format or version not found.',
        int $code = 0,
        \Throwable $previous = null
    ) {
        parent::__construct($message, 'invalid_app_version', $code, $previous);
    }
} 