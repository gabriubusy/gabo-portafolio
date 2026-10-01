<!DOCTYPE html>
<html lang="es" class="antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', $perfil['nombre'] . ' — Desarrollador Web Full Stack')</title>
    <meta name="description" content="{{ $perfil['titulo'] }}. Creador de Conexoo y Wildoow. React, Next.js, TypeScript, Laravel y agentes de IA.">
    <meta name="theme-color" content="#10162b">

    {{-- Aplica el tema antes de pintar para evitar el parpadeo --}}
    <script>
        (() => {
            let tema = null;
            try { tema = localStorage.getItem('tema'); } catch (e) {}
            if (!tema) tema = matchMedia('(prefers-color-scheme: dark)').matches ? 'oscuro' : 'claro';
            document.documentElement.dataset.theme = tema;

            // Activa las animaciones de scroll; si el JS no llega a cargar, se muestra todo
            document.documentElement.classList.add('js');
            setTimeout(() => {
                if (!document.documentElement.classList.contains('reveal-ready')) {
                    document.documentElement.classList.remove('js');
                }
            }, 3000);
        })();
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-paper font-sans text-ink">

    @include('portfolio.partials.nav')

    <main class="overflow-x-clip">
        @yield('content')
    </main>

</body>
</html>
