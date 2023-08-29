<?php

namespace App\Http\Controllers;

use App\Http\Requests\KangarooRequest;
use App\Http\Requests\UpdateKangarooRequest;
use App\Http\Resources\KangarooResource;
use App\Models\Kangaroo;
use Illuminate\Http\Request;

class KangarooController extends Controller
{
    const ADD_SUCCESS_MESSAGE = 'Save Success';
    const UPDATE_SUCCESS_MESSAGE = 'Update Success';
    const DEFAULT_CHUNK = 10;
    const DEFAULT_OFFSET = 0;    
        
    
    /**
     * Adds kangaroo details
     * @param KangarooRequest $request
     * @return [json response]
     */
    public function addKangaroo(KangarooRequest $request)
    {
        $kangaroo = Kangaroo::create([
            'name'         => $request->name,
            'nickname'     => $request->nickname,
            'weight'       => $request->weight,
            'height'       => $request->height,
            'gender'       => $request->gender,
            'color'        => $request->color,
            'friendliness' => $request->friendliness,
            'birthday'     => $request->birthday
        ]);

        return $this->responseSuccess(self::ADD_SUCCESS_MESSAGE);
    }
    /**
     * Get list of Kangaroos
     * @param Request $request
     * @return [tjson responseype]
     */
    public function getAllKangaroo(Request $request)
    {
        $limit = $request->limit ?? self::DEFAULT_CHUNK;
        $offset = $request->offset ?? self::DEFAULT_OFFSET;
        $sort = $request->sort;
        $query = Kangaroo::offset($offset)->limit($limit);
        if (!empty($sort)) {
            $order = $sort['desc'] === 'true' ? 'desc' : 'asc';
            $column = $sort['selector'];
            $query->orderBy($column, $order);
        }
        $result = KangarooResource::collection($query->get());
        $totalCount = Kangaroo::count();
        $data = [
            'data' => $result,
            'count' => $totalCount
        ];
        return $this->responseSuccess(null, $data);
    }

    /**
     * Updates data of a Kangaroo based on id
     * @param UpdateKangarooRequest $request
     * @param int $id
     * @return [type]
     */
    public function updateKangaroo(UpdateKangarooRequest $request, int $id)
    {
        $result = Kangaroo::where('id', $id)->update([
            'name'         => $request->name,
            'nickname'     => $request->nickname,
            'weight'       => $request->weight,
            'height'       => $request->height,
            'gender'       => $request->gender,
            'color'        => $request->color,
            'friendliness' => $request->friendliness,
            'birthday'     => $request->birthday
        ]);

        return $this->responseSuccess(self::UPDATE_SUCCESS_MESSAGE);
    }

    /**
     * Get kangaroo details based on id
     * @param int $id
     * @return [type]
     */
    public function getKangaroo(int $id)
    {
        $result = Kangaroo::find($id);
        return view('update', compact('result'));
    }
}
