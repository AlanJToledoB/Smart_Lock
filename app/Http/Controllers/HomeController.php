<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InputOrOutput;

class HomeController extends Controller
{
    public function index()
    {
        // Obtener todos los registros de la tabla 'input_or_output'
        $inputOrOutputs = InputOrOutput::all();

        return view('index', compact('inputOrOutputs'));
    }
}
