<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCandidateRequest extends FormRequest
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
            'bps_code' => [
                'required',
                'string',
                'max:6',
                Rule::unique('candidates', 'bps_code')->ignore($this->candidate)
            ],
            'kemendagri_code' => [
                'required',
                'string',
                'max:6',
                Rule::unique('candidates', 'kemendagri_code')->ignore($this->candidate)
            ],
            'kemantren' => ['required', 'string', 'max:255'],
            'jss_users' => ['required', 'integer', 'min:0'],
            'wifi_count' => ['required', 'integer', 'min:0'],
            'population_density' => ['required', 'integer', 'min:0'],
            'self_funding' => ['required', 'integer', 'min:0'],
        ];
    }
}
