<?php

namespace Flutterping\Events;

use Flutterping\Http\Requests\InitializeRequest;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class InitializeRequestReceived
{
    use Dispatchable, SerializesModels;

    public function __construct(public InitializeRequest $request, public string $sessionId) {}
}
