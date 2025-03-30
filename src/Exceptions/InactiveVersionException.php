<?php

namespace Flutterping\Exceptions;

class InactiveVersionException extends FlutterpingException
{
    /**
     * Create a new exception instance.
     *
     * @return void
     */
    public function __construct(
        string $message = 'This version of the app is no longer supported. Please update to the latest version.',
        int $code = 0,
        ?\Throwable $previous = null
    ) {
        parent::__construct($message, 'inactive_app_version', $code, $previous);
    }
}
