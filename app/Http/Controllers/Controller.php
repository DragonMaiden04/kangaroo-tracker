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
    
    /**
     * Return Success JSON Object
     * @param string $message=null
     * @param array $data=null
     * 
     * @return [json response]
     */
    public function responseSuccess(string $message=null, $data=null)
    {
        $response = [
            'code'    => self::SUCCESS_HTTP_CODE,
            'enum'    => self::SUCCESS_ENUM,
        ];
        if (!empty($data)) {
            $response = array_merge($response, $data);
        }
        if (!empty($message)) {
            $response['message'] = $message;
        }
        return response()->json($response);
    }
}
