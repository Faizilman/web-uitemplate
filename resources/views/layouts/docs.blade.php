@props(['title'])
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
            background: #6366f1;
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
            background-color: oklch(27.4% 0.006 286.033);
        }

        table thead tr th:first-child {
            border-radius: 5px 0 0 5px;
            padding-left: 4px;
        }

        table thead tr th:last-child {
            border-radius: 0 5px 5px 0;
        }
    </style>
</head>

<body class="bg-black">

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
                    class="hidden md:flex items-center gap-3 bg-slate-900/50 border border-slate-800 rounded-lg px-3 py-1.5 text-sm text-slate-500 w-64">
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
<div x-data="{isPending: false, isDisabled: false}">

    <x-ui.component.button variant="warning" size="md" @click="
        isPending = true;

        setTimeout(() => {
            isPending = false
        }, 2000)
    ">
    <x-slot:pending>
        <span class="sr-only">
            Loading...
        </span>
        <svg class="w-4 h-4 animate-spin" fill="none" viewBox="0 0 24 24" aria-hidden="true">
            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" class="opacity-20" />
            <path fill="currentColor" class="opacity-80" d="M12 2a10 10 0 0 1 10 10" />
        </svg>
        Loading...
    </x-slot:pending>
    klik
</x-ui.component.button>
</div>

    <div class="max-w-[1536px] mx-auto px-6 ">
        <div class="flex flex-col lg:flex-row gap-0">

            <aside
                class="fixed top-0 bottom-0 lg:sticky z-10 -translate-x-[100%] lg:-translate-x-0 transition-all lg:block w-64 flex-none py-12 lg:top-16 h-[calc(100vh-4rem)] overflow-y-auto border-r border-slate-800/40 "
                id="aside">
                <nav class="space-y-9 pr-6">
                    <div>
                        <h5 class="mb-4 text-[11px] font-bold text-slate-500 uppercase tracking-[0.2em] px-4">
                            Introduction</h5>
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
                            <li><a href="{{ route('docs.show', ['folder' => 'components', 'page' => 'button']) }}"
                                    class="flex px-4 py-2 hover:text-white transition-all justify-between @if (request()->is('docs/1.x/components/button')) nav-active @endif">Buttons
                                    <span
                                        class="bg-blue-500/10 text-blue-400 text-[9px] px-1.5 py-0.5 rounded border border-blue-500/20 uppercase font-bold">New</span></a>
                            </li>
                            <li><a href="#" class="block px-4 py-2 hover:text-white transition-all">Modals</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </aside>

            <main class="flex-1 py-12 lg:px-12 xl:px-20 min-w-0 overflow-scroll scroll-smooth" id="main">

                <article class="prose prose-invert max-w-none">

                    {!! $content !!}

                </article>
                <footer
                    class="mt-32 pt-10 border-t border-slate-800/50 flex flex-col md:flex-row justify-between items-center gap-8 text-[11px] font-bold text-slate-600 uppercase tracking-widest">
                    <p>© 2026 Nexus Labs. Developed by Faiz.</p>
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
                                    class="block pl-4 -ml-px transition-all @if (request()->is(request()->path() . '#' . $t['slug'])) text-blue-400 border-l-2 border-blue-500 @endif">{{ $t['title'] }}</a>
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
        hljs.highlightAll();
        hljs.initLineNumbersOnLoad();

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
                    link.classList.toggle('text-blue-400', isActive);
                    link.classList.toggle('border-l-2', isActive);
                    link.classList.toggle('border-blue-500', isActive);
                    link.classList.toggle('text-gray-600', !isActive);
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
