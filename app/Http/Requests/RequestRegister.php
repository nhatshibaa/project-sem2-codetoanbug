<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestRegister extends FormRequest
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
            'fullName' => 'required|max:50',
            'idNumber' => 'required|min:10|max:12',
            'age' => 'required',
            'address' => 'required',
            'city' => 'required',
            'district' => 'required',
            'ward' => 'required',
            'username' => 'required|min:5|max:25',
            'password' => 'required|min:6|max:9',
            'phone' => 'required|size:10',
        ];
    }
    public function messages()
    {
        return [
            'fullName.required' => 'Vui lòng nhập họ và tên.',
            'fullName.max' => 'Tên phải nhỏ hơn 50 ký tự.',
            'idNumber.required' => 'Vui lòng nhập số CMND.',
            'idNumber.min' => 'Số CMND phải lớn hơn 10 ký tự.',
            'idNumber.max' => 'Số CMND phải nhỏ hơn 12 ký tự.',
            'age.required' => 'Vui lòng nhập tuổi.',
            'address.required' => 'Vui lòng nhập địa chỉ cụ thể.',
            'city.required' => 'Vui lòng chọn thành phố.',
            'district.required' => 'Vui lòng chọn quận,huyện.',
            'ward.required' => 'Vui lòng chọn xã,phường.',
            'username.required' => 'Vui lòng nhập tên tài khoản.',
            'username.min' => 'Tên tài khoản phải lớn hơn 5 ký tự.',
            'username.max' => 'Tên tài khoản phải nhỏ hơn 25 ký tự.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải lớn hơn 6 ký tự.',
            'password.max' => 'Mật khẩu phải nhỏ hơn 9 ký tự.',
            'phone.required' => 'Vui lòng nhập số điện thoại.',
            'phone.size' => 'Số điện thoại phải có 10 ký tự.',
        ];
    }
}
