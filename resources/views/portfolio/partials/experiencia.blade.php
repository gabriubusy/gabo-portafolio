<section id="experiencia" class="border-t border-line">
    <div class="mx-auto grid max-w-6xl items-start gap-12 px-5 py-24 sm:px-10 lg:grid-cols-[minmax(0,4fr)_minmax(0,8fr)] lg:gap-16 lg:py-28">
        <div data-reveal class="flex flex-col gap-5 lg:sticky lg:top-28">
            @include('portfolio.partials.encabezado', ['icono' => 'briefcase-business', 'etiqueta' => 'Experiencia', 'titulo' => 'Dónde he trabajado'])
            <p class="leading-relaxed text-muted">{{ $perfil['sobre_mi'] }}</p>
        </div>

        <div class="flex flex-col gap-10">
            @foreach ($experiencia as $puesto)
                <article data-reveal class="flex flex-col gap-7 rounded-3xl border border-line bg-surface p-7 sm:p-9" style="--d: 150ms">
                    <div class="flex flex-wrap items-center justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <span class="flex h-14 w-14 items-center justify-center rounded-[14px] bg-[#2b3fe0] text-white">
                                <x-icon name="code-xml" :size="26" />
                            </span>
                            <div>
                                <h3 class="font-display text-2xl font-bold tracking-[-0.02em] text-ink">{{ $puesto['puesto'] }}</h3>
                                <p class="mt-1 font-mono text-[13px] font-medium text-accent">{{ $puesto['empresa'] }}</p>
                            </div>
                        </div>
                        <p class="inline-flex items-center gap-2 rounded-[10px] bg-paper px-3 py-2 font-mono text-xs text-muted">
                            <x-icon name="clock" :size="14" />
                            {{ $puesto['periodo'] }} · <span data-duracion-desde="{{ $puesto['inicio'] }}">{{ $puesto['duracion'] }}</span>
                        </p>
                    </div>

                    <p class="leading-relaxed text-muted">{{ $puesto['resumen'] }}</p>

                    <div class="grid gap-7 border-t border-line pt-7 md:grid-cols-3">
                        @foreach ($puesto['bloques'] as $bloque)
                            <div class="flex flex-col gap-3.5">
                                <div class="flex items-center gap-2.5">
                                    <span class="flex h-9 w-9 items-center justify-center rounded-[10px] bg-paper text-accent">
                                        <x-icon :name="$bloque['icono']" :size="18" />
                                    </span>
                                    <h4 class="font-mono text-xs uppercase tracking-[0.12em] text-ink">{{ $bloque['titulo'] }}</h4>
                                </div>
                                <ul class="flex flex-col gap-2.5 text-sm leading-relaxed text-muted">
                                    @foreach ($bloque['puntos'] as $punto)
                                        <li class="border-l-2 border-line pl-3">{{ $punto }}</li>
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
