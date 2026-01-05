<?php include 'header.php'; ?>

    <div id="preloader" class="fixed inset-0 z-[100] bg-black flex items-center justify-center flex-col transition-opacity duration-700">
        <div class="text-5xl font-black text-white tracking-tighter animate-pulse mb-4">
            GO<span class="text-red-600">VID</span>CO
        </div>
        <div class="text-red-500 font-mono text-sm">
            Configuring Infrastructure...
        </div>
    </div>

    <main class="relative z-10 pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-zinc-950">
        <div class="absolute inset-0 opacity-20 bg-noise mix-blend-overlay pointer-events-none fixed"></div>
        <div class="absolute top-0 left-1/2 transform -translate-x-1/2 w-[800px] h-[800px] bg-red-900/10 rounded-full blur-[120px] -z-10"></div>

        <div class="container mx-auto px-6 text-center mb-24">
            <div class="inline-flex items-center space-x-2 bg-zinc-900/50 border border-zinc-800 rounded-full px-4 py-1.5 mb-8 backdrop-blur-sm">
                <span class="flex h-2 w-2 rounded-full bg-green-500 animate-pulse"></span>
                <span class="text-xs font-medium text-zinc-300 tracking-wide uppercase">Accepting New Clients for Q1</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-black text-white tracking-tight mb-6 leading-[1.1]">
                Video Infrastructure <br class="hidden md:block" />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-400">
                    Built for Scale
                </span>
            </h1>
            <p class="text-xl text-zinc-400 max-w-2xl mx-auto mb-10 leading-relaxed">
                We don't just edit videos. We build content engines that drive retention, ROI, and brand authority across every major platform.
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                <button class="w-full sm:w-auto bg-white text-zinc-950 px-8 py-4 rounded-full font-bold text-lg hover:bg-zinc-200 transition-all transform hover:scale-105 flex items-center justify-center">
                    View Our Work
                    <i data-lucide="arrow-right" class="ml-2 w-5 h-5"></i>
                </button>
                <button class="w-full sm:w-auto px-8 py-4 rounded-full font-bold text-lg text-white border border-zinc-800 hover:bg-zinc-900 transition-colors">
                    Book a Call
                </button>
            </div>
        </div>

        <section class="container mx-auto px-6 mb-32">
            <div class="text-center mb-16">
                <h2 class="text-sm font-bold text-red-500 uppercase tracking-widest mb-3">Our Expertise</h2>
                <h3 class="text-3xl md:text-5xl font-black text-white">Production Ecosystem</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
                
                <div class="group relative bg-zinc-900/40 border border-zinc-800 hover:border-red-600/50 rounded-2xl p-8 transition-all duration-300 hover:bg-zinc-900/80 overflow-hidden flex flex-col h-full hover:shadow-[0_0_20px_rgba(220,38,38,0.1)]">
                    <div class="absolute inset-0 bg-gradient-to-br from-transparent to-zinc-900/50 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="flex justify-between items-start mb-6">
                            <div class="p-3 rounded-xl bg-zinc-900 text-red-500 ring-1 ring-inset ring-white/5">
                                <i data-lucide="play" class="w-7 h-7"></i>
                            </div>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-zinc-500 bg-zinc-950 border border-zinc-800 px-2 py-1 rounded-md group-hover:text-zinc-300 transition-colors">The Flagship</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-red-500 transition-colors">YouTube Long-Form</h3>
                        <p class="text-zinc-400 text-sm leading-relaxed flex-grow">
                            We create binge-worthy stories designed for retention. Cinematic storytelling, perfect pacing, and 4K color grading.
                        </p>
                        <div class="mt-8 pt-6 border-t border-zinc-800 flex items-center text-sm font-semibold text-zinc-500 group-hover:text-white transition-colors cursor-pointer">
                            Learn More <i data-lucide="arrow-right" class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <div class="group relative bg-zinc-900/40 border border-zinc-800 hover:border-red-600/50 rounded-2xl p-8 transition-all duration-300 hover:bg-zinc-900/80 overflow-hidden flex flex-col h-full hover:shadow-[0_0_20px_rgba(220,38,38,0.1)]">
                    <div class="absolute inset-0 bg-gradient-to-br from-transparent to-zinc-900/50 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="flex justify-between items-start mb-6">
                            <div class="p-3 rounded-xl bg-zinc-900 text-pink-500 ring-1 ring-inset ring-white/5">
                                <i data-lucide="smartphone" class="w-7 h-7"></i>
                            </div>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-zinc-500 bg-zinc-950 border border-zinc-800 px-2 py-1 rounded-md group-hover:text-zinc-300 transition-colors">The Viral Engine</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-pink-500 transition-colors">Shorts, Reels & TikTok</h3>
                        <p class="text-zinc-400 text-sm leading-relaxed flex-grow">
                            Thumb-stopping, fast-cut, dopamine-driven edits designed to hook viewers in the first 3 seconds.
                        </p>
                        <div class="mt-8 pt-6 border-t border-zinc-800 flex items-center text-sm font-semibold text-zinc-500 group-hover:text-white transition-colors cursor-pointer">
                            Learn More <i data-lucide="arrow-right" class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <div class="group relative bg-zinc-900/40 border border-zinc-800 hover:border-red-600/50 rounded-2xl p-8 transition-all duration-300 hover:bg-zinc-900/80 overflow-hidden flex flex-col h-full hover:shadow-[0_0_20px_rgba(220,38,38,0.1)]">
                    <div class="absolute inset-0 bg-gradient-to-br from-transparent to-zinc-900/50 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="flex justify-between items-start mb-6">
                            <div class="p-3 rounded-xl bg-zinc-900 text-blue-500 ring-1 ring-inset ring-white/5">
                                <i data-lucide="briefcase" class="w-7 h-7"></i>
                            </div>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-zinc-500 bg-zinc-950 border border-zinc-800 px-2 py-1 rounded-md group-hover:text-zinc-300 transition-colors">Brand Guardian</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-blue-500 transition-colors">Corporate & Business</h3>
                        <p class="text-zinc-400 text-sm leading-relaxed flex-grow">
                            Polished, professional video assets built for leadership, training, and sales presentations.
                        </p>
                        <div class="mt-8 pt-6 border-t border-zinc-800 flex items-center text-sm font-semibold text-zinc-500 group-hover:text-white transition-colors cursor-pointer">
                            Learn More <i data-lucide="arrow-right" class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <div class="group relative bg-zinc-900/40 border border-zinc-800 hover:border-red-600/50 rounded-2xl p-8 transition-all duration-300 hover:bg-zinc-900/80 overflow-hidden flex flex-col h-full hover:shadow-[0_0_20px_rgba(220,38,38,0.1)]">
                    <div class="absolute inset-0 bg-gradient-to-br from-transparent to-zinc-900/50 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="flex justify-between items-start mb-6">
                            <div class="p-3 rounded-xl bg-zinc-900 text-green-500 ring-1 ring-inset ring-white/5">
                                <i data-lucide="trending-up" class="w-7 h-7"></i>
                            </div>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-zinc-500 bg-zinc-950 border border-zinc-800 px-2 py-1 rounded-md group-hover:text-zinc-300 transition-colors">ROI Generator</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-green-500 transition-colors">Ad Creatives</h3>
                        <p class="text-zinc-400 text-sm leading-relaxed flex-grow">
                            Ads that sell. Modular creative systems designed for A/B testing and scaling ROAS.
                        </p>
                        <div class="mt-8 pt-6 border-t border-zinc-800 flex items-center text-sm font-semibold text-zinc-500 group-hover:text-white transition-colors cursor-pointer">
                            Learn More <i data-lucide="arrow-right" class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <div class="group relative bg-zinc-900/40 border border-zinc-800 hover:border-red-600/50 rounded-2xl p-8 transition-all duration-300 hover:bg-zinc-900/80 overflow-hidden flex flex-col h-full hover:shadow-[0_0_20px_rgba(220,38,38,0.1)]">
                    <div class="absolute inset-0 bg-gradient-to-br from-transparent to-zinc-900/50 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="flex justify-between items-start mb-6">
                            <div class="p-3 rounded-xl bg-zinc-900 text-amber-500 ring-1 ring-inset ring-white/5">
                                <i data-lucide="cpu" class="w-7 h-7"></i>
                            </div>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-zinc-500 bg-zinc-950 border border-zinc-800 px-2 py-1 rounded-md group-hover:text-zinc-300 transition-colors">Automation Engine</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-amber-500 transition-colors">Cash-Cow Faceless</h3>
                        <p class="text-zinc-400 text-sm leading-relaxed flex-grow">
                            Fully automated content pipeline from script-to-screen production using premium stock and voiceovers.
                        </p>
                        <div class="mt-8 pt-6 border-t border-zinc-800 flex items-center text-sm font-semibold text-zinc-500 group-hover:text-white transition-colors cursor-pointer">
                            Learn More <i data-lucide="arrow-right" class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <div class="group relative bg-zinc-900/40 border border-zinc-800 hover:border-red-600/50 rounded-2xl p-8 transition-all duration-300 hover:bg-zinc-900/80 overflow-hidden flex flex-col h-full hover:shadow-[0_0_20px_rgba(220,38,38,0.1)]">
                    <div class="absolute inset-0 bg-gradient-to-br from-transparent to-zinc-900/50 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="flex justify-between items-start mb-6">
                            <div class="p-3 rounded-xl bg-zinc-900 text-purple-500 ring-1 ring-inset ring-white/5">
                                <i data-lucide="mic" class="w-7 h-7"></i>
                            </div>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-zinc-500 bg-zinc-950 border border-zinc-800 px-2 py-1 rounded-md group-hover:text-zinc-300 transition-colors">The Multiplier</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-purple-500 transition-colors">Podcast Video</h3>
                        <p class="text-zinc-400 text-sm leading-relaxed flex-grow">
                            Turn one recording into a month of content. Multi-camera switching and viral clip extraction.
                        </p>
                        <div class="mt-8 pt-6 border-t border-zinc-800 flex items-center text-sm font-semibold text-zinc-500 group-hover:text-white transition-colors cursor-pointer">
                            Learn More <i data-lucide="arrow-right" class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <div class="group relative bg-zinc-900/40 border border-zinc-800 hover:border-red-600/50 rounded-2xl p-8 transition-all duration-300 hover:bg-zinc-900/80 overflow-hidden flex flex-col h-full hover:shadow-[0_0_20px_rgba(220,38,38,0.1)]">
                    <div class="absolute inset-0 bg-gradient-to-br from-transparent to-zinc-900/50 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="flex justify-between items-start mb-6">
                            <div class="p-3 rounded-xl bg-zinc-900 text-cyan-500 ring-1 ring-inset ring-white/5">
                                <i data-lucide="clapperboard" class="w-7 h-7"></i>
                            </div>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-zinc-500 bg-zinc-950 border border-zinc-800 px-2 py-1 rounded-md group-hover:text-zinc-300 transition-colors">The Studio</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-cyan-500 transition-colors">Full Video Production</h3>
                        <p class="text-zinc-400 text-sm leading-relaxed flex-grow">
                            No footage? No problem. We craft videos from scratch using scriptwriters, voice artists, and motion designers.
                        </p>
                        <div class="mt-8 pt-6 border-t border-zinc-800 flex items-center text-sm font-semibold text-zinc-500 group-hover:text-white transition-colors cursor-pointer">
                            Learn More <i data-lucide="arrow-right" class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </div>

                <div class="group relative bg-zinc-900/40 border border-zinc-800 hover:border-red-600/50 rounded-2xl p-8 transition-all duration-300 hover:bg-zinc-900/80 overflow-hidden flex flex-col h-full hover:shadow-[0_0_20px_rgba(220,38,38,0.1)]">
                    <div class="absolute inset-0 bg-gradient-to-br from-transparent to-zinc-900/50 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="flex justify-between items-start mb-6">
                            <div class="p-3 rounded-xl bg-zinc-900 text-indigo-400 ring-1 ring-inset ring-white/5">
                                <i data-lucide="sparkles" class="w-7 h-7"></i>
                            </div>
                            <span class="text-[10px] font-bold uppercase tracking-widest text-zinc-500 bg-zinc-950 border border-zinc-800 px-2 py-1 rounded-md group-hover:text-zinc-300 transition-colors">Reality Bender</span>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-indigo-400 transition-colors">Generative AI Video</h3>
                        <p class="text-zinc-400 text-sm leading-relaxed flex-grow">
                            Impossible shots made real. High-end text-to-video generation using models like Sora, Runway Gen-3, and Kling.
                        </p>
                        <div class="mt-8 pt-6 border-t border-zinc-800 flex items-center text-sm font-semibold text-zinc-500 group-hover:text-white transition-colors cursor-pointer">
                            Learn More <i data-lucide="arrow-right" class="ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="container mx-auto px-6 mb-32">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-black text-white mb-4">Pricing Models</h2>
                <p class="text-zinc-400">Simple, transparent, and scalable.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                
                <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-8 flex flex-col">
                    <h3 class="text-white text-xl font-bold mb-2">Starter</h3>
                    <div class="text-4xl font-black text-white mb-6">$1,999<span class="text-sm font-medium text-zinc-500">/mo</span></div>
                    <ul class="space-y-4 mb-8 text-sm text-zinc-400 flex-grow">
                        <li class="flex items-center"><i data-lucide="check" class="w-4 h-4 text-zinc-500 mr-2"></i> 4 Short-Form Videos</li>
                        <li class="flex items-center"><i data-lucide="check" class="w-4 h-4 text-zinc-500 mr-2"></i> Basic Editing</li>
                        <li class="flex items-center"><i data-lucide="check" class="w-4 h-4 text-zinc-500 mr-2"></i> 48h Turnaround</li>
                        <li class="flex items-center"><i data-lucide="check" class="w-4 h-4 text-zinc-500 mr-2"></i> Slack Support</li>
                    </ul>
                    <button class="w-full py-3 rounded-lg border border-zinc-700 text-white font-bold hover:bg-zinc-800 transition-colors">Get Started</button>
                </div>

                <div class="relative bg-zinc-900 border border-red-600 rounded-2xl p-8 flex flex-col transform md:-translate-y-4 shadow-[0_0_30px_rgba(220,38,38,0.15)]">
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-red-600 text-white text-xs font-bold px-4 py-1 rounded-full uppercase tracking-wider shadow-lg">Most Popular</div>
                    <h3 class="text-white text-xl font-bold mb-2">Growth</h3>
                    <div class="text-4xl font-black text-white mb-6">$4,999<span class="text-sm font-medium text-zinc-500">/mo</span></div>
                    <ul class="space-y-4 mb-8 text-sm text-zinc-300 flex-grow">
                        <li class="flex items-center"><i data-lucide="check" class="w-4 h-4 text-red-500 mr-2"></i> 12 Short-Form Videos</li>
                        <li class="flex items-center"><i data-lucide="check" class="w-4 h-4 text-red-500 mr-2"></i> 2 Long-Form Videos</li>
                        <li class="flex items-center"><i data-lucide="check" class="w-4 h-4 text-red-500 mr-2"></i> Advanced Motion Graphics</li>
                        <li class="flex items-center"><i data-lucide="check" class="w-4 h-4 text-red-500 mr-2"></i> Strategy Consulting</li>
                        <li class="flex items-center"><i data-lucide="check" class="w-4 h-4 text-red-500 mr-2"></i> Dedicated Slack Channel</li>
                    </ul>
                    <button class="w-full py-3 rounded-lg bg-red-600 text-white font-bold hover:bg-red-700 transition-colors shadow-lg">Get Started</button>
                </div>

                <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-8 flex flex-col">
                    <h3 class="text-white text-xl font-bold mb-2">Enterprise</h3>
                    <div class="text-4xl font-black text-white mb-6">Custom</div>
                    <ul class="space-y-4 mb-8 text-sm text-zinc-400 flex-grow">
                        <li class="flex items-center"><i data-lucide="check" class="w-4 h-4 text-zinc-500 mr-2"></i> Unlimited Requests</li>
                        <li class="flex items-center"><i data-lucide="check" class="w-4 h-4 text-zinc-500 mr-2"></i> 24h Priority Turnaround</li>
                        <li class="flex items-center"><i data-lucide="check" class="w-4 h-4 text-zinc-500 mr-2"></i> Dedicated Creative Director</li>
                        <li class="flex items-center"><i data-lucide="check" class="w-4 h-4 text-zinc-500 mr-2"></i> Full Asset Management</li>
                    </ul>
                    <button class="w-full py-3 rounded-lg border border-zinc-700 text-white font-bold hover:bg-zinc-800 transition-colors">Contact Sales</button>
                </div>

            </div>
        </section>

    </main>

    <script>
        // Initialize Icons
        lucide.createIcons();

        // 1. Preloader Logic
        window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');
            setTimeout(() => {
                preloader.style.opacity = '0';
                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 700);
            }, 1000);
        });

        // 2. Navbar Scroll Effect & Mobile Menu
        const navbar = document.getElementById('navbar');
        const mobileBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                navbar.classList.add('bg-zinc-950/90', 'backdrop-blur-md', 'border-zinc-800', 'py-3');
                navbar.classList.remove('py-5', 'border-transparent');
            } else {
                navbar.classList.remove('bg-zinc-950/90', 'backdrop-blur-md', 'border-zinc-800', 'py-3');
                navbar.classList.add('py-5', 'border-transparent');
            }
        });

        mobileBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

<?php include 'footer.php'; ?>