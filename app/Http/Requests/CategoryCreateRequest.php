<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryCreateRequest extends FormRequest
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
            'name' => 'required|unique:categories,name|min:2'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Vui lòng điền vào',
            'name.unique' => 'Tên thể loại đã tồn tại!',
            'name.min' => 'Tên thể loại quá ngắn'
        ];
    }
}
