<?php

namespace App\Http\Requests;

use App\Enums\VariableType;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;
use Repo\SawEngine\Enums\AttributeType;
use Illuminate\Foundation\Http\FormRequest;

class StoreMetricRequest extends FormRequest
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
            'variable' => [
                'required',
                'string',
                new Enum(VariableType::class),
                Rule::unique('metrics', 'variable')
            ],
            'description' => ['nullable', 'string', 'max:1000'],
            'type' => ['required', new Enum(AttributeType::class)],
            'weight' => ['required', 'numeric', 'min:0', 'max:999.99'],
        ];
    }
}
