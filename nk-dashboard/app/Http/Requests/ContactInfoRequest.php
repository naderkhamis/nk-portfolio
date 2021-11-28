<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactInfoRequest extends FormRequest
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
            'address' => 'string|min:3|max:100',
            'email' => 'email|min:10|max:100',
            'phone' => 'alpha_dash|min:10|max:15'
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
            'address.string' => 'Special characters are not allowed.',
            'address.min' => 'Please enter at least 3 characters.',
            'address.max' => 'Please enter less than 100 characters.',
            'email.email' => 'Please enter a valid E-mail.',
            'email.min' => 'Please enter at least 10 characters.',
            'email.max' => 'Please enter less than 100 characters',
            'phone.alpha_dash' => 'Please enter a valid code and phone number.',
            'phone.min' => 'Please enter at least 10 numbers',
            'phone.max' => 'Please enter less than 15 numbers including code.'
        ];
    }
}