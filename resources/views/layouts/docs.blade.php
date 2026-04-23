@props(['title'])
<!DOCTYPE html>
<html lang="id" class="scroll-smooth antialiased dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <title>{{ $title }}</title>
    <style>
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
            background: rgba(2, 6, 23, 0.7);
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
    </style>
</head>

<body class="">

    <header class="sticky top-0 z-50 w-full glass-nav border-b border-slate-800/50">
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
                <a href="{{ route('welcome') }}" class="text-white font-extrabold text-xl tracking-tighter"><span
                        class="text-blue-500">UI</span>Template</a>
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

    <div class="max-w-[1536px] mx-auto px-6">
        <div class="flex flex-col lg:flex-row gap-0">

            <aside
                class="fixed top-0 bottom-0 lg:sticky z-10 -translate-x-[100%] lg:-translate-x-0 transition-all lg:block w-64 flex-none py-12  top-16 h-[calc(100vh-4rem)] overflow-y-auto border-r border-slate-800/40 bg-black" id="aside">
                <nav class="space-y-9 pr-6">
                    <div>
                        <h5 class="mb-4 text-[11px] font-bold text-slate-500 uppercase tracking-[0.2em] px-4">
                            Introduction</h5>
                        <ul class="space-y-1 text-sm font-medium">
                            <li><a href="{{ route('getting-started.quick-start') }}"
                                    class=" block px-4 py-2 hover:text-white hover:translate-x-1 transition-all @if(request()->routeIs('getting-started.quick-start')) nav-active @endif">Quick
                                    Start</a></li>
                            <li><a href="{{ route('getting-started.installation.laravel') }}"
                                    class="block px-4 py-2 hover:text-white hover:translate-x-1 transition-all @if(request()->routeIs('getting-started.installation.laravel')) nav-active @endif">Installation</a>
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
                            <li><a href="#" class="block px-4 py-2 hover:text-white transition-all">Layout Grid</a></li>
                            <li><a href="{{ route('docs.component.button') }}"
                                    class="flex px-4 py-2 hover:text-white transition-all justify-between @if(request()->routeIs('docs.component.button')) nav-active @endif">Buttons
                                    <span
                                        class="bg-blue-500/10 text-blue-400 text-[9px] px-1.5 py-0.5 rounded border border-blue-500/20 uppercase font-bold">New</span></a>
                            </li>
                            <li><a href="#" class="block px-4 py-2 hover:text-white transition-all">Modals</a></li>
                        </ul>
                    </div>
                </nav>
            </aside>

            <main class="flex-1 py-12 lg:px-12 xl:px-20 min-w-0 overflow-scroll" id="main">
                {{ $main }}
            </main>
            <aside class="hidden xl:block w-64 flex-none py-12 sticky top-16 h-fit border-l border-slate-800/40 pl-8">
                {{ $asideRight }}
            </aside>
        </div>
    </div>
    <script>
const hamburger = document.querySelector('#hamburger');
const aside = document.querySelector('#aside');

hamburger.addEventListener('click', function(){
    aside.classList.toggle('-translate-x-[100%]');
});

        function clipboard(text){
            console.log(text)
                return navigator.clipboard.writeText(text)
    };

    
    let sections = document.querySelectorAll('.section');
    let asideRights = document.querySelectorAll('#asideRight');
    const options = {
        rootMargin: '0px',
        scrollMargin: '0px 0px 0px 0px',
        threshold: 0.75
    };

    const callback = function (entries, observer) {
        entries.forEach((entry)=> {
            let index = entry.target.getAttribute('index');
            if(entry.isIntersecting){
                asideRights[index].classList.remove('text-slate-500');
                asideRights[index].classList.add('text-blue-400');
                asideRights[index].classList.add('border-l-2');
                asideRights[index].classList.add('border-blue-500');
            }else{
                asideRights[index].classList.remove('text-blue-400');
                asideRights[index].classList.remove('border-l-2');
                asideRights[index].classList.remove('border-blue-500');
                asideRights[index].classList.add('text-slate-500');
            }
        })
    }
    const observer = new IntersectionObserver(callback, options);
    
    sections.forEach((e) => {
        observer.observe(e)
    });
    </script>
</body>

</html>