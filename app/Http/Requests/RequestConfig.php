<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestConfig extends FormRequest
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
            //
            'policy-page' => 'required|min:500',
            'about-us' => 'required|min:500',
            'Title-Page' => 'required',
            'description' => 'required',
            'keyword' => 'required',
        ];

    }

    public function messages()
    {
        return [
            'policy-page.required' => 'Vui lòng nhập policy.',
            'policy-page.min' => 'Vui lòng nhập ít nhất 500 kí tự .',
            'about-us.required' => 'Vui lòng nhập about-us.',
            'about-us.min' => 'Vui lòng nhập ít nhất 500 kí tự .',
            'Title-Page.required' => 'Vui lòng nhập title.',
            'description.required' => 'Vui lòng nhập description.',
            'keyword.required' => 'Vui lòng nhập keyword.',
        ];
    }
}

