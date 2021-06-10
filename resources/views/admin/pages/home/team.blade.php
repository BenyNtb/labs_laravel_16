<x-app-layout>
    <div class="flex flex-col">
        <div class="bg-white shadow-md  rounded-3xl p-4">
            <div class="flex-none lg:flex">
                @foreach ($teams as $team)
                
                
                <div class="flex-auto ml-3 justify-evenly py-2">
                    <div class="flex flex-wrap ">
                        <h2 class="flex-auto text-lg font-medium">{{$team->nom}}</h2>
                        <img src="{{asset('img/team/'.$team->photo->src)}}" alt="">
                        <h3 class="flex-auto text-lg font-medium">{{$team->poste->titre}}</h3>
                    </div>
                    <p class="mt-3"></p>
                    
                    <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                    <div class="flex space-x-3 text-sm font-medium">
                        <button
                            class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800"
                            type="button" aria-label="like">Edit Shop</button>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
