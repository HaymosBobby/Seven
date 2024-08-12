<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicalTestRequest extends FormRequest
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
            'lab_tests' => [ 'required', 'array'],
            'lab_tests.*.id' => ['exists:medical_test_categories,id'],
            'lab_tests.*.values' => ['required', 'array'],
            'lab_tests.*.values.*' => ['exists:medical_tests,id'],
            'ct_scan' => ['required', 'string'],
            'mri' => ['required', 'string']
        ];
    }
}
