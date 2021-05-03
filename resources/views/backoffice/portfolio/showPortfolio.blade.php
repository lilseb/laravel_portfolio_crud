@extends('layouts.index')

@include('layouts.flash')
@section('content')
    @include('partial.backpart.navAdmin')
    <div class="container">
        <h3 class="text-center">Details</h3>
        <a href={{route('admin.index')}}>Back admin</a>
        <div class="card">
            <div>
                <h3 class="text-center my-3">Show </h3>
            </div>
            <div class="card-body">
                <p><span class="font-weight-light">Titre : </span>{{$portfolio->titre}}</p>
                <p><span class="font-weight-light"> Type de projet : </span>{{$portfolio->filter}}</p>
                <p><span class="font-weight-light">Lien de l'image' : </span>{{$portfolio->lien}}</p>
                <img src={{asset($portfolio->lien)}} alt="projet" class="w-50">
            </div>
            <div class=" d-flex">
                <a href={{route('portfolio.edit', $portfolio->id)}} class="btn btn-primary mx-1">edit</a>
                <form action={{route('portfolio.destroy', $portfolio->id)}} method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mb-1">del</button>
                </form>

            </div>
        </div>
    </div>
@endsection
