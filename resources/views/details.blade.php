@extends('layouts.app')

@section('main')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
	<header class="flex justify-center pt-8 sm:justify-start sm:pt-0">
	<h2>Planetary Details</h2>
	</header>

	<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
<h3>Planet - {{$id}} </h3>
	</div>
</div>
@endsection
