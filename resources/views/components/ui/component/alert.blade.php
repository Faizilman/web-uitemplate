@props([
    'variant' => 'soft',
    'color' => 'info',
    'dismissible' => false,
    'animation' => 'fade',
    'autoClose' => null,
    'showProgress' => false,
    'pauseOnHover' => false,
    'open' => true,
    'ref' => 'alert'
])

@php

$animationClasses = [

    'fade' => [
        'enter' => 'transition-opacity duration-300',
        'enterStart' => 'opacity-0',
        'enterEnd' => 'opacity-100',
        'leave' => 'transition-opacity duration-200',
        'leaveStart' => 'opacity-100',
        'leaveEnd' => 'opacity-0',
    ],

    'scale' => [
        'enter' => 'transition duration-300',
        'enterStart' => 'opacity-0 scale-95',
        'enterEnd' => 'opacity-100 scale-100',
        'leave' => 'transition duration-200',
        'leaveStart' => 'opacity-100 scale-100',
        'leaveEnd' => 'opacity-0 scale-95',
    ],

];

$animations = $animationClasses[$animation];

$variants = [

    'soft' => '
        rounded-lg
        border
    ',

    'bordered' => '
        rounded-lg
        border
        border-l-5
    ',

];

$colors = [

    'success' => [

        'soft' => '
            bg-emerald-50
            border-emerald-200
            text-emerald-800

            dark:bg-emerald-950/30
            dark:border-emerald-900
            dark:text-emerald-200
        ',

        'bordered' => '
            bg-white
            border-emerald-200
            border-l-emerald-500
            text-emerald-800

            dark:bg-zinc-950
            dark:border-zinc-800
            dark:border-l-emerald-500
            dark:text-emerald-200
        ',
    ],

    'info' => [

        'soft' => '
            bg-sky-50
            border-sky-200
            text-sky-800

            dark:bg-sky-950/30
            dark:border-sky-900
            dark:text-sky-200
        ',

        'bordered' => '
            bg-white
            border-sky-200
            border-l-sky-500
            text-sky-800

            dark:bg-zinc-950
            dark:border-zinc-800
            dark:border-l-sky-500
            dark:text-sky-200
        ',
    ],

    'warning' => [

        'soft' => '
            bg-amber-50
            border-amber-200
            text-amber-800

            dark:bg-amber-950/30
            dark:border-amber-900
            dark:text-amber-200
        ',

        'bordered' => '
            bg-white
            border-amber-200
            border-l-amber-500
            text-amber-800

            dark:bg-zinc-950
            dark:border-zinc-800
            dark:border-l-amber-500
            dark:text-amber-200
        ',
    ],

    'danger' => [

        'soft' => '
            bg-rose-50
            border-rose-200
            text-rose-800

            dark:bg-rose-950/30
            dark:border-rose-900
            dark:text-rose-200
        ',

        'bordered' => '
            bg-white
            border-rose-200
            border-l-rose-500
            text-rose-800

            dark:bg-zinc-950
            dark:border-zinc-800
            dark:border-l-rose-500
            dark:text-rose-200
        ',
    ],

    'neutral' => [

        'soft' => '
            bg-zinc-100
            border-zinc-200
            text-zinc-900

            dark:bg-zinc-950
            dark:border-zinc-800
            dark:text-zinc-100
        ',

        'solid' => '
            bg-black
            border-zinc-800
            text-zinc-100
            dark:bg-zinc-950
        ',

        'bordered' => '
            bg-white
            border-zinc-200
            border-l-black
            text-zinc-900

            dark:bg-zinc-950
            dark:border-zinc-800
            dark:border-l-white
            dark:text-zinc-100
        ',
    ],

];

$iconColors = [

    'success' => 'text-emerald-600 dark:text-emerald-400',

    'info' => 'text-sky-600 dark:text-sky-400',

    'warning' => 'text-amber-600 dark:text-amber-400',

    'danger' => 'text-rose-600 dark:text-rose-400',

    'neutral' => 'text-zinc-500 dark:text-zinc-400',
];

$alertClass = implode(' ', [

    $variants[$variant] ?? '',
    $colors[$color][$variant] ?? '',
]);

@endphp

<div
    
  x-data="{
    open: @js($open),
    progress: 100,
    paused: false,
    timer: null,
    autoClose: @js($autoClose),
    show() {
        clearInterval(this.timer);

        this.open = true

        this.progress = 100

        this.paused = false

        this.init()
    },
    close() {
        this.open = false;

        if (this.timer !== null) {

            clearInterval(this.timer);

            this.timer = null;

        }
    },

    init() {

        if (!this.autoClose) return;

        let duration = this.autoClose;
        let interval = 50;

        let step = 100 / (duration / interval);

        this.timer = setInterval(() => {

            if (this.paused) return;

            this.progress = Math.max(
                this.progress - step,
                0
            );

            if (this.progress <= 0) {
                this.close();
            }

        }, interval);

    }
}"
 x-modelable="open"
 x-effect="
        if (open) {
            show()
        }
    "

    x-ref="{{ $ref }}"

    @if($pauseOnHover)
        @mouseenter="paused = true"
        @mouseleave="paused = false"
    @endif


    x-show="open"
    x-cloak
    x-transition:enter="{{ $animations['enter'] }}"
    x-transition:enter-start="{{ $animations['enterStart'] }}"
    x-transition:enter-end="{{ $animations['enterEnd'] }}"

    x-transition:leave="{{ $animations['leave'] }}"
    x-transition:leave-start="{{ $animations['leaveStart'] }}"
    x-transition:leave-end="{{ $animations['leaveEnd'] }}"

    {{
        $attributes->merge([
            'class' => "
                z-50 relative w-full flex items-start gap-3 p-4

                {$alertClass}
            "
        ])
    }}
>


            @isset($icon)

                {{ $icon }}

            @else

                <svg class="mt-0.5 h-5 w-5 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>

            @endisset


    <div class="flex-1 min-w-0 ">

        {{ $slot }}
    </div>
    @if($showProgress)

        <div
            class="
                absolute
                bottom-0
                left-0
                h-1
                w-full
                overflow-hidden
                rounded-b-lg
            "
        >

            <div
                class="
                    h-full
                    bg-current
                    opacity-20
                "
                :style="`width:${progress}%`"
            ></div>

        </div>

    @endif

    @if($dismissible)

    @isset($action)

        <div class="shrink-0">
            {{ $action }}
        </div>

    @else

        <button
            type="button"
            @click="close()"
            class="
                shrink-0

                rounded-md
                p-1

                text-current/60

                hover:bg-black/5
                hover:text-current

                dark:hover:bg-white/5

                transition-colors
                cursor-pointer
            "
            aria-label="Close alert"
        >
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>

    @endisset

@endif



</div>