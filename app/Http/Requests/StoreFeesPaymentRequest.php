<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFeesPaymentRequest extends FormRequest
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
            'class_id' => 'numeric|required',
            'academic_year' => 'numeric|required|max:4',
            'amount_paid' => 'numeric|required',
            'amount_paid' => 'numeric|required',
        ];
    }
}
