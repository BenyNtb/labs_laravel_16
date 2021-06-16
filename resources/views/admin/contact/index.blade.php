<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 bg-white border-b border-gray-200 block">
                    <div class="text-center bg-gray-100 py-4 shadow-md w-6/12 mx-auto rounded-lg">
                        <h3 class="text-4xl m-2 text-center text-gray-600">Page Contact</h3>
                    </div>
                        <table class="w-full">
                            <tr class="text-center">
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Titre</th>
                                <th class="hidden md:table-cell">Description</td>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Soustitre</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Adresse</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Tel</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Email</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Position</th>
                                    <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Footer</th>
                                <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Action</th>
                            </tr>
                            
                            @foreach ($contact as $contact)
                                <tr class="border-2">
                                    <td class="py-4 px-6 border-b text-black font-bold border-grey-light">{{ $contact->titre }}</td>
                                    <td class="hidden md:table-cell">{{ $contact->description }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $contact->soustitre }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $contact->adresse }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $contact->tel }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $contact->email }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $contact->position }}</td>
                                    <td class="py-4 px-6 border-b border-grey-light">{{ $contact->footer }}</td>
                                    <td class="flex">
                                        <a href="{{route('contact.edit', $contact->id) }}" class="w-auto bg-blue-500 hover:bg-blue-700 rounded-lg shadow-xl font-medium text-white mr-1 px-3 py-2">Edit</a>
                                    </td>
                                </tr> 
                            @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>