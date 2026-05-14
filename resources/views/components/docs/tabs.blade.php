@props(['tabs'])
<div x-data="{
    tab: '{{ array_key_first($tabs) }}'
}">


    {{-- Header --}}
    <div class="
            flex
            border-b
            bg-zinc-100
            dark:bg-zinc-900
        ">

        @foreach ($tabs as $name => $code)
            <button @click="
                    tab = '{{ $name }}'
                "
                class="
                    px-4
                    py-2
                    text-sm
                ">

                {{ $name }}

            </button>
        @endforeach

    </div>

    {{-- Content --}}
    @foreach ($tabs as $name => $code)
        <div x-show="
                tab === '{{ $name }}'
            ">

            <x-docs.code :code="$code" />

        </div>
    @endforeach

</div>
