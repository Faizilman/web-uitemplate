<x-docs-layout title="Quick Start">
    <x-slot:main>
        <nav class="flex items-center gap-2 text-xs font-mono text-slate-500 mb-6">
            <span>Docs</span>
            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path d="M9 5l7 7-7 7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <span class="text-slate-300">Quick Start</span>
        </nav>

        <header class="mb-12">
            <h1 class="text-4xl font-extrabold text-white mb-4 tracking-tighter">Memulai dengan Cepat</h1>
            <p class="text-lg text-slate-400 leading-relaxed">
                Pelajari cara mengatur proyek Anda dan mulai menggunakan komponen UI modern dalam hitungan menit.
            </p>
        </header>
        <div class="flex flex-col flex-1 gap-y-16">

            <section class="section" id="persyaratan-proyek" index="0">
                <h2 class="text-2xl font-bold text-white mb-4">1. Persyaratan Proyek</h2>
                <p class="mb-6">Library kami dirancang untuk bekerja secara mulus dengan **Tailwind CSS**. Pastikan Anda
                    sudah menginstalnya di proyek Laravel atau Vue Anda.</p>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div
                        class="p-4 rounded-xl border border-slate-800 bg-[#111113] hover:border-blue-500/50 transition-colors cursor-pointer group">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-bold text-white group-hover:text-blue-400">Laravel Guide</span>
                            <svg class="w-4 h-4 text-slate-500 group-hover:text-blue-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <p class="text-xs text-slate-500">Integrasi dengan Vite dan Blade components.</p>
                    </div>
                    <div
                        class="p-4 rounded-xl border border-slate-800 bg-[#111113] hover:border-blue-500/50 transition-colors cursor-pointer group">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-sm font-bold text-white group-hover:text-blue-400">Vue.js Guide</span>
                            <svg class="w-4 h-4 text-slate-500 group-hover:text-blue-400" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                        <p class="text-xs text-slate-500">Menggunakan komposisi API dan modul Tailwind.</p>
                    </div>
                </div>
            </section>

            <section class="section" id="instalasi-proyek" index="1">
                <h2 class="text-2xl font-bold text-white mb-4">2. Instalasi Library</h2>
                <p class="mb-2">Jalankan perintah berikut di direktori utama proyek Anda:</p>
                <p class="text-xl text-white mb-4">Using NPM module</p>

                <x-docs.copy-code>
                    <div>
                        <div class="py-3 px-5 text-blue-400">
                            <span class="text-slate-600">npm install</span> uitemplate @headlessui/vue
                        </div>
                    </div>
                </x-docs.copy-code>

                <p class="text-xl text-white mb-2 mt-3">Using Composer</p>
                <x-docs.copy-code>
                    <div>
                        <div class="py-3 px-5 text-blue-400">
                            <span class="text-slate-600">composer require</span> uitemplate/laravel
                        </div>
                    </div>
                </x-docs.copy-code>


            </section>

            <section class="section" id="#import-component" index="2">
                <h2 class="text-2xl font-bold text-white mb-4">3. Import Component</h2>
                <p class="mb-6">Import Component via artisan console.</p>

                <x-docs.code-snippet>
                    <x-slot:code_laravel>
                        php artisan install:ui name-component
                    </x-slot:code_laravel>
                    <x-slot:code_html>
                        // copy code html
                    </x-slot:code_html>
                </x-docs.code-snippet>
            </section>

            <section class="section" id="preview&code" index="3">
                <h2 class="text-2xl font-bold text-white mb-4">4. Preview & Code</h2>
                <p class="mb-6">Coba salin komponen kartu modern ini untuk memastikan semuanya berfungsi.</p>

                <x-docs.code-snippet>
                    <x-slot:preview>
                        <x-docs.code-components.button.example />
                    </x-slot:preview>
                    <x-slot:code_laravel>
                        <x-docs.code-components.button.laravel />
                    </x-slot:code_laravel>
                    <x-slot:code_html>
                        <x-docs.code-components.button.html />
                    </x-slot:code_html>
                </x-docs.code-snippet>
            </section>


        </div>

    </x-slot:main>
    <x-slot:asideRight>
        <div>
            <h5 class="text-[11px] font-bold text-white uppercase tracking-[0.2em] mb-8">On this page</h5>
            <nav class="space-y-5 text-[13px] font-medium border-l border-slate-800">
                <a href="#persyaratan-proyek" id="asideRight"
                    class="block pl-4 @if( request()->is('docs/quick-started#persyaratan-proyek') ) text-blue-400 border-l-2 border-blue-500 @endif -ml-px transition-all">Persyaratan
                    Proyek</a>
                <a href="#instalasi-proyek" id="asideRight"
                    class="block pl-4 text-slate-500 hover:text-slate-200 transition-colors">Instalasi Library</a>
                <a href="#preview&code" id="asideRight"
                    class="block pl-4 text-slate-500 hover:text-slate-200 transition-colors">Preview
                    & Code</a>
                <a href="#import-component" id="asideRight"
                    class="block pl-4 text-slate-500 hover:text-slate-200 transition-colors">Import Component</a>
                {{-- <a href="#"
                    class="block pl-4 text-slate-500 hover:text-slate-200 transition-colors">Troubleshooting</a> --}}
            </nav>
        </div>
    </x-slot:asideRight>
</x-docs-layout>