<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestCreate extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [
            'name' => 'required|min:3',
            'email' => 'required',
        ];
    }

    public function attributes(){
        return [
            'name'=> 'Ad Soyad',
            'email' => 'Email'
        ];
    }
}
