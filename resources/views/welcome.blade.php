<!DOCTYPE html>
<html lang="id" class="dark scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UITemplate | The Enterprise Design System Standard</title>
    @vite('resources/css/app.css')
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #000000;
            color: #94a3b8;
        }

        /* Layer Premium: Mesh Gradient Animasi */
        .bg-mesh {
            background-color: #000000;

        }

        /* Border Shimmer Effect (Terlihat di Pricing & Cards) */
        .premium-card {
            position: relative;
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .premium-card:hover {
            border-color: rgba(59, 130, 246, 0.3);
            box-shadow: 0 20px 40px -20px rgba(0, 0, 0, 0.5);
            transform: translateY(-5px);
        }

        /* Text Shimmer untuk Hero Title */
        .text-shimmer {
            background: linear-gradient(to right, #fff 20%, #64748b 40%, #64748b 60%, #fff 80%);
            background-size: 200% auto;
            color: #fff;
            background-clip: text;
            text-fill-color: transparent;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shine 5s linear infinite;
        }

        @keyframes shine {
            to {
                background-position: 200% center;
            }
        }

        .border-glass {
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .inner-shadow {
            box-shadow: inset 0 1px 1px 0 rgba(255, 255, 255, 0.05);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #020617;
        }

        ::-webkit-scrollbar-thumb {
            background: #1e293b;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #334155;
        }
    </style>
</head>

<body class="bg-mesh antialiased overflow-x-hidden">



    <x-navbar.navalert />
    <x-navbar.nav />

    <section class="relative pt-10 pb-40 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center" data-aos="fade-up" data-aos-duration="1000">
            <div
                class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-blue-500/20 bg-blue-500/5 text-blue-400 text-[10px] font-black tracking-[0.2em] uppercase mb-4">
                🚀 Trusted by 2,000+ Startups
            </div>
            <h1 class="text-6xl md:text-[6rem] font-extrabold tracking-[-0.05em] leading-[0.95] mb-8 text-shimmer">
                The Infrastructure of <br> Modern Interfaces.
            </h1>
            <p class="text-lg text-slate-500 max-w-2xl mx-auto mb-12 leading-relaxed font-medium">
                ForgeUI provides a unified system of high-performance components and pre-built layouts to help you scale
                your SaaS product at light speed.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-6">
                <button
                    class="bg-blue-600 text-white px-10 py-4 rounded-full font-bold hover:bg-blue-500 transition-all shadow-2xl shadow-blue-600/40 hover:-translate-y-1">
                    Getting Start</button>
                <button
                    class="bg-slate-950 text-slate-300 border border-white/10 px-10 py-4 rounded-full font-bold hover:bg-slate-900 transition flex items-center justify-center gap-2 italic">
                    View Components
                </button>
            </div>
        </div>
        <div
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-blue-600/10 blur-[120px] rounded-full pointer-events-none">
        </div>
    </section>

    <section class="py-20 border-y border-white/5 bg-slate-950/20">
        <div class="max-w-7xl mx-auto px-6">
            <div
                class="grid grid-cols-2 md:grid-cols-5 gap-12 grayscale opacity-30 contrast-125 transition-all hover:opacity-100 duration-700">
                <div class="flex justify-center font-black text-2xl tracking-tighter">RAILWAY</div>
                <div class="flex justify-center font-black text-2xl tracking-tighter">RESEND</div>
                <div class="flex justify-center font-black text-2xl tracking-tighter">VERCEL</div>
                <div class="flex justify-center font-black text-2xl tracking-tighter">LINEAR</div>
                <div class="flex justify-center font-black text-2xl tracking-tighter">RAYCAST</div>
            </div>
        </div>
    </section>

    <section id="features" class="py-40">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-24" data-aos="fade-up">
                <h2 class="text-4xl md:text-5xl font-extrabold text-white tracking-tighter mb-6">Built for scale.</h2>
                <p class="text-slate-500 font-medium uppercase tracking-[0.2em] text-xs">Engineered for the next
                    generation of web</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="md:col-span-2 premium-card rounded-[2.5rem] p-12 overflow-hidden group"
                    data-aos="fade-right">
                    <div class="relative z-10">
                        <h3 class="text-3xl font-bold text-white mb-4 tracking-tight">Production-Ready Dashboards</h3>
                        <p class="max-w-sm text-slate-400 leading-relaxed">Dozens of high-fidelity layouts for
                            analytics, CRM, and management tools.</p>
                    </div>
                    <div
                        class="absolute -right-10 -bottom-10 w-96 h-72 bg-blue-600/5 rounded-tl-[4rem] border-t border-l border-white/10 group-hover:bg-blue-600/10 transition-all duration-500">
                    </div>
                </div>
                <div class="premium-card rounded-[2.5rem] p-12" data-aos="fade-left">
                    <div
                        class="w-14 h-14 bg-blue-600/10 rounded-2xl flex items-center justify-center mb-8 text-blue-500 border border-blue-500/20 shadow-inner">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-4 tracking-tight">Secure by Default</h3>
                    <p class="text-slate-400 leading-relaxed">Built with accessibility and security as the core
                        foundation.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 border-y border-white/5 bg-slate-950/30">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 md:grid-cols-4 gap-12">
            <div class="text-center" data-aos="fade-up">
                <div class="stat-value text-5xl font-extrabold mb-2 tracking-tighter">99.9%</div>
                <div class="text-[10px] font-bold uppercase tracking-widest text-slate-500">Uptime Reliability</div>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="stat-value text-5xl font-extrabold mb-2 tracking-tighter">250k+</div>
                <div class="text-[10px] font-bold uppercase tracking-widest text-slate-500">Active Installs</div>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-value text-5xl font-extrabold mb-2 tracking-tighter">15ms</div>
                <div class="text-[10px] font-bold uppercase tracking-widest text-slate-500">Avg. Response</div>
            </div>
            <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-value text-5xl font-extrabold mb-2 tracking-tighter">24/7</div>
                <div class="text-[10px] font-bold uppercase tracking-widest text-slate-500">Expert Support</div>
            </div>
        </div>
    </section>

    <section class="py-40 bg-[#0b0b0bbf]">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
            <div data-aos="fade-right">
                <h2 class="text-4xl font-extrabold text-white tracking-tighter mb-8 leading-tight">Built by developers,
                    <br> for developers.
                </h2>
                <p class="text-lg text-slate-400 leading-relaxed mb-10">No more messy CSS. Use our clean, atomic
                    Tailwind classes to customize everything in seconds.</p>
                <ul class="space-y-6">
                    <li class="flex items-center gap-4 text-white font-bold"><span
                            class="w-8 h-8 rounded-full bg-blue-600/10 text-blue-500 flex items-center justify-center text-xs border border-blue-500/20">01</span>
                        Zero Runtime Overhead</li>
                    <li class="flex items-center gap-4 text-white font-bold"><span
                            class="w-8 h-8 rounded-full bg-blue-600/10 text-blue-500 flex items-center justify-center text-xs border border-blue-500/20">02</span>
                        Full TypeScript Support</li>
                    <li class="flex items-center gap-4 text-white font-bold"><span
                            class="w-8 h-8 rounded-full bg-blue-600/10 text-blue-500 flex items-center justify-center text-xs border border-blue-500/20">03</span>
                        SSR & Edge Compatible</li>
                </ul>
            </div>
            <div class="premium-card rounded-3xl p-1 shadow-2xl shadow-blue-500/10 overflow-hidden" data-aos="zoom-in">
                <div class="bg-slate-950/80 rounded-[1.4rem] p-8 font-mono text-[13px] leading-relaxed overflow-x-auto">
                    <div class="flex gap-2 mb-6">
                        <div class="w-3 h-3 rounded-full bg-red-500/40"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500/40"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500/40"></div>
                    </div>
                    <span class="text-blue-400">import</span> { <span class="text-yellow-400">Button, Card</span> }
                    <span class="text-blue-400">from</span> <span class="text-green-400">"@forge-ui/core"</span>;
                    <br><br>
                    <span class="text-slate-600 italic">// Modern SaaS Component</span><br>
                    <span class="text-blue-400">const</span> <span class="text-white">App</span> = () => ( <br>
                    &nbsp;&nbsp;&lt;<span class="text-blue-400">Card</span> className=<span class="text-green-400">"p-8
                        bg-slate-950"</span>&gt; <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&lt;<span class="text-blue-400">Button</span> variant=<span
                        class="text-green-400">"primary"</span>&gt;Get Started&lt;/<span
                        class="text-blue-400">Button</span>&gt; <br>
                    &nbsp;&nbsp;&lt;/<span class="text-blue-400">Card</span>&gt; <br>
                    );
                </div>
            </div>
        </div>
    </section>

    <section id="pricing" class="py-40 px-6 bg-slate-950/20">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-24" data-aos="fade-up">
                <h2 class="text-5xl font-extrabold text-white mb-6 tracking-tighter">Fair, scalable pricing.</h2>
                <p class="text-slate-400 font-medium uppercase tracking-widest text-xs">Everything you need to ship
                    products at any scale.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="premium-card p-12 rounded-[2.5rem] flex flex-col" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-white font-bold text-xl mb-2">Free Plan</h3>
                    <p class="text-sm text-slate-500 mb-10">Perfect for freelancers and solo devs.</p>
                    <div class="text-6xl font-extrabold text-white mb-10">$0 <span
                            class="text-lg font-normal text-slate-600">/ LifeTime</span></div>
                    <button
                        class="w-full bg-white text-black py-4 rounded-full font-black mb-10 hover:bg-blue-50 transition shadow-lg shadow-white/5">Get
                        Standard</button>
                    <ul class="space-y-5 text-sm font-semibold">
                        <li class="flex items-center gap-4 text-slate-300"><span class="text-blue-500">✓</span> Basic
                            components: Button, Input, Card, Basic Table</li>
                        <li class="flex items-center gap-4 text-slate-300"><span class="text-blue-500">✓</span> Lifetime
                            Core Updates</li>
                        <li class="flex items-center gap-4 text-slate-300"><span class="text-blue-500">✓</span> Ready to
                            use
                            without license</li>
                        <li class="flex items-center gap-4 text-slate-300"><span class="text-blue-500">✓</span> Full
                            documentation + forum support</li>
                        <li class="flex items-center gap-4 text-slate-600"><span class="mr-1">✗</span> No premium
                            components like Modal, Chart, Advanced Table</li>
                        <li class="flex items-center gap-4 text-slate-600"><span class="mr-1">✗</span> Only basic
                            components</li>
                        <li class="flex items-center gap-4 text-slate-600"><span class="mr-1">✗</span>Limited support
                        </li>
                    </ul>
                </div>
                <div class="premium-card p-12 rounded-[2.5rem] flex flex-col" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-white font-bold text-xl mb-2">Pro Plan</h3>
                    <p class="text-sm text-slate-500 mb-10">Perfect for freelancers and solo devs.</p>
                    <div class="text-6xl font-extrabold text-white mb-10 ">$149 <span
                            class="text-lg font-normal text-slate-600">/ LifeTime</span></div>
                    <button
                        class="w-full bg-white text-black py-4 rounded-full font-black mb-10 hover:bg-blue-50 transition shadow-lg shadow-white/5">Get
                        Standard</button>
                    <ul class="space-y-5 text-sm font-semibold">
                        <li class="flex items-center gap-4 text-slate-300"><span class="text-blue-500">✓</span> Access
                            to premium components for advanced UI</li>
                        <li class="flex items-center gap-4 text-slate-300"><span class="text-blue-500">✓</span> Lifetime
                            Core Updates</li>
                        <li class="flex items-center gap-4 text-slate-300"><span class="text-blue-500">✓</span> License
                            secure for commercial projects</li>
                        <li class="flex items-center gap-4 text-slate-300"><span class="text-blue-500">✓</span> Fast
                            support for bugs or questions</li>
                        <li class="flex items-center gap-4 text-slate-600"><span class="mr-1">✗</span> Private Support
                            Channel</li>
                    </ul>
                </div>
                <div class="bg-blue-600 p-12 rounded-[2.5rem] relative shadow-2xl shadow-blue-600/20 flex flex-col group transform hover:scale-[1.02] transition-all duration-500"
                    data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="absolute -top-4 left-1/2 -translate-x-1/2 bg-white text-blue-600 px-5 py-1.5 rounded-full text-[10px] font-black uppercase tracking-[0.2em] shadow-2xl">
                        Best Value</div>
                    <h3 class="text-white font-bold text-xl mb-2">Enterprise Plan</h3>
                    <p class="text-blue-100/70 text-sm mb-10">For teams who want it all.</p>
                    <div class="text-6xl font-extrabold text-white mb-10">$399 <span
                            class="text-lg font-normal text-blue-200/50">/ LifeTime</span></div>
                    <button
                        class="w-full bg-slate-950 text-white py-4 rounded-full font-black mb-10 hover:bg-black transition shadow-2xl">Get
                        Everything</button>
                    <ul class="space-y-5 text-sm font-bold text-white">
                        <li class="flex items-center gap-4">✓ Full access to all components + custom features</li>
                        <li class="flex items-center gap-4">✓ Suitable for large projects & multi-developer teams</li>
                        <li class="flex items-center gap-4">✓ Priority support and custom integration</li>
                        <li class="flex items-center gap-4">✓ Company-wide license → multi-user + API Key</li>
                        <li class="flex items-center gap-4">✓ Private updates + versioning</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-24 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-6 grid grid-cols-2 lg:grid-cols-5 gap-16">
            <div class="col-span-2">
                <div class="flex items-center gap-3 mb-8">
                    <div
                        class="w-8 h-8 bg-blue-600 rounded flex items-center justify-center shadow-lg shadow-blue-600/30">
                        <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="3">
                            <path d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <span class="text-white font-bold text-lg tracking-tight">ForgeUI</span>
                </div>
                <p class="text-sm text-slate-500 max-w-xs leading-relaxed font-medium">The premier design system for
                    high-growth SaaS companies. Scale your UI without the headache.</p>
            </div>
            <div>
                <h5 class="text-white text-[11px] font-bold uppercase tracking-[0.3em] mb-8">Product</h5>
                <ul class="space-y-4 text-sm font-semibold text-slate-500">
                    <li><a href="#" class="hover:text-blue-400 transition">Components</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Templates</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-white text-[11px] font-bold uppercase tracking-[0.3em] mb-8">Support</h5>
                <ul class="space-y-4 text-sm font-semibold text-slate-500">
                    <li><a href="#" class="hover:text-blue-400 transition">Documentation</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Discord</a></li>
                </ul>
            </div>
            <div>
                <h5 class="text-white text-[11px] font-bold uppercase tracking-[0.3em] mb-8">Legal</h5>
                <ul class="space-y-4 text-sm font-semibold text-slate-500">
                    <li><a href="#" class="hover:text-blue-400 transition">Privacy</a></li>
                    <li><a href="#" class="hover:text-blue-400 transition">Terms</a></li>
                </ul>
            </div>
        </div>
        <div
            class="max-w-7xl mx-auto px-6 mt-24 pt-10 border-t border-white/5 flex flex-col md:flex-row justify-between gap-6 text-[10px] font-black uppercase tracking-[0.4em] text-slate-700">
            <span>© 2026 FORGEUI INC.</span>
            <span>Handcrafted for the web.</span>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            mirror: false
        });
    </script>
</body>

</html>