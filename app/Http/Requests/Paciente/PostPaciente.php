<?php

namespace App\Http\Requests\Paciente;

use Illuminate\Foundation\Http\FormRequest;

class PostPaciente extends FormRequest
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
            'nombre' => 'required|min:3|max:150',
            'edad' => 'required',
            'genero' => 'required',
            'fecha_contagio' => 'required',
            'nivel_educativo' => 'required',
            'created_by' => 'required'
        ];
    }
}
