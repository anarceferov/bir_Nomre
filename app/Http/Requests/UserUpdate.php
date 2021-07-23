<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdate extends FormRequest
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

    public function rules()
    {

        return [
            'name' => 'min:3',
            'email' => 'email|min:10|unique:bn_users,email,'.$this->id.'|nullable',
            'password' => 'confirmed'
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
