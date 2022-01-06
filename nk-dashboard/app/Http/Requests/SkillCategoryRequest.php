<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillCategoryRequest extends FormRequest
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
            'name' => 'required|regex:/^[a-zA-Z\s]+$/|min:3|max:100'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Please enter category name.',
            'name.regex' => 'Numbers or special characters are not allowed.',
            'name.min' => 'Please enter at least 3 characters.',
            'name.max' => 'Please enter less than 100 characters.'
        ];
    }
}