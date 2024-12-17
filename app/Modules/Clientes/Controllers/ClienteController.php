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

    public function create()
    {
        return view('Clientes::create');
    }

    public function store()
    {
        Cliente::create(request()->all());
        return redirect()->route('cliente.index');
    }

    public function delete($id) {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->route('cliente.index');
    }

    public function edit($id) {
        $cliente = Cliente::find($id);
        return view('Clientes::edit', compact('cliente'));
    }

    public function update($id) {
        $cliente = Cliente::find($id);
        $cliente->update(request()->all());
        return redirect()->route('cliente.index');
    }

    public function resetClientes()
    {
        Cliente::truncate();
        return response()->json(['message' => 'Todos los clientes han sido eliminados y el auto-incremento reiniciado']);
    }
}