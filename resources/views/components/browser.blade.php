@props(['dominio', 'imagen', 'alt', 'alto' => 'h-80'])

<div {{ $attributes->merge(['class' => 'shadow-window overflow-hidden rounded-[14px] border border-line bg-surface']) }}>
    <div class="flex items-center gap-3 border-b border-line bg-chrome px-3.5 py-2.5">
        <div class="flex gap-1.5" aria-hidden="true">
            <span class="h-2.5 w-2.5 rounded-full bg-[#f87171]"></span>
            <span class="h-2.5 w-2.5 rounded-full bg-[#fbbf24]"></span>
            <span class="h-2.5 w-2.5 rounded-full bg-[#34d399]"></span>
        </div>
        <div class="flex min-w-0 grow items-center gap-1.5 rounded-lg bg-surface px-2.5 py-1 font-mono text-xs text-muted">
            <x-icon name="globe" :size="12" />
            <span class="truncate">{{ $dominio }}</span>
        </div>
    </div>
    <img src="{{ asset($imagen) }}" alt="{{ $alt }}" loading="lazy" decoding="async"
         class="block w-full object-cover object-top {{ $alto }}">
</div>
