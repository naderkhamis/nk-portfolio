<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSocialAccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'link' => 'required|url|min:15|max:255',
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
            'link.required' => 'Please enter project url.',
            'link.url' => 'Please enter a valid url.',
            'link.min' => 'Please enter at lease 15 character.',
            'link.max' => 'Please enter less than 255 character.',
        ];
    }
}
