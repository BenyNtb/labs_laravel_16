<x-app-layout>
    <div class="content" >
        <a href="{{route('homecard.index')}}">Retour à cards</a>
        <div class="container">
            <h1>Editer Card</h1>
            <form method="POST" action="{{route('homecard.update', $cards->id)}}">
                @csrf
                @method('PUT')
                <label for="titre">Titre</label>
                <input type="text" name="titre" id="titre" value="{{$cards->titre}}" class="form-control @error('titre') is-invalid @enderror">
                @error('titre')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="soustitre">Sous titre</label>
                <input type="text" name="soustitre" id="soustitre" value="{{$cards->soustitre}}" class="form-control @error('soustitre') is-invalid @enderror">
                @error('soustitre')
                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <label for="description">Description</label>
                <input type="text" name="description" value="{{$cards->description}}" id="description" class="form-control @error('description') is-invalid @enderror">
                @error('description')
                    <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                @enderror

                <hr>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</x-app-layout>