<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-center text-gray-600 text-3xl">Add User</h3>
                    
                    <form action="{{route('user.store') }}" method="POST">
                        @csrf
                        @include('layouts.flash')
                        <div class="row flex flex-wrap">
                                    {{-- Nom --}}
                            <div class="w-full md:w-3/6 flex flex-wrap">

                                <div class="col font-bold w-4/6 block">
                                    <label for="nom">Name</label> 
                                    <input type="text" name="nom" placeholder="enter name" class="w-full rounded-lg bg-gray-300" value="{{old('nom')}}" />
                                </div>

                                <div class="col w-full text-right text-red-600 font-bold">
                                    @error('nom')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            {{-- Email --}}
                            
                            <div class="w-full md:w-3/6 flex flex-wrap">
                                <div class="col font-bold w-4/6 block">
                                    <label for="email">Email</label> 
                                    <input type="text" name="email" placeholder="enter email" class="w-full rounded-lg bg-gray-300" value="{{old('email')}}"  />
                                </div>
                                
                                <div class="col w-full text-right text-red-600 font-bold">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            {{-- image --}}
                            <div class="grid grid-cols-1 md:grid-cols-1 gap-5 md:gap-8 mt-5 mx-auto">
                                <div class="grid grid-cols-1">
                                    <label for="img" class="font-bold">Photo</label>
                                    <div>
                                        <img src="{{asset('img/' . $user->img)}}" alt="photo" class="bg-gray-300 rounded-md">
                                    </div>
                                    <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="file" name="img"/>
                                </div>
                                <div class="col w-full text-right text-red-600 font-bold">
                                    @error('img')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            {{-- Role --}}
                            
                            <div class="w-full md:w-3/6 flex flex-wrap">
                                <div class="col font-bold w-4/6 block">
                                    <label for="role">Role</label> 
                                    <select name="role" class="w-full rounded-lg bg-gray-300">
                                        @foreach ($roles as $role)
                                            <option value="{{$role->id}}" {{ $role->id == old('role') ? 'selected' : ''}}>{{$role->nom}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{-- Poste --}}
                            
                            <div class="w-full md:w-3/6 flex flex-wrap">
                                <div class="col font-bold w-4/6 block">
                                    <label for="poste">Poste</label> 
                                    <select name="poste" class="w-full rounded-lg bg-gray-300">
                                        @foreach ($postes as $poste)
                                            <option value="{{$poste->id}}" {{ $poste->id == old('poste') ? 'selected' : ''}}>{{$poste->titre}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- Genre --}}
                            <div class="w-full md:w-3/6 flex flex-wrap">
                                <div class="col font-bold w-4/6 block">
                                    <label for="genre">Genre</label> 
                                    <select name="genre" class="w-full rounded-lg bg-gray-300">
                                        @foreach ($genres as $genre)
                                            <option value="{{$genre->id}}" {{ $genre->id == old('genre') ? 'selected' : ''}}>{{$genre->type}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="w-full my-8 flex flex-wrap">
                                <div class="col w-full text-center">
                                    <button class="bg-purple-500 text-white hover:bg-purple-700 collightblue font-bold py-2 px-4 rounded">Add</button>
                                </div>
                            </div>
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>