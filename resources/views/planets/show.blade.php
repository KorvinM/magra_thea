@extends('layouts.app')

@section('main')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
	<header class="pt-8 sm:justify-start sm:pt-0">
	<h2>Planetary Details</h2>
	</header>

	<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg planet-details">

<div class="grid grid-cols-1 md:grid-cols-3">
	<h3>Planet for {{$planet->name}} </h3>

	<div>
<p> Type: {{$planet->type}}</p>
<p> Galaxy: {{$planet->galaxy}}</p>
</div>

<div>
<p> Features:
	<ul>
		@foreach($planet->features as $feature)
		<li>{{$feature}}</li>
		@endforeach
	</ul>
</p>
</div>
<!-- new form action with named routes
<form action="/planets/{{$planet->id}}" method="POST">


-->

@php
// create a 200*200 image
$img = imagecreatetruecolor(200, 200);

// allocate some colors
$white = imagecolorallocate($img, 255, 255, 255);
$red   = imagecolorallocate($img, 255,   0,   0);
$green = imagecolorallocate($img,   0, 255,   0);
$blue  = imagecolorallocate($img,   0,   0, 255);

// draw the head
imagearc($img, 100, 100, 200, 200,  0, 360, $red);

// output image in the browser
//header("Content-type: image/png");
imagepng($img, 'circle.png');

// free memory
imagedestroy($img);


@endphp
<img src="/circle.png">
<form action="{{route('planets.destroy', $planet->id) }}" method="POST">

	@csrf
	@method('DELETE')
	<button class="btn btn-outline-primary">Delete Planet</button>
</div>

	</div>
</div>
@endsection
