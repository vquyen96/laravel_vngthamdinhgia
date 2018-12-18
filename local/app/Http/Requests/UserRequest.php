<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'password' => 'min:8',
            'email' => 'unique:users,email',
        ];
    }
    public function messages(){
        return [
            'password.min' => 'Mật khẩu phải lớn hơn 8 kí tự',     
            'email.unique' => 'Tài khoản đã được sử dụng!',      
        ];
    }
}