@extends('layouts.index')

@include('layouts.flash')
@section('content')
    @include('partial.backpart.navAdmin')
    <div class="container">
        <h3 class="text-center">Ajouter un nv fait</h3>
        <a href={{route('admin.index')}} class="text-center">Back admin</a>
        <form action={{ route('fact.store') }} method="post" class="w-75 mx-auto">
            @csrf
            <div class="form-group">
                <label for="count">Compteur : </label>
                <input type="number" class="form-control  @error('count') is-invalid @enderror" id="count" name="count">
                @error('count')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Description : </label>
                <input type="text" class="form-control  @error('description') is-invalid @enderror" id="description" name="description">
                @error('description')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror
            </div>
            <div class="form-group">
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
