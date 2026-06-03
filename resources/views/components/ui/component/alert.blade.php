@props([
    'variant' => 'info',
])

@php
    $variants = [
        'info' => '
            border-blue-200
            bg-blue-50
            text-blue-950

            dark:border-blue-900
            dark:bg-blue-950/20
            dark:text-blue-100
        ',

        'success' => '
            border-emerald-200
            bg-emerald-50
            text-emerald-950

            dark:border-emerald-900
            dark:bg-emerald-950/20
            dark:text-emerald-100
        ',

        'warning' => '
            border-amber-200
            bg-amber-50
            text-amber-950

            dark:border-amber-900
            dark:bg-amber-950/20
            dark:text-amber-100
        ',

        'danger' => '
            border-red-200
            bg-red-50
            text-red-950

            dark:border-red-900
            dark:bg-red-950/20
            dark:text-red-100
        ',
    ];

    $icons = [
        'info' => '
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 16h-1v-4h-1m1-4h.01M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/>
            </svg>
        ',

        'success' => '
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 13l4 4L19 7"/>
            </svg>
        ',

        'warning' => '
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 9v2m0 4h.01M10.29 3.86l-8 14A1 1 0 003.14 19h17.72a1 1 0 00.85-1.5l-8-14a1 1 0 00-1.72 0z"/>
            </svg>
        ',

        'danger' => '
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"/>
            </svg>
        ',
    ];
@endphp

<div
    {{
        $attributes->merge([
            'class' => '
                relative
                flex
                gap-4

                rounded-xl
                border

                p-4

                transition-colors
                duration-200
            '.$variants[$variant]
        ])
    }}
>
    <div class="shrink-0 mt-0.5">
        {!! $icons[$variant] !!}
    </div>

    <div class="flex-1 min-w-0">
        {{ $slot }}
    </div>
</div>