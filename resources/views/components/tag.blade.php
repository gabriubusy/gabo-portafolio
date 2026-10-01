@props(['label', 'logo' => null])

<li {{ $attributes->merge(['class' => 'inline-flex items-center gap-1.5 rounded-[7px] px-2.5 py-1.5 font-mono text-xs leading-none text-ink']) }}>
    @if ($logo)
        <x-icon :name="$logo" brand :size="12" color="marca" />
    @endif
    {{ $label }}
</li>
