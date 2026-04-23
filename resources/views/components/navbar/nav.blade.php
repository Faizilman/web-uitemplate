<nav class="sticky top-0 z-[100] border-b border-white/5 bg-[#000000]/70 backdrop-blur-2xl">
    <div class="max-w-7xl mx-auto px-6 h-20 flex items-center justify-between">
        <div class="flex items-center gap-12">
            <div class="flex items-center gap-3 group cursor-pointer">
                <div
                    class="w-9 h-9 bg-gradient-to-br from-blue-500 to-blue-700 rounded-xl flex items-center justify-center shadow-lg shadow-blue-500/30 group-hover:rotate-6 transition-all duration-300">
                    <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        stroke-width="3">
                        <path d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <a href="{{ route('welcome') }}" class="text-white font-extrabold text-xl tracking-tighter"><span
                        class="text-blue-500">UI</span>Template</a>
            </div>
            <div class="hidden lg:flex gap-8 text-[12px] font-bold uppercase tracking-widest text-slate-500">
                <a href="{{ route('getting-started.quick-start') }}" class="hover:text-blue-400 transition">Quick
                    Start</a>
                <a href="#docs" class="hover:text-blue-400 transition">Documentation</a>
                <a href="{{ route('page.pricing&faq') }}" class="hover:text-blue-400 transition">Pricing & Faq</a>
            </div>
        </div>
        <div class="flex items-center gap-6">
            <button class="hidden sm:block text-[13px] font-bold text-slate-400 hover:text-white transition">Log
                in</button>
            <button
                class="bg-white text-black px-6 py-2.5 rounded-full text-[13px] font-black hover:bg-blue-50 transition shadow-xl shadow-white/5">Start
                Building</button>
        </div>
    </div>
</nav>