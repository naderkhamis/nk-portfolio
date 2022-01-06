<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeveloperRequest extends FormRequest
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
            'name' => 'required|regex:/^[a-zA-Z\s]+$/|min:3|max:255',
            'nationality' => 'required|regex:/^[a-zA-Z\s]+$/|min:5|max:50',
            'date_of_birth' => 'required|date|before:tomorrow',
            'experience' => 'required|numeric|min:1|max:5',
            'image' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048',
            'introduction' => 'required|string|min:100|max:500'
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
            'name.required' => 'Please enter a name.',
            'name.regex' => 'Numbers or special characters are not allowed.',
            'name.min' => 'Please enter at least 3 characters.',
            'name.max' => 'Please enter less than 255 characters.',
            'nationality.required' => 'Please enter a nationality.',
            'nationality.regex' => 'Numbers or special characters are not allowed.',
            'nationality.min' => 'Please enter at least 5 characters.',
            'nationality.max' => 'Please enter less than 50 characters.',
            'date_of_birth.required' => 'Please select a date.',
            'date_of_birth.date' => 'Please enter a valid date format.',
            'date_of_birth.before' => 'Please select a date before tomorrow.',
            'experience.required' => 'Please enter a number.',
            'experience.numeric' => 'Please enter a positive number.',
            'experience.min' => 'Please enter from 1 to 20.',
            'experience.max' => 'Please enter a number less than 20.',
            'image.required' => 'Please select an image.',
            'image.image' => 'Please upload an image file (jpg,jpeg,png,svg).',
            'image.mimes' => 'You\'re allowed to upload these Ext. (jpg,jpeg,png,svg).',
            'image.max' => 'Image is too large, select image less than 2MB.',
            'introduction.required' => 'Please enter an intro about the developer.',
            'introduction.string' => 'Special characters are not allowed.',
            'introduction.min' => 'Please enter at least 100 characters.',
            'introduction.max' => 'Please enter less than 500 characters.'
        ];
    }
}