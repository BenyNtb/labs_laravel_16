<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 bg-white border-b border-gray-200 block">
                    <div class="text-center bg-gray-100 py-4 shadow-md w-6/12 mx-auto rounded-lg">
                        <h1 class="text-center text-gray-600 text-4xl m-auto">Discover</h1>
                    </div>
                    <!-- About contant -->
                    <div class="about-contant">
                        <div class="container">
                            <div class="section-title">
                                <h2>
                                    @php
                                        $titre1 = str_replace('(', '<span>', $titre[0]->discover);
                                        $titre2 = str_replace(')', '</span>', $titre1);
                                        echo $titre2;
                                    @endphp
                                </h2>
                            </div>
                            <div class="row">
                                @foreach ($discovers as $item)
                                <div class="col-md-6">
                                    <p>{{$item->description}}</p>
                                </div>
                                @endforeach
                            </div>
                            <div class="text-center mt60">
                                <a href="" class="site-btn">Browse</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>