<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class AgendaRequest extends FormRequest
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
            'caption' => 'required|string|max:512',
            'description' => 'nullable|string',
            'location' => 'required|string|max:255',
            'views' => 'nullable|integer',
            'image' => 'nullable|image|max:1024|mimes:jpeg,png,jpg,gif,svg',
            'schedule' => 'nullable|string|max:191',
            'dihadiri' => 'nullable|string',
        ];
    }
}
