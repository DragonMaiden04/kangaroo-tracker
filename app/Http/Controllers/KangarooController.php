<?php

namespace App\Http\Controllers;

use App\Http\Requests\KangarooRequest;
use App\Http\Requests\UpdateKangarooRequest;
use App\Models\Kangaroo;
use Illuminate\Http\Request;

class KangarooController extends Controller
{
    const ADD_SUCCESS_MESSAGE = 'Save Success';
    const UPDATE_SUCCESS_MESSAGE = 'Update Success';
    const DEFAULT_CHUNK = 10;

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

    public function getAllKangaroo()
    {
        $result = Kangaroo::paginate();
        return $this->responseSuccess(null, $result);
    }

    public function updateKangaroo(UpdateKangarooRequest $request, $id)
    {
        $result = Kangaroo::where('id', $id)->update([
            'name' => $request->name,
            'nickname' => $request->nickname,
            'weight' => $request->weight,
            'height' => $request->height,
            'gender' => $request->gender,
            'color' => $request->color,
            'friendliness' => $request->friendliness,
            'birthday' => $request->birthday
        ]);

        return $this->responseSuccess(self::UPDATE_SUCCESS_MESSAGE);
    }
}
