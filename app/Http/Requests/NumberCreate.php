<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NumberCreate extends FormRequest
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
            'num1' => 'required|min:0|numeric|digits:1',
            'num2' => 'required|min:0|numeric|digits:1',
            'num3' => 'required|min:0|numeric|digits:1',
            'num4' => 'required|min:0|numeric|digits:1',
            'num5' => 'required|min:0|numeric|digits:1',
            'num6' => 'required|min:0|numeric|digits:1',
            'num7' => 'required|min:0|numeric|digits:1',
            'price'=> 'required|min:0|numeric',
            'prefix'=>'required'
        ];
    }
}
