@extends('layout')

@section('title', $project->title)

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-8 mx-auto">
                @if ($project->image)
                    <img class="card-img-top"
                    src="/storage/{{$project->image}}" alt="{{$project->title}}">
                @endif
                <div class="bg-white rounded p-5 shadow">
                    <h1>{{$project->title}}</h1>
                    <p class="text-secondary">{{$project->description}}</p>
                    <p class="text-black-50">{{$project->created_at->diffForHumans()}}</p>
                    
                    <div class="d-flex justify-content-between ">
                        <a href="{{route('proyectos.index')}}">Regresar</a>
                        @auth
                            <div class="btn-group btn-group-sm">
                                <a class="btn btn-primary active"
                                href="{{route('proyectos.edit', $project)}}">Editar</a>
                                <a class="btn btn-danger"
                                href="#" onclick="document.getElementById('delete-project').submit();">Eliminar</a>
                            </div>
                            <form class="d-none"
                            id="delete-project" method="POST" action="{{route('proyectos.destroy', $project)}}">
                                @csrf @method('DELETE')
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
     
@endsection