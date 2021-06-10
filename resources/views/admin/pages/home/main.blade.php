<x-app-layout>
    <div class="text-center bg-purple-500 py-5 shadow-md w-4/12 mx-auto rounded-lg">
        <h1 class="text-3xl">Contenu page home</h1>
    </div>
    @include('layouts.flash')
    <div class="w-4/4 mx-auto">
        <div class="bg-white shadow-md rounded my-6">
            @Webmaster
            <table class="text-left w-full">
                <thead>
                    <tr>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            #</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Titre</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Texte</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Image</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($homes1 as $home1)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">
                            {{-- <img width="60" src="{{ asset('img/' . $user->avatar->src) }}"
                                alt="{{ $user->avatar->nom }}"> --}}
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $home1->Titre }}</td>
                        {{-- <td class="py-4 px-6 border-b border-grey-light">{{ $user->email }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $user->poste->titre }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $user->genre->type }}</td>
                        <td class="py-4 px-6 border-b border-grey-light font-bold">{{ $user->role->nom }}</td> --}}
                        <td class="py-4 px-6 border-b border-grey-light">
                            @if (Auth::id() == $user->id)
                                <p class="text-green-800 font-bold">Tu es connecté !</p>
                            @elseif($user->role_id == 1)
                                <p class="text-red-600 font-bold "> Action refusée !</p>
                            @else
                                <div class="flex">
                                    {{-- <a href="{{ route('user.edit', $user->id) }}" class="w-auto bg-blue-500 hover:bg-blue-700 rounded-lg shadow-xl font-medium text-white mr-1 px-4 py-2">Modifier</a> --}}
                                    @Admin
                                    <form action="{{ route('home.destroy', $user->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="w-auto bg-red-500 hover:bg-red-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">Delete</button>
                                    </form>
                                    @endAdmin
                                </div>
                            @endif
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
            @endWebmaster
</x-app-layout>