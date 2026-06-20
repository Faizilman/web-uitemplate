<div
    x-data="{
    showAlert: true,
    }"
    class="mx-auto relative w-full h-full"
    @notifys="showAlert = true"
>

    <x-ui.component.alert variant="bordered" animation="fade" dismissible x-model="showAlert">
        <x-ui.component.alert.alert-title>
            This is Title
        </x-ui.component.alert.alert-title>

        <x-ui.component.alert.alert-description>
            Displays general-purpose messages without a specific semantic meaning.
        </x-ui.component.alert.alert-description>

    </x-ui.component.alert>

    <div class="absolute -top-10 -left-10" @click="$dispatch('notifys')">
        <x-ui.component.button :is-icon-only="true" variant="tertiary" size="sm">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </x-ui.component.button>
    </div>

</div>