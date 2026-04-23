<div class="w-full max-w-4xl mx-auto mt-10 border border-slate-700 rounded-xl overflow-hidden bg-[#010101] shadow-2xl"
    x-data="{ tab: 'html', copied: false, copy_code(){
        if(this.tab == 'html'){
            return navigator.clipboard.writeText($refs.code_html.innerText);
        }else if(this.tab == 'laravel'){
            return navigator.clipboard.writeText($refs.code_laravel.innerText);
        }
    } }">

    @if (isset($preview))
    <div class="p-12 flex justify-center items-center bg-center border-b border-slate-700">
        {{ $preview }}
    </div>
    @endif

    <div class="flex items-center justify-between px-4 py-2 bg-[#111827] border-b border-slate-700">
        <div class="flex space-x-4">
            {{-- <button @click="tab = 'vue'"
                :class="tab === 'vue' ? 'text-blue-400 border-b-2 border-blue-500' : 'text-slate-400'"
                class="text-xs font-medium pb-1 tracking-wider uppercase focus:outline-none">Vue</button> --}}

            <button @click="tab = 'laravel'"
                :class="tab === 'laravel' ? 'text-blue-400 border-b-2 border-blue-500' : 'text-slate-400'"
                class="text-xs font-medium pb-1 tracking-wider uppercase focus:outline-none">Laravel</button>

            <button @click="tab = 'html'"
                :class="tab === 'html' ? 'text-blue-400 border-b-2 border-blue-500' : 'text-slate-400'"
                class="text-xs font-medium pb-1 tracking-wider uppercase focus:outline-none">HTML</button>
        </div>

        <button @click="copy_code(); copied = true; setTimeout(() => copied = false, 1500)"
            class="text-xs text-slate-400 hover:bg-slate-800 px-3 py-1 rounded border border-slate-700 transition">
            <span x-show="!copied">Copy Code</span>
            <span x-show="copied" class="text-white">Copied!</span>
        </button>
    </div>

    <div class="bg-[#0b0f1a] px-4 py-2 text-sm font-mono text-slate-300 overflow-x-auto">

        {{-- <div x-show="tab === 'vue'">
            <pre><code></code></pre>
        </div> --}}

        <div x-show="tab === 'laravel'" x-ref="code_laravel">
            {{ $code_laravel }}
        </div>

        <div x-show="tab === 'html'" x-ref="code_html">
            {{ $code_html }}

        </div>

    </div>
</div>