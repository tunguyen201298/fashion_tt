<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleCreateRequest extends FormRequest
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
            'name' => 'required|unique:roles,name|min:2'

        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng điền vào',
            'name.unique' => 'Tên quyền đã tồn tại!',
            'name.min' => 'Tên quyền quá ngắn'
        ];
    }
}
