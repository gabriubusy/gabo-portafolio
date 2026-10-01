<header data-nav class="sticky top-0 z-50 border-b border-line bg-paper/85 backdrop-blur-md transition-shadow duration-300">
    <div class="mx-auto flex max-w-6xl items-center justify-between gap-6 px-5 py-3 sm:px-10">
        <a href="#inicio" class="inline-flex items-center gap-2.5 text-ink">
            <span class="flex h-[34px] w-[34px] items-center justify-center rounded-[10px] bg-ink font-display text-[15px] font-extrabold text-surface">GP</span>
            <span class="font-mono text-sm font-medium">gabriel<span class="text-accent">.</span>parra</span>
        </a>

        <nav class="hidden items-center gap-7 text-[15px] text-muted lg:flex">
            <a href="#proyectos" class="transition hover:text-ink">Proyectos</a>
            <a href="#experiencia" class="transition hover:text-ink">Experiencia</a>
            <a href="#habilidades" class="transition hover:text-ink">Habilidades</a>
            <a href="#ia" class="transition hover:text-ink">IA</a>
            <a href="#formacion" class="transition hover:text-ink">Formación</a>
        </nav>

        <div class="flex items-center gap-1.5">
            <button type="button" data-theme-toggle aria-label="Cambiar tema"
                    class="flex h-11 w-11 cursor-pointer items-center justify-center rounded-xl border border-line bg-surface text-ink transition hover:border-ink/30">
                <x-icon name="moon" class="dark:hidden" />
                <x-icon name="sun" class="hidden dark:block" />
            </button>
            <a href="{{ $perfil['github'] }}" target="_blank" rel="noopener" aria-label="GitHub"
               class="hidden h-11 w-11 items-center justify-center rounded-xl text-ink transition hover:bg-surface sm:flex">
                <x-icon name="github" brand :size="19" />
            </a>
            <a href="{{ $perfil['linkedin'] }}" target="_blank" rel="noopener" aria-label="LinkedIn"
               class="hidden h-11 w-11 items-center justify-center rounded-xl text-ink transition hover:bg-surface sm:flex">
                <x-icon name="linkedin" :size="19" />
            </a>
            <a href="#contacto" aria-label="Escríbeme"
               class="ml-1.5 inline-flex items-center gap-2 rounded-full bg-ink px-4 py-2.5 text-sm font-semibold text-surface transition hover:opacity-90">
                <x-icon name="mail" :size="16" />
                <span class="hidden sm:inline">Escríbeme</span>
            </a>
        </div>
    </div>
</header>
