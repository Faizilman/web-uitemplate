@props([
    'variant' => 'soft',
    'color' => 'info',
])

@php

$iconColors = [

    'success' => 'text-emerald-600',

    'info' => 'text-sky-600',

    'warning' => 'text-amber-700',

    'danger' => 'text-rose-600',
];

$class = $variant === 'dark'
    ? 'text-zinc-400'
    : $iconColors[$color];

@endphp

<div
    {{
        $attributes->merge([
            'class' => '
                shrink-0
                mt-0.5
                '.$class
        ])
    }}
>
    {{ $slot }}
</div>