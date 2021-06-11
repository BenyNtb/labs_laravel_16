<x-app-layout>
    <div class="text-center bg-purple-500 py-5 shadow-md w-4/12 mx-auto rounded-lg">
        <p>Nombre d'utilisateurs : {{ count($users) }}</p>
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
                            Photo</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Nom</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Email</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Poste</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Genre</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Role</th>
                        <th
                            class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">
                            Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">
                            {{-- <img width="60" src="{{ asset('img/' . $user->avatar->src) }}"
                                alt="{{ $user->avatar->nom }}"> --}}
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
                                    <a href="{{ route('user.edit', $user->id) }}" class="w-auto bg-blue-500 hover:bg-blue-700 rounded-lg shadow-xl font-medium text-white mr-1 px-4 py-2">Modifier</a>
                                    @Admin
                                    <form action="{{ route('user.destroy', $user->id) }}" method="post">
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
            @Webmaster
        <p class="text-center">Changement des rôles</p>
        <table class="container text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>name</th>
                    <th>email</th>
                    <th>rôle</th>
                    <th>poste</th>
                    <th>change poste</th>
                    @Admin
                        <th>delete</th>
                    @endAdmin
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    @if (!($item->role->role_name == "admin"))
                        @if (!(Auth::user()->role->role_name == "webmaster" && $item->role->role_name == "webmaster"))
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->nom}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->role->nom}}</td>
                                <td>{{$item->poste->titre}}</td>
                                <td>
                                    <form action="{{route('role.update' , $item->id)}}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="roleUpdate" id="roleUpdate">
                                        <select name="role_id" id="role_id">
                                            <option disabled selected>Select role</option>
                                            <option value="2">webmaster</option>
                                            <option value="3">redacteur</option>
                                        </select>
                                        <button type="submit">Changer</button>
                                    </form>            
                                </td>
                                <td>
                                    @Admin
                                    <form action="{{route('user.destroy', $item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">Delete</button>
                                    </form>
                                    @endAdmin
                                </td>
                            </tr>
                        @endif
                    @endif
                @endforeach
            </tbody>
        </table>
    @endWebmaster
        </div>
    </div>
</x-app-layout>