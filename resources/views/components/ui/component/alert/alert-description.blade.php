@props([])

<p {{ $attributes->merge(['class' => 'text-xs mt-1 opacity-80 leading-relaxed']) }}>
    {{ $slot }}
</p>