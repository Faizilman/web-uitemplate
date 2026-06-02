@aware([
    'variant' => 'card',
    'size' => 'sm',
    'transition' => 'normal',
    'animation' => 'slide',
])

@php
    $sizes = [
        'sm' => 'px-4 pb-4 pt-0 text-sm leading-relaxed text-zinc-600 dark:text-zinc-400',
        'md' => 'px-5 pb-5 pt-0 text-sm md:text-base leading-relaxed text-zinc-600 dark:text-zinc-400',
        'lg' => 'px-6 pb-6 pt-0 text-base md:text-lg leading-relaxed text-zinc-600 dark:text-zinc-400',
    ];

    $transitions = [
        'fast' => 'duration-200',
        'normal' => 'duration-300',
        'slow' => 'duration-500',
        'slower' => 'duration-700',
    ];

    $animations = [
        'none' => [
            'base' => '',
            'open' => '',
            'closed' => '',
        ],

        'slide' => [
            'base' => 'transition-all ease-in-out',
            'open' => 'translate-y-0',
            'closed' => '-translate-y-2',
        ],

        'fade' => [
            'base' => 'transition-opacity ease-in-out',
            'open' => 'opacity-100',
            'closed' => 'opacity-0',
        ],

        'slide-fade' => [
            'base' => 'transition-all ease-in-out',
            'open' => 'opacity-100 translate-y-0',
            'closed' => 'opacity-0 -translate-y-2',
        ],

        'scale' => [
            'base' => 'transition-all ease-in-out origin-top',
            'open' => 'opacity-100 scale-100',
            'closed' => 'opacity-0 scale-95',
        ],
    ];

    $sizeClasses = $sizes[$size] ?? $sizes['sm'];
    $transitionClass = $transitions[$transition] ?? $transitions['normal'];
    $animationClasses = $animations[$animation] ?? $animations['slide'];

    $ref = 'content-'.$attributes->get('value');
@endphp

<div
    x-data="{ height: 0 }"
    x-init="
        $nextTick(() => {
            height = $refs['{{ $ref }}'].scrollHeight
        })
    "
    :style="
        isOpen(value)
            ? `max-height:${height}px`
            : 'max-height:0px'
    "
    :class="
        isOpen(value)
            ? '{{ $animationClasses['open'] }}'
            : '{{ $animationClasses['closed'] }}'
    "
    class="
        overflow-hidden
        {{ $animationClasses['base'] }}
        {{ $transitionClass }}
    "
>
    <div
        x-ref="{{ $ref }}"
        {{ $attributes->merge(['class' => $sizeClasses]) }}
    >
        {{ $slot }}
    </div>
</div>