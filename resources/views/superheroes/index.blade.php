<h1>Superheroes</h1>

<a href="/superheroes/create">Create Superhero</a>

<table border="1">

<tr>
<th>Name</th>
<th>Real Name</th>
<th>Gender</th>
</tr>

@foreach($heroes as $hero)

<tr>
<td>{{$hero->name}}</td>
<td>{{$hero->real_name}}</td>
<td>{{$hero->gender}}</td>
</tr>

@endforeach

</table>