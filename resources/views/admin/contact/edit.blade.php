<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-gray-600 text-center font-bold md:text-2xl text-xl">Edit page Contact</h3> 
                    <form action="{{route('contact.update', $contact)}}" method="POST">
                        @csrf
                        @method('PUT')
                        @include('layouts.flash')
                        <div class="section">
                            {{-- Les coords pour la map:  --}}
                            <div class="col m-2 bg-gray-200 flex flex-col">
                                <label for="position">Position sur Google Maps</label>
                                <input type="text" name="position" value="{{$contact->position}}"/>
                                @error('position')
                                    <br/><span class="text-red-500">{{$message}} </span> <br/> 
                                @enderror
                            </div>
                            {{--  premier titre  --}}
                            <div class="col m-2 bg-gray-300">
                                <label for="titre">Titre</label><br/>
                                <input type="text" name="titre" value="{{$contact->titre}}" class="w-full" />
                                
                                @error('titre')
                                <br/>    <span class="text-red-500">{{$message}}</span> <br/>
                                @enderror

                                <label for="description">Description</label><br/>
                                <textarea name="description" rows="10" cols="50"> {{$contact->description}} </textarea>
                                <br/>
                                @error('description')
                                        <span class="text-red-500">{{$message}}</span>
                                @enderror 
                                <br/>
                            </div>
                            
                            {{--  deuxième titre  --}}
                            <div class="col m-2 bg-gray-300">
                                <label for="soustitre">Soustitre</label><br/>
                                <input type="text" name="soustitre" value="{{$contact->soustitre}}" class="w-full" />
                                <br/>
                                @error('soustitre')
                                    <br/> <span class="text-red-500">{{$message}}</span><br/>
                                @enderror
                            <div class="col m-2 bg-gray-300">
                                <div class="col md:flex">
                                    <div class="w-full md:w-2/4 ">
                                    <label for="adresse1">Adresse</label><br/>
                                    <input type="text" name="adresse1" value="{{$contact->adresse1}}" class="w-full" />
                                    <br/>
                                    @error('adresse')
                                        <span class="text-red-500">{{$message}}</span>
                                    @enderror 
                                    <br/>
                                    </div>
                                    <div class="col md:flex">
                                        <div class="w-full md:w-2/4 ">
                                        <label for="adresse2">Adresse2</label><br/>
                                        <input type="text" name="adresse2" value="{{$contact->adresse2}}" class="w-full" />
                                        <br/>
                                        @error('adresse2')
                                            <span class="text-red-500">{{$message}}</span>
                                        @enderror 
                                        <br/>
                                        </div>
                                <div class="w-fulll md:w-2/4">
                                    <label for="telephone">Tel</label><br/>
                                    <input type="text" name="telephone" value="{{$contact->telephone}}" class="w-full" />
                                    <br/>
                                    @error('tel')
                                        <span class="text-red-500">{{$message}}</span>
                                    @enderror 
                                    <br/>
                                </div>
                                <div class="w-fulll md:w-2/4">
                                    <label for="mail">Email</label><br/>
                                    <input type="mail" name="mail" value="{{$contact->mail}}" class="w-full" />
                                    <br/>
                                    @error('email')
                                        <span class="text-red-500">{{$message}}</span>
                                    @enderror 
                                    <br/>
                                </div>
                            </div> 
                        </div>
                    </div>
                        
                    <div class="col m-2 bg-gray-300">
                        <div class="col md:flex md:flex-col">
                            <label for="footer">Footer</label>
                            <input type="text" name="footer" value="{{$contact->footer}}" />          
                        </div>
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