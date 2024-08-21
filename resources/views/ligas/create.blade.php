<!-- resources/views/ligas/create.blade.php -->
<h1>Crear Nueva Liga</h1>

<form action="{{ route('ligas.store') }}" method="POST">
    @csrf
    <label>Nombre:</label>
    <input type="text" name="nombre" required><br>

    <label>Estado:</label>
    <input type="text" name="estado" required><br>

    <label>Ciudad:</label>
    <input type="text" name="ciudad" required><br>

    <label>Encargado:</label>
    <input type="text" name="encargado" required><br>

    <label>Teléfono:</label>
    <input type="text" name="telefono" required><br>

    <button type="submit">Guardar</button>
</form>
