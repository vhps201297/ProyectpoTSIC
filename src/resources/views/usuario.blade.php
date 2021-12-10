@extends('layout')

@section('title', __('Usuario'))

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-5 col-lg-4">
                <div class="card mb-2">
                    <img class="img-fluid mx-5 mt-5" src="/img/avatar.svg" alt="Perfil">
                    <div class="card-body">
                        <h5 class="card-title">Perfil</h5>
                        <hr>
                        <h6 class="card-subtitle text-muted">{{$users[0]->name}}</h6><br>
                        <h6 class="card-subtitle text-muted">{{$users[0]->email}}</h6><br>
                        <h6 class="card-subtitle text-muted">Github <a href="https://github.com/vhps201297/">https://github.com/vhps201297/</a></h6>
                        <hr>
                        <p>Nos gusta el desarrollo de software, pero me gusta más la clase de TSIC II</p>
                    </div>
                </div>
                
            </div>

            <div class="col-12 col-md-7 col-lg-8">
                <h1 class="display-4 text-primary">{{$users[0]->name}}</h1>
                <p class="text-secondary">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius eos consequuntur provident tenetur nesciunt iusto quibusdam omnis? Inventore quidem fuga nihil quo doloribus. Nostrum esse, sit quibusdam reiciendis magni doloremque!</p>
                <hr>
                <button class="btn btn-outline-primary btn-block">Contáctame</button>
            </div>
        </div>
    </div>
@endsection