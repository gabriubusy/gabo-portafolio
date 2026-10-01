<section id="inicio" class="relative overflow-hidden bg-navy-900">
    <div class="pointer-events-none absolute -top-40 right-0 h-96 w-96 rounded-full bg-accent-500/15 blur-3xl"></div>

    <div class="relative mx-auto max-w-5xl px-6 py-20 md:py-24">
        <p class="mb-4 inline-flex items-center gap-2 rounded-full border border-accent-400/40 bg-accent-400/10 px-3 py-1 text-xs font-medium text-accent-300">
            <span class="h-1.5 w-1.5 rounded-full bg-accent-400"></span>
            {{ $perfil['ubicacion'] }}
        </p>

        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl">
            {{ $perfil['nombre'] }}
        </h1>

        <p class="mt-4 text-lg text-slate-200">{{ $perfil['titulo'] }}</p>
        <p class="mt-1 text-sm font-semibold text-accent-400">{{ $perfil['stack'] }}</p>

        <div class="mt-8 max-w-3xl space-y-4 text-base leading-relaxed text-slate-300">
            @foreach ($perfil['resumen'] as $parrafo)
                <p>{{ $parrafo }}</p>
            @endforeach
        </div>

        <div class="mt-10 flex flex-wrap gap-3">
            <a href="#proyectos"
               class="rounded-full bg-accent-400 px-5 py-2.5 text-sm font-semibold text-navy-900 transition hover:bg-accent-300">
                Ver proyectos
            </a>
            <a href="{{ $perfil['github'] }}" target="_blank" rel="noopener"
               class="rounded-full border border-white/20 px-5 py-2.5 text-sm font-medium text-slate-200 transition hover:border-accent-400 hover:text-white">
                GitHub
            </a>
            <a href="{{ $perfil['linkedin'] }}" target="_blank" rel="noopener"
               class="rounded-full border border-white/20 px-5 py-2.5 text-sm font-medium text-slate-200 transition hover:border-accent-400 hover:text-white">
                LinkedIn
            </a>
        </div>
    </div>
</section>

<section class="border-b border-slate-200 bg-slate-50">
    <div class="mx-auto max-w-5xl px-6">
        <dl class="grid grid-cols-1 divide-y divide-slate-200 sm:grid-cols-3 sm:divide-x sm:divide-y-0">
            @foreach ($metricas as $metrica)
                <div class="py-8 sm:px-8 sm:first:pl-0 sm:last:pr-0">
                    <dt class="text-3xl font-bold text-navy-900">{{ $metrica['valor'] }}</dt>
                    <dd class="mt-1 text-sm text-slate-500">{{ $metrica['etiqueta'] }}</dd>
                </div>
            @endforeach
        </dl>
    </div>
</section>
