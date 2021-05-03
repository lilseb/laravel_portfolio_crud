@extends('layouts.index')

@include('layouts.flash')
@section('content')
    @include('partial.backpart.navAdmin')
    <div class="container">
        <h3 class="text-center">ADD SERVICE</h3>
        <a href={{route('admin.index')}} class="text-center">Back admin</a>
        <form action={{ route('service.store') }} method="post" class="w-75 mx-auto">
            @csrf
            <div class="my-3">
                <label for="titre">Titre : </label>
                <input type="text" class="form-control  @error('titre') is-invalid @enderror" id="titre" name="titre">
                @error('titre')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="my-3">
                <label for="description">Description : </label>
                <input type="text" class="form-control  @error('description') is-invalid @enderror" id="description" name="description">
                @error('description')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="my-3">
                <label for="icon">Lien de l'icone</label>
                <input type="text" class="form-control  @error('icon') is-invalid @enderror" id="icon" name="icon">
                @error('icon')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
@endsection
