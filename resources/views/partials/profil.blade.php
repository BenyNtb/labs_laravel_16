<div class="mt-auto">
    <div class="grid grid-cols-1 gap-4 max-w-9xl mx-auto sm:px-6 lg:px-8">
        <div class="w-full mx-2">
            <div
                class="grid grid-cols-6 grid-rows-7 grid-flow-row  rounded-lg shadow-md bg-white hover:shadow-xl transition-shadow duration-300 ease-in-out">
                <div class="col-span-3 row-span-4 p-1 m-1">
                    <img src="{{ asset(Auth::user()->img) }}" alt="photoprofil"
                        class="rounded-t-xl object-cover h-48 mx-auto imgProfil" />
                </div>

                <div class="col-span-3 row-span-1">
                    <div class="flex align-bottom flex-col leading-none p-2 md:p-4">
                        <div class="flex flex-row justify-center items-center">
                            <span class="ml-2 text-sm text-2xl"> {{ Auth::user()->nom }} </span>
                        </div>
                    </div>
                </div>
                
                <div class="col-span-3 row-span-1">
                    <div class="flex items-center justify-center p-2 md:p-4">
                        <h1 class="text-lg">
                            Email : {{ Auth::user()->email }} <br>
                            Role : <span
                                class="text-purple-500 font-bold">{{ Auth::user()->role->nom }}</span>
                        </h1>
                    </div>
                </div>
                
                <div class="col-span-3 row-span-1">
                    <div class="flex items-center justify-center p-2 md:p-4">

                        <a class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded-full" href="{{ route('password.request') }}">Edit password</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- FORMULAIRE EDIT -->
        @if (Auth::user()->role_id == 1)
        <form action="{{ route('membre.update', Auth::id() ) }}" method="post"
            class="grid bg-white rounded-lg shadow-xl  col-span-2 w-10/12 mx-auto" enctype="multipart/form-data">
            @else
            <form action="{{ route('membre.update', Auth::id() ) }}" method="post"
                class="grid bg-white rounded-lg shadow-xl col-span-2 w-10/12 mx-auto">
                @endif
                @csrf
                @method('PUT')
                @include('layouts.flash')
                <div class="flex justify-center pt-8">
                    <div class="flex">
                        <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Edit your profil</h1>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-1 gap-5 md:gap-8 mt-5 mx-7">
                    <div class="grid grid-cols-1">
                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nom</label>
                        <input
                            class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                            type="text" name="nom" value="{{ Auth::user()->nom }}" placeholder="Ton nom" />
                        @error('nom')
                        @include('partials.error')
                        @enderror
                    </div>
                </div>
                
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Email</label>
                    <input
                        class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                        type="text" name="email" value="{{ Auth::user()->email }}" placeholder="Ton email" />
                    @error('email')
                    @include('partials.error')
                    @enderror

                </div>
                @admin
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Avatar</label>
                    <select name="role_id"
                        class="form-select mt-1 block w-full py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent selectAvatar">
                        @foreach ($roles as $role)
                        <option {{ $role->id == Auth::user()->role_id ? 'selected' : '' }} value="{{ $role->id }}">
                            {{ $role->nom }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Avatar</label>
                    <select name="role_id"
                        class="form-select mt-1 block w-full py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent selectAvatar">
                        @foreach ($postes as $poste)
                        <option {{ $poste->id == Auth::user()->poste_id ? 'selected' : '' }} value="{{ $poste->id }}">
                            {{ $poste->titre }}</option>
                        @endforeach
                    </select>
                </div>
                @endadmin

                {{-- image --}}
                <div class="grid grid-cols-1 md:grid-cols-1 gap-5 md:gap-8 mt-5 mx-auto">
                    <div class="grid grid-cols-1">
                        <label for="img" class="font-bold">Photo</label>
                        <div>
                            <img src="{{asset($user[0]->img)}}" alt="photo" class="bg-gray-300 rounded-md">
                        </div>
                        <input class="py-2 px-3 rounded-lg border-2 border-purple-300 mt-1 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" type="file" name="newimage"/>
                    </div>
                </div>

                <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                    <button
                        class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Update profil</button>
                </div>

            </form>
    </div>
</div>

<script type="text/javascript">
    let img = document.querySelector('.imgProfil');
    function afficher(x) {
        i = x.selectedIndex;
        // if (i == 0) { 
        //     console.log(x.options[i].id);
        //     img.src = 'http://127.0.0.1:8000/img/' + x.options[i].id
        // }
        img.src = 'http://127.0.0.1:8000/img/' + x.options[i].id
    }
</script>