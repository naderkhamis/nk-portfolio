<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatisticRequest extends FormRequest
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
            'name' => 'required|regex:/^[a-zA-Z0-9\s]+$/|min:3|max:100',
            'count' => 'required|numeric|min:1|max:20',
            'icon' => 'required|alpha-dash|min:3|max:20'
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
            'name.required' => 'Please enter a statistic name.',
            'name.regex' => 'Special characters are not allowed.',
            'name.min' => 'Please enter at least 3 characters.',
            'name.max' => 'Please enter less than 100 character.',
            'count.required' => 'Please enter a statistic count.',
            'count.numeric' => 'Statistic count must be a number.',
            'count.min' => 'Please enter 1 or more.',
            'count.max' => 'Please enter less than number 20.',
            'icon.required' => 'Please enter a statistic icon.',
            'icon.alpha-dash' => 'Special characters and spaces are not allowed.',
            'icon.min' => 'Please enter at least 3 characters.',
            'icon.max' => 'Please enter less than 20 character.'
        ];
    }
}
