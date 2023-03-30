<?php

namespace App\Http\Requests\Customer;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'employeid' => 'required',
            'customername' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'status' => 'required',

        ];
    }

    public function messages(): array
    {
        return [
            'employeid.required' => 'Vui lòng nhập Customername',
            'customername.required' => 'Vui lòng nhập Customername',
            'address.required' => 'Vui lòng nhập Address',
            'phone.required' => 'Vui lòng nhập Phone',
            'email.required' => 'Vui lòng nhập Mail',
            'status.required' => 'Vui lòng chọn Status',
            
        ];
    }
}