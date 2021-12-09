@extends('layout')

@section('title', __('Proyecto Nuevo'))

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                @include('partials.validation_errors')
                <form class="bg-white py-3 px-4 rounded" 
                    method="POST" 
                    enctype="multipart/form-data"
                    action={{route('proyectos.store')}}>
                    <h1 class="display-4">Creación de un nuevo proyecto</h1>
                    <hr>
                    @include('projects._form', ['button_text' => 'Guardar'])
                </form>
            </div>
        </div>
    </div>
@endsection