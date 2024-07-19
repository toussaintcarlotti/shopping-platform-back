<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'last_name' => ['required'],
            'first_name' => ['required'],
            'email' => ['required', 'email:strict', 'max:254', 'unique:clients,email'],
            'password' => ['required'],
        ];
    }
}
