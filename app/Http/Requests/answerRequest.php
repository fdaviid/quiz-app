<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class answerRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'questionId' => ['required', 'exists:questions'],
            'answer' => ['required'],
            'isCorrect' => ['boolean'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
