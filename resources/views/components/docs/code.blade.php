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
        class="
            absolute
            top-0
            right-3
            text-xs
            border
            border-slate-500
            rounded
            px-2
            py-1
            mt-1.5
        ">


        <span x-show="! copied">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-5 stroke-slate-500">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5A3.375 3.375 0 0 0 6.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0 0 15 2.25h-1.5a2.251 2.251 0 0 0-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 0 0-9-9Z" />
            </svg>
        </span>

        <span x-show="copied">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-5 stroke-slate-500">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
            </svg>
        </span>
        <span
            class="border border-slate-500 text-[10px] bg-black px-3 py-1.5 rounded-md text-slate-500 hover:text-white uppercase tracking-wider font-bold absolute z-[999] -top-10 -left-5"
            x-show="copied">
            Copied
        </span>

    </button>
    {{-- Copy Button --}}


    {{-- Code --}}
    <div class="relative">
        <pre :class="expandCode ? 'h-auto' : 'h-20'" class="overflow-x-auto px-5 text-sm mb-2 bg-black"><code class="language-{{ $tab }} text-sm">{{ $code }}</code></pre>
        <div class="flex justify-center items-end w-full">
            <button
                class="inline-flex items-center justify-center gap-x-1 font-medium transition-all duration-200 active:scale-[0.98] focus:outline-none focus-visible:ring-4 bg-blue-700 text-white hover:bg-blue-800 focus-visible:ring-blue-300 shadow-sm dark:bg-blue-500 dark:hover:bg-blue-600 h-9 px-4 text-sm rounded-2xl absolute z-[999] -bottom-5"
                @click="expandCode = ! expandCode">
                <span x-show="!expandCode">Expand Code</span>
                <span x-show="expandCode">Collapse code</span>
            </button>
        </div>
        <div class="flex absolute top-0 bottom-0 right-0 left-0 bg-gradient-to-r from-black/5 to-black/60 z-20"
            x-show="!expandCode">
        </div>
    </div>
</div>
