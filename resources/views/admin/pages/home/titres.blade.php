<x-app-layout>
    @extends('layouts.flash')
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white  shadow-sm sm:rounded-lg">
                <div class="p-4 bg-white border-b border-gray-200 block">
                    <div class="mb-5 text-center bg-gray-100 py-4 shadow-md w-6/12 mx-auto rounded-lg">
                        <h1 class="text-center text-gray-600 text-4xl m-auto">Titres</h1>
                    </div>
                    <!-- About contant -->
                    @foreach ($titres as $titre)
                    <div class="flex py-4  text-sm text-gray-600">
                        <h2 class="flex-auto text-lg font-medium">
                            {{$titre->titre}}
                        </h2>
                    </div>
                    <div class="flex space-x-3 text-sm font-medium">
                        <a href="{{route('homediscovertitre.edit', $titre->id)}}"
                            class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800"
                            type="button" aria-label="like">Mettre à jour Titre Discover</a> 
                    </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>