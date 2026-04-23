<x-docs-layout title="Your App">
    <x-slot:style>
        .tab-active { color: #818cf8; border-bottom: 2px solid #6366f1; }
    </x-slot:style>


    <x-slot:main>
        <article class="max-w-3xl">
            <header class="mb-14">
                <nav class="flex text-xs font-bold text-blue-400 gap-2 mb-6 uppercase tracking-widest">
                    <a href="#">Docs</a>
                    <span class="text-slate-700">/</span>
                    <span>Getting Started</span>
                </nav>
                <h1 class="text-4xl lg:text-6xl font-extrabold text-white tracking-tighter mb-8 leading-tight">
                    Build faster with <br> <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-violet-400">Modern
                        Architecture.</span>
                </h1>
                <p class="text-xl text-slate-400 leading-relaxed font-light">
                    Library ini dirancang untuk skalabilitas maksimal. Pelajari cara menyiapkan lingkungan
                    pengembangan Anda hanya dalam hitungan menit.
                </p>
            </header>
            <div class="flex border-b border-slate-800 mb-10 overflow-x-auto gap-8">

                <a href="{{ route('getting-started.installation.laravel') }}"
                    class="pb-4 text-sm font-bold flex items-center gap-2 px-2 shrink-0 @if( request()->routeIs('getting-started.installation.laravel')) tab-active @endif">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" class="w-4 h-4"
                        alt="Laravel">
                    Laravel
                </a>
                <button class="pb-4 text-sm font-medium text-slate-500 hover:text-slate-300 transition flex items-center gap-2 px-2 shrink-0
                    {{-- @if( request()->routeIs('getting-started.installation.vue')) tab-active @endif --}}
                    ">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Vue.js_logo.svg" class="w-4 h-4"
                        alt="Vue">
                    Vue.js
                </button>
                <button class="pb-4 text-sm font-medium text-slate-500 hover:text-slate-300 transition flex items-center gap-2 px-2 shrink-0
                    {{-- @if( request()->routeIs('getting-started.installation.react')) tab-active @endif --}}
                    ">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a7/React-icon.svg" class="w-4 h-4"
                        alt="React">
                    React
                </button>
            </div>
            <section id="installation" class="mb-20 scroll-mt-24">
                <h2 class="text-2xl font-bold text-white mb-6 tracking-tight flex items-center gap-3">
                    <span
                        class="w-8 h-8 rounded bg-slate-900 border border-slate-800 flex items-center justify-center text-xs text-blue-400 font-mono">01</span>
                    Installation
                </h2>
                <p class="mb-8 leading-relaxed">Gunakan terminal pilihan Anda untuk
                    menginstal dependensi dasar.
                    Kami sangat menyarankan penggunaan <code>bash</code> untuk manajemen package yang lebih
                    efisien.</p>

                <x-docs.copy-code>
                    <div class=" px-4 py-3 font-mono text-[13px] md:text-[14px] leading-8 text-slate-300">

                        <div class="flex gap-4 group/line">
                            <code
                                class="flex-1"><span class="text-slate-600 italic">// Instal library inti UiTemplate laravel</span></code>
                        </div>

                        <div class="flex gap-4 group/line">
                            <code
                                class="flex-1"><span class="text-blue-400 font-semibold">composer</span> require uitemplate/laravel</code>
                        </div>

                    </div>
                </x-docs.copy-code>

            </section>

            <footer
                class="mt-32 pt-10 border-t border-slate-800/50 flex flex-col md:flex-row justify-between items-center gap-8 text-[11px] font-bold text-slate-600 uppercase tracking-widest">
                <p>© 2026 Nexus Labs. Developed by Faiz.</p>
                <div class="flex gap-10">
                    <a href="#" class="hover:text-white transition-colors">Documentation</a>
                    <a href="#" class="hover:text-white transition-colors">Changelog</a>
                    <a href="#" class="hover:text-white transition-colors">Privacy</a>
                </div>
            </footer>
        </article>
    </x-slot:main>
    <x-slot:asideRight>
        <div>
            <h5 class="text-[11px] font-bold text-white uppercase tracking-[0.2em] mb-8">On this page</h5>
            <nav class="space-y-5 text-[13px] font-medium border-l border-slate-800">
                <a href="#installation" id="asideRight"
                    class="block pl-4 text-blue-400 border-l-2 border-blue-500 -ml-px transition-all">Installation
                    Setup</a>
                <a href="#" id="asideRight"
                    class="block pl-4 text-slate-500 hover:text-slate-200 transition-colors">Project
                    Structure</a>
                <a href="#" id="asideRight"
                    class="block pl-4 text-slate-500 hover:text-slate-200 transition-colors">System
                    Requirements</a>
                <a href="#" id="asideRight"
                    class="block pl-4 text-slate-500 hover:text-slate-200 transition-colors">Troubleshooting</a>
            </nav>
        </div>
    </x-slot:asideRight>
</x-docs-layout>