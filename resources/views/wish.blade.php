@extends('layouts.app')

@section('titel')
<h1>Wishes</h1>
@endsection()

@section('content')
    @foreach($wishes as $key => $wish)
<div class="container wish_container">
    <div class="row">
        <div class="col-12">
            {{ $wish->naam }}
        </div>
    </div>
    <div class="row justify-content-around">
        <div class="col-4">
            <img class="wish_image" src="{{ asset('storage/' . $wish->plaatje) }}">
        </div>
        <div class="col-4">
            <div class="row height50 overflow-auto">
                <div class="col-12">
                    {{ $wish->omschrijving }}
                </div>
            </div>

            <div class="row height50 wish_price">
                <div class="col-12">
                    <a href="{{ $wish->weblink }}">€{{ $wish->prijs }}</a>
                </div>
            </div>

        </div>
    </div>
</div>
    @endforeach

@endsection
