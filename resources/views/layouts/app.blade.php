<!DOCTYPE html>
<html lang="es" class="antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', $perfil['nombre'] . ' — ' . $perfil['titulo'])</title>
    <meta name="description" content="{{ $perfil['titulo'] }}. {{ $perfil['stack'] }}. Portafolio y proyectos en producción.">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white font-sans text-slate-600">

    @include('portfolio.partials.nav')

    <main>
        @yield('content')
    </main>

    @include('portfolio.partials.footer')

</body>
</html>
