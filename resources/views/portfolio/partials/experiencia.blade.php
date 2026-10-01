<section id="experiencia" class="border-b border-slate-200 bg-white">
    <div class="mx-auto max-w-5xl px-6 py-20">
        <h2 class="text-xs font-bold uppercase tracking-[0.2em] text-accent-600">Experiencia profesional</h2>
        <p class="mt-3 text-2xl font-bold text-navy-900 sm:text-3xl">Dónde he trabajado</p>

        <div class="mt-12 space-y-12">
            @foreach ($experiencia as $puesto)
                <article class="relative border-l-2 border-slate-200 pl-6 md:pl-8">
                    <span class="absolute -left-[7px] top-2 h-3 w-3 rounded-full border-2 border-white bg-accent-500"></span>

                    <div class="flex flex-wrap items-baseline gap-x-3 gap-y-1">
                        <h3 class="text-xl font-bold text-navy-900">{{ $puesto['puesto'] }}</h3>
                        <span class="text-sm font-semibold text-accent-600">{{ $puesto['empresa'] }}</span>
                    </div>

                    <p class="mt-1 text-sm text-slate-500">
                        {{ $puesto['periodo'] }} · {{ $puesto['duracion'] }}
                    </p>

                    <p class="mt-4 max-w-3xl text-slate-600">{{ $puesto['resumen'] }}</p>

                    <div class="mt-8 grid gap-6 md:grid-cols-3">
                        @foreach ($puesto['bloques'] as $bloque)
                            <div class="rounded-xl border border-slate-200 bg-slate-50 p-5">
                                <h4 class="text-xs font-bold uppercase tracking-[0.15em] text-slate-500">
                                    {{ $bloque['titulo'] }}
                                </h4>
                                <ul class="mt-4 space-y-3 text-sm leading-relaxed text-slate-600">
                                    @foreach ($bloque['puntos'] as $punto)
                                        <li class="flex gap-2.5">
                                            <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-accent-500"></span>
                                            <span>{{ $punto }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>
