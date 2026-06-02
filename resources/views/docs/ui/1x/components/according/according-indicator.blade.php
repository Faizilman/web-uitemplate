<div class="space-y-6">
    <x-ui.component.according animation="slide-fade" indicator-position="left">
        <x-ui.component.according.according-item value="docs">
            <x-ui.component.according.according-trigger>

                <x-slot:indicatorLeft>
                    📖
                </x-slot:indicatorLeft>

                Documentation
            </x-ui.component.according.according-trigger>

            <x-ui.component.according.according-content>
                Learn how to use and customize the component.
            </x-ui.component.according.according-content>
        </x-ui.component.according.according-item>
    </x-ui.component.according>

    <x-ui.component.according according-animation="slide-fade" indicator-position="right">
        <x-ui.component.according.according-item value="rocket">
            <x-ui.component.according.according-trigger>

                Get Started

                <x-slot:indicatorRight>
                    🚀
                </x-slot:indicatorRight>

            </x-ui.component.according.according-trigger>

            <x-ui.component.according.according-content>
                Quickly set up the component in your project.
            </x-ui.component.according.according-content>
        </x-ui.component.according.according-item>
    </x-ui.component.according>

    <x-ui.component.according animation="slide-fade" indicator-position="both">
        <x-ui.component.according.according-item value="custom">
            <x-ui.component.according.according-trigger>

                <x-slot:indicatorLeft>
                    📂
                </x-slot:indicatorLeft>

                Project Files

                <x-slot:indicatorRight>
                    <svg :class="isOpen(value) ? '-rotate-180' : ''" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 transition-all">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 3 3m0 0 3-3m-3 3v-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                </x-slot:indicatorRight>

            </x-ui.component.according.according-trigger>

            <x-ui.component.according.according-content>
                Organize and manage project resources.
            </x-ui.component.according.according-content>
        </x-ui.component.according.according-item>
    </x-ui.component.according>
</div>