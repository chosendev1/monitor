<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeacherRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'string|required|max:20',
            'first_name' => 'string|required|max:50',
            'middle_name' => 'string|nullable|max:50',
            'last_name' => 'string|required|max:50',
            'teacher_number' => 'string|required|max:20',
            'date_of_birth' => 'string|nullable',
            'maritual_status' => 'string|required|max:10',
            'religion' => 'string|required|max:30',
            'physical_address' => 'string|required|max:50',
            'first_phone_number' => 'string|required|max:15',
            'second_phone_number' => 'string|required|max:15',
            'email_address' => 'string|nullable|max:100',
            'date_of_registration' => 'date|required',
            'qualifications' => 'string|required',
            'subjects_taught' => 'string|required',
        ];
    }
}
