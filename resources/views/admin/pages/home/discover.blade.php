<x-app-layout>
    <div class="flex flex-col">
        <div class="bg-white shadow-md  rounded-3xl p-4">
            <div class="flex-none lg:flex">
                <div class="flex-auto ml-3 justify-evenly py-2">
                    @foreach ($discovers as $discover)
                        
                    
                    {{-- <div class="flex flex-wrap ">
                        <h2 class="flex-auto text-lg font-medium">{{$discover[1]->$titre->$services}}</h2>
                    </div> --}}
                    <p class="mt-3"></p>
                    <div class="flex py-4  text-sm text-gray-600">
                        <h2 class="flex-auto text-lg font-medium">
                            {{$discover->description}}
                        </h2>
                    </div>
                    <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                    <div class="flex space-x-3 text-sm font-medium">
                        
                        <a href="{{route('discover.edit', $discover->id)}}"
                            class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800"
                            type="button" aria-label="like">Mettre à jour Discover</a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>