<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar cliente</title>
</head>
<body>
    <form action="{{ route('cliente.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $cliente->nombre }}">
        <br>
        <label for="numero_de_telefono">Teléfono:</label>
        <input type="text" name="numero_de_telefono" value="{{ $cliente->numero_de_telefono }}">
        <br>
        <label for="edad">Edad:</label>
        <input type="text" name="edad" value="{{ $cliente->edad }}">
        <br>
        <label for="sexo">Sexo:</label>
        <select name="sexo">
            <option value="M" @if($cliente->sexo == 'M') selected @endif>Hombre</option>
            <option value="F" @if($cliente->sexo == 'F') selected @endif>Mujer</option>
        </select>
        <br>
        <label for="estatus">Estatus:</label>
        <select name="estatus">
            <option value=1 @if($cliente->estatus == 1) selected @endif>Activo</option>
            <option value=0 @if($cliente->estatus == 0) selected @endif>Inactivo</option>
        </select>
        <br>
        <label for="calle">Calle:</label>
        <input type="text" name="calle" value="{{ $cliente->calle }}">
        <br>
        <label for="numero_exterior">Número exterior:</label>
        <input type="text" name="numero_exterior" value="{{ $cliente->numero_exterior }}">
        <br>
        <label for="numero_interior">Número interior:</label>
        <input type="text" name="numero_interior" value="{{ $cliente->numero_interior }}">
        <br>
        <label for="ciudad">Ciudad:</label>
        <input type="text" name="ciudad" value="{{ $cliente->ciudad }}">
        <br>
        <label for="estado">Estado:</label>
        <input type="text" name="estado" value="{{ $cliente->estado }}">
        <br>
        <button type="submit">Guardar</button>
</body>
</html>