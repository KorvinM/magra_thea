@extends('layouts.app')

@section('main')
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <header class="flex justify-center pt-8 sm:justify-start sm:pt-0">
		<h2>The Planetary Route</h2>
                </header>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <section class="p-6 border-t border-gray-400 dark:border-gray-700 md:border-t-0 md:border-4">
                            <div class="flex" style="flex-direction:column">
		            @foreach($planets as $planet)
		      <p>
				{{$planet-> name}} - {{$planet->type}} -  {{$planet->galaxy}} - {{$planet->price}}
			      </p>

			    @endforeach
                            </div>
		        </section>
                        <section class="p-6 border-t border-gray-400 dark:border-gray-700 md:border-t-0 md:border-4">
                            <div class="flex" style="flex-direction:column">
		            @foreach($planetsByName as $planet)
		      <p>
				{{$planet-> name}} - {{$planet->type}} -  {{$planet->galaxy}} - {{$planet->price}}
			      </p>

			    @endforeach
                            </div>
		        </section>
                        <section class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-1">
                            <div class="flex" style="flex-direction:column">
		            @foreach($planetsRocky as $planet)
		      <p>
				{{$planet-> name}} - {{$planet->type}} -  {{$planet->galaxy}} - {{$planet->price}}
			      </p>
			    @endforeach

				<p>{{$name}}
				<p>{{$age}}
                            </div>
		        </section>


                        <section class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">

                            <div class="ml-12">
				<p>Planetary types: <ul>
				@for($i=0; $i< count($planets);$i++)
				 <li>{{$planets[$i]['type'] }}</li>
				@endfor
				</ul>
		            @foreach($planetsByPrice as $planet)
		      <p>
				{{$planet-> name}} - {{$planet->type}} -  {{$planet->galaxy}} - {{$planet->price}}
			      </p>
			    @endforeach

                            </div>
                        </section>


                        <section class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">

                            <div class="ml-12">
                        </section>
                    </div>
                </div>

            </div>
@endsection
