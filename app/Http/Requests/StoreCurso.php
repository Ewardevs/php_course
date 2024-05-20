<?php

namespace App\Http\Requests;

use DragonCode\Contracts\Cashier\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class StoreCurso extends FormRequest
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

            "nombre" => "required",
            "descripcion" => "required",
            "categoria" => "required",
            "slug" => "required|unique:cursos"

        ];
    }

    public function messages(): array
    {
        return [
            "descripcion.required" => "La descripcion es obligatoria"
        ];
    }

    public function attributes(): array
    {
        return [
            "nombre" => "nombre del curso"
        ];
    }
}
