<x-ui.component.according variant="line">
    <x-ui.component.children.according-item value="laravel">
        <x-ui.component.children.according-trigger>
            Apa itu Laravel?
            <x-slot:indicator>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" :class="{
            'rotate-180': isOpen(value)
        }" class="size-6 transition-all">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>

                {{-- <span x-show="!isOpen(value)">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </span>
                <span x-show="isOpen(value)">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                    </svg>
                </span> --}}
            </x-slot:indicator>
        </x-ui.component.children.according-trigger>

        <x-ui.component.children.according-content value="laravel">
            Laravel adalah framework PHP modern yang
            memudahkan pengembangan aplikasi web.
        </x-ui.component.children.according-content>
    </x-ui.component.children.according-item>

    <x-ui.component.children.according-item value="blade">
        <x-ui.component.children.according-trigger>
            Apa itu Blade?
        </x-ui.component.children.according-trigger>

        <x-ui.component.children.according-content value="larave">
            Blade adalah template engine bawaan Laravel.
        </x-ui.component.children.according-content>
    </x-ui.component.children.according-item>
</x-ui.component.according>