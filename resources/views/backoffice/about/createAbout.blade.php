@extends('layouts.index')

@include('layouts.flash')
@section('content')
    @include('partial.backpart.navAdmin')
    <div class="container">
        <h3 class="text-center">Ajouter un nv perso</h3>
        <form action={{ route('about.store') }} method="post" class="w-75 mx-auto">
            @csrf
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control @error('nom') is-invalid @enderror" placeholder="Nom"
                        name="nom">
                    @error('nom')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="col">
                    <input type="text" class="form-control @error('prenom') is-invalid @enderror"
                        placeholder="Prenom" name="prenom">
                    @error('prenom')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="row my-2">
                <div class="col">
                    <input type="text" class="form-control @error('titre') is-invalid @enderror" placeholder="titre" name="titre">
                    @error('titre')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="col">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" name="email">
                    @error('email')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror
        
                </div>
            </div>

            <div class="row my-2">
                <div class="col">
                    <input type="date" class="form-control @error('birthday') is-invalid @enderror" placeholder="date de naissance" name="birthday">
                    @error('birthday')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="col">
                    <input type="url" class="form-control @error('website') is-invalid @enderror" placeholder="votre site web" name="website">
                    @error('website')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror
        
                </div>
            </div>
            
            <div class="row my-2">
                <div class="col">
                    <input type="tel" class="form-control @error('phone') is-invalid @enderror" placeholder="Numéro de téléphone" name="phone">
                    @error('phone')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="col">
                    <input type="text" class="form-control @error('city') is-invalid @enderror" placeholder="votre ville" name="city">
                    @error('city')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror
        
                </div>
            </div>

            <div class="row my-2">
                <div class="col">
                    <input type="text" class="form-control @error('statut') is-invalid @enderror" placeholder="Statut" name="statut">
                    @error('statut')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <div class="col">
                    <input type="text" class="form-control @error('degree') is-invalid @enderror" placeholder="votre degré d'étude" name="degree">
                    @error('degree')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror        
                </div>
            </div>

            <div class="row my-2">
                <div class="col-6">
                    <input type="text" class="form-control @error('age') is-invalid @enderror" placeholder="age" name="age">
                    @error('age')
                        <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control  @error('description') is-invalid @enderror" name="description" placeholder="Décrivez votre situation" id="exampleFormControlTextarea1" rows="3"></textarea>
                @error('description')
                    <span class="invalid-feedback"> <strong>{{ $message }}</strong></span>
                @enderror

            </div>
            <button type="submit" class="btn btn-primary">Valider</button>
        </form>
    </div>
@endsection
