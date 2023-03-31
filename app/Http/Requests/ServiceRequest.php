<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules()
    {
        $rules = [
            'name' => 'required',
            'image' => 'required',
            'description' => 'required'
        ];
        return $rules;
    }

    public function messages()
    {
        return [
            'name.required'=>'Vui lòng nhập tên.',
            'image.required'=>'Vui lòng chọn ảnh.',
            'description.required' => 'Vui lòng nhap mô tả',
        ];
    }
}
