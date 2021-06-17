<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-4 bg-green-400 border-b border-gray-200 block">
                    <div class="text-center bg-gray-100 py-4 shadow-md w-6/12 mx-auto rounded-lg">
                        <h3 class="text-4xl m-2 text-center text-gray-600">Services</h3>
                    </div>
                    {{-- <div class="text-center mt-3">
                        <a href="{{route('service.create')}}" class="bg-green-400 hover:bg-green-500 m-2 py-2 text-white font-bold hover:text-black px-4 rounded-sm">Add service</a>
                    </div> --}}
                    
                    @if (count($services) > 0)
                        <table class="w-full">
                            <tr class="text-center">
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Icone</th>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Titre</th>
                                <th class="hidden md:table-cell">Description</td>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Action</th>
                            </tr>
                            
                            @foreach ($services as $service)
                                <tr class="border-2">
                                    <td class="py-4 px-6 border-b text-black font-bold border-grey-light"> <i class="{{$service->icone->class}}"></i></td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $service->soustitre }}</td>
                                    <td class="hidden md:table-cell">{{ $service->description }}</td>
                                    <td class="flex">
                                        <a href="{{route('service.edit', $service->id) }}" class="w-auto bg-blue-500 hover:bg-blue-700 rounded-lg shadow-xl font-medium text-white mr-1 px-3 py-2">Edit</a>
                                        <form action="{{route('service.destroy', $service->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="w-auto bg-red-500 hover:bg-red-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">Delete</button>
                                        </form>
                                    </td>
                                </tr> 
                            @endforeach
                        </table>
                        {{-- pagination --}}
                        <div class="mt-3">
                            {{ $services->links() }}
                        </div>
                    @else
                        <p>Pas de services enregistré..</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>