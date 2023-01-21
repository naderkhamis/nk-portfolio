<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SkillRequest extends FormRequest
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
            'name' => 'required|regex:/^[a-zA-Z0-9\s]+$/|min:3|max:50',
            'category' => 'required|numeric',
            'performance' => 'required|numeric|between:1,100',
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
            'name.required' => 'Please enter skill name.',
            'name.regex' => 'Special characters are not allowed.',
            'name.min' => 'Please enter at least 3 characters.',
            'name.max' => 'Please enter less than 50 characters.',
            'category.required' => 'Please select a category.',
            'category.numeric' => 'Category id must be a number.',
            'performance.required' => 'Please enter performance rate.',
            'performance.numeric' => 'Performance id must be a number.',
            'performance.between' => 'Please enter a number between 1 to 100.'
        ];
    }
}
