@extends('layouts.flash')
<x-app-layout>
    <!-- component -->
    <div class="content" >
        
        <div class="grid mt-8  gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-2">
            @foreach ($cards as $card)
            <div class="flex flex-col">
                <div class="bg-white shadow-md  rounded-3xl p-4">
                    <div class="flex-none lg:flex">
                        <div class=" h-full w-full lg:h-48 lg:w-48   lg:mb-0 mb-3">
                            <i style="font-size:4rem;" class="{{$card->icone->class}}"></i>
                        </div>
                        <div class="flex-auto ml-3 justify-evenly py-2">
                            <div class="flex flex-wrap ">
                                <h2 class="flex-auto text-lg font-medium">
                                    {{$card->titre}}
                                </h2>
                                <div class="w-full flex-none text-xs text-blue-700 font-medium ">
                                    {{$card->soustitre}}
                                </div>
                                <h2 class="flex-auto text-lg font-medium">
                                    {{$card->description}}
                                </h2>
                            </div>

                            <p class="mt-3"></p>
                            <div class="flex p-4 pb-2 border-t border-gray-200 "></div>
                            <div class="flex space-x-3 text-sm font-medium">
                                
                                <a href="{{route('homecard.edit', $card->id)}}"
                                    class="mb-2 md:mb-0 bg-gray-900 px-5 py-2 shadow-sm tracking-wider text-white rounded-full hover:bg-gray-800"
                                    type="button" aria-label="like">Edit Services</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="mt-3">
                {{ $cards->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
