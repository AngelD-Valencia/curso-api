<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseSaveRequest extends FormRequest
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
            "description" =>"required",
            "duration" =>"required|numeric",
            "category_id" =>"required|exists:categories,id"
        ];
    }

    public function attributes()
    {
        return [
            //
            "name" => "nombre",
            "description" =>"descripcion",
            "duration" =>"duracion",
            "category_id" =>"Categoria"
        ];
    }
}
