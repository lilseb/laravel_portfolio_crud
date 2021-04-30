@extends('layouts.index')

@section('content')


    @include('partial.header')

    @include('template.hero')

    <main id="main">
        @include('template.about')
        @include('template.facts')
        @include('template.skills')
        @include('template.portfolio')
        @include('template.services')
        @include('template.contact')
    </main>
    @include('partial.footer')
    
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
@endsection