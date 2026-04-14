<h1>Superheroes</h1>
<a href="{{ url('/superheroes/create') }}">Crear Nuevo Héroe</a>

<table border="1" style="width:100%; text-align:left; margin-top:20px;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Real Name</th>
            <th>Gender</th>
            <th>Universo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($superheroes as $hero)
        <tr>
            <td>{{$hero->id}}</td>
            <td>{{$hero->name}}</td>
            <td>{{$hero->real_name}}</td>
            <td>{{$hero->gender}}</td>
            <td>{{$hero->universe->universe ?? 'Sin Universo'}}</td>
            <td>
                <a href="{{ route('superheroes.edit', $hero->id) }}">Editar</a>
                
                <form action="{{ route('superheroes.destroy', $hero->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>