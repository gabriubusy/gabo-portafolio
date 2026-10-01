{{-- Chip de tecnologia; 'logo' con prefijo lucide: usa un icono de interfaz --}}
@props(['label', 'logo' => null, 'especialidad' => false])

<span @class([
    'inline-flex items-center gap-2 rounded-[10px] border px-3 py-2 text-sm leading-none',
    'border-ink bg-ink font-semibold text-surface' => $especialidad,
    'border-line bg-surface font-medium text-ink' => ! $especialidad,
])>
    @if ($logo && str_starts_with($logo, 'lucide:'))
        <x-icon :name="substr($logo, 7)" :size="15" :class="$especialidad ? '' : 'text-muted'" />
    @elseif ($logo)
        <x-icon :name="$logo" brand :size="15" :color="$especialidad ? null : 'marca'" />
    @endif
    {{ $label }}
</span>
