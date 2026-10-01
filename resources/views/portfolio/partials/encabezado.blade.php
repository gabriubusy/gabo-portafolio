<div class="flex max-w-[620px] flex-col gap-3">
    <p class="inline-flex items-center gap-2 font-mono text-xs uppercase tracking-[0.14em] text-accent">
        <x-icon :name="$icono" :size="15" />
        {{ $etiqueta }}
    </p>
    <h2 class="font-display text-4xl font-extrabold leading-[1.05] tracking-[-0.03em] text-ink sm:text-[44px]">{{ $titulo }}</h2>
    @isset($texto)
        <p class="text-[17px] leading-relaxed text-muted">{{ $texto }}</p>
    @endisset
</div>
