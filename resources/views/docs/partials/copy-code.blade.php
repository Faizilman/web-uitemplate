@php

    $codePath = resource_path("views/docs/1.x/{$folder}/{$component}/{$nameFile}.blade.php");

    $code = file_get_contents($codePath);
@endphp
<div class="relative">
    <div class="relative rounded-xl bg-[#010101] border border-zinc-800 font-mono text-sm"
        x-data="{ copied: false }">
        <div class="flex items-center justify-between px-4 py-3 rounded-t-xl border-b border-zinc-800 bg-[#09090b]">
            <div class="flex gap-1.5">
                <div class="w-2.5 h-2.5 rounded-full bg-zinc-800"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-zinc-800"></div>
                <div class="w-2.5 h-2.5 rounded-full bg-zinc-800"></div>
            </div>
            <div 
  class="relative flex items-center justify-end"
  @click="navigator.clipboard.writeText($refs.code.innerText); copied = true; setTimeout(() => copied = false, 1500);"
>
  
  <div 
    x-show="copied"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0 scale-95 translate-y-1"
    x-transition:enter-end="opacity-100 scale-100 translate-y-0"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100 scale-100 translate-y-0"
    x-transition:leave-end="opacity-0 scale-95 translate-y-1"
    class="absolute -top-8 right-0 bg-zinc-800 text-zinc-200 border border-zinc-700 text-[10px] font-medium px-2 py-0.5 rounded shadow-xl pointer-events-none whitespace-nowrap"
    style="display: none;"
  >
    Copied!
    <div class="absolute top-full right-4 -mt-0.5 w-1.5 h-1.5 bg-zinc-800 border-r border-b border-zinc-700 rotate-45"></div>
  </div>

  <button 
    type="button"
    x-show="!copied"
    class="group inline-flex items-center gap-1.5 px-2 py-1.5 text-[10px] font-bold uppercase tracking-wider text-zinc-500 hover:text-white bg-zinc-900/40 hover:bg-zinc-800 border border-zinc-800 hover:border-zinc-700 rounded-md shadow-sm transition-all duration-200 active:scale-95 cursor-pointer select-none "
  >
    <svg class="w-4 h-4 text-zinc-500 group-hover:text-zinc-300 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
      <path stroke-linecap="round" stroke-linejoin="round" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z" />
    </svg>
  </button>

  <button 
    type="button"
    x-show="copied"
    style="display: none;"
    class="inline-flex items-center gap-1.5 px-2 py-1.5 text-[10px] font-bold uppercase tracking-wider text-zinc-300 bg-zinc-800/60 border border-zinc-700 rounded-md shadow-sm transition-all duration-200 select-none"
  >
    <svg class="w-4 h-4 text-zinc-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
      <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
    </svg>
  </button>

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
