<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
    public function rules(): array
    {
        $rules =  [
            'name'=>'required',
            'description'=>'required',
            'image'=>'required',
            'category_id'=>'required',
            'content1' => 'required',
        ];
        return $rules;
    }

    public function messages()
    {
        return [
            'name.required'=>'Vui lòng nhập tên.',
            'description.required'=>'Vui lòng nhập mô tả.',
            'content1.required' => 'Vui lòng nhập nội dung.',
            'image.required'=>'Vui lòng chọn ảnh.',
            'image.jpg'=>'Vui lòng chọn ảnh có đuôi jpg, jpeg, gif, svg.',
            'image.jpeg'=>'Vui lòng chọn ảnh có đuôi jpg, jpeg, gif, svg.',
            'image.gif'=>'Vui lòng chọn ảnh có đuôi jpg, jpeg, gif, svg.',
            'image.svg'=>'Vui lòng chọn ảnh có đuôi jpg, jpeg, gif, svg.',
            'image.max'=>'Vui lòng chọn ảnh kích thước nhỏ hơn.',
            'category_id.required'=>'Vui lòng chọn category.'
        ];
    }
}
