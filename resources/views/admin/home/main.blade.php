<x-app-layout>
    <div>
        <h1>Contenu Page Home</h1>
    </div>
    @include('layouts.flash')
    <div class="w-4/4 mx-auto">
        <div class="bg-white shadow-md rounded my-6">
            <table class="text-left w-full border-collapse">
                <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
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
                    @foreach ($homes as $home)
                    <tr class="hover:bg-grey-lighter">
                        <td class="py-4 px-6 border-b border-grey-light">
                            {{-- <img width="60" src="{{ asset('img/' . $user->avatar->src) }}"
                                alt="{{ $user->avatar->nom }}"> --}}
                        </td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $home->Titre }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $home->Texte }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">{{ $home->image }}</td>
                        <td class="py-4 px-6 border-b border-grey-light">
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>