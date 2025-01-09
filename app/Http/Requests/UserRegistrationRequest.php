<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UserRegistrationRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'token' => 'required|string', // @TODO: add little token shared on auth0 to secure the call
            'email' => 'required|string|email|max:255',
            'name' => 'required|string|max:255',
            'nickname' => 'required|string|max:255',
            'picture' => 'required|string',
            'sub' => 'required|string|max:255',
        ];
    }
}
