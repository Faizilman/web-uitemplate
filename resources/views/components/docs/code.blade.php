@props(['code', 'tab'])

<div x-data="{
    expandCode: false,
    copied: false,
    copy() {
        navigator.clipboard.writeText(
            @js($code)
        );
        this.copied = true;
        setTimeout(() => {
            this.copied = false;
        }, 2000);
    }

}" class="">
    <button @click="copy"
        class="absolute top-0 right-3 text-xs border border-slate-500 hover:border-slate-300 rounded px-2 py-1 mt-1.5 group">
        <span x-show="! copied">
           <svg class="w-4 h-4 text-slate-500 group-hover:text-slate-300 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
            </svg>
        </span>

        <span x-show="copied">
            <svg class="w-4 h-4 text-slate-400 group-hover:text-slate-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
        </span>
        <span
            class="border border-slate-500 text-[10px] bg-black px-3 py-1.5 rounded-md text-slate-500 hover:text-white uppercase tracking-wider font-bold absolute z-[999] -top-10 -left-5"
            x-show="copied"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95 translate-y-1"
            x-transition:enter-end="opacity-100 scale-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 scale-100 translate-y-0"
            x-transition:leave-end="opacity-0 scale-95 translate-y-1">
            Copied
        </span>

    </button>
    {{-- Copy Button --}}


    {{-- Code --}}
    <div class="relative">
        <pre :class="expandCode ? 'h-auto' : 'h-24'" class="px-5 text-sm mb-2 bg-black"><code class="language-html text-sm">{{ $code }}</code></pre>
        <div class="flex justify-center items-end w-full">
            <button
                class="inline-flex items-center gap-x-1 px-3.5 py-1.5 text-xs font-medium text-slate-300 bg-slate-900/80 hover:bg-slate-800 border border-slate-700/60 hover:border-slate-600 rounded-full shadow-lg backdrop-blur-sm transition-all duration-200 active:scale-95 cursor-pointer absolute z-30 -bottom-4"
                @click="expandCode = ! expandCode">
                <span x-show="!expandCode">Expand Code </span>
                <span x-show="expandCode">Collapse code</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="size-4" :class="expandCode ? 'rotate-180':''">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                </svg>
            </button>
        </div>
        <div class="flex absolute top-0 bottom-0 right-0 left-0 bg-gradient-to-b from-black/5 to-black/80 z-20"
            x-show="!expandCode">
        </div>
    </div>
</div>
