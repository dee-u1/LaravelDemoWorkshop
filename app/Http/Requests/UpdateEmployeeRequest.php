<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
            'firstName'=>'required',
            'lastName' => 'required',
            'deptcode' => 'required',
            'position' => 'required'
        ];
    }

    public function messages(){
        return [
            'firstName.required' => 'First Name cannot be blank',
            'lastName.required' => 'Last Name cannot be blank',
            'deptcode.required' => 'Department cannot be blank',
            'position.required' => 'Position cannot be blank'
        ];
    }
}
