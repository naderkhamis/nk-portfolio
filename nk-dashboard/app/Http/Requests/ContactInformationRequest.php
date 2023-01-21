<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactInformationRequest extends FormRequest
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
            'address' => 'required|string|min:10|max:100',
            'email' => 'required|unique:contact_information',
            'phone' => 'required|unique:contact_information|max:15'
        ];
    }

    // TODO: REVIEW THE VALIDATION RULES
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'address.required' => 'Please enter an address.',
            'address.string' => 'Special characters are not allowed.',
            'address.min' => 'Please enter at least 10 characters.',
            'address.max' => 'Please enter less than 100 character.',
            'email.required' => 'Please enter an email.',
            // 'email.email' => 'Please enter a valid email.',
            'email.unique' => 'This email already exist.',
            // 'email.min' => 'Please enter at least 10 characters.',
            // 'email.max' => 'Please enter less than 100 character.',
            'phone.required' => 'Please enter phone number.',
            // 'phone.digits' => 'Please enter a valid phone number.',
            'phone.unique' => 'This phone already exist.',
            // 'phone.min' => 'Please enter at least 10 numbers.',
            'phone.max' => 'Please enter less than 15 number.'
        ];
    }
}
