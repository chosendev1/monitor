<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGradeRequest extends FormRequest
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
            'student_id' => 'numeric|required',
            'subject_id' => 'numeric|required',
            'academic_year' => 'year|required',
            'term_id' => 'numeric|required',
            'score' => 'numeric|required|max:3',
        ];
    }
}
