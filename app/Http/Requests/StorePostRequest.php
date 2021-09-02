<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|min:10',
            'category' => 'required',
            'description' => 'required|min:20',
            'content' => 'required|min:20',
            'color' => 'required',
            'size' => 'required',
            'ageRange' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Vui lòng nhập tiêu đề.',
            'title.min' => 'Tiêu đề phải có ít nhất 10 ký tự.',
            'category.required' => 'Vui lòng chọn danh mục.',
            'color.required' => 'Vui lòng chọn màu sắc.',
            'size.required' => 'Vui lòng chọn size.',
            'ageRange.required' => 'Vui lòng chọn độ tuổi.',
            'description.required' => 'Vui lòng nhập mô tả quà tặng',
            'description.min' => 'Mô tả quà tặng có ít nhất 25 ký tự.',
            'content.required' => 'Vui lòng nhập mô tả chi tiết quà tặng',
            'content.min' => 'Mô tả chi tiết quà tặng có ít nhất 20 ký tự.',
        ];
    }
}
