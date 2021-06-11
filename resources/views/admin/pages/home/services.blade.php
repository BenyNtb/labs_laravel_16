<x-app-layout>
    <div class="flex flex-col">
        <div class="bg-white shadow-md  rounded-3xl p-4">
            <div class="flex-none lg:flex">
                @foreach ($services as $service)
                <i class="{{$service->icone->class}}"></i>
                
                <div class="flex-auto ml-3 justify-evenly py-2">
                    <div class="flex flex-wrap ">
                        <h2 class="flex-auto text-lg font-medium">{{$service->titre}}</h2>
                        <h3 class="flex-auto text-lg font-medium">{{$service->sous_titre}}</h3>
                        <h3 class="flex-auto text-lg font-medium">{{$service->description}}</h3>
                    </div>
                    <p class="mt-3"></p>
                    
                    <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                    <div class="flex space-x-3 text-sm font-medium">
                        <a href="{{route('service.edit', $service->id)}}
                            class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800"
                            type="button" aria-label="like">Edit Service</a>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
