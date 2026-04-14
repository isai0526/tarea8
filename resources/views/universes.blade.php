<h1>Universes</h1>
<a href="{{ url('/universes/create') }}">Crear Nuevo Universo</a>

<table border="1" style="width:100%; text-align:left; margin-top:20px;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Company</th>
            <th>Age</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($universes as $universe)
        <tr>
            <td>{{$universe->id}}</td>
            <td>{{$universe->universe}}</td>
            <td>{{$universe->company}}</td>
            <td>{{$universe->age}}</td>
            <td>
                <a href="{{ route('universes.edit', $universe->id) }}">Editar</a>

                <form action="{{ route('universes.destroy', $universe->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('¿Borrar este universo?')">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>