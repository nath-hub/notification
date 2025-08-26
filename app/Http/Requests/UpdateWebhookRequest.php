<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWebhookRequest extends FormRequest
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
            'url' => 'sometimes|url',
            'event_type' => 'sometimes|string|max:255',
            'secret' => 'sometimes|string|min:16',
            'is_active' => 'boolean',
            'max_attempts' => 'integer|min:1|max:10'
        ];
    }
}
