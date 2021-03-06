@extends('layouts.app')

@section('main')
  <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <header class="flex justify-center pt-8 sm:justify-start sm:pt-0">
		    <h2>The Planetary Route</h2>
    </header>

    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
      <div class="px-3">
        <h3>Query Results</h3>
        <p id="mssg" class="mssg">{{session('mssg')}}</p>

       <p>{{$name}}
       <p>{{$age}}
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3">
        <section class="p-6 border-t border-gray-400 dark:border-gray-700 md:border-t-0 md:border-4">
          <div class="flex" style="flex-direction:column">
            <div>
              <h4>Planets</h4>
              @foreach($planets as $planet)
  		        <p>
                {{$planet-> name}} - {{$planet->type}} -  {{$planet->galaxy}} <a href="/planets/{{$planet->id}}">{{$planet->id}}</a>
  			      </p>
  			      @endforeach
            </div>

          </div>
		    </section>
        <section class="p-6 border-t border-gray-100 dark:border-gray-700 md:border-t-0 md:border-4">
          <div class="flex" style="flex-direction:column">
            <div>
              <h4>Planets by Customer</h4>
              @foreach($planetsByName as $planet)
                <p>
                   {{$planet-> name}} - {{$planet->type}} -  {{$planet->galaxy}}
                </p>
             @endforeach
              </div>

          </div>
		    </section>
        <section class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-1">
          <div class="flex" style="flex-direction:column">
            <div>
          <h4>Orders for Rocky Planets</h4>
          @foreach($planetsRocky as $planet)
		        <p>
				          {{$planet-> name}} - {{$planet->type}} -  {{$planet->galaxy}}
			      </p>
			    @endforeach
        </div>
          </div>
		    </section>


    </div>
  </div>

</div>
@endsection
