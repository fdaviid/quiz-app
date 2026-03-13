<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class questionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'text' => ['required'],
            'hint' => ['required'],
            'difficulty' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
