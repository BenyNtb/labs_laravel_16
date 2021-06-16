<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-xl m-4 text-center md:text-left">Gestion du Blog :: Créer un article</h3>
                        <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                        @csrf
                        <h1><b>Add post</b></h1>
                        <!-- Title -->
                        <div class="mt-4">
                            <x-label for="titre" :value="__('Titre')" />
                            <x-input id="titre" class="block mt-1 w-full" type="text" name="titre" required autofocus />
                        </div>
                        <!-- Text -->
                        <div class="mt-4">
                            <x-label for="description" :value="__('Description')" />
                            <textarea name="description" id="description" class="block mt-1 w-full border-b border-gray-200 overflow-hidden shadow-sm sm:rounded-lg" rows="5" cols="60"></textarea>
                        </div>
                        <!-- Image -->
                        <div class="mt-4">
                            <x-label for="image" :value="__('Image')" />
                            <x-input id="image" type='file' class="mt-1 flex flex-col items-center px-2 py-4 bg-white text-purple-900 rounded-lg tracking-wide border border-blue cursor-pointer hover:text-green-500" name="image" style="width: 310px" required autofocus />
                        </div>
                        <!-- Category -->
                        <div class="mt-4">
                            <x-label for="categorie_id" :value="__('Categorie')" />
                            <select id="categorie_id" class="block mt-1 w-full ml-1 border-b border-gray-200 overflow-hidden shadow-sm sm:rounded-lg" name="categorie_id" :value="old('category_id')">
                                @foreach ($categories as $cat)
                                    <option value="{{$cat->id}}">{{$cat->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Tags -->
                        <div class="mt-4">
                            @foreach ($tags as $tag)
                                <div class="mt-2 ml-2">
                                    <span>
                                        <input type="checkbox" name="taglist[]" value="{{$tag->id}}" style="height: 25px; width: 25px" class="border-b border-gray-200 overflow-hidden shadow-sm sm:rounded-lg">
                                        <label for="taglist[]" class="ml-1">{{$tag->name}}</label>
                                    </span>
                                </div>
                            @endforeach
                        </div>
                        </div>
                        <div class="flex items-center mt-6">
                            <div class="col w-full text-center">
                                <button class="mb-4 bg-purple-500 text-white hover:bg-purple-700 collightblue font-bold py-2 px-4 rounded">Add</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>