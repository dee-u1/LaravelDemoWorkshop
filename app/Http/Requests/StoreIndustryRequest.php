<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIndustryRequest extends FormRequest
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
            'industryname'=>'required',
            'industrydescription' => 'required'
        ];
    }

    public function messages(){
        return [
            'industryname.required' => 'Industry Name cannot be blank',
            'industrydescription.required' => 'Industry Description cannot be blank'
        ];
    }
}
