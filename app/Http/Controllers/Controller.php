<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    const SUCCESS_ENUM = 'SUCCESS';
    const SUCCESS_HTTP_CODE = 200;
    
    public function responseSuccess(string $message)
    {
        return response()->json([
            'code'    => self::SUCCESS_HTTP_CODE,
            'message' => $message,
            'enum'    => self::SUCCESS_ENUM
        ]);
    }
}
