@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ url('/beheer') }}"> Go back </a>
            </div>
        </div>
    </div>

    <form action="{{ route('wish.update', $wish->id) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="row">

            <div class="col-lg-10">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="naam" value="{{ $wish->naam }}" class="form-control" placeholder="Name">
                </div>
            </div>

            <div class="col-lg-10">
                <div class="form-group">
                    <strong>Afbeelding link:</strong>
                    <input type="text" name="plaatje" value="{{ $wish->plaatje }}" class="form-control" placeholder="Afbeelding Link">
                </div>
            </div>

            <div class="col-lg-10">
                <div class="form-group">
                    <strong>Omschrijving:</strong>
                    <input type="text" name="omschrijving" value="{{ $wish->omschrijving }}" class="form-control" placeholder="Omschrijving">
                </div>
            </div>

            <div class="col-lg-10">
                <div class="form-group">
                    <strong>Prijs:</strong>
                    <input type="number" name="prijs" value="{{ $wish->prijs }}" class="form-control" placeholder="Prijs">
                </div>
            </div>

            <div class="col-lg-10">
                <div class="form-group">
                    <strong>Weblink:</strong>
                    <input type="text" name="weblink" value="{{ $wish->weblink }}" class="form-control" placeholder="Prijs">
                </div>
            </div>



            <div class="col-lg-10">
                <div class="form-group">
                    <button type="submit" class="btn- btn-primary">Submit</button>
                </div>
            </div>

        </div>
    </form>

@endsection
