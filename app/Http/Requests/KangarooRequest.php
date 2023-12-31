<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use App\Http\Requests\ApiRequest;

class KangarooRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    { 
        return [
            'name'         => 'required|max:255|unique:kangaroos',
            'nickname'     => 'string|max:255|nullable',
            'weight'       => 'required|decimal:0,2',
            'height'       => 'required|decimal:0,2',
            'gender'       => ['required','string', Rule::in(['M', 'F'])],
            'color'        => 'string|max:255|nullable',
            'friendliness' => ['nullable','string', Rule::in(['I', 'F'])],
            'birthday'     => 'required|date'
        ];
    }
}
