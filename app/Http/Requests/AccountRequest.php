<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'account_type_id' => 'required',
            'name' => 'nullable',
            'account_name' => 'required',
            'email' => 'required|email:rfc,dns',
            'password' => 'required',
        ];
    }
}
