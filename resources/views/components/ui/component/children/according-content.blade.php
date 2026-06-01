<div
x-data="{
    height: 0
}"
x-init="
    $nextTick(() => {
        height = $refs['content-{{ $attributes->get('value') }}'].scrollHeight
    })
"
      :style="
        isOpen(value)
            ? `max-height:${height}px`
            : 'max-height:0px'
    "
    class="
        overflow-hidden
        transition-all
        duration-300
        ease-in-out
    "
>
    <div
        x-ref="content-{{ $attributes->get('value') }}"
        class="
            px-5
            pb-5
            pt-0

            text-sm
            md:text-base

            leading-relaxed

            text-zinc-600
            dark:text-zinc-400
        "
    >
        {{ $slot }}
    </div>
</div>