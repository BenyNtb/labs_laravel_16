<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 bg-white border-b border-gray-200 block">
                    <div class="text-center bg-gray-100 py-4 shadow-md w-6/12 mx-auto rounded-lg">
                        <h1 class="text-center text-gray-600 text-4xl m-auto">Cards</h1>
                    </div>
                    <!-- card section -->
                    <div class="card-section">
                        <div class="container">
                            <div class="row">
                                <!-- single card -->
                                @foreach ($cards as $card)
                                <div class="col-md-4 col-sm-6">
                                    <div class="lab-card">
                                        <div class="icone">
                                            <i class="{{$card->icone}}"></i>
                                        </div>
                                        <h2>{{$card->soustitre}}</h2>
                                        <p>{{$card->description}}</p>
                                        <button><a href="{{route('service.edit', $card->id) }}" class="w-auto bg-blue-500 hover:bg-blue-700 rounded-lg shadow-xl font-medium text-white mr-1 px-3 py-2">Edit</a></button>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- card section end-->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>