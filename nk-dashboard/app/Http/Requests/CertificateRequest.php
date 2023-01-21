<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CertificateRequest extends FormRequest
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
            'title' => 'required|regex:/^[a-zA-Z0-9\s]+$/|min:3|max:100',
            'school' => 'required|regex:/^[a-zA-Z0-9\s]+$/|min:3|max:100',
            'grade' => 'nullable|alpha_num|min:1|max:20',
            'date' => 'required|date|before:tomorrow',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'description' => 'nullable|string|min:100|max:500'
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
            'title.required' => 'Please enter a certificate title.',
            'title.regex' => 'Special characters are not allowed.',
            'title.min' => 'Please enter at least 3 characters.',
            'title.max' => 'Please enter less than 100 characters.',
            'school.required' => 'Please enter a school name.',
            'school.regex' => 'Special characters are not allowed.',
            'school.min' => 'Please enter at least 3 characters.',
            'school.max' => 'Please enter less than 100 characters.',
            'grade.alpha_num' => 'Special characters are not allowed.',
            'grade.min' => 'Please enter at least 1 character.',
            'grade.max' => 'Please enter less than 20 characters.',
            'date.required' => 'Please select a date.',
            'date.date' => 'Please enter a valid date format.',
            'date.before' => 'Please select a date before tomorrow.',
            'image.required' => 'Please select an image.',
            'image.image' => 'Please upload an image file (jpg,jpeg,png,svg).',
            'image.mimes' => 'You\'re allowed to upload these Ext. (jpg,jpeg,png,svg).',
            'image.max' => 'Image is too large, select image less than 2MB.',
            'description.string' => 'Special characters are not allowed.',
            'description.min' => 'Please enter at least 100 characters.',
            'description.max' => 'Please enter less than 500 characters.'
        ];
    }
}
