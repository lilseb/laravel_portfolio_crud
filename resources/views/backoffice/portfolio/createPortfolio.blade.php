@extends('layouts.index')

@include('layouts.flash')
@section('content')
    @include('partial.backpart.navAdmin')
    <div class="container">
        <h3 class="text-center">ADD</h3>
        <a href={{route('admin.index')}} class="text-center">Back to admin</a>
        <form action={{ route('portfolio.store') }} method="post" class="w-75 mx-auto">
            @csrf

            <div class="form-group">
                <label for="titre">Nom du projet : </label>
                <input type="text" class="form-control  @error('titre') is-invalid @enderror" id="titre" name="titre">
                @error('titre')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group">
                <label for="filter">Type de projet : </label>
                <input type="text" class="form-control  @error('filter') is-invalid @enderror" id="filter" name="filter">
                @error('filter')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <div class="form-group">
                <label for="lien">Lien de l'image</label>
                <input type="text" class="form-control  @error('lien') is-invalid @enderror" id="lien" name="lien">
                @error('lien')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Accepter</button>
        </form>
    </div>
@endsection
