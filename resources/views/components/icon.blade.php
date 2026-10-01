@props(['name', 'size' => 18, 'brand' => false, 'color' => null])

@if ($brand)
    {{ \App\Support\Icon::brand($name, $size, $attributes->get('class', ''), $color) }}
@else
    {{ \App\Support\Icon::lucide($name, $size, $attributes->get('class', '')) }}
@endif
