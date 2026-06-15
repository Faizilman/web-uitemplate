@props([
    'as' => 'h3',
])

<{{ $as }} {{ $attributes->merge(['class' => 'font-semibold text-sm leading-snug']) }}>
    {{ $slot }}
</{{ $as }}>