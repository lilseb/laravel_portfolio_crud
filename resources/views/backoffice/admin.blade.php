@extends('layouts.index')

@section('content')
        @include('partial.backpart.navAdmin')
        <h1 class="text-center">Admin</h1>
        <div class="container">
                <div class="mb-2">
                        <div class="">
                                <div class="card">

                                        <div class="card-header">
                                                <h4>About</h4>

                                        </div>

                                        <div class="card-body">
                                        <a class="btn btn-primary mx-auto" href={{ route('about.index') }}>Voir</a>
                                        </div>

                                </div>
                        </div>
                </div>

        </div>
@endsection
