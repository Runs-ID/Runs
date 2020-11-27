<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IndexRegister extends FormRequest
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
            'user' => 'required|min:3|max:20',
            'token' => 'required|min:3|max:15',
            'password' =>'required|min:3|max:20',
            'email' => 'required|min:3|max:100'
        ];
    }
}
