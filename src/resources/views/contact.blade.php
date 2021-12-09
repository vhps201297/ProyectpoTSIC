@extends('layout')
@section('title', __('Contacto'))
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                
                    
                <form class="bg-white shadow rounded py-3 px-4" method="POST" action={{route('message.store')}}>
                    @csrf
                    <h1 class="display-4">{{__('Contact')}}</h1>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input class="bg-light form-control shadow-sm @error('name') is-invalid @else border-0 @enderror"
                        type="text" id="name"  name="name" placeholder={{__('Name')}} value="{{old('name')}}" >
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control shadow-sm bg-light @error('email') is-invalid @else border-0 @enderror"
                        id="email" type="email" name="email" placeholder={{__('Email')}} value={{old('email')}}>
                        @error('email')
                            <span class="invalid-feedback" role="alerts">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        <input class="form-control shadow-sm bg-light @error('subject') is-invalid @else border-0 @enderror"
                        id="subject" type="text" name="subject" placeholder={{__('Subject')}} value={{old('subject')}}>
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>                    
                        @enderror
                    </div>
            
                    <div class="form-group">
                        <label for="content">Mensaje</label>
                        <textarea  class="form-control shadow-sm bg-light @error('subject') is-invalid @else border-0 @enderror" 
                        id="content" name="content" placeholder={{__('Message')}} value={{old('content')}}></textarea>
                        @error('content')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>                    
                        @enderror
                    </div>
                    
                    <button class="btn btn-primary btn-block active">@lang('Send')</button>
                    
                </form>
            </div>
        </div>
        
    </div>
    
@endsection