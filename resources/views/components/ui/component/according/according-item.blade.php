@props([
    'value',
    'disabled' => false,
    'indicatorPosition' => 'right',
])

@aware([
    'variant' => 'card',
])

@php
    $variants = [
        "card" => "overflow-hidden rounded-2xl border border-zinc-200 bg-white shadow-sm transition-all duration-300 dark:border-zinc-800 dark:bg-zinc-900/40 dark:shadow-lg dark:shadow-black/20",
        "line" => "border-b border-zinc-200 dark:border-zinc-800/80",
    ];

    $classes = $variants[$variant];
@endphp

<div
    x-data="{
        value: @js($value),
        disabled: @js($disabled),
    }"
    {{ $attributes->merge(['class' => $classes]) }}
>
    {{ $slot }}
</div>