<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    // public function render($request, Throwable $exception)
    // {
    //     return response()->json([
    //         'code'    => 500,
    //         'message' => 'Internal Server Error',
    //         'enum'    => "FAILED"
    //     ], 500);
    // }
}
