<?php

namespace Flutterping\Exceptions;

class NetworkException extends FlutterpingException
{
    /**
     * The HTTP status code for this network exception.
     *
     * @var int
     */
    protected $statusCode;

    /**
     * Create a new network exception instance.
     *
     * @return void
     */
    public function __construct(
        string $message = 'A network error occurred.',
        int $statusCode = 500,
        ?\Throwable $previous = null
    ) {
        parent::__construct($message, 'network_error', $statusCode, $previous);
        $this->statusCode = $statusCode;
    }

    /**
     * Get the HTTP status code for this exception.
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
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
                'status_code' => $this->statusCode,
            ],
        ], $this->statusCode);
    }
}
