<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-gray-600 text-center font-bold md:text-2xl text-xl">Edit service # ({{ $service->id }}) {{ $service->soustitre }} </h3> 
                    <form action="{{route('service.update', $service->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('layouts.flash')
                        <div class="flex flex-col md:w-2/6">
                            <i style="font-size:4rem;" class="{{$service->icone}}"></i>
                            <div class="flex justify-between">
                                <label class="font-bold" for="icone">Icone </label>
                            </div> 
                            
                            <select name="icone_id" id="icone_id">
                                @foreach ($icones as $icone)
                                    <option value="{{$icone->id}}">{{$icone->class}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-4 flex flex-col md:w-2/6">
                            <label class="font-bold" for="soustitre">Titre</label>
                            <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="text" name="soustitre" value="{{$service->soustitre}}" />
                            @error('soustitre')
                                <span class="text-red-500 font-bold">{{$message}}</span> 
                            @enderror
                        </div>
                        <div class="mt-4 flex flex-col md:w-4/6">
                            <label class="font-bold" for="description">Description</label>
                            <textarea class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" name="description" id="desc" maxlength="200" cols="30" rows="10" style="resize:none;">{{$service->description}}</textarea>
                            <p class="text-right text-gray-400 strong"> <span id="limit">0</span> / 200 </p>
                            @error('description')
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