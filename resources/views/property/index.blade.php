@extends('base')

@section('title', 'Tous nos biens')

@section('content')

    <div class="text-center p-5  bg-light">
        <form action="" method="get" class="container d-flex gap-2">
            <input type="surface" placeholder="Surface minimum" class="form-control" name="surface" value="{{ $input['surface'] ?? '' }}">
            <input type="number" placeholder="Budget max" class="form-control" name="price" value="{{ $input['price'] ?? '' }}">
            <input type="number" placeholder="Nombre de pièce min" class="form-control" name="rooms" value="{{ $input['rooms'] ?? '' }}">
            <input type="text" placeholder="Mot clé" class="form-control" name="title" value="{{ $input['title'] ?? ''}}">
            <button class="btn btn-primary btn-sm flex-grow-0">
                Rechercher
            </button>
        </form>
    </div>

    <div class="container">
       <div class="row">
            @forelse($properties as $property)
                <div class="col-3 mb-4">
                    @include('property.card')
                </div>
            @empty
                <div class="col">
                    Aucun bien ne corresponds à votre recherche
                </div>
            @endforelse    
       </div>
    </div>
@endsection