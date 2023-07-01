<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseUpdateRequest extends FormRequest
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
            "duration" =>"required|numeric",
            "category_id" =>"requerid|exists:categories,id"
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
