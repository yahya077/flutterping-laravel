<?php

namespace Flutterping\Exceptions;

use Flutterping\Resources\Action\AlertAction;
use Flutterping\Resources\Action\DialogAction;
use Flutterping\Resources\Event\ActionEvent;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels = [
        InvalidAppVersionException::class => 'warning',
        InactiveVersionException::class => 'notice',
        NetworkException::class => 'error',
        AuthenticationException::class => 'warning',
    ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport = [
        InactiveVersionException::class,
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register(): void
    {
        $this->reportable(function (FlutterpingException $e) {
            // Custom reporting logic
        });

        $this->renderable(function (InvalidAppVersionException $e, Request $request) {
            if (str_contains($request->route()->getName(), 'flutterping')) {
                return response()->flutterping((new ActionEvent())->setAction((new DialogAction())
                    ->setTitle(sprintf('Invalid App Version'))
                    ->setMessage($e->getMessage())), 400);
            }
        });

        $this->renderable(function (InactiveVersionException $e, Request $request) {
            if (str_contains($request->route()->getName(), 'flutterping')) {
                return response()->flutterping((new ActionEvent())->setAction((new DialogAction())
                    ->setTitle('Inactive App Version')
                    ->setMessage($e->getMessage())), 400);
            }
        });

        $this->renderable(function (MissingHeaderException $e, Request $request) {
            if (str_contains($request->route()->getName(), 'flutterping')) {
                return response()->flutterping((new ActionEvent())->setAction((new DialogAction())
                    ->setTitle('Missing Header')
                    ->setMessage($e->getMessage())), 400);
            }
        });

        $this->renderable(function (NetworkException $e, Request $request) {
            if (str_contains($request->route()->getName(), 'flutterping')) {
                return response()->flutterping((new ActionEvent())->setAction((new DialogAction())
                    ->setTitle('Network Error')
                    ->setMessage($e->getMessage())), 400);
            }
        });

        $this->renderable(function (AuthenticationException $e, Request $request) {
            if (str_contains($request->route()->getName(), 'flutterping')) {
                return response()->json([
                    'error_ui' => [
                        'type' => 'ping_error_view',
                        'data' => [
                            'error' => $e->getErrorCode(),
                            'message' => $e->getMessage(),
                            'context' => [
                                'error_code' => $e->getErrorCode(),
                                'error_type' => 'authentication'
                            ]
                        ]
                    ]
                ], 401);
            }
        });

        $this->renderable(function (FlutterpingException $e, Request $request) {
            if (str_contains($request->route()->getName(), 'flutterping')) {
                return response()->json([
                    'error_ui' => [
                        'type' => 'ping_error_view',
                        'data' => [
                            'error' => $e->getErrorCode(),
                            'message' => $e->getMessage(),
                            'context' => [
                                'error_code' => $e->getErrorCode(),
                                'error_type' => 'flutterping'
                            ]
                        ]
                    ]
                ], 400);
            }
        });

        // Convert Laravel authentication exceptions to our custom format
        $this->renderable(function (\Illuminate\Auth\AuthenticationException $e, Request $request) {
            if (str_contains($request->route()->getName(), 'flutterping')) {
                return response()->json([
                    'error_ui' => [
                        'type' => 'ping_error_view',
                        'data' => [
                            'error' => 'unauthenticated',
                            'message' => $e->getMessage() ?: 'Unauthenticated.',
                            'context' => [
                                'error_code' => 'unauthenticated',
                                'error_type' => 'laravel_auth'
                            ]
                        ]
                    ]
                ], 401);
            }
        });

        // Handle validation exceptions
        $this->renderable(function (\Illuminate\Validation\ValidationException $e, Request $request) {
            if (str_contains($request->route()->getName(), 'flutterping')) {
                return response()->json([
                    'error_ui' => [
                        'type' => 'ping_error_view',
                        'data' => [
                            'error' => 'validation_error',
                            'message' => 'The given data was invalid.',
                            'context' => [
                                'error_code' => 'validation_error',
                                'error_type' => 'validation',
                                'errors' => $e->errors()
                            ]
                        ]
                    ]
                ], 422);
            }
        });

        // Handle all other exceptions (undefined/unexpected exceptions)
        //TODO currently we dont have enough widget to handle this exception
//        $this->renderable(function (Throwable $e, Request $request) {
//            // Only handle requests to Flutterping routes
//            if (str_contains($request->route()->getName(), 'flutterping')) {
//                $statusCode = method_exists($e, 'getStatusCode') ? $e->getStatusCode() : 500;
//                $message = config('app.env') === 'production'
//                    ? 'An unexpected error occurred.'
//                    : $e->getMessage();
//
//                $context = [
//                    'error_code' => 'server_error',
//                    'error_type' => 'server'
//                ];
//
//                // Add detailed debug information only in non-production environments
//                if (config('app.env') !== 'production' && config('app.debug')) {
//                    $trace = collect($e->getTrace())->map(function ($trace) {
//                        // Remove args from trace to avoid exposing sensitive data
//                        return collect($trace)->filter(function ($value, $key) {
//                            return $key !== 'args';
//                        })->toArray();
//                    })->toArray();
//
//                    $context['debug'] = [
//                        'exception' => get_class($e),
//                        'file' => $e->getFile(),
//                        'line' => $e->getLine(),
//                        'trace' => $trace,
//                    ];
//
//                    // Add request information
//                    $context['request'] = [
//                        'url' => $request->fullUrl(),
//                        'method' => $request->method(),
//                        'headers' => collect($request->headers->all())
//                            ->map(function ($item) {
//                                return is_array($item) ? reset($item) : $item;
//                            })
//                            ->filter(function ($value, $key) {
//                                // Filter out sensitive headers
//                                return !in_array(strtolower($key), ['authorization', 'cookie']);
//                            })
//                            ->toArray(),
//                    ];
//                }
//
//                return response()->json([
//                    'error_ui' => [
//                        'type' => 'ping_error_view',
//                        'data' => [
//                            'error' => 'server_error',
//                            'message' => $message,
//                            'context' => $context
//                        ]
//                    ]
//                ], $statusCode);
//            }
//
//            return null;
//        });
    }
}
