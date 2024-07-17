<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'reference' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
