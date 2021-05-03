@extends('layouts.index')

@include('layouts.flash')
@section('content')
    @include('partial.backpart.navAdmin')
    <div>
        <h3 class="text-center">Modifier {{$portfolio->nom}}</h3>
        <form action={{route('portfolio.update', $portfolio->id)}} method="post" class="w-75 mx-auto">
            @csrf

            @method('PUT')
            <div class="my-5">
                <label for="titre">Nom du projet : </label>
                <input type="text" class="form-control  @error('titre') is-invalid @enderror" id="titre" value="{{$portfolio->titre}}" name="titre">
                @error('titre')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="my-5">
                <label for="filter">Type de projet : </label>
                <input type="text" class="form-control  @error('filter') is-invalid @enderror" id="filter" value="{{$portfolio->filter}}" name="filter">
                @error('filter')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="my-5">
                <label for="lien">Lien de l'image</label>
                <input type="text" class="form-control  @error('lien') is-invalid @enderror" id="lien" value="{{$portfolio->lien}}" name="lien">
                @error('lien')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
@endsection
