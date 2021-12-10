@extends('layout')

@section('title', __('About'))

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6">
                <img class="img-fluid mb-4" 
                src="/img/about.svg" alt="About">
            </div>
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">Acerca de Nosotros</h1>
                <p class="text-secondary">Somos estudiantes del último semestre de la carrera de Ingeniería en Computación, de la Universidad Nacional Autónoma de México. </p>
                <a class="btn btn-primary btn-block active"
                href="{{route('contact')}}">Contáctame</a>
                <a class="btn btn-outline-primary btn-block"
                 href="{{route('proyectos.index')}}">Mi portafolio</a>
            </div>
        </div>
    </div>
@endsection