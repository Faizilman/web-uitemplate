<div class="flex gap-x-3">
       <x-ui.component.button variant="primary" size="md" :isPending="true">
        <x-slot:pending>
            <span class="sr-only">


                Loading...

            </span>


            <svg class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24" aria-hidden="true">

                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" class="opacity-20" />

                <path fill="currentColor" class="opacity-80" d="M12 2a10 10 0 0 1 10 10" />

            </svg>
            Loading
        </x-slot:pending>
        t
    </x-ui.component.button>
</div>
