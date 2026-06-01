<button
    type="button"
    @click="
        if (!disabled) {
            toggle(value)
        }
    "
    class="
        flex
        w-full
        items-center
        justify-between

        p-5

        text-left
        font-semibold

        text-zinc-800
        dark:text-zinc-200


        transition-colors
        duration-200

        hover:bg-zinc-50
        dark:hover:bg-zinc-800/50
    "
    :class="{
        'opacity-50 cursor-not-allowed': disabled
    }"
>
    <span>
        {{ $slot }}
    </span>

    @isset($indicator)
        {{ $indicator }}
    @else
    <svg
        class="
            h-5
            w-5

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
</button>