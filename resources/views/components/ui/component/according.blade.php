@props([
    'type' => 'single',
    'collapsible' => true,
    'defaultValue' => [],
    'variant' => 'card'
])

<div
    x-data="{
        type: @js($type),
        collapsible: @js($collapsible),

        openItems: Array.isArray(@js($defaultValue))
            ? @js($defaultValue)
            : [@js($defaultValue)].filter(Boolean),

        isOpen(value) {
            return this.openItems.includes(value)
        },

        toggle(value) {
            const opened = this.isOpen(value)

            if (opened) {

                if (
                    !this.collapsible &&
                    this.type === 'single'
                ) {
                    return
                }

                this.openItems = this.openItems.filter(
                    item => item !== value
                )

                return
            }

            if (this.type === 'single') {
                this.openItems = [value]
                return
            }

            this.openItems.push(value)
        }
    }"
    {{ $attributes->class([
        'space-y-4',
    ]) }}
>
    {{ $slot }}
</div>