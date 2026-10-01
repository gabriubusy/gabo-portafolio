<section id="ia" class="relative border-t border-line">
    <div aria-hidden="true" class="pointer-events-none absolute inset-0 overflow-hidden">
        <div class="orb -left-20 bottom-0 h-80 w-80 bg-[#d97757]" style="--x: 70px; --y: -50px; --t: 24s"></div>
        <div class="orb -right-16 top-10 h-72 w-72 bg-accent" style="--x: -60px; --y: 50px; --t: 27s"></div>
    </div>

    <div class="relative mx-auto flex max-w-6xl flex-col gap-12 px-5 py-24 sm:px-10 lg:py-28">
        <div data-reveal>
            @include('portfolio.partials.encabezado', [
                'icono' => 'sparkles',
                'etiqueta' => 'Desarrollo asistido por IA',
                'titulo' => 'Programo con agentes de IA',
                'texto' => 'Las herramientas con las que escribo, reviso y despliego código cada día.',
            ])
        </div>

        <div class="grid gap-5 md:grid-cols-3">
            @foreach ($herramientasIa as $herramienta)
                <div data-reveal="zoom" class="flex" style="--d: {{ $loop->index * 110 }}ms">
                    <div @class([
                        'lift flex w-full flex-col gap-4.5 rounded-[20px] border p-7',
                        'border-ink bg-ink text-surface' => $herramienta['principal'],
                        'border-line bg-surface text-ink' => ! $herramienta['principal'],
                    ])>
                        <div class="flex items-center justify-between">
                            <span @class([
                                'flex h-14 w-14 items-center justify-center rounded-2xl text-ink',
                                'bg-surface' => $herramienta['principal'],
                                'bg-paper' => ! $herramienta['principal'],
                            ])>
                                <x-icon :name="$herramienta['logo']" brand :size="28" :color="$herramienta['color']" />
                            </span>
                            @if ($herramienta['principal'])
                                <span class="rounded-full border border-surface/30 px-2.5 py-1 font-mono text-[11px] uppercase tracking-[0.08em]">Principal</span>
                            @endif
                        </div>
                        <div>
                            <p class="font-display text-[26px] font-extrabold tracking-[-0.02em]">{{ $herramienta['nombre'] }}</p>
                            <p class="mt-1 font-mono text-xs opacity-70">{{ $herramienta['empresa'] }}</p>
                        </div>
                        <p class="text-[15px] leading-relaxed opacity-80">{{ $herramienta['descripcion'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
