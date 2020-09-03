<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|min:2'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Vui lòng điền vào',
            'email.email' => 'Tên thể loại đã tồn tại!',
            'email.min' => 'Tên thể loại quá ngắn'
        ];
    }
}
