@php
    // Clases completas por proyecto para que Tailwind las detecte
    $tonos = [
        'conexoo' => ['texto' => 'text-conexoo', 'fondo' => 'bg-conexoo', 'suave' => 'bg-conexoo-soft'],
        'wildoow' => ['texto' => 'text-wildoow', 'fondo' => 'bg-wildoow', 'suave' => 'bg-wildoow-soft'],
        'suince' => ['texto' => 'text-suince', 'fondo' => 'bg-suince', 'suave' => 'bg-suince-soft'],
        'ianecta' => ['texto' => 'text-ianecta', 'fondo' => 'bg-ianecta', 'suave' => 'bg-ianecta-soft'],
    ];
@endphp

<section id="proyectos" class="relative border-t border-line bg-surface">
    <div aria-hidden="true" class="pointer-events-none absolute inset-0 overflow-hidden">
        <div class="orb -left-32 top-[18%] h-96 w-96 bg-conexoo" style="--x: 90px; --y: 60px; --t: 26s"></div>
        <div class="orb -right-24 top-[55%] h-96 w-96 bg-ianecta" style="--x: -80px; --y: -70px; --t: 30s"></div>
    </div>

    <div class="relative mx-auto flex max-w-6xl flex-col gap-20 px-5 py-24 sm:px-10 lg:py-28">
        <div data-reveal class="flex flex-wrap items-end justify-between gap-6">
            @include('portfolio.partials.encabezado', [
                'icono' => 'layers',
                'etiqueta' => 'Proyectos',
                'titulo' => 'Productos reales, en producción',
                'texto' => 'Cuatro plataformas en producción: Conexoo y Wildoow, que construí de principio a fin, y Suince e Ianecta, para clientes. Debajo, ' . count($proyectos) . ' proyectos más.',
            ])
            <div class="flex gap-7">
                <div>
                    <p class="font-display text-[40px] font-extrabold leading-none tracking-[-0.03em]">{{ count($destacados) + count($proyectos) }}</p>
                    <p class="mt-1 text-[13px] text-muted">proyectos</p>
                </div>
                <div>
                    <p class="font-display text-[40px] font-extrabold leading-none tracking-[-0.03em]">4+</p>
                    <p class="mt-1 text-[13px] text-muted">años de experiencia</p>
                </div>
            </div>
        </div>

        @foreach ($destacados as $proyecto)
            @php
                $tono = $tonos[$proyecto['tono']];
                $invertido = $loop->odd === false;
            @endphp
            <article @class([
                'grid items-center gap-14',
                'lg:grid-cols-[minmax(0,7fr)_minmax(0,5fr)]' => ! $invertido,
                'lg:grid-cols-[minmax(0,5fr)_minmax(0,7fr)]' => $invertido,
            ])>
                <div data-reveal="{{ $invertido ? 'derecha' : 'izquierda' }}"
                     @class(['zoom-img relative rounded-[28px] p-5 sm:p-7', $tono['suave'], 'lg:order-2' => $invertido])>
                    <x-browser :dominio="$proyecto['dominio']" :imagen="$proyecto['imagen']" :alt="'Página de inicio de ' . $proyecto['nombre']" alto="h-56 sm:h-[380px]" />

                    <div class="shadow-window absolute -bottom-[18px] left-0 flex items-center gap-3 rounded-2xl bg-band px-4 py-3.5 text-white">
                        @if ($proyecto['dato'])
                            <span class="font-display text-[30px] font-extrabold leading-none tracking-[-0.03em]">{{ $proyecto['dato'][0] }}</span>
                            <span class="max-w-[150px] text-xs leading-snug text-white/75">{{ $proyecto['dato'][1] }}</span>
                        @else
                            <span class="live-dot h-2 w-2 rounded-full bg-[#4ade95] text-[#4ade95]"></span>
                            <span class="text-[13px] font-semibold">En producción</span>
                        @endif
                    </div>
                </div>

                <div data-reveal class="flex flex-col gap-4.5 pt-4 lg:pt-0" style="--d: 150ms">
                    <p class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.12em] {{ $tono['texto'] }}">
                        <span class="h-2 w-2 rounded-full bg-current"></span>
                        {{ $proyecto['categoria'] }}
                    </p>
                    <h3 class="font-display text-5xl font-extrabold leading-none tracking-[-0.035em] text-ink">{{ $proyecto['nombre'] }}</h3>
                    <p class="font-mono text-xs text-muted">{{ $proyecto['rol'] }}</p>
                    <p class="text-[17px] leading-relaxed text-ink">{{ $proyecto['descripcion'] }}</p>

                    <ul class="flex flex-col gap-2.5 text-[15px] leading-relaxed text-muted">
                        @foreach ($proyecto['puntos'] as $punto)
                            <li class="flex items-start gap-2.5">
                                <x-icon name="badge-check" :size="18" class="mt-0.5 {{ $tono['texto'] }}" />
                                <span>{{ $punto }}</span>
                            </li>
                        @endforeach
                    </ul>

                    <ul class="flex flex-wrap gap-1.5" aria-label="Tecnologías de {{ $proyecto['nombre'] }}">
                        @foreach ($proyecto['stack'] as [$label, $logo])
                            <x-tag :label="$label" :logo="$logo" class="{{ $tono['suave'] }}" />
                        @endforeach
                    </ul>

                    <a href="{{ $proyecto['url'] }}" target="_blank" rel="noopener"
                       class="mt-1.5 inline-flex items-center gap-2 self-start rounded-full px-5 py-3 text-[15px] font-semibold text-surface transition hover:opacity-90 {{ $tono['fondo'] }}">
                        Visitar {{ $proyecto['dominio'] }}
                        <x-icon name="arrow-up-right" :size="17" />
                    </a>
                </div>
            </article>
        @endforeach

        <div id="otros-proyectos" class="flex flex-col gap-7 pt-6">
            <div data-reveal>
                <h3 class="font-display text-3xl font-extrabold tracking-[-0.02em] text-ink">Más proyectos</h3>
                <p class="mt-2 text-muted">Desarrollos completos, migraciones a Laravel y soporte para clientes de distintos sectores.</p>
            </div>

            <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($proyectos as $proyecto)
                    {{-- La entrada va en el contenedor y la elevacion en la tarjeta para que no se pisen --}}
                    <div data-reveal class="flex" style="--d: {{ ($loop->index % 3) * 100 }}ms">
                    <article class="lift zoom-img relative flex w-full flex-col overflow-hidden rounded-[18px] border border-line bg-surface hover:border-ink/30">
                        @isset($proyecto['estado'])
                            <span class="absolute left-3.5 top-3.5 z-10 inline-flex items-center gap-2 rounded-full bg-band px-3 py-1.5 text-xs font-semibold text-white">
                                <span class="live-dot h-2 w-2 rounded-full bg-[#fbbf24] text-[#fbbf24]"></span>
                                {{ $proyecto['estado'] }}
                            </span>
                        @endisset

                        @if (isset($proyecto['imagen']))
                            <img src="{{ asset($proyecto['imagen']) }}" alt="Página de inicio de {{ $proyecto['nombre'] }}" loading="lazy" decoding="async"
                                 class="block h-[190px] w-full border-b border-line object-cover object-top">
                        @else
                            <div class="flex h-[190px] flex-col items-center justify-center gap-3.5 overflow-hidden border-b border-line"
                                 style="background: color-mix(in srgb, {{ $proyecto['color'] }} 13%, var(--surface))">
                                <span class="shadow-window flex h-16 w-16 items-center justify-center rounded-[18px] bg-surface" style="color: {{ $proyecto['color'] }}">
                                    <x-icon :name="$proyecto['icono']" :size="30" />
                                </span>
                                <span class="font-mono text-xs text-muted">{{ $proyecto['dominio'] ?? 'Sin web pública todavía' }}</span>
                            </div>
                        @endif

                        <div class="flex grow flex-col px-[22px] pb-4 pt-[22px]">
                            <p class="font-mono text-xs text-muted">{{ $proyecto['titulo'] }}</p>
                            <h4 class="mt-1.5 font-display text-[22px] font-bold tracking-[-0.01em] text-ink">{{ $proyecto['nombre'] }}</h4>
                            <p class="mt-2.5 text-sm leading-relaxed text-muted">{{ $proyecto['descripcion'] }}</p>
                            @if ($proyecto['rol'])
                                <p class="mt-3 flex items-start gap-2 rounded-[10px] bg-paper px-3 py-2.5 text-sm leading-snug text-ink">
                                    <x-icon name="badge-check" :size="16" class="mt-0.5 text-accent" />
                                    <span>{{ $proyecto['rol'] }}</span>
                                </p>
                            @endif

                            <div class="mt-auto flex flex-wrap items-center justify-between gap-2.5 pt-[18px]">
                                <ul class="flex flex-wrap gap-1.5" aria-label="Tecnologías de {{ $proyecto['nombre'] }}">
                                    @foreach ($proyecto['stack'] as [$label, $logo])
                                        <x-tag :label="$label" :logo="$logo" class="bg-paper" />
                                    @endforeach
                                </ul>
                                @if ($proyecto['url'])
                                    <a href="{{ $proyecto['url'] }}" target="_blank" rel="noopener"
                                       class="inline-flex items-center gap-1 py-2 font-mono text-xs font-medium text-ink hover:text-accent">
                                        {{ $proyecto['dominio'] }}
                                        <x-icon name="arrow-up-right" :size="14" />
                                    </a>
                                @endif
                            </div>
                        </div>
                    </article>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
