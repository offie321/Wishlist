@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ url('/beheer') }}"> Go back </a>
        </div>
    </div>
</div>

<form method="POST" enctype="multipart/form-data" action="{{ route('wish.store') }}">
    @csrf
    <div class="row">

        <div class="col-lg-10">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="naam" class="form-control" placeholder="Name">
            </div>
        </div>

        <div class="col-lg-10">
            <div class="form-group">
                <strong>Afbeelding link:</strong>
                <input type="file" name="plaatje" class="form-control" placeholder="Afbeelding">
            </div>
        </div>

        <div class="col-lg-10">
            <div class="form-group">
                <strong>Omschrijving:</strong>
                <input type="text" name="omschrijving" class="form-control" placeholder="Omschrijving">
            </div>
        </div>

        <div class="col-lg-10">
            <div class="form-group">
                <strong>Prijs:</strong>
                <input type="number" name="prijs" class="form-control" placeholder="Prijs">
            </div>
        </div>

        <div class="col-lg-10">
            <div class="form-group">
                <strong>Weblink:</strong>
                <input type="text" name="weblink" class="form-control" placeholder="Prijs">
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
