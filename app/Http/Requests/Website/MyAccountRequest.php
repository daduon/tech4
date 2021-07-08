<?php

namespace App\Http\Requests\Website;

use Illuminate\Foundation\Http\FormRequest;

class MyAccountRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->guard('student')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:students,id,'.auth()->guard('student')->user()->id],
            'phone' => ['required', 'string', 'max:255', 'unique:students,id,'.auth()->guard('student')->user()->id],
            'password' => ['nullable','string', 'min:6','regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9#?!@$%^&*-]).{6,}$/'],
            'password_confirmation' => ['same:password'],
        ];
    }
}
