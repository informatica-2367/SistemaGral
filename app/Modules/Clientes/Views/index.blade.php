<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
</head>
<body>
    <h1>Lista de Clientes</h1>

    <a href="{{ route('cliente.create') }}">Agregar cliente</a>

    <table border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Estatus</th>
                <th>Dirección</th>
                <th>Ciudad</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->nombre }}</td>
                    <td>{{ $cliente->numero_de_telefono }}</td>
                    <td>{{ $cliente->edad }}</td>
                    <td>{{ $cliente->sexo }}</td>
                    <td>
                        @if($cliente->estatus == 1)
                            {{'Activo'}}
                        @else
                            {{'Inactivo'}}
                        @endif
                    </td>
                    <td>{{ $cliente->calle }} {{ $cliente->numero_exterior }} {{ $cliente->numero_interior }}</td>
                    <td>{{ $cliente->ciudad }}</td>
                    <td>{{ $cliente->estado }}</td>
                    <td>
                        <form action="{{ route('cliente.delete', $cliente->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('cliente.edit', $cliente->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
