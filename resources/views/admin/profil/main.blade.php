<x-app-layout>
    @foreach ($users as $user)
    <tr class="hover:bg-grey-lighter">
        <td class="py-4 px-6 border-b border-grey-light">
            <img width="60" src="{{ asset('img/bo/' . $user->avatar->src) }}"
                alt="{{ $user->avatar->nom }}">
        </td>
        <td class="py-4 px-6 border-b border-grey-light">{{ $user->nom }}</td>
        <td class="py-4 px-6 border-b border-grey-light">{{ $user->email }}</td>
        <td class="py-4 px-6 border-b border-grey-light">{{ $user->poste->titre }}</td>
        <td class="py-4 px-6 border-b border-grey-light">{{ $user->genre->type }}</td>
        <td class="py-4 px-6 border-b border-grey-light font-bold">{{ $user->role->nom }}</td>
        <td class="py-4 px-6 border-b border-grey-light">
            @if (Auth::id() == $user->id)
                <p class="text-green-800 font-bold">Tu es connecté !</p>
            @elseif($user->role_id == 1)
                <p class="text-red-600 font-bold "> Action refusée !</p>
            @else
                <div class="flex">
                    {{-- <a href="{{ route('user.edit', $user->id) }}" class="w-auto bg-blue-500 hover:bg-blue-700 rounded-lg shadow-xl font-medium text-white mr-1 px-4 py-2">Modifier</a> --}}
                    {{-- <form action="{{ route('user.destroy', $user->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="w-auto bg-red-500 hover:bg-red-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">Delete</button>
                    </form> --}}
                </div>
            @endif
        </td>
    </tr>

    @endforeach
</x-app-layout>