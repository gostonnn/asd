<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentData extends FormRequest
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
            "name" => "required|min:6",
            "email" => "required",
            "phone" => "required" 
        ];
    }

    public function messages() {

        return [
            "name.required" => "Név kötelező",
            "email.required" => "Email kötelező",
            "phone.required" => "Telefonszám kötelező",
            "name.min" => "Név minimum 6 karakter"
        ];
    }
}
