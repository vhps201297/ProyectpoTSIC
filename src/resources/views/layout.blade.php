<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <script src="{{mix('js/app.js')}}" defer></script>
    <title>@yield('title', 'Blog de prueba')</title>
</head>
<body>
    <div id="app" class="d-flex flex-column justify-content-between h-screen">
        <header>
            @include('partials/nav')
            @include('partials.session-status')
        </header>
        <main class="py-4">     
            @yield('content')
        </main>

        <footer class="bg-white text-center py-3 text-black-50 shadow">
            {{config('app.name')}} by Victor Pólito | Copyright @ {{date('Y')}}   
        </footer>
    </div>
</body>
</html>