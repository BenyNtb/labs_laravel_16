<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-xl m-4 text-center md:text-left">Modifier article # {{$blog->id}}</h3>
                    <form method="POST" action="{{route('blog.update', $blog)}}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="text-center md:text-left">
                            <img src="{{asset('img/' . $blog->image)}}" alt="" />
                            <div>
                                <input type="file" name="image" />
                            </div>
                            <div class="my-4">
                                <p class="font-bold">Catégorie
                                    <select name="cat" id="cat">
                                        @foreach ($categories as $cat)
                                        <option value="{{$cat->id}}">{{$cat->nom}}</option>
                                        @endforeach
                                    </select>
                                </p>
                            </div>
                            <div class="my-4">
                                <p class="font-bold">Tags:
                                    <select name="tag" id="tag">
                                        @foreach ($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->nom}}</option>
                                        @endforeach
                                    </select>
                                </p>
                            </div>
                            <textarea class="m-3 p-10 bg-gray-200"> {{$blog->description }} </textarea>
                            <div>
                                <button type="submit"
                                    class="w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
