@aware([
    'indicatorPosition' => 'right',
    'variant' => 'card',
    'size' => 'sm'
])

@php
    $showLeft = in_array(
        $indicatorPosition,
        ['left', 'both']
    );

    $showRight = in_array(
        $indicatorPosition,
        ['right', 'both']
    );

   $sizes = [
    "sm" => "flex w-full items-center gap-3 px-4 py-3 text-sm font-medium text-left text-zinc-800 dark:text-zinc-200 transition-colors duration-200 hover:bg-zinc-50 dark:hover:bg-zinc-800/50",

    "md" => "flex w-full items-center gap-3 px-5 py-4 text-base font-medium text-left text-zinc-800 dark:text-zinc-200 transition-colors duration-200 hover:bg-zinc-50 dark:hover:bg-zinc-800/50",

    "lg" => "flex w-full items-center gap-4 px-6 py-5 text-lg font-medium text-left text-zinc-800 dark:text-zinc-200 transition-colors duration-200 hover:bg-zinc-50 dark:hover:bg-zinc-800/50",
];

    $classes = $sizes[$size]
@endphp

<button

    type="button"
    @click="
        if (!disabled) {
            toggle(value)
        }
    "
    {{ $attributes->merge(['class' => $classes]) }}
        
    :class="{
        'opacity-50 cursor-not-allowed': disabled
    }"
>

    {{-- Left Indicator --}}
    @if($showLeft)

        @isset($indicatorLeft)
            {{ $indicatorLeft }}
        @else
            <svg
                class="
                    h-5
                    w-5
                    shrink-0

                    text-zinc-400
                    dark:text-zinc-500

                    transition-transform
                    duration-300
                "
                :class="{
                    'rotate-180': isOpen(value)
                }"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M19 9l-7 7-7-7"
                />
            </svg>
        @endisset

    @endif

    {{-- Content --}}
    <span class="flex-1">
        {{ $slot }}
    </span>

    {{-- Right Indicator --}}
    @if($showRight)

        @isset($indicatorRight)
            {{ $indicatorRight }}
        @else
            <svg
                class="
                    h-5
                    w-5
                    shrink-0

                    text-zinc-400
                    dark:text-zinc-500

                    transition-transform
                    duration-300
                "
                :class="{
                    'rotate-180': isOpen(value)
                }"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M19 9l-7 7-7-7"
                />
            </svg>
        @endisset

    @endif

</button>