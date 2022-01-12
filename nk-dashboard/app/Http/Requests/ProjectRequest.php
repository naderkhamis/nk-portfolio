<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'cat_id' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:2048',
            'url' => 'required|url|min:15|max:255',
            'description' => 'required|string|min:100|max:255',
            'dev_id' => 'nullable|numeric'
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
            'name.required' => 'Please enter a project name.',
            'name.regex' => 'Special characters are not allowed.',
            'name.min' => 'Please enter at least 3 characters.',
            'name.max' => 'Please enter less than 100 character.',
            'cat_id.numeric' => 'Category id must be a number.',
            'image.image' => 'Please upload an image file (jpg,jpeg,png,svg).',
            'image.mimes' => 'You\'re allowed to upload these Ext. (jpg,jpeg,png,svg).',
            'image.max' => 'Image is too large, select image less than 2MB.',
            'url.required' => 'Please enter project url.',
            'url.url' => 'Please enter a valid url.',
            'url.min' => 'Please enter at lease 15 character.',
            'url.max' => 'Please enter less than 255 character.',
            'description.required' => 'Please enter a project description.',
            'description.string' => 'Special characters are not allowed.',
            'description.min' => 'Please enter at least 100 character.',
            'description.max' => 'Please enter less than 255 character.',
            'dev_id.numeric' => 'Developer id must be a number.'
        ];
    }
}
