@extends('base')

@section('content')
    <div class="bg-light mb-5 text-center p-5">
        <div class="container">
            <h1>Agence lorem ipsum</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum labore neque nobis, quos iusto odit! Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, corporis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi, doloribus. </p>
        </div>
    </div>

    <div class="container">
        <h2>Nos derniers bien</h2>

        <div class="row">
            @foreach($properties as $property)
                <div class="col">
                    @include('property.card')
                </div>
            @endforeach
        </div>    
    </div>
@endsection