<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSettingRequest extends FormRequest
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
            'registration_enabled' => ['sometimes', 'boolean'],
            'seo_title' => ['sometimes', 'required', 'string', 'max:255'],
            'seo_description' => ['sometimes', 'required', 'string', 'max:500'],
            'seo_keywords' => ['sometimes', 'required', 'string', 'max:500'],
            'seo_author' => ['sometimes', 'required', 'string', 'max:255'],
        ];
    }
}
