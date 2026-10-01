<section id="formacion" class="border-t border-line bg-surface">
    <div class="mx-auto flex max-w-6xl flex-col gap-12 px-5 py-24 sm:px-10 lg:py-28">
        <div data-reveal>
            @include('portfolio.partials.encabezado', ['icono' => 'graduation-cap', 'etiqueta' => 'Formación', 'titulo' => 'Educación y certificaciones'])
        </div>

        <div class="grid gap-5 md:grid-cols-3">
            <div data-reveal class="flex flex-col gap-3.5 rounded-[20px] border border-line bg-paper p-7">
                <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-surface text-accent">
                    <x-icon name="graduation-cap" :size="22" />
                </span>
                <p class="font-display text-[22px] font-bold text-ink">{{ $educacion['titulo'] }}</p>
                <p class="text-[15px] leading-normal text-muted">{{ $educacion['institucion'] }}</p>
                <div class="mt-auto flex items-center gap-2.5">
                    <span class="font-mono text-xs text-muted">{{ $educacion['periodo'] }}</span>
                    <span class="rounded-md bg-green-soft px-2 py-1 font-mono text-[11px] font-medium uppercase tracking-[0.08em] text-green">{{ $educacion['estado'] }}</span>
                </div>
            </div>

            @foreach ($certificaciones as $emisor => $lista)
                <div data-reveal class="flex flex-col gap-4.5 rounded-[20px] border border-line bg-paper p-7" style="--d: {{ ($loop->index + 1) * 110 }}ms">
                    <p class="font-mono text-xs uppercase tracking-[0.12em] text-muted">{{ $emisor }}</p>
                    <ul class="flex flex-col gap-4">
                        @foreach ($lista as $certificacion)
                            <li class="flex items-start gap-3">
                                <x-icon name="award" :size="18" class="mt-0.5 text-accent" />
                                <div>
                                    <p class="font-semibold text-ink">{{ $certificacion['nombre'] }}</p>
                                    <p class="mt-0.5 font-mono text-xs text-muted">{{ $emisor }}@if ($certificacion['fecha']) · {{ $certificacion['fecha'] }}@endif</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                    @if ($loop->last)
                        <div class="mt-auto flex items-start gap-3 border-t border-line pt-4.5">
                            <x-icon name="languages" :size="18" class="mt-0.5 text-accent" />
                            <p class="text-sm leading-normal text-muted">
                                @foreach ($idiomas as $idioma)
                                    <strong class="text-ink">{{ $idioma['idioma'] }}</strong> {{ $idioma['nivel'] }}@unless ($loop->last) · @endunless
                                @endforeach
                            </p>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>
