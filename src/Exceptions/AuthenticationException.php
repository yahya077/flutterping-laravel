<?php

namespace Flutterping\Exceptions;

class AuthenticationException extends FlutterpingException
{
    /**
     * Create a new authentication exception instance.
     *
     * @param  string  $message
     * @param  int  $code
     * @param  \Throwable|null  $previous
     * @return void
     */
    public function __construct(
        string $message = 'Authentication failed.',
        int $code = 0,
        \Throwable $previous = null
    ) {
        parent::__construct($message, 'authentication_error', $code, $previous);
    }

    /**
     * Render the exception as a JSON response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function render($request)
    {
        return response()->json([
            'error' => [
                'code' => $this->getErrorCode(),
                'message' => $this->getMessage(),
            ]
        ], 401);
    }
} 