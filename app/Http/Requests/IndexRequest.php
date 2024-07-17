<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndexRequest extends FormRequest
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
            'name' => 'nullable|string',
            'array.*' => ['integer','max:44','required',function($attr,$val,$fail){

var_dump($attr);
var_dump($val);
var_dump($fail);
            }],
            'fname' => 'date|before:2018-01-01',
            'lname' => 'required|integer|max:30|string',
            'zog' => 'required|string|in:male,female',
            'sarbazy' => 'required_if:zog,male|in:ok,no'
            // 'name' => 'required',
            // 'age' => 'integer|between:1,6|required'
        ];
    }
}
