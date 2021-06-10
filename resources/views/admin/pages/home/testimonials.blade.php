<x-app-layout>
    <div class="flex flex-col">
        <div class="bg-white shadow-md  rounded-3xl p-4">
            <div class="flex-none lg:flex">
                @foreach ($testimonials as $testimonial)
                <div class=" h-full w-full lg:h-48 lg:w-48   lg:mb-0 mb-3">
                    <img src="{{asset('img/'.$testimonial->photo->src)}}"
                        alt="Just a flower" class=" w-full  object-scale-down lg:object-cover  lg:h-48 rounded-2xl">
                </div>
                <div class="flex-auto ml-3 justify-evenly py-2">
                    <div class="flex flex-wrap ">
                        <h2 class="flex-auto text-lg font-medium">{{$testimonial->avis}}</h2>
                        <h3 class="flex-auto text-lg font-medium">{{$testimonial->nom}}</h3>
                        <h3 class="flex-auto text-lg font-medium">{{$testimonial->roles_id}}</h3>
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
