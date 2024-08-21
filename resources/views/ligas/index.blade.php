<table>
    <tr>
        <th>Nombre</th>
        <th>Estado</th>
        <th>Ciudad</th>
        <th>Encargado</th>
        <th>Teléfono</th>
        <th>Acciones</th>
    </tr>
    @foreach($ligas as $liga)
    <tr>
        <td>{{ $liga->nombre }}</td>
        <td>{{ $liga->estado }}</td>
        <td>{{ $liga->ciudad }}</td>
        <td>{{ $liga->encargado }}</td>
        <td>{{ $liga->telefono }}</td>
        <td>
            <a href="{{ route('ligas.edit', $liga->id) }}">Editar</a>
            <form action="{{ route('ligas.destroy', $liga->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
