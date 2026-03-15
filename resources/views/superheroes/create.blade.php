<h1>Create Superhero</h1>

<form method="POST" action="/superheroes">

@csrf

<input name="name" placeholder="Name">

<input name="real_name" placeholder="Real Name">

<input name="gender" placeholder="Gender">

<input name="id_universe" placeholder="Universe ID">

<button type="submit">Save</button>

</form>