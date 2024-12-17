<?php

namespace App\Modules\Clientes\Controllers;

use App\Http\Controllers\Controller; // Importa el controlador base
use App\Modules\Clientes\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('Clientes::index', compact('clientes'));
    }
}