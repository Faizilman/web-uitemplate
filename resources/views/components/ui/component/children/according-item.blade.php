@props([
    'value',
    'disabled' => false,
])

<div
    x-data="{
        value: @js($value),
        disabled: @js($disabled),
    }"
    class="
        overflow-hidden
        rounded-2xl

        border
        border-zinc-200

        bg-white

        shadow-sm

        transition-all
        duration-300

        dark:border-zinc-800
        dark:bg-zinc-900/40
        dark:shadow-lg
        dark:shadow-black/20
    "
>
    {{ $slot }}
</div>