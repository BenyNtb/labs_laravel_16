<x-app-layout>
    <!-- component -->
    <div class="content" >
        <a href="{{route('testimonials.index')}}">Retour à Testimonials</a>
        <div class="grid mt-8  gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-2">
            <form method="POST" action="{{route('testimonials.update', $testimonials->id)}}">
                @csrf
                @method('PUT')
                <div class="flex flex-col">
                    <div class="bg-white shadow-md  rounded-3xl p-4">
                        <div class="flex-none lg:flex">
                            <div class=" h-full w-full lg:h-48 lg:w-48   lg:mb-0 mb-3">
                            </div>
                            <div class="flex-auto ml-3 justify-evenly py-2">
                                <input id="nom" name="nom" value="{{$testimonials->nom}}" class="border border-gray-400 p-2 rounded-lg" x-model="currentColor">
                                    @error('nom')
                                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                                    @enderror

                                    <h2 class="flex-auto text-lg font-medium">
                                        <input id="avis" name="avis" value="{{$testimonials->avis}}" class="border border-gray-400 p-2 rounded-lg" x-model="currentColor">
                                        @error('avis')
                                        <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                                        @enderror
                                    </h2>

                                    
                                </div>

                                <p class="mt-3"></p>
                                
                                <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                                <div class="flex space-x-3 text-sm font-medium">
                                    
                                    <button
                                        class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800"
                                        type="submit" aria-label="like">Mettre à jour Discover</button>
                                </div>
                </form>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
</x-app-layout>