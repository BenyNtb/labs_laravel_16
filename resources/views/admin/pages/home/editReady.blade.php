<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-gray-600 text-center font-bold md:text-2xl text-xl">Edit section</h3> 
                    <form action="{{route('ready.update', $ready->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('layouts.flash')
                        <div class="mt-4 flex flex-col md:w-4/6">
                            <label class="font-bold" for="titre">Titre</label>
                            <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" name="titre" id="desc" maxlength="200" cols="30" rows="10" style="resize:none;" type="text"/>{{$ready->titre}}
                            <p class="text-right text-gray-400 strong"></p>
                            @error('titre')
                                <span class="text-red-500 font-bold">{{$message}}</span> 
                            @enderror
                        </div>

                        <div class="mt-4 flex flex-col md:w-4/6">
                            <label class="font-bold" for="texte">Texte</label>
                            <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" name="texte" id="desc" maxlength="200" cols="30" rows="10" style="resize:none;" type="text"/>{{$ready->texte}}
                            <p class="text-right text-gray-400 strong"></p>
                            @error('texte')
                                <span class="text-red-500 font-bold">{{$message}}</span> 
                            @enderror
                        </div>
                        <div class="flex flex-col md:w-1/6">
                            <button type="submit" class="w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2" >Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>