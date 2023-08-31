<?php

namespace App\Http\Controllers;
use App\Models\InputOrOutput;

use Illuminate\Http\Request;

class EntradaSalidaController extends Controller
{
    public function index()
    {
        // Obtener todos los registros de la tabla 'input_or_output'
        $inputOrOutputs = InputOrOutput::all();

        return view('tablas.entradaySalida', compact('inputOrOutputs'));
    }
}
