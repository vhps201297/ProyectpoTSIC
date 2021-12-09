<nav class="navbar navbar-light navbar-expand-md bg-white shadow-sm">
    
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">{{config('app.name')}}</a> 

        <button class="navbar-toggler" type="button" 
            data-toggle="collapse" 
            data-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" 
            aria-expanded="false" 
            aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav nav-pills">
                <li class="nav-item ">
                    <a class="nav-link {{setActive('home')}}" href="{{ route('home')}}">{{__('Home')}}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{setActive('user')}}" href="{{ route('user')}}">{{__('User')}}</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{setActive('proyectos*')}}" href="{{ route('proyectos.index')}}">@lang('Projects')</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{setActive('about')}}" href="{{ route('about')}}">@lang('About')</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link {{setActive('contact')}}" href="{{ route('contact')}}">@lang('Contact')</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link {{setActive('login')}}" href="{{route('login')}}">{{__('Login')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-outline-primary {{setActive('register')}}" href="{{route('register')}}">{{__('Registro')}}</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Cerrar sesión</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
    
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>