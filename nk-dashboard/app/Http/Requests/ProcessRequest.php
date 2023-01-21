<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProcessRequest extends FormRequest
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
            'name' => 'required|regex:/^[a-zA-Z\s]+$/|min:3|max:50',
            'icon' => 'required|alpha-dash|min:3|max:20',
            'description' => 'required|string|min:100|max:500',
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
            'name.required' => 'Please enter process name.',
            'name.regex' => 'Numbers and special characters are not allowed.',
            'name.min' => 'Please enter at least 3 characters.',
            'name.max' => 'Please enter less than 50 characters.',
            'icon.required' => 'Please enter icon name.',
            'icon.regex' => 'Numbers and special characters are not allowed.',
            'icon.min' => 'Please enter at least 3 characters.',
            'icon.max' => 'Please enter less than 20 characters.',
            'description.required' => 'Please enter description name.',
            'description.string' => 'Special characters are not allowed.',
            'description.min' => 'Please enter at least 100 characters.',
            'description.max' => 'Please enter less than 500 characters.'
        ];
    }
}
