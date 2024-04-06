<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfessionalInfoFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'user' => ['required', 'integer', 'exists:users,id'],
            'job_title' => ['required', 'string'],
            'company' => ['required', 'string'],
            'competence' => ['nullable', 'string'],
            'languages' => ['nullable', 'string'],
            'experience' => ['nullable', 'string'],
        ];
    }
}
