@extends('layouts.index')

@include('layouts.flash')
@section('content')
    @include('partial.backpart.navAdmin')
    <div>
        <h3 class="text-center">Details</h3>
        <a href={{route('admin.index')}}>Back to admin</a>

        <div class="card">
            <div>
                <h3 class="text-center pb-5">Show </h3>
            </div>

            <div class="text-center">
                <p><span >Compteur : </span>{{$fact->count}}</p>
                <p><span> Description : </span>{{$fact->description}}</p>
                <p><span>Lien de l'icone : </span>{{$fact->icon}}</p>
            </div>

            <div class="text-center">
                <a href={{route('fact.edit', $fact->id)}} class="btn btn-primary mx-1 my-2">edit</a>
                <form action={{route('fact.destroy', $fact->id)}} method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mb-1">delete</button>
                </form>

            </div>
        </div>
    </div>
@endsection
