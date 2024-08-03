<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class startRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'string|required|bail',
            'family' => 'integer|between:4,10',
            'birthday' => 'before:2016-1-1|date',
            'gender' => 'in:male,female|required',
            'sarbazy' => 'required_if:gender,male|in:ok,no',
            'height' => 'integer|nullable|max:100'
        ];
    }
}
