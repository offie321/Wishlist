@extends('layouts.app')

@section('titel')

@endsection()

@section('content')

{{--    @if (Route::has('register'))--}}
{{--        header('location : login.blade.php');--}}
{{--    @endif--}}

    @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <a href="{{ route('wish.create')}}" class="btn btn-success">Toevoegen</a>

    @foreach($wishes as $key => $wish)
    <div class="container wish_container">
        <div class="row">
            <div class="col-12">
                {{$wish->naam}}
            </div>
        </div>
        <div class="row justify-content-around">
            <div class="col-4">
                <img class="wish_image" src="{{ asset('storage/' . $wish->plaatje) }}">
            </div>
            <div class="col-4">
                <div class="row height50 overflow-auto">
                    <div class="col-12">
                        {{$wish->omschrijving}}
                    </div>
                </div>

                <div class="row height50 wish_price">
                    <div class="col-12">
                        <a href="{{ $wish->weblink }}">€{{ $wish->prijs }}</a>
                    </div>
                </div>


            </div>
        </div>
        <br/>
        <div class="row">
            <div class="col-12">
                <form action="{{ route('wish.destroy', $wish->id) }}" method="POST">
                <a class="btn btn-warning" href="{{ route('wish.edit', $wish->id) }}">Aanpassen</a>
                 @csrf
                    @method("DELETE")
                <button type="submit" class="btn btn-danger">Verwijderen</button>
                </form>
            </div>

        </div>
    </div>
    @endforeach


@endsection

{{--https://www.rajapack.nl/blog-nl/wp-content/uploads/2018/11/Creatief-een-cadeau-inpakken.jpg--}}
