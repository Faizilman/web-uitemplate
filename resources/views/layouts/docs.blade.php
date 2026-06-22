<!DOCTYPE html>
<html lang="id" class="scroll-smooth dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/styles/github-dark.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/highlight.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/highlightjs-line-numbers.js/dist/highlightjs-line-numbers.min.js"></script>
    <title>{{ 'UiTemplate -' . $page ?? 'UI Elegant UiTemplate for Building Website' }}</title>
    <style>
        html {
            scroll-behavior: smooth !important;
            scroll-padding-top: 120px;
            /* Alternatif jika scroll-margin tidak berfungsi */
        }

        body {
            background-color: #000000;
            color: #94a3b8;
        }

        /* Custom Scrollbar Thin */
        ::-webkit-scrollbar {
            width: 4px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #1e293b;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #155dfc;
        }

        .glass-nav {
            background: #020202;
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }

        /* Nav link indicator */
        .nav-active {
            color: #3b82f6;
            font-weight: 600;
            background: linear-gradient(90deg, rgba(99, 102, 241, 0.1) 0%, rgba(99, 102, 241, 0) 100%);
            border-left: 2px solid #3b82f6;
        }

        .tab-active {
            color: #3b82f6;
            font-weight: 600;
            border-bottom: 2px solid #3b82f6;
        }

        pre code {
            font-family:
                'JetBrains Mono',
                monospace;

            tab-size: 4;

        }

        /* for block of numbers */
        .language-html .hljs-ln-n::before {
            content: attr(data-line-number)"  ";
        }


        .hljs-ln-numbers {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;

            color: #98a1b1;
            border-right: 1px solid #1e293b;
            padding-right: 12px !important;
            text-align: right;
        }

        .hljs-ln-code{
            padding-left: 12px !important;
        }

        /* for block of code */

        .hljs-ln {
            margin: 0px;
        }

        .hljs-ln tbody tr {
            border: none !important;
            border-bottom: none !important;
        }

        table.hljs-ln {
            width: 9%;
            border-collapse: collapse;
            table-layout: fixed;
            margin: 0;
        }

        table thead tr th {
            padding: 10px 2px;
        }

        table thead tr {
            background-color: #18181b;
        }

        table thead tr th:first-child {
            border-radius: 5px 0 0 5px;
        }

        table thead tr th:last-child {
            border-radius: 0 5px 5px 0;
        }
    </style>
</head>

