<x-docs-layout title="Button Component - UITemplate Documentation">
    <x-slot:style>
        body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        background-color: #09090b;
        }

        .scrollbar-hide::-webkit-scrollbar {
        display: none;
        }

        .glass-card {
        background: rgba(24, 24, 27, 0.6);
        backdrop-filter: blur(12px);
        border: 1px solid rgba(63, 63, 70, 0.4);
        }
    </x-slot:style>

    <x-slot:main>
        <nav class="flex items-center gap-2 text-xs font-mono text-slate-500 mb-6">
            <span>Docs</span>
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M9 5l7 7-7 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <span>Component</span>
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M9 5l7 7-7 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <span class="text-slate-300">Buttons</span>
        </nav>
        <main class="lg:col-span-9 space-y-16">

            <header>
                <h1 class="text-4xl sm:text-5xl font-extrabold text-white mb-6 tracking-tight">Button</h1>
                <p class="text-lg text-zinc-400 max-w-3xl leading-relaxed">
                    Komponen dasar untuk interaksi pengguna dalam ekosistem <span
                        class="text-blue-400 font-medium">UITemplate</span>. Mendukung berbagai varian visual, skala
                    ukuran, dan status interaksi yang dioptimalkan untuk performa tinggi.
                </p>
            </header>

            <section id="basic-usage">
                <h2 class="text-2xl font-bold text-white mb-4 border-b border-zinc-800 pb-2">Basic Usage</h2>
                <p class="text-zinc-400 mb-6">Import komponen dan gunakan dengan struktur standar berikut.</p>
                
                 <x-docs.code-snippet>
                 <x-slot:preview>
                <button>
                halo
                </button>
                 </x-slot:preview>
                    <x-slot:code_laravel>
                        &lt;x-ui.button&gt;
                        &lt;/x-ui.button&gt;
                    </x-slot:code_laravel>
                    <x-slot:code_html>
                        // copy code html
                    </x-slot:code_html>
                </x-docs.code-snippet>
            </section>

            <section id="variants" index="0" class="section">
                <h2 class="text-2xl font-bold text-white mb-4 border-b border-zinc-800 pb-2">Gaya Varian (Variants)
                </h2>
                <p class="text-zinc-400 mb-8">Prop <code>variant</code> menentukan hierarki visual dan tingkat
                    kepentingan aksi.</p>

                <div class="glass-card rounded-3xl p-8 sm:p-12 flex flex-wrap gap-6 items-center justify-center">
                    <div class="flex flex-col items-center gap-3">
                        <button
                            class="px-6 py-2.5 bg-blue-600 text-white font-bold rounded-xl hover:bg-blue-700 transition-all active:scale-95 shadow-lg shadow-blue-500/20">Primary</button>
                        <span class="text-[10px] font-mono text-zinc-500 italic">primary</span>
                    </div>
                    <div class="flex flex-col items-center gap-3">
                        <button
                            class="px-6 py-2.5 bg-zinc-800 text-zinc-200 font-bold rounded-xl hover:bg-zinc-700 transition-all active:scale-95">Secondary</button>
                        <span class="text-[10px] font-mono text-zinc-500 italic">secondary</span>
                    </div>
                    <div class="flex flex-col items-center gap-3">
                        <button
                            class="px-6 py-2.5 border-2 border-zinc-700 text-zinc-300 font-bold rounded-xl hover:border-blue-500 hover:text-blue-400 transition-all active:scale-95">Outline</button>
                        <span class="text-[10px] font-mono text-zinc-500 italic">outline</span>
                    </div>
                    <div class="flex flex-col items-center gap-3">
                        <button
                            class="px-6 py-2.5 text-zinc-400 font-bold rounded-xl hover:bg-zinc-800 hover:text-white transition-all">Ghost</button>
                        <span class="text-[10px] font-mono text-zinc-500 italic">ghost</span>
                    </div>
                    <div class="flex flex-col items-center gap-3">
                        <button
                            class="px-6 py-2.5 bg-red-500/10 text-red-500 border border-red-500/20 font-bold rounded-xl hover:bg-red-500 hover:text-white transition-all active:scale-95">Danger</button>
                        <span class="text-[10px] font-mono text-zinc-500 italic">danger</span>
                    </div>
                </div>
            </section>

            <section id="sizes" index="1" class="section">
                <h2 class="text-2xl font-bold text-white mb-4 border-b border-zinc-800 pb-2">Ukuran (Sizes)</h2>
                <p class="text-zinc-400 mb-8">Pilih skala ukuran yang paling sesuai dengan konteks layout Anda.</p>

                <div class="glass-card rounded-3xl p-8 sm:p-12 flex flex-wrap gap-8 items-end justify-center">
                    <div class="text-center space-y-3">
                        <button class="px-4 py-2 text-xs bg-blue-600 text-white font-bold rounded-lg">Small</button>
                        <p class="text-[10px] text-zinc-500 font-mono">sm</p>
                    </div>
                    <div class="text-center space-y-3">
                        <button class="px-6 py-2.5 text-sm bg-blue-600 text-white font-bold rounded-xl">Medium</button>
                        <p class="text-[10px] text-zinc-500 font-mono">md</p>
                    </div>
                    <div class="text-center space-y-3">
                        <button
                            class="px-10 py-4 text-base bg-blue-600 text-white font-bold rounded-2xl shadow-xl shadow-blue-500/20">Large
                            Action</button>
                        <p class="text-[10px] text-zinc-500 font-mono">lg</p>
                    </div>
                </div>
            </section>

            <section id="states" index="2" class="section mb-16">
                <h2 class="text-2xl font-bold text-white mb-4 border-b border-zinc-800 pb-2">Interactive States</h2>
                <p class="text-zinc-400 mb-8">Status visual untuk memberikan umpan balik kepada pengguna saat proses
                    berlangsung atau saat aksi tidak tersedia.</p>

                <div class="glass-card rounded-3xl p-8 sm:p-12 flex flex-wrap gap-8 items-center justify-center">

                    <div class="text-center space-y-3">
                        <button
                            class="inline-flex items-center gap-2 px-6 py-2.5 bg-blue-600 text-white font-bold rounded-xl opacity-70 cursor-wait">
                            <svg class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                </path>
                            </svg>
                            <span>Processing...</span>
                        </button>
                        <p class="text-[10px] text-zinc-500 font-mono">isLoading={true}</p>
                    </div>

                    <div class="text-center space-y-3">
                        <button disabled
                            class="px-6 py-2.5 bg-zinc-800 text-zinc-500 font-bold rounded-xl cursor-not-allowed opacity-50 border border-zinc-700">
                            Disabled
                        </button>
                        <p class="text-[10px] text-zinc-500 font-mono">isDisabled={true}</p>
                    </div>

                    <div class="text-center space-y-3">
                        <button disabled
                            class="px-6 py-2.5 border border-zinc-800 text-zinc-600 font-bold rounded-xl cursor-not-allowed">
                            Not Available
                        </button>
                        <p class="text-[10px] text-zinc-500 font-mono">variant="outline"</p>
                    </div>
                </div>
            </section>

            <section id="props" index="3" class="section">
                <h2 class="text-2xl font-bold text-white mb-6 border-b border-zinc-800 pb-2">API Reference (Props)
                </h2>
                <div class="overflow-x-auto rounded-2xl border border-zinc-800 glass-card">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-zinc-900/50 border-b border-zinc-800">
                                <th class="px-6 py-4 text-sm font-bold text-zinc-300">Prop</th>
                                <th class="px-6 py-4 text-sm font-bold text-zinc-300">Type</th>
                                <th class="px-6 py-4 text-sm font-bold text-zinc-300">Default</th>
                                <th class="px-6 py-4 text-sm font-bold text-zinc-300">Description</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-zinc-400 divide-y divide-zinc-800/50">
                            <tr>
                                <td class="px-6 py-4 font-mono text-blue-400">variant</td>
                                <td class="px-6 py-4 italic text-zinc-500">string</td>
                                <td class="px-6 py-4 font-mono">'primary'</td>
                                <td class="px-6 py-4">Pilihan: <code class="text-zinc-200">primary</code>, <code
                                        class="text-zinc-200">secondary</code>, <code
                                        class="text-zinc-200">outline</code>, <code class="text-zinc-200">ghost</code>,
                                    <code class="text-zinc-200">danger</code>.
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 font-mono text-blue-400">size</td>
                                <td class="px-6 py-4 italic text-zinc-500">string</td>
                                <td class="px-6 py-4 font-mono">'md'</td>
                                <td class="px-6 py-4">Skala ukuran tombol: <code class="text-zinc-200">sm</code>,
                                    <code class="text-zinc-200">md</code>, <code class="text-zinc-200">lg</code>.
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 font-mono text-blue-400">isLoading</td>
                                <td class="px-6 py-4 italic text-zinc-500">boolean</td>
                                <td class="px-6 py-4 font-mono text-red-400">false</td>
                                <td class="px-6 py-4 text-zinc-400 text-xs">Menampilkan status pemuatan dan
                                    mematikan
                                    interaksi pengguna.</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 font-mono text-blue-400">isDisabled</td>
                                <td class="px-6 py-4 italic text-zinc-500">boolean</td>
                                <td class="px-6 py-4 font-mono text-red-400">false</td>
                                <td class="px-6 py-4 text-zinc-400 text-xs">Mengunci tombol dan memberikan visual
                                    redup
                                    (opacity 50%).</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <footer
                class="mt-24 pt-8 border-t border-zinc-800 text-sm text-zinc-500 flex flex-col sm:flex-row justify-between items-center gap-4">
                <span>&copy; 2026 Bacaloka.UI Component System.</span>
                <div class="flex gap-6">
                    <a href="#" class="hover:text-blue-400 transition">GitHub</a>
                    <a href="#" class="hover:text-blue-400 transition">Changelog</a>
                    <a href="#" class="hover:text-blue-400 transition">License</a>
                </div>
            </footer>
        </main>
    </x-slot:main>
    <x-slot:asideRight>
        <div>
            <h5 class="text-[11px] font-bold text-white uppercase tracking-[0.2em] mb-8">On this page</h5>
            <nav class="space-y-5 text-[13px] font-medium border-l border-slate-800">
                <a href="#variants" id="asideRight"
                    class="block pl-4 -ml-px transition-all @if( request()->is('docs/components/button#variants') ) text-blue-400 border-l-2 border-blue-500 @endif">Variant</a>
                <a href="#sizes" id="asideRight"
                    class="block pl-4 hover:text-slate-200 transition-colors @if( request()->is('docs/components/button#sizes') ) text-blue-400 border-l-2 border-blue-500 @endif">Size</a>
                <a href="#states" id="asideRight"
                    class="block pl-4 hover:text-slate-200 transition-colors @if( request()->is('docs/components/button#states') ) text-blue-400 border-l-2 border-blue-500 @endif">Interactive
                    State</a>
                <a href="#props" id="asideRight"
                    class="block pl-4 hover:text-slate-200 transition-colors @if( request()->is('docs/components/button#props') ) text-blue-400 border-l-2 border-blue-500 @endif">Props</a>
            </nav>
        </div>
    </x-slot:asideRight>
</x-docs-layout>