@extends('layouts.index')

@include('layouts.flash')
@section('content')
    @include('partial.bo.navAdmin')
    <div class="container">
        <h3 class="text-center">Details</h3>
        <a href={{route('admin.index')}}>Back admin</a>
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Show </h3>
            </div>
            <div class="card-body">
                <p><span class="font-weight-light">Titre : </span>{{$service->titre}}</p>
                <p><span class="font-weight-light"> Description : </span>{{$service->description}}</p>
                <p><span class="font-weight-light">Lien de l'icone : </span>{{$service->icon}}</p>
            </div>
            <div class="card-footer d-flex">
                <a href={{route('service.edit', $service->id)}} class="btn btn-primary mx-1">edit</a>
                <form action={{route('service.destroy', $service->id)}} method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mb-1">del</button>
                </form>

            </div>
        </div>
    </div>
@endsection
