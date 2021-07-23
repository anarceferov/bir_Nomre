<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreate extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return [
            'name' => 'required|min:3',
            'email' => 'email|required|min:10|unique:bn_users,email',
            'password' => 'confirmed|required|min:5'
        ];
    }

    public function attributes(){
        return [
            'name'=> 'Ad Soyad:',
            'email' => 'Email:',
            'password' => 'Şifrə:',
        ];
    }
}
