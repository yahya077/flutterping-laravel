<?php

namespace Flutterping\Exceptions;

class MissingHeaderException extends FlutterpingException
{
    /**
     * Create a new exception instance.
     *
     * @return void
     */
    public function __construct(
        string $headerName,
        int $code = 0,
        ?\Throwable $previous = null
    ) {
        $message = "Required header '{$headerName}' is missing.";
        parent::__construct($message, 'missing_header', $code, $previous);
    }
}