<body class="bg-black " x-data="{
        openSearch: false,
        search: '',

        docs: [],
        show: true,
        activeIndex: 0,

        async init(){
            const response = await fetch('../../../json/search.json');
            this.docs = await response.json();
        },

        nextItem(){
            if(this.filteredItems.length - 1 == this.activeIndex){
                return;
            }
            return this.activeIndex++;
        },

        prevItem(){
            if(this.activeIndex == 0){
                return;
            }
            return this.activeIndex--;
            
        },

        get filteredItems() {

            if(this.search.trim() === ''){
                return []; 
            }

           const keyword = this.search.toLowerCase();

           return this.docs.filter(doc => {
                return (
                    doc.title.toLowerCase().includes(keyword) ||
                    doc.description.toLowerCase().includes(keyword) ||
                    doc.keywords.some(k =>
                        k.toLowerCase().includes(keyword)
                    )
                );
           })
        }
    }">
    <div 
      
        x-show="openSearch"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @keydown.esc.prevent.window="openSearch = false"
        @keydown.window.arrow-down.prevent="
            if(openSearch && filteredItems.length != 0){
                nextItem();
            }"
        @keydown.window.arrow-up.prevent=" 
            if(openSearch && filteredItems.length != 0){
                prevItem();
            }"
        id="search-modal" class="fixed inset-0 z-50 flex items-start justify-center overflow-y-auto bg-zinc-900/50 p-4 backdrop-blur-sm sm:p-6 md:p-20 dark:bg-zinc-950/70">
        <div
        @click.outside="openSearch = false"

        class="animate-in fade-in zoom-in-95 mt-10 w-full max-w-xl transform divide-y divide-zinc-100 overflow-hidden rounded-xl bg-white shadow-2xl ring-1 ring-black/5 transition-all duration-150 md:mt-16 dark:divide-zinc-800 dark:bg-zinc-900 dark:ring-white/10">
            
            <div class="relative flex items-center px-4">
                <svg class="pointer-events-none h-5 w-5 text-zinc-400 dark:text-zinc-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <input x-ref="searchInput" x-model="search" type="text"  id="search-input" class="h-14 w-full border-0 bg-transparent pr-10 pl-3 text-zinc-900 outline-none placeholder:text-zinc-400 focus:ring-0 sm:text-sm dark:text-zinc-100 dark:placeholder:text-zinc-500" placeholder="Ketik kata kunci untuk mencari..." autocomplete="off" />
                <button id="close-search-btn" @click="openSearch = false" class="cursor-pointer absolute right-4 text-lg text-zinc-400 hover:text-zinc-600 dark:text-zinc-500 dark:hover:text-zinc-300">&times;</button>
            </div>

            <div id="search-results" class="max-height-[350px] overflow-y-auto p-3 text-sm text-zinc-700 dark:text-zinc-300"
            
            >
                <div class="space-y-1 block peer-placeholder-shown/input:hidden">
                    <div class="px-2 text-xs font-semibold text-zinc-400 uppercase tracking-wider mb-2 dark:text-zinc-500">Hasil Pencarian Terkait</div>
                    <template x-for="(item, index) in filteredItems" :key="index">
                        <a :href="'/docs/1.x'+item.url" 
                        :id="'search-'+index"
                        @mouseenter="activeIndex = index"
                        @keydown.window.Enter.prevent="
                        if(openSearch && activeIndex == index){
                            window.location.assign('/docs/1.x'+item.url)
                        }"
                        :class="activeIndex == index ? 'bg-blue-600' : ''"
                        class="block rounded-lg p-3 hover:bg-blue-600 hover:text-white dark:hover:bg-blue-600 transition-colors">
                        <div class="flex flex-col">
                            <span 
                                class="text-xs font-semibold uppercase tracking-wider" 
                                x-text="item.category"></span>
                            <span class="font-medium" x-text="item.title"></span>
                        </div>
                        </a>
                    </template>
                </div>
                <div class="py-14 text-center text-zinc-400 dark:text-zinc-500" x-show="filteredItems.length === 0">
                    <svg class="mx-auto mb-2 h-6 w-6 text-zinc-300 dark:text-zinc-600" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"></path>
                    </svg>
                    <p>Belum ada pencarian terbaru.</p>
                </div>
            </div>

            <div class="flex flex-wrap items-center gap-4 bg-zinc-50 px-4 py-2.5 text-xs text-zinc-500 dark:bg-zinc-800/50 dark:text-zinc-400">
            <span class="flex items-center gap-1">
                <kbd class="rounded border border-zinc-200 bg-white px-1.5 py-0.5 shadow-sm dark:border-zinc-700 dark:bg-zinc-800 dark:text-zinc-300">↵</kbd> Pilih
            </span>
            <span class="flex items-center gap-1">
                <kbd class="rounded border border-zinc-200 bg-white px-1.5 py-0.5 shadow-sm dark:border-zinc-700 dark:bg-zinc-800 dark:text-zinc-300">↑</kbd>
                <kbd class="rounded border border-zinc-200 bg-white px-1.5 py-0.5 shadow-sm dark:border-zinc-700 dark:bg-zinc-800 dark:text-zinc-300">↓</kbd> Navigasi
            </span>
            <span class="flex items-center gap-1">
                <kbd class="rounded border border-zinc-200 bg-white px-1.5 py-0.5 shadow-sm dark:border-zinc-700 dark:bg-zinc-800 dark:text-zinc-300">esc</kbd> Tutup
            </span>
            </div>
        </div>
    </div>
    <header class="sticky top-0 z-50 w-full z-[999] glass-nav border-b border-slate-800/50">
        <div class="max-w-[1536px] mx-auto px-6 h-16 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="text-3xl block lg:hidden" id="hamburger">
                    =
                </div>
                <div class="w-7 h-7 bg-blue-600 rounded flex items-center justify-center shadow-lg shadow-blue-500/20">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                {{-- <a href="{{ route('welcome') }}" class="text-white font-extrabold text-xl tracking-tighter"><span
                        class="text-blue-500">UI</span>Template</a> --}}
            </div>

            <div class="flex items-center gap-6">
                <div
                    @click="openSearch = true; $nextTick(() => $refs.searchInput.focus())"
                    @keydown.window.ctrl.k.prevent="openSearch = true; $nextTick(() => $refs.searchInput.focus())"
                    @keydown.window.cmd.k.prevent="openSearch = true; $nextTick(() => $refs.searchInput.focus())"
                    class="hidden md:flex items-center gap-3 bg-zinc-900/50 border border-zinc-800 rounded-lg px-3 py-1.5 text-sm text-zinc-500 w-64">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                    <span class="text-[13px]">Search components...</span>
                    <kbd class="ml-auto text-[10px] opacity-40 font-sans">⌘K</kbd>
                </div>
                <a href="#" class="text-slate-400 hover:text-white transition text-sm font-medium">Github</a>
            </div>
        </div>
    </header>

    <div class="max-w-[1536px] mx-auto px-6 ">
        <div class="flex flex-col lg:flex-row gap-0">

            <aside
                class="fixed top-0 bottom-0 lg:sticky z-10 -translate-x-[100%] lg:-translate-x-0 transition-all lg:block w-64 flex-none py-12 lg:top-16 h-[calc(100vh-4rem)] overflow-y-auto border-r border-slate-800/40 "
                id="aside">
                <nav class="space-y-9 pr-6">
                    <div>
                        <h5 class="mb-4 text-[11px] font-bold text-slate-500 uppercase tracking-[0.2em] px-4">
                            Getting Started</h5>
                        <ul class="space-y-1 text-sm font-medium">

                            <li><a href="{{ route('docs.show', ['folder' => 'getting-started', 'page' => 'quick-start']) }}"
                                    class=" block px-4 py-2 hover:text-white hover:translate-x-1 transition-all @if (request()->is('docs/1.x/getting-started/quick-start')) nav-active @endif">Quick
                                    Start</a></li>
                            <li><a href="{{ route('docs.show', ['folder' => 'getting-started', 'page' => 'installation']) }}"
                                    class="block px-4 py-2 hover:text-white hover:translate-x-1 transition-all @if (request()->is('docs/1.x/getting-started/installation')) nav-active @endif">Installation</a>
                            </li>
                            <li><a href="#"
                                    class="block px-4 py-2 hover:text-white hover:translate-x-1 transition-all">Changelog</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h5 class="mb-4 text-[11px] font-bold text-slate-500 uppercase tracking-[0.2em] px-4">Components
                        </h5>
                        <ul class="space-y-1 text-sm font-medium">
                            <li><a href="{{ route('docs.show', ['folder' => 'components', 'page' => 'according']) }}"
                                    class="group flex px-4 py-2 hover:text-white transition-all justify-between @if (request()->is('docs/1.x/components/according')) nav-active @endif">
                                    <span class="@if (!request()->is('docs/1.x/components/according')) group-hover:translate-x-1 transition-all @endif">
                                        According
                                    </span>
                                    <span
                                        class="bg-blue-500/10 text-blue-400 text-[9px] px-1.5 py-0.5 rounded border border-blue-500/20 uppercase font-bold">Updated</span></a>
                            </li>
                            <li><a href="{{ route('docs.show', ['folder' => 'components', 'page' => 'alert']) }}"
                                    class="group flex px-4 py-2 hover:text-white transition-all justify-between @if (request()->is('docs/1.x/components/alert')) nav-active @endif">
                                    <span class="@if (!request()->is('docs/1.x/components/alert')) group-hover:translate-x-1 transition-all @endif">
                                        Alert
                                    </span>
                                    <span
                                        class="bg-blue-500/10 text-blue-400 text-[9px] px-1.5 py-0.5 rounded border border-blue-500/20 uppercase font-bold">Updated</span></a>
                            </li>
                            <li><a href="{{ route('docs.show', ['folder' => 'components', 'page' => 'button']) }}"
                                    class="group flex px-4 py-2 hover:text-white transition-all justify-between @if (request()->is('docs/1.x/components/button')) nav-active @endif">
                                    <span class="@if (!request()->is('docs/1.x/components/button')) group-hover:translate-x-1 transition-all @endif">
                                        Button
                                    </span>
                                    <span
                                        class="bg-blue-500/10 text-blue-400 text-[9px] px-1.5 py-0.5 rounded border border-blue-500/20 uppercase font-bold">New</span></a>
                            </li>
                            <li><a href="{{ route('docs.show', ['folder' => 'components', 'page' => 'date-picker']) }}"
                                    class="group flex px-4 py-2 hover:text-white transition-all justify-between @if (request()->is('docs/1.x/components/date-picker')) nav-active @endif">
                                    <span class="@if (!request()->is('docs/1.x/components/date-picker')) group-hover:translate-x-1 transition-all @endif">
                                        Date Picker
                                    </span>
                                    <span
                                        class="bg-blue-500/10 text-blue-400 text-[9px] px-1.5 py-0.5 rounded border border-blue-500/20 uppercase font-bold">New</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </aside>

            <main class="flex-1 py-12 lg:px-12 xl:px-20 min-w-0 overflow-scroll scroll-smooth" id="main">

                <article class="prose prose-invert max-w-none">

                    {!! $content !!}

                </article>
                {{-- navigasi --}}
                <div class="mt-20 border-t border-zinc-900 pt-8">
                    <div class="grid gap-4 md:grid-cols-2">
                        <!-- Previous -->
                        @if ($navigation['prev'])
                        <a href="{{ route('docs.show', ['folder' => $navigation['prev']['folder'], 'page' => $navigation['prev']['page']]) }}" class="group rounded-2xl border border-zinc-900 bg-black p-6 transition-all duration-200 hover:border-zinc-800 hover:bg-zinc-950">
                            <div class="flex items-center gap-2 text-xs font-medium uppercase tracking-[0.2em] text-zinc-600">
                                <svg class="h-4 w-4 transition-transform duration-200 group-hover:-translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                </svg>
                                Previous
                            </div>
                            <h3 class="mt-4 text-xl font-semibold text-zinc-100 transition-colors group-hover:text-white">
                                {{ $navigation['prev']['title'] }}
                            </h3>
                            <p class="mt-2 text-sm leading-6 text-zinc-500">
                                {{ $navigation['prev']['desc'] }}
                            </p>
                        </a>
                        @endif
                        <!-- Next -->
                        @if ($navigation['next'])
                        <a href="{{ route('docs.show', ['folder' => $navigation['next']['folder'], 'page' => $navigation['next']['page']]) }}" class="group rounded-2xl border border-zinc-900 bg-black p-6 text-right transition-all duration-200 hover:border-zinc-800 hover:bg-zinc-950">
                            <div class="flex items-center justify-end gap-2 text-xs font-medium uppercase tracking-[0.2em] text-zinc-600">
                                Next
                                <svg class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </div>
                            <h3 class="mt-4 text-xl font-semibold text-zinc-100 transition-colors group-hover:text-white">
                                {{ $navigation['next']['title'] }}
                            </h3>
                            <p class="mt-2 text-sm leading-6 text-zinc-500">
                                {{ $navigation['next']['desc'] }}
                            </p>
                        </a>
                        @endif
                    </div>
                </div>
                <footer
                    class="mt-32 pt-10 border-t border-slate-800/50 flex flex-col md:flex-row justify-between items-center gap-8 text-[11px] font-bold text-slate-600 tracking-widest">
                    <p>© 2026 AtlasUI. Developed by team Atlas.</p>
                    <div class="flex gap-10">
                        <a href="#" class="hover:text-white transition-colors">Documentation</a>
                        <a href="#" class="hover:text-white transition-colors">Changelog</a>
                        <a href="#" class="hover:text-white transition-colors">Privacy</a>
                    </div>
                </footer>
            </main>
            <aside
                class="hidden xl:block w-64 flex-none py-12 sticky top-16 h-fit border-l border-slate-800/40 pl-8 mb-10">
                <div class="grid gap-y-4">
                    <div>
                        <h5 class="text-[11px] font-bold text-white uppercase tracking-[0.2em] mb-8">On this page</h5>
                        <nav class="space-y-5 text-[13px] font-medium border-l border-slate-800 h-64 overflow-y-auto">
                            @foreach ($toc as $t)
                                <a href="#{{ $t['slug'] }}" data-fragment="{{ $t['slug'] }}" id="asideRight"
                                    class="block pl-4 -ml-px transition-all hover:text-blue-600">{{ $t['title'] }}</a>
                            @endforeach
                        </nav>
                    </div>
                    <div>
                        Isian Baruu nanti
                    </div>
                </div>
            </aside>
        </div>
    </div>
    <script>
    document.addEventListener('DOMContentLoaded', () => {

        document.querySelectorAll('pre code').forEach((block) => {

            hljs.highlightElement(block);

            if (block.textContent && block.textContent.trim() !== '') {
                hljs.lineNumbersBlock(block);
            }

        });

    });

        const hamburger = document.querySelector('#hamburger');
        const aside = document.querySelector('#aside');

        hamburger.addEventListener('click', function() {
            aside.classList.toggle('-translate-x-[100%]');
        });

        function clipboard(text) {
            console.log(text)
            return navigator.clipboard.writeText(text)
        };


        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('#asideRight');

            function setActive(id) {
                links.forEach(link => {
                    const isActive = link.dataset.fragment === id;
                    link.classList.toggle('text-blue-600', isActive);
                    link.classList.toggle('border-l-2', isActive);
                    link.classList.toggle('border-blue-600', isActive);
                    link.classList.toggle('text-zinc-600', !isActive);
                });
            }

            // ✅ 1. Highlight saat load (dari URL hash)
            const initialHash = window.location.hash.replace('#', '');
            if (initialHash) setActive(initialHash);

            // ✅ 2. Highlight saat klik link
            links.forEach(link => {
                link.addEventListener('click', function() {
                    setActive(this.dataset.fragment);
                });
            });

            // ✅ 3. Highlight saat scroll (IntersectionObserver)
            let isClicking = false; // flag agar scroll setelah klik tidak bentrok

            links.forEach(link => {
                link.addEventListener('click', () => {
                    isClicking = true;
                    setTimeout(() => isClicking = false,
                        1000); // reset setelah animasi scroll selesai
                });
            });

            const observer = new IntersectionObserver(entries => {
                if (isClicking) return; // skip saat user baru klik

                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        setActive(entry.target.id);

                        // update URL hash tanpa trigger scroll
                        history.replaceState(null, '', '#' + entry.target.id);
                    }
                });
            }, {
                rootMargin: '-10% 0px -80% 0px', // trigger saat section di 10%-20% atas viewport
                threshold: 0
            });

            // observe semua section target
            links.forEach(link => {
                const target = document.getElementById(link.dataset.fragment);
                if (target) observer.observe(target);
            });
        });
    </script>
</body>

</html>
