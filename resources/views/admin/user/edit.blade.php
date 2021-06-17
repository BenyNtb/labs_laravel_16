<x-app-layout>
    @if (Auth::user()->role_id <= 2 || Auth::user()->id == $user->id)
    <form enctype="multipart/form-data" action="{{ route('membre.update', $user->id) }}" method="post"
        class="grid bg-white rounded-lg shadow-xl col-span-2 w-10/12 mx-auto">
        @csrf
        @method('PUT')
        @include('layouts.flash')
        <div class="flex justify-center pt-8">
            <div class="flex">
                <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Edit profil</h1>
            </div>
        </div>
        
        {{-- nom --}}
        <div class="grid grid-cols-1 md:grid-cols-1 gap-5 md:gap-8 mt-5 mx-7">
            <div class="grid grid-cols-1">
                <label class="font-bold">Nom</label>
                <input
                    class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    type="text" name="nom" value="{{ $user->nom }}" placeholder="Ton nom" />
                @error('nom')
                    {{ $message }}
                @enderror
            </div>
        </div>

        {{-- email --}}
        <div class="grid grid-cols-1 mt-5 mx-7">
            <label class="font-bold">Email</label>
            <input
                class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                type="text" name="email" value="{{ $user->email }}" placeholder="Ton email" />
            @error('email')
                {{ $message }}
            @enderror
        </div>

        @Admin
        {{-- role --}}
        <div class="grid grid-cols-1 mt-5 mx-7">
            <label class="font-bold">Rôle</label>
            <select name="role_id"
                class="form-select mt-1 block w-full py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                @foreach ($roles as $role)
                <option {{ $role->id == $user->role_id ? 'selected' : '' }} value="{{ $role->id }}">
                    {{ $role->nom }}</option>
                @endforeach
            </select>
        </div>

        {{-- poste --}}
        <div class="grid grid-cols-1 mt-5 mx-7">
            <label class="font-bold">Poste</label>
            <select name="poste_id"
                class="form-select mt-1 block w-full py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent">
                @foreach ($postes as $poste)
                <option {{ $poste->id == $user->poste_id ? 'selected' : '' }} value="{{ $poste->id }}">
                    {{ $poste->titre}}</option>
                @endforeach
            </select>
        </div>
        @endAdmin

        {{-- image --}}
        <div class="grid grid-cols-1 md:grid-cols-1 gap-5 md:gap-8 mt-5 mx-auto">
            <div class="col w-3/6  flex justify-center items-center">
                <label class="font-bold" for="img">Image:</label> 
            </div>
            <div class="col w-3/6">
                <div>
                    <img src="{{asset($user->img)}}" alt="photo" class="bg-gray-300 rounded-md">
                </div>
                <div class="text-center">
                    <input type="file" name="newimage" />
                </div>
            </div>
        </div>

        <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
            <button type="submit"
                class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Update
            </button>
        </div>
    </form>
    @else 
        Accés refusé
    @endif
</x-app-layout>