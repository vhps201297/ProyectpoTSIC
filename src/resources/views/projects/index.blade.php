@extends('layout')

@section('title', __('Proyectos'))

@section('content')

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1 class="display-4">Proyectos</h1>
            @auth
                <a class="btn btn-primary active" href={{route('proyectos.create')}}>Crear nuevo proyecto</a>
            @endauth
        </div>
        <p class="lead text-secondary">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. A, officiis magni recusandae error et facilis ratione distinctio architecto quo delectus.</p>
        
        <div class="d-flex flex-wrap justify-content-between align-item-start">
            
            @forelse ($projects as $project)
                <div class="card border-0 shadow-sm mx-auto mt-4" style="width:18rem;">
                    @if ($project->image)
                        <img class="card-img-top"
                        src="/storage/{{$project->image}}" alt="{{$project->title}}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{route('proyectos.show', $project)}}">{{$project->title}}</a>
                        </h5>
                        <h6 class="card-subtitle">{{$project->created_at->format('d-m-y')}}</h6>
                        <p class="card-text text-truncate">{{$project->description}}</p>
                        <a class="btn btn-primary btn-sm active" href="{{route('proyectos.show', $project)}}">Ver mas ...</a>
                    </div>
                    
                </div>
            @empty
                <li class="list-group-item border-0 mb-3 shadow-sm">No hay elementos que mostrar.</li>
                
            @endforelse
             
        </div>
    </div>
    
@endsection