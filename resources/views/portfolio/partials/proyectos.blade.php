<section id="proyectos" class="border-b border-slate-200 bg-slate-50">
    <div class="mx-auto max-w-5xl px-6 py-20">
        <h2 class="text-xs font-bold uppercase tracking-[0.2em] text-accent-600">Proyectos destacados</h2>
        <p class="mt-3 text-2xl font-bold text-navy-900 sm:text-3xl">Plataformas en producción</p>

        <div class="mt-12 grid gap-8 lg:grid-cols-2">
            @foreach ($proyectos as $proyecto)
                <article class="group flex flex-col rounded-2xl border border-slate-200 bg-white p-7 shadow-sm transition hover:border-accent-400 hover:shadow-md">
                    <div class="border-l-4 border-accent-400 pl-4">
                        <h3 class="text-2xl font-bold text-navy-900">{{ $proyecto['nombre'] }}</h3>
                        <a href="{{ $proyecto['url'] }}" target="_blank" rel="noopener"
                           class="mt-1 inline-flex items-center gap-1.5 text-sm font-medium text-accent-600 hover:underline">
                            {{ $proyecto['dominio'] }}
                            <svg class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.8">
                                <path d="M7 13 13 7M13 7H8.5M13 7v4.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>

                    <p class="mt-4 text-xs font-medium uppercase tracking-wide text-slate-400">{{ $proyecto['rol'] }}</p>

                    <p class="mt-4 text-sm leading-relaxed text-slate-600">{{ $proyecto['descripcion'] }}</p>

                    <ul class="mt-5 space-y-2.5 text-sm leading-relaxed text-slate-600">
                        @foreach ($proyecto['destacados'] as $destacado)
                            <li class="flex gap-2.5">
                                <span class="mt-2 h-1.5 w-1.5 shrink-0 rounded-full bg-accent-500"></span>
                                <span>{{ $destacado }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <div class="mt-auto flex flex-wrap gap-2 border-t border-slate-200 pt-5">
                        @foreach ($proyecto['stack'] as $tecnologia)
                            <span class="rounded-md bg-slate-100 px-2.5 py-1 text-xs font-medium text-slate-700">
                                {{ $tecnologia }}
                            </span>
                        @endforeach
                    </div>

                    <a href="{{ $proyecto['url'] }}" target="_blank" rel="noopener"
                       class="mt-6 inline-flex w-fit items-center gap-2 rounded-full bg-navy-900 px-4 py-2 text-sm font-semibold text-white transition hover:bg-navy-800">
                        Visitar {{ $proyecto['nombre'] }}
                    </a>
                </article>
            @endforeach
        </div>
    </div>
</section>
