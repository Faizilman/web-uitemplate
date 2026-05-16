@props([
    'variant' => 'default',
])

@php

    $classes = match ($variant) {
        'danger' => 'bg-red-500 text-white',

        default => 'bg-black text-white',
    };

@endphp

<button {{ $attributes->class(['px-4 py-2 rounded-lg', $classes]) }}>

    {{ $slot }}

</button>
