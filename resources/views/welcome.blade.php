@extends('layouts.app')
@section('main')

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <header class="flex justify-center pt-8 sm:justify-start sm:pt-0">
		<h2>Home</h2>
                </header>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                              <p id="mssg" class="mssg">{{session('mssg')}}</p>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-700 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                            </div>

                            <div class="ml-12">
                <img src="/img/planet.jpg" alt="planet"/>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-400 dark:border-gray-700">
                            <div class="flex items-center">
                            </div>

                            <div class="ml-12">
                            </div>
                        </div>

                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    </div>
                </div>
            </div>
@endsection
