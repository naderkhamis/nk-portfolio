<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientOpinionRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:100',
            'image' => 'image|mimes:jpg,jpeg,png,svg|max:2048',
            'company' => 'required|string|min:3|max:100',
            'date' => 'required|date|before:tomorrow',
            'opinion' => 'required|string|min:100|max:255'
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
            'name.required' => 'Please enter client\'s name.',
            'name.string' => 'Numbers or special characters are not allowed.',
            'name.min' => 'Please enter at least 3 characters.',
            'name.max' => 'Please enter less than 100 characters.',
            // 'image.required' => 'Please select an image or logo.',
            'image.image' => 'Please upload an image file (jpg,jpeg,png,svg).',
            'image.mimes' => 'You\'re allowed to upload these Ext. (jpg,jpeg,png,svg).',
            'image.max' => 'Image is too large, select image less than 2MB.',
            'company.required' => 'Please enter your company name.',
            'company.string' => 'Special characters are not allowed.',
            'company.min' => 'Please enter at least 3 characters.',
            'company.max' => 'Please enter less than 100 characters.',
            'date.required' => 'Please select a date.',
            'date.date' => 'Please enter a valid date format.',
            'date.before' => 'Please select a date before tomorrow.',
            'opinion.required' => 'Please enter client\'s feedback.',
            'opinion.string' => 'Special characters are not allowed.',
            'opinion.min' => 'Please enter at least 100 characters.',
            'opinion.max' => 'Please enter less than 500 characters.'
        ];
    }
}