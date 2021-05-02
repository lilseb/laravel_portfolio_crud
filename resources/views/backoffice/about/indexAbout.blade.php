@extends('layouts.index')
@section('content')
    @include('partial.backpart.navAdmin')
    <section id="about">
        <h3 class="text-center mb-3">About</h3>
        <div class="container">
            <a href={{route('admin.index')}} class="text-center">Back Admin</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="">#</th>
                        <th scope="">Nom</th>
                        <th scope="">Prenom</th>
                        <th scope="">textAbout</th>
                        <th scope="">Birthday</th>
                        <th scope="">site</th>
                        <th scope="">phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($about as $item)




                        <tr>

                            
                            <th scope="">{{$item->id}}</th>
                            <td>{{$item->nom}}</td>
                            <td>{{$item->prenom}}</td>
                            <td>{{$item->textAbout}}</td>
                            <td>{{$item->birthday}}</td>
                            <td>{{$item->website}}</td>
                            <td>{{$item->phone}}</td>
                            <td>
                                <a href={{route('about.edit', $item->id)}} class="btn btn-success mb-1">edit</a>
                                <a href={{route('about.show', $item->id)}} class="btn btn-success mb-1">show</a>
                                <form action={{route('about.destroy', $item->id)}} method="post">
                                    
                                    <button class="btn btn-success mb-1">delete</button>
                                </form>
                            </td>
                        </tr>                                                
                    @endforeach
                </tbody>
            </table>
            <table class="table">
                <thead>
                    <tr>

                        <th scope="">titre</th>
                        <th scope="">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($about as $item)
                        <tr>
                            <td>{{$item->job}}</td>
                            <td>{{$item->description}}</td>
                        </tr>                                                
                    @endforeach
                </tbody>
            </table>

            <a href={{route('about.create')}} class="btn btn-success">ADD</a>
        </div>
    </section>
@endsection