<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use App\Http\Requests\Paciente\PostPaciente;
use App\Http\Requests\Paciente\PutPaciente;

class PacienteController extends Controller
{
    public function store(PostPaciente $request)
    {
        $paciente = Paciente::create($request->all());
        return response()->json($paciente);
    }

    public function update(PutPaciente $request, $id)
    {
        $paciente = Paciente::find($id);
        $paciente->update($request->all());
        return response()->json($paciente);
    }

    public function getPacientes()
    {
        $pacientes = Paciente::all();
        return response()->json($pacientes);
    }

    public function getPaciente($id)
    {
        $paciente = Paciente::find($id);
        return response()->json($paciente);
    }

    public function delete($id)
    {
        $paciente = Paciente::find($id);
        $paciente->delete();
        return response()->json($paciente);
    }
}
