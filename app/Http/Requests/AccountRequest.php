<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'parent_id' => 'numeric|required',
            'account_name' => 'string|required',
            'account_code' => 'string|required',
            'account_type' => 'string|required',
            'account_balance' => 'numeric|required',
        ];
    }
}
