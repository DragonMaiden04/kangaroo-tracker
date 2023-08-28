<?php

namespace App\Http\Controllers;

use App\Http\Requests\KangarooRequest;
use App\Models\Kangaroo;
use Illuminate\Http\Request;

class KangarooController extends Controller
{
    const ADD_SUCCESS_MESSAGE = 'Save Success';

    public function addKangaroo(KangarooRequest $request)
    {
        $kangaroo = Kangaroo::create([
            'name' => $request->name,
            'nickname' => $request->nickname,
            'weight' => $request->weight,
            'height' => $request->height,
            'gender' => $request->gender,
            'color' => $request->color,
            'friendliness' => $request->friendliness,
            'birthday' => $request->birthday
        ]);

        return $this->responseSuccess(self::ADD_SUCCESS_MESSAGE);
    }
}
