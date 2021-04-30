@extends('layouts.index')

@section('content')
    @include('partial.backpart.navAdmin')
    <div class="container">
        <h3 class="text-center">ADD</h3>
        <form action={{ route('about.store') }} method="post" class="w-75 mx-auto">
            @csrf
            <div class="">
                <div class="">
                    <input type="text" class="form-control "  placeholder="Nom"
                        name="nom">
                </div>
                <div class="">
                    <input type="text" class="form-control " 
                        placeholder="Prenom" name="prenom">
                </div>
            </div>
            <div class=" my-2">
                <div class="">
                    <input type="text" class="form-control "  placeholder="titre" name="titre">
                </div>
                <div class="">
                    <input type="email" class="form-control " placeholder="email" name="email" >
                </div>
            </div>
            <div class=" my-2">
                <div class="">
                    <input type="text" class="form-control " placeholder="votre site web" name="website" >
                </div>
            </div>
            <div class=" my-2">
                <div class="">
                    <input type="tel" class="form-control" placeholder="téléphone" name="phone" >
                </div>
                <div class="">
                    <input type="text" class="form-control " placeholder="votre ville" name="city" >
                </div>
            </div>
            <div class=" my-2">
                <div class="">
                    <input type="text" class="form-control " placeholder="freelance" name="freelance">
                </div>
                <div class="">
                    <input type="text" class="form-control " placeholder="étude" name="degree" >
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control  " name="description" placeholder="Décrivez votre situation" id="exampleFormControlTextarea1" s="3"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Accepter</button>
        </form>
    </div>
@endsection

