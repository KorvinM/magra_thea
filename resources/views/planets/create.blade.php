@extends('layouts.app')

@section('main')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
	<header class="flex justify-center pt-8 sm:justify-start sm:pt-0">
	<h2>Create Your Planet</h2>
	</header>

	<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg planet-create">
    <h3></h3>
    <form action="/planets" method="POST" class="grid grid-cols-1 md:grid-cols-3">
      @csrf
      <div class="px-1">
      <label for="name">Your Name:</label>
      <input type="text" id="name" name="name">
      </div>
      <div class="px-1">
      <label for="type">Choose Type:</label>
      <select id="type" name="type">
        <option value="rocky">Rocky</option>
        <option value="gaseous">Gaseous</option>
      </select>
      </div>
      <div class="px-1">
      <label for="galaxy">Choose Galaxy</label>
      <select id="galaxy" name="galaxy">
        <option value="milky way">Milky Way</option>
        <option value="andromeda">Andromeda</option>
        <option value="smc">Small Magellanic Cloud</option>
        <option value="lmc">Large Magellanic Cloud</option>
      </select>
      </div>
      <div class="features-wrap">
        <fieldset class="flex">
        <span><label for="features">Features:</label></span>
      <span><label><input type="checkbox" name="features[]" value="Desert">Desert</label></span>
    <span><label><input type="checkbox" name="features[]" value="Fjords">Fjords</label></span>
  <span><label><input type="checkbox" name="features[]" value="Ocean">Ocean</label></span>
<span><label><input type="checkbox" name="features[]" value="Polar Ice">Polar Ice</label></span>
<span><label><input type="checkbox" name="features[]" value="Savannah">Savannah</label></span>
<span><label><input type="checkbox" name="features[]" value="Arboreal">Arboreal</label></span>
<span><label><input type="checkbox" name="features[]" value="Mountains">Mountains</label></span>

        </fieldset>
      </div>

      <div class="submit-wrap">
      <input type="submit" value="Order Planet">
</div>
	</div>
</div>
@endsection
