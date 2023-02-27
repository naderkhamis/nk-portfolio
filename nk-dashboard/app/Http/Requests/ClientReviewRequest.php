<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientReviewRequest extends FormRequest
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
            'name' => 'required|regex:/^[a-zA-Z\s]+$/|min:3|max:100',
            'image' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048',
            'company' => 'required|regex:/^[a-zA-Z0-9\s]+$/|min:3|max:100',
            'date' => 'required|date|before:tomorrow',
            'review' => 'required|string|min:100|max:500'
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
            'name.regex' => 'Numbers or special characters are not allowed.',
            'name.min' => 'Please enter at least 3 characters.',
            'name.max' => 'Please enter less than 100 characters.',
            'image.required' => 'Please select an image or logo.',
            'image.image' => 'Please upload an image file (jpg,jpeg,png,svg).',
            'image.mimes' => 'You\'re allowed to upload these Ext. (jpg,jpeg,png,svg).',
            'image.max' => 'Image is too large, select image less than 2MB.',
            'company.required' => 'Please enter your company name.',
            'company.regex' => 'Special characters are not allowed.',
            'company.min' => 'Please enter at least 3 characters.',
            'company.max' => 'Please enter less than 100 characters.',
            'date.required' => 'Please select a date.',
            'date.date' => 'Please enter a valid date format.',
            'date.before' => 'Please select a date before tomorrow.',
            'review.required' => 'Please enter client\'s feedback.',
            'review.string' => 'Special characters are not allowed.',
            'review.min' => 'Please enter at least 100 characters.',
            'review.max' => 'Please enter less than 500 characters.'
        ];
    }
}
