<header class="sticky top-0 z-50 bg-navy-900/95 backdrop-blur">
    <div class="mx-auto flex max-w-5xl items-center justify-between px-6 py-4">
        <a href="#inicio" class="text-sm font-semibold tracking-wide text-white">
            Gabriel<span class="text-accent-400">Parra</span>
        </a>

        <nav class="hidden items-center gap-8 text-sm text-slate-300 md:flex">
            <a href="#experiencia" class="nav-link relative transition hover:text-white">Experiencia</a>
            <a href="#proyectos" class="nav-link relative transition hover:text-white">Proyectos</a>
            <a href="#habilidades" class="nav-link relative transition hover:text-white">Habilidades</a>
            <a href="#formacion" class="nav-link relative transition hover:text-white">Formación</a>
        </nav>

        <a href="mailto:{{ $perfil['email'] }}"
           class="rounded-full bg-accent-400 px-4 py-2 text-sm font-semibold text-navy-900 transition hover:bg-accent-300">
            Contactar
        </a>
    </div>
</header>
