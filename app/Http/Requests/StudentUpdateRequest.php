<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            "name" => "required",
            "lastname" => "required",
            "dni" => "required|numeric",
            "email" => "required",
            "phone" => "required|numeric"
        ];
    }

    public function attributes()
    {
        return [
            //
            "name" => "nombre",
            "lastname" => "apellido",
            "dni" => "dni",
            "email" => "correo",
            "phone" => "telefono"
        ];
    }
}
