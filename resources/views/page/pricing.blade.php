<!DOCTYPE html>
<html lang="id" class="dark scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UITemplate | Enterprise Design Infrastructure</title>
    @vite('resources/css/app.css')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --bg: #000000;
            --accent: #3b82f6;
            --border: rgba(255, 255, 255, 0.08);
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--bg);
            color: #888;
            letter-spacing: -0.01em;
        }

        /* Typography Perfection */
        .h-hero {
            font-size: clamp(3rem, 10vw, 8.5rem);
            line-height: 0.85;
            letter-spacing: -0.05em;
            font-weight: 800;
        }

        /* Premium Card Pricing Plan */
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

        /* Subtle Glassmorphism */
        .glass-card {
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid var(--border);
            backdrop-filter: blur(12px);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .glass-card:hover {
            background: rgba(255, 255, 255, 0.04);
            border-color: rgba(255, 255, 255, 0.2);
        }

        /* Newsletter Input Styling */
        .input-glow:focus {
            box-shadow: 0 0 20px rgba(59, 130, 246, 0.1);
            border-color: var(--accent);
        }

        .text-gradient {
            background: linear-gradient(to bottom right, #fff 30%, #555 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
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

<body class="antialiased">

    <x-navbar.navalert />
    <x-navbar.nav />

    <section class="pt-38 pb-40 px-8">
        <div class="max-w-7xl mx-auto text-center" data-aos="fade-up">
            <h1 class="h-hero text-white mb-12">Build at the <br> <span class="text-gradient">speed of light.</span>
            </h1>
            <p class="text-xl md:text-2xl text-zinc-500 max-w-3xl mx-auto mb-16 leading-relaxed">
                The design system infrastructure for teams who care about engineering excellence and aesthetic
                precision.
            </p>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <button
                    class="bg-blue-600 text-white px-10 py-5 rounded-full font-bold text-sm hover:bg-blue-500 transition shadow-2xl shadow-blue-600/20">Get
                    Lifetime Access</button>
                <button
                    class="bg-transparent border border-white/10 text-white px-10 py-5 rounded-full font-bold text-sm hover:bg-white/5 transition">Explore
                    Documentation</button>
            </div>
        </div>
    </section>

    <section class="py-20 border-y border-white/5 bg-zinc-950/30">
        <div class="max-w-7xl mx-auto px-8">
            <div class="flex flex-wrap justify-between items-center gap-12 opacity-30">
                <span class="font-black text-xl italic tracking-tighter text-white">GITHUB</span>
                <span class="font-bold text-2xl tracking-tighter text-white uppercase italic">Vercel</span>
                <span class="font-black text-2xl text-white italic">stripe</span>
                <span class="font-bold text-xl text-white">FIGMA</span>
                <span class="font-extrabold text-lg text-white">DIGITALOCEAN</span>
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

    <section class="py-40 border-t border-white/5 bg-zinc-950/20">
        <div class="max-w-4xl mx-auto px-8 text-center" data-aos="fade-up">
            <h2 class="text-3xl md:text-5xl font-extrabold text-white tracking-tighter mb-6">Stay in the loop.</h2>
            <p class="text-zinc-500 text-lg mb-12">Join 15,000+ engineers receiving our weekly design & engineering
                tips.</p>

            <form class="relative max-w-lg mx-auto group">
                <input type="email" placeholder="name@company.com"
                    class="w-full bg-white/5 border border-white/10 rounded-full py-5 px-8 outline-none text-white font-medium input-glow transition-all duration-300 placeholder:text-zinc-700">
                <button type="submit"
                    class="absolute right-2 top-2 bg-white text-black h-[50px] px-8 rounded-full font-black text-xs uppercase tracking-widest hover:bg-blue-600 hover:text-white transition-all">
                    Join
                </button>
            </form>
            <p class="text-[10px] text-zinc-700 mt-6 font-bold uppercase tracking-widest">No spam. Only high-signal
                content. Unsubscribe anytime.</p>
        </div>
    </section>

    <footer class="py-32 border-t border-white/5">
        <div class="max-w-7xl mx-auto px-8">
            <div class="grid md:grid-cols-4 gap-20 mb-24">
                <div class="col-span-2">
                    <div class="flex items-center gap-2.5 mb-8">
                        <div class="w-6 h-6 bg-white rounded flex items-center justify-center">
                            <div class="w-3 h-1 bg-black rotate-45"></div>
                        </div>
                        <span class="text-white font-bold tracking-tighter uppercase">ForgeUI</span>
                    </div>
                    <p class="text-sm text-zinc-600 leading-relaxed max-w-xs font-medium">
                        Building the standard for the next generation of web applications.
                    </p>
                </div>
                <div>
                    <h4 class="text-white text-[10px] font-black uppercase tracking-[0.2em] mb-8">Product</h4>
                    <ul class="space-y-4 text-xs font-bold text-zinc-500 uppercase tracking-widest">
                        <li><a href="#" class="hover:text-white transition">Features</a></li>
                        <li><a href="#" class="hover:text-white transition">Pricing</a></li>
                        <li><a href="#" class="hover:text-white transition">Releases</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white text-[10px] font-black uppercase tracking-[0.2em] mb-8">Social</h4>
                    <ul class="space-y-4 text-xs font-bold text-zinc-500 uppercase tracking-widest">
                        <li><a href="#" class="hover:text-white transition">Twitter / X</a></li>
                        <li><a href="#" class="hover:text-white transition">GitHub</a></li>
                    </ul>
                </div>
            </div>
            <div
                class="text-[10px] font-black uppercase tracking-[0.5em] text-zinc-800 border-t border-white/5 pt-12 text-center">
                © 2026 FORGEUI ENTERPRISE • HANDCRAFTED IN INDONESIA
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true, duration: 1000 });
    </script>
</body>

</html>