<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregar cliente</title>
</head>
<body>
    <form action="{{ route('cliente.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <br>
        <label for="numero_de_telefono">Teléfono:</label>
        <input type="text" name="numero_de_telefono">
        <br>
        <label for="edad">Edad:</label>
        <input type="text" name="edad">
        <br>
        <label for="sexo">Sexo:</label>
        <select name="sexo">
            <option value="M">Hombre</option>
            <option value="F">Mujer</option>
        </select>
        <br>
        <label for="estatus">Estatus:</label>
        <select name="estatus">
            <option value=1>Activo</option>
            <option value=0>Inactivo</option>
        </select>
        <br>
        <label for="calle">Calle:</label>
        <input type="text" name="calle">
        <br>
        <label for="numero_exterior">Número exterior:</label>
        <input type="text" name="numero_exterior">
        <br>
        <label for="numero_interior">Número interior:</label>
        <input type="text" name="numero_interior">
        <br>
        <label for="ciudad">Ciudad:</label>
        <input type="text" name="ciudad">
        <br>
        <label for="estado">Estado:</label>
        <input type="text" name="estado">
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>