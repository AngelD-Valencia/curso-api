<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionSaveRequest extends FormRequest
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
            "alternative1" => "alternativa1",
            "alternative2" => "alternativa2",
            "alternative3" => "alternativa3",
            "alternative4" => "alternativa4",
            "alternative5" => "alternativa5",
            "exam_id" =>"required|exists:exams,id"
        ];
    }

    public function attributes()
    {
        return [
            //
            "name" => "nombre",
            "alternative1" => "alternativa1",
            "alternative2" => "alternativa2",
            "alternative3" => "alternativa3",
            "alternative4" => "alternativa4",
            "alternative5" => "alternativa5",
            "exam_id" =>"Examen",
        ];
    }
}
