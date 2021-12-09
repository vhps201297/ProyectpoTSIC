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
                <h1 class="display-4 text-primary">About</h1>
                <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident facilis deleniti accusantium qui corrupti non dolore adipisci, culpa ut dicta omnis atque, praesentium dolor quaerat? Nulla similique illo mollitia architecto?</p>
                <a class="btn btn-primary btn-block active"
                href="{{route('contact')}}">Contáctame</a>
                <a class="btn btn-outline-primary btn-block"
                 href="{{route('proyectos.index')}}">Mi portafolio</a>
            </div>
        </div>
    </div>
@endsection