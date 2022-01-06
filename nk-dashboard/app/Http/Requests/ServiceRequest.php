<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'image' => 'required|image|mimes:jpg,jpeg,png,svg|max:2048',
            'dev_id' => 'required',
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
            'name.required' => 'Please enter service name.',
            'name.regex' => 'Numbers and special characters are not allowed.',
            'name.min' => 'Please enter at least 3 characters.',
            'name.max' => 'Please enter less than 50 characters.',
            'icon.required' => 'Please enter icon name.',
            'icon.regex' => 'Numbers and special characters are not allowed.',
            'icon.min' => 'Please enter at least 3 characters.',
            'icon.max' => 'Please enter less than 20 characters.',
            'image.required' => 'Please select an image.',
            'image.image' => 'Please upload an image file (jpg,jpeg,png,svg).',
            'image.mimes' => 'You\'re allowed to upload these Ext. (jpg,jpeg,png,svg).',
            'image.max' => 'Image is too large, select image less than 2MB.',
            'dev_id.required' => 'Please select a developer.',
            'dev_id.numeric' => 'Developer id must be a number.',
            'description.required' => 'Please enter description name.',
            'description.regex' => 'Special characters are not allowed.',
            'description.min' => 'Please enter at least 100 characters.',
            'description.max' => 'Please enter less than 500 characters.'
        ];
    }
}