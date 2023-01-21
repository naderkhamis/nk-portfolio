<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CareerRequest extends FormRequest
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
            'title' => 'required|regex:/^[a-zA-Z\s]+$/|min:3|max:255',
            'company' => 'required|string|min:3|max:100',
            'from' => 'required|date|before:tomorrow',
            'to' => 'required_if:status,0|nullable|before:tomorrow|after:from',
            'status' => 'required|boolean',
            'description' => 'required|regex:/^[a-zA-Z0-9\s]+$/|min:100|max:500'
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
            'title.required' => 'Please enter your job title.',
            'title.regex' => 'Numbers or special characters are not allowed.',
            'title.min' => 'Please enter at least 3 characters.',
            'title.max' => 'Please enter less than 255 characters.',
            'company.required' => 'Please enter your company name.',
            'company.string' => 'Numbers or special characters are not allowed.',
            'company.min' => 'Please enter at least 3 characters.',
            'company.max' => 'Please enter less than 100 characters.',
            'from.required' => 'Please select a date.',
            'form.date' => 'Please enter a valid date format.',
            'from.before' => 'Please select a date before tomorrow.',
            'to.required_if' => 'Please select a date.',
            'to.before' => 'Please select a date before tomorrow.',
            'to.after' => 'Please select a date after From Date.',
            'status.required' => 'Please select a status.',
            'status.boolean' => 'Only true or false are allowed.',
            'description.required' => 'Please enter your job description.',
            'description.regex' => 'Special characters are not allowed.',
            'description.min' => 'Please enter at least 100 characters.',
            'description.max' => 'Please enter less than 500 characters.'
        ];
    }
}
