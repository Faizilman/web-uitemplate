@php

    $codePath = resource_path("views/docs/1.x/{$folder}/{$component}/{$nameFile}.blade.php");

    $code = file_get_contents($codePath);
@endphp
<div class="relative group">
    <div
        class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-indigo-600 rounded-xl blur opacity-10 group-hover:opacity-20 transition duration-1000">
    </div>
    <div class="relative rounded-xl bg-[#010101] border border-slate-800 overflow-hidden font-mono text-sm"
        x-data="{ copied: false }">
        <div class="flex items-center justify-between px-4 py-3 border-b border-slate-800 bg-[#09090b]">
            <div class="flex gap-1.5">
                <div class="w-2.5 h-2.5 rounded-full bg-slate-800"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-slate-800"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-slate-800"></div>
            </div>
            <div
                @click="navigator.clipboard.writeText($refs.code.innerText)
        copied = true;
        setTimeout(() => copied = false, 1500);">

                <button class="text-[10px] text-slate-500 hover:text-white uppercase tracking-wider font-bold"
                    x-show="!copied">Copy</button>
                <button class="text-[10px] text-slate-500 hover:text-white uppercase tracking-wider font-bold"
                    x-show="copied">Copied</button>
            </div>
        </div>
        <div x-ref="code">
            <pre
                class="
            overflow-x-auto
            px-5
            pt-2
            text-sm
            mb-0
            bg-black
        "><code class="language-html">{{ $code }}</code></pre>
        </div>

    </div>
</div>
