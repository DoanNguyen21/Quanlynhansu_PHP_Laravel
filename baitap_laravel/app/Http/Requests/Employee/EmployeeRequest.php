<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
        return [
            'fullname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'username' => 'required',
            'password' => 'required',
            'confirmpassword' => 'required',
            // 'avatar' => 'required',
            'roles' => 'required',


        ];
    }

    public function messages(): array
    {
        return [
            'fullname.required' => 'Vui lòng nhập Fullname',
            'phone.required' => 'Vui lòng nhập Phone',
            'email.required' => 'Vui lòng nhập Mail',
            'address.required' => 'Vui lòng nhập Address',
            'username.required' => 'Vui lòng nhập Username',
            'password.required' => 'Vui lòng nhập Password',
            'confirmpassword.required' => 'Vui lòng nhập Confirmpassword',
            // 'avatar.required' => 'Vui lòng nhập Avatar',
            'roles.required' => 'Vui lòng chọn Roles',
            
        ];
    }
}
