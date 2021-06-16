<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-4xl m-2 text-center text-gray-600">Page Blog</h3>
                    <ul class="flex justify-center">
                        <a href="{{route('blog.create')}}" class="bg-green-400 hover:bg-green-500 m-2 py-2 text-white font-bold hover:text-black px-4 rounded-sm">Add post</a>
                    </ul>

                    <table class="w-full">
                        <tr class="border-2">
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">#</th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Image</th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Titre</th>
                            <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Action</th>
                        </tr>
                        @forelse ($articles as $art)
                            <tr>
                                <td class="py-4 px-6 border-b text-black font-bold border-grey-light">{{ $art->id }}</td>
                                <td class="py-4 px-6 border-b text-black font-bold border-grey-light"><img src="{{ asset('img/' . $art->image) }}" alt="" style="max-height:50px;"></td>
                                <td class="py-4 px-6 border-b text-black font-bold border-grey-light">{{ $art->titre }}</td>
                                <td class="flex">
                                    <a href="{{route('blog.edit', $art->id) }}" class=" w-auto bg-blue-500 hover:bg-blue-700 rounded-lg shadow-xl font-medium text-white mr-1 px-3 py-2">Edit</a>
                                    <form action="{{route('blog.destroy', $art->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="w-auto bg-red-500 hover:bg-red-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <p class="text-center font-bold mx-auto my-3">Pas d'article</p>
                        @endforelse
                    </table>
                    
                    <div class="page-pagination">
                    {{ $articles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>