<section id="inicio" class="relative">
    <div aria-hidden="true" class="pointer-events-none absolute inset-0 overflow-hidden">
        <div class="orb -left-24 top-10 h-80 w-80 bg-accent" style="--x: 80px; --y: 50px; --t: 24s"></div>
        <div class="orb right-0 top-1/3 h-96 w-96 bg-wildoow" style="--x: -70px; --y: -60px; --t: 28s"></div>
    </div>

    <div class="relative mx-auto max-w-6xl px-5 pb-24 pt-14 sm:px-10 md:pt-20 lg:pb-28">
    <div class="grid items-center gap-16 lg:grid-cols-[minmax(0,1.02fr)_minmax(0,1fr)]">
        <div class="flex flex-col gap-7">
            <div class="rise flex flex-wrap gap-2.5" style="--d: 0ms">
                <span class="inline-flex items-center gap-2 rounded-full border border-line bg-surface px-3 py-1.5 text-[13px] font-medium text-green">
                    <span class="live-dot h-2 w-2 rounded-full bg-current"></span>
                    Disponible para proyectos en remoto
                </span>
                <span class="inline-flex items-center gap-1.5 rounded-full border border-line bg-surface px-3 py-1.5 text-[13px] text-muted">
                    <x-icon name="map-pin" :size="14" />
                    {{ $perfil['ubicacion'] }}
                </span>
            </div>

            <h1 class="rise font-display text-[2.6rem] font-extrabold leading-[0.98] tracking-[-0.04em] text-ink sm:text-6xl lg:text-[4.5rem]" style="--d: 80ms">
                Construyo productos web completos y los llevo a <span class="text-accent">producción.</span>
            </h1>

            <p class="rise max-w-[540px] text-lg leading-relaxed text-muted" style="--d: 160ms">
                Soy <strong class="font-semibold text-ink">{{ $perfil['nombre'] }}</strong>, ingeniero en sistemas y desarrollador web full stack.
                {{ $perfil['resumen'] }}
            </p>

            <div class="rise flex flex-wrap gap-3" style="--d: 240ms">
                <a href="#proyectos" class="inline-flex items-center gap-2 rounded-full bg-ink px-5 py-3.5 text-[15px] font-semibold text-surface transition hover:opacity-90">
                    Ver proyectos
                    <x-icon name="arrow-down" :size="17" />
                </a>
                <a href="mailto:{{ $perfil['email'] }}" class="inline-flex items-center gap-2 rounded-full border border-line bg-surface px-5 py-3.5 text-[15px] font-semibold text-ink transition hover:border-ink/30">
                    <x-icon name="mail" :size="17" />
                    Escríbeme
                </a>
            </div>

            <div class="rise flex flex-col gap-3 pt-2" style="--d: 320ms">
                <p class="font-mono text-xs uppercase tracking-[0.12em] text-muted">Stack principal</p>
                <div class="flex flex-wrap gap-2">
                    @foreach ($perfil['stack'] as [$label, $logo])
                        <x-tech :label="$label" :logo="$logo" />
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Firma de la pagina: los productos en produccion, tal como se ven hoy --}}
        <div class="rise relative pb-14 pl-6 pt-6" style="--d: 400ms">
            <div class="bob absolute -right-6 top-0 w-[78%]" style="--b: -3s">
                <x-browser dominio="wildoow.com" imagen="images/proyectos/wildoow.jpg" alt="Página de inicio de Wildoow" alto="h-[300px]" class="rotate-3" />
            </div>
            <div class="bob relative mt-30 w-[88%]">
                <x-browser dominio="conexoo.com" imagen="images/proyectos/conexoo.jpg" alt="Página de inicio de Conexoo" alto="h-[320px]" />
            </div>

            <div class="bob shadow-window absolute bottom-4.5 left-0 flex flex-col gap-2 rounded-2xl border border-line bg-surface px-4 py-3.5" style="--b: -1.5s">
                <span class="inline-flex items-center gap-2 text-[13px] font-semibold text-green">
                    <span class="live-dot h-2 w-2 rounded-full bg-current"></span>
                    {{ count($destacados) }} plataformas en producción
                </span>
                <span class="font-mono text-xs text-muted">{{ collect($destacados)->pluck('nombre')->implode(' · ') }}</span>
            </div>
        </div>
    </div>
    </div>
</section>
