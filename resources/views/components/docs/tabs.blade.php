@props(['tabs'])
<div x-data="{
    tab: '{{ array_key_first($tabs) }}'
}" class="relative">


    {{-- Header --}}
    <div class="flex items-center justify-between px-4 py-2 bg-[#111827] border-b border-slate-700">
        <div class="flex space-x-4">
            @foreach ($tabs as $name => $code)
                <button @click="tab = '{{ $name }}'"
                    :class="tab === '{{ $name }}' ? 'text-blue-400 border-b-2 border-blue-500' : 'text-slate-400'"
                    class="text-xs font-medium pb-1 tracking-wider uppercase focus:outline-none">{{ $name }}</button>
            @endforeach
        </div>
    </div>

    {{-- Content --}}
    @foreach ($tabs as $name => $code)
        <div x-show="
                tab === '{{ $name }}'
            " class="">

            <x-docs.code :code="$code" :tab="$name" />

        </div>
    @endforeach

</div>
