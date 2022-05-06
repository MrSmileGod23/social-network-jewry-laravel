<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'first_name' => ['required','regex:/^[a-zA-Zа-яА-Я]+$/i'],
            'last_name' => ['required','regex:/^[a-zA-Zа-яА-Я]+$/i'],
            'gender' => ['required'],
        ];
    }
}
