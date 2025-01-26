<?php

namespace Flutterping\Http\Controllers;

use Flutterping\Events\InitializeRequestReceived;
use Flutterping\Http\Requests\InitializeRequest;
use Illuminate\Support\Str;

class InitializeController
{
    public function __invoke(InitializeRequest $request): \Illuminate\Http\JsonResponse
    {
        $sessionId = Str::uuid()->toString();

        event(new InitializeRequestReceived($request, $sessionId));

        return response()->json([
            'session_id' => $sessionId
        ]);
    }
}
