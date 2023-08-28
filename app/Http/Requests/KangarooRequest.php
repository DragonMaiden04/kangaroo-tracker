<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class KangarooRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

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

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            'errors' => $validator->errors(),
            'enum' => 'FAILED'
        ], 422));
    }
}
