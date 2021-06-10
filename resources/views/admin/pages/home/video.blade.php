<x-app-layout>
    <div class="flex flex-col">
        <div class="bg-white shadow-md  rounded-3xl p-4">
            <div class="flex-none lg:flex">
                <div class=" h-full w-full lg:h-48 lg:w-48   lg:mb-0 mb-3">
                    {{-- <img src="{{asset('img/'.$videos[0]->image)}}"
                        alt="video" class=" w-full  object-scale-down lg:object-cover  lg:h-48 rounded-2xl"> --}}
                </div>
                <div class="flex-auto ml-3 justify-evenly py-2">
                    @foreach ($videos as $video)
                        <div class="flex flex-wrap ">
                            <h2 class="flex-auto text-lg font-medium">{{$video->url}}</h2>
                        </div>
                    @endforeach
                    <p class="mt-3"></p>
                    <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                    <div class="flex space-x-3 text-sm font-medium">
                        <a href="{{route('video.edit', $video->id)}}"
                            class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800"
                            type="button" aria-label="like">Edit Video</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>