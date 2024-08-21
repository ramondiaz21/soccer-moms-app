<!-- resources/views/ligas/edit.blade.php -->

<h1>Editar Liga: {{ $liga->nombre }}</h1>

<form action="{{ route('ligas.update', $liga->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ old('nombre', $liga->nombre) }}" required><br>

    <label>Estado:</label>
    <input type="text" name="estado" value="{{ old('estado', $liga->estado) }}" required><br>

    <label>Ciudad:</label>
    <input type="text" name="ciudad" value="{{ old('ciudad', $liga->ciudad) }}" required><br>

    <label>Encargado:</label>
    <input type="text" name="encargado" value="{{ old('encargado', $liga->encargado) }}" required><br>

    <label>Teléfono:</label>
    <input type="text" name="telefono" value="{{ old('telefono', $liga->telefono) }}" required><br>

    <button type="submit">Actualizar</button>
</form>
