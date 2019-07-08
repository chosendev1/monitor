<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'first_name' => 'string|required|max:50',
            'middle_name' => 'string|nullable|max:50',
            'last_name' => 'string|required|max:50',
            'student_number' => 'string|required|max:20',
            'date_of_birth' => 'string|nullable',
            'physical_address' => 'string|required|max:50',
            'contact_person_names' => 'required|max:'.date("Y"),
            'relationship_to_student' => 'string|required|max:20',
            'contact_person_first_phone_number' => 'string|required|max:15',
            'contact_person_second_phone_number' => 'string|required|max:15',
            'contact_person_email_address' => 'string|nullable|max:100',
            'date_of_registration' => 'date|required',
        ];
    }
}
