<section id="habilidades" class="border-t border-line bg-surface">
    <div class="mx-auto grid max-w-6xl items-start gap-12 px-5 py-24 sm:px-10 lg:grid-cols-[minmax(0,4fr)_minmax(0,8fr)] lg:gap-16 lg:py-28">
        <div data-reveal>
            @include('portfolio.partials.encabezado', [
                'icono' => 'cpu',
                'etiqueta' => 'Habilidades',
                'titulo' => 'Stack de trabajo',
                'texto' => 'Lo que uso a diario. Las tecnologías en oscuro son mi especialidad.',
            ])
        </div>

        <dl class="border-b border-line">
            @foreach ($habilidades as $categoria => $tecnologias)
                <div data-reveal class="grid gap-3 border-t border-line py-5.5 sm:grid-cols-[220px_minmax(0,1fr)] sm:gap-6" style="--d: {{ $loop->index * 70 }}ms">
                    <dt class="pt-1.5 font-mono text-xs uppercase tracking-[0.12em] text-muted">{{ $categoria }}</dt>
                    <dd class="flex flex-wrap gap-2">
                        @foreach ($tecnologias as [$label, $logo, $especialidad])
                            <x-tech :label="$label" :logo="$logo" :especialidad="$especialidad" />
                        @endforeach
                    </dd>
                </div>
            @endforeach
        </dl>
    </div>
</section>
