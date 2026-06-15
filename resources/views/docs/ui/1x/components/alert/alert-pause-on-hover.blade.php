<div
    x-data="{
    showAlert: false,
    
    }"
    class="mx-auto"
    @notifys="showAlert = true"
    {{-- @notifys="$refs.singa.__x.$data.show()" --}}
>

<div class="fixed bottom-5 right-5 z-100">
    <x-ui.component.alert variant="bordered" animation="fade" dismissible auto-close="6000" show-progress pause-on-hover :open="false" x-model="showAlert">
        <x-ui.component.alert.alert-title>
            This is Progress Bar
        </x-ui.component.alert.alert-title>

        <x-ui.component.alert.alert-description>
            Displays general-purpose messages without a specific semantic meaning.
        </x-ui.component.alert.alert-description>

    </x-ui.component.alert>
</div>

<div x-data>
    <div @click="$dispatch('notifys')">

        <x-ui.component.button variant="tertiary">
        Show Alert
    </x-ui.component.button>
    </div>
</div>

</div>