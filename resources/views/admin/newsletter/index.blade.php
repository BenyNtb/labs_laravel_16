<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="text-center bg-gray-100 py-4 shadow-md w-6/12 mx-auto rounded-lg">
                        <h1 class="text-4xl m-2 text-center text-gray-600">Newsletter</h1>
                    </div>
                    @if (count($news) > 0)
                        <table>
                            <tr>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Email</th>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Action</th>
                            </tr>
                            @foreach ($news as $new)
                                <tr>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $new->mail }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">
                                        <button class="w-auto bg-red-500 hover:bg-red-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">Delete</button>
                                    </td>
                            @endforeach
                        </table>
                    @else
                        <p class="text-center font-bold mx-auto">Aucun mail enregistré dans la Newsletter</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>