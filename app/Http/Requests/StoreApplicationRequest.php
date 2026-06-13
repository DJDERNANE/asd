<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApplicationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            // Student fields
            'name'           => ['required', 'string', 'max:255'],
            'birth_date'     => ['required', 'date', 'before:today'],
            'phone'          => ['required', 'string', 'max:20'],
            'wilaya'         => ['required', 'string', 'max:255'],
            'university'     => ['required', 'string', 'max:255'],
            'study_level'    => ['required', 'string', 'max:255'],
            'field_of_study' => ['required', 'string', 'max:255'],

            // Application fields
            'scholarship_id' => ['required', 'exists:scholarships,id'],
            'notes'          => ['nullable', 'string', 'max:1000'],
        ];
    }
}
