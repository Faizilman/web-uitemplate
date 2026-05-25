@php
    $variants = ['primary', 'secondary', 'warning', 'tertiary', 'danger', 'info', 'outline', 'ghost', 'dangerSoft'];

@endphp
<div class="flex gap-4 flex-wrap">
    @foreach ($variants as $key => $value)
        <x-ui.component.button variant="{{ $value }}">
            Button {{ ucfirst($value) }}
        </x-ui.component.button>
    @endforeach


    <x-ui.component.button variant="primary" size="md" :isPending="false">
        <x-slot:pending>
            <span class="sr-only">


                Loading...

            </span>


            <svg class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24" aria-hidden="true">

                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" class="opacity-20" />

                <path fill="currentColor" class="opacity-80" d="M12 2a10 10 0 0 1 10 10" />

            </svg>
        </x-slot:pending>
        Ada Slot tapi tidak muncul
    </x-ui.component.button>
    <x-ui.component.button variant="primary" size="md" :isPending="false">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
        Add Data
    </x-ui.component.button>
    <x-ui.component.button variant="dangerSoft" size="md">
        Delete
    </x-ui.component.button>
    <x-ui.component.button variant="warning" size="md">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
        </svg>
        Edit
    </x-ui.component.button>
    <div class="w-64">
        <x-ui.component.button variant="warning" size="md" :fullWidth="true">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z" />
            </svg>
            Gali Info lebih dalam
        </x-ui.component.button>
    </div>
</div>
