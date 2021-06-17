<x-app-layout>
    <div class="py-2">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 flex justify-between text-center bg-white font-bold border-b border-gray-200">
                    <div class="block">
                        <h1 class="text-xl font-bold text-gray-600 hover:text-gray-800 max-w-full">Bonjour {{ Auth::user()->nom }}</h1>
                        <h5 class="text-green-400 font-bold">Vous êtes connecté(e)</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        @include('partials.profil')
    </div>
</x-app-layout>
