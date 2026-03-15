<h1>Create Universe</h1>

<form method="POST" action="/universes">

@csrf

<input name="universe" placeholder="Universe">

<input name="company" placeholder="Company">

<input name="age" placeholder="Age">

<button type="submit">Save</button>

</form>