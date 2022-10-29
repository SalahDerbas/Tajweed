<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGrades extends FormRequest
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
            'Name' => 'required|unique:grades,name->ar,'.$this->id,
            'Name_en' => 'required|unique:grades,name->en,'.$this->id,
        ];
    }

    public function messages()
    {
        return [
            'Name.required' => 'This is required',
            'Name.unique' => 'This is unique',
            'Name_en.required' =>'This is required',
            'Name_en.unique' => 'This is unique',
        ];
    }
}
