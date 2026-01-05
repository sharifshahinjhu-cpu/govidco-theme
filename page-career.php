<?php include 'header.php'; ?>

    <div class="fixed top-[70px] xl:top-[80px] w-full z-40 pointer-events-none">
        <div class="container mx-auto px-6 flex justify-end">
             <div class="flex items-center gap-2 px-3 py-1 bg-zinc-900/80 backdrop-blur border border-red-900/30 rounded-full shadow-lg">
                <div class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></div>
                <span class="text-red-500 text-[10px] font-mono font-bold tracking-wider">HIRING PROTOCOL: ACTIVE</span>
            </div>
        </div>
    </div>

    <main class="relative z-10 pt-32 pb-20 lg:pt-48">
        <div class="absolute inset-0 opacity-20 bg-noise mix-blend-overlay pointer-events-none fixed"></div>
        
        <section class="container mx-auto px-6 mb-24 text-center">
             <div class="inline-block mb-6">
                <div class="flex items-center justify-center gap-2 text-red-500 text-xs font-mono tracking-[0.2em] border-b border-red-500/30 pb-2 mb-2">
                    <i data-lucide="crosshair" class="w-3 h-3"></i>
                    <span>RECRUITMENT TARGETING</span>
                </div>
            </div>

            <h1 class="text-4xl md:text-6xl font-black text-white tracking-tight leading-[1.1] mb-6">
                WE DON'T HIRE EMPLOYEES.<br />
                <span class="text-gradient">
                    WE RECRUIT ARTISTS.
                </span>
            </h1>

            <p class="text-lg md:text-xl text-zinc-400 max-w-2xl mx-auto leading-relaxed mb-10">
                Stop chasing clients. Stop begging for invoices. Join the top 1% global creative collective and focus on the mission.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <button onclick="document.getElementById('application-terminal').scrollIntoView({ behavior: 'smooth' })" class="group relative px-8 py-4 bg-red-600 hover:bg-red-700 text-white font-bold font-mono tracking-wide transition-all shadow-[0_0_20px_rgba(220,38,38,0.4)] clip-path-polygon">
                    INITIATE_APPLICATION
                    <i data-lucide="chevron-down" class="inline ml-2 w-4 h-4 group-hover:translate-y-1 transition-transform"></i>
                </button>
                <button class="px-8 py-4 border border-zinc-700 text-zinc-300 font-mono tracking-wide hover:border-red-500 hover:text-red-500 transition-colors bg-zinc-900/30 backdrop-blur-sm">
                    READ_MANIFESTO
                </button>
            </div>
        </section>

        <section class="container mx-auto px-6 mb-24">
            <div class="flex items-center gap-2 mb-8 text-red-500 font-mono text-sm">
                <div class="w-4 h-px bg-red-500"></div>
                <h3>OPERATIONAL_PERKS</h3>
                <div class="flex-1 h-px bg-zinc-800"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="group relative p-6 bg-zinc-900/40 border border-zinc-800 hover:border-red-600/50 transition-all duration-300 rounded-xl hover:bg-zinc-900">
                    <div class="absolute top-4 right-4 opacity-20 group-hover:opacity-100 transition-opacity">
                        <div class="w-1.5 h-1.5 bg-red-500 rounded-full"></div>
                    </div>
                    <i data-lucide="shield" class="w-10 h-10 text-red-500 mb-4 group-hover:scale-110 transition-transform"></i>
                    <h4 class="text-white font-bold mb-2 font-mono uppercase tracking-tight">Zero Client Comms</h4>
                    <p class="text-zinc-400 text-sm leading-relaxed">We manage the stakeholders. You focus on the cut. No more meetings that could have been emails.</p>
                </div>

                <div class="group relative p-6 bg-zinc-900/40 border border-zinc-800 hover:border-red-600/50 transition-all duration-300 rounded-xl hover:bg-zinc-900">
                    <div class="absolute top-4 right-4 opacity-20 group-hover:opacity-100 transition-opacity">
                        <div class="w-1.5 h-1.5 bg-red-500 rounded-full"></div>
                    </div>
                    <i data-lucide="dollar-sign" class="w-10 h-10 text-red-500 mb-4 group-hover:scale-110 transition-transform"></i>
                    <h4 class="text-white font-bold mb-2 font-mono uppercase tracking-tight">Consistent Pay</h4>
                    <p class="text-zinc-400 text-sm leading-relaxed">Monthly retainers sent on time. We handle the chasing, you handle the creating.</p>
                </div>

                <div class="group relative p-6 bg-zinc-900/40 border border-zinc-800 hover:border-red-600/50 transition-all duration-300 rounded-xl hover:bg-zinc-900">
                    <div class="absolute top-4 right-4 opacity-20 group-hover:opacity-100 transition-opacity">
                        <div class="w-1.5 h-1.5 bg-red-500 rounded-full"></div>
                    </div>
                    <i data-lucide="wrench" class="w-10 h-10 text-red-500 mb-4 group-hover:scale-110 transition-transform"></i>
                    <h4 class="text-white font-bold mb-2 font-mono uppercase tracking-tight">Tool Arsenal</h4>
                    <p class="text-zinc-400 text-sm leading-relaxed">Full access to our enterprise accounts: Epidemic, Envato, Midjourney, and Topaz Labs.</p>
                </div>

                <div class="group relative p-6 bg-zinc-900/40 border border-zinc-800 hover:border-red-600/50 transition-all duration-300 rounded-xl hover:bg-zinc-900">
                    <div class="absolute top-4 right-4 opacity-20 group-hover:opacity-100 transition-opacity">
                        <div class="w-1.5 h-1.5 bg-red-500 rounded-full"></div>
                    </div>
                    <i data-lucide="globe" class="w-10 h-10 text-red-500 mb-4 group-hover:scale-110 transition-transform"></i>
                    <h4 class="text-white font-bold mb-2 font-mono uppercase tracking-tight">Remote Freedom</h4>
                    <p class="text-zinc-400 text-sm leading-relaxed">100% Async. Work from Tokyo, Bali, or your basement. Results matter, timezones don't.</p>
                </div>
            </div>
        </section>

        <section class="container mx-auto px-6 mb-24">
            <div class="flex items-center gap-2 mb-8 text-red-500 font-mono text-sm">
                <div class="w-4 h-px bg-red-500"></div>
                <h3>ACTIVE_MISSIONS</h3>
                <div class="flex-1 h-px bg-zinc-800"></div>
            </div>

            <div class="space-y-4">
                <div class="group relative bg-zinc-900/50 border border-zinc-800 border-l-4 border-l-zinc-800 hover:border-red-600/50 hover:border-l-red-600 p-6 flex flex-col md:flex-row items-start md:items-center justify-between gap-6 transition-all duration-300 rounded-r-xl">
                    <div class="flex-1">
                        <div class="flex flex-wrap items-center gap-3 mb-2">
                            <span class="px-2 py-0.5 bg-red-900/20 text-red-500 text-[10px] font-mono border border-red-900/30 rounded">LEVEL 3</span>
                            <h3 class="text-xl font-bold text-white group-hover:text-red-500 transition-colors">Lead YouTube Strategist</h3>
                        </div>
                        <div class="flex flex-wrap items-center gap-4 text-sm text-zinc-400 font-mono mt-2">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-red-600"></i> Full-time</span>
                            <span class="flex items-center gap-1 text-zinc-300"><i data-lucide="dollar-sign" class="w-3 h-3"></i> $2k-$4k/mo</span>
                        </div>
                        <div class="flex flex-wrap gap-2 mt-3">
                            <span class="text-xs text-zinc-500">#Retention</span>
                            <span class="text-xs text-zinc-500">#Pacing</span>
                            <span class="text-xs text-zinc-500">#Storytelling</span>
                        </div>
                    </div>
                    <button class="flex items-center gap-2 px-4 py-2 border border-zinc-700 text-zinc-300 font-mono text-sm hover:bg-red-600 hover:text-white hover:border-red-600 transition-all rounded">
                        VIEW_BRIEF <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    </button>
                </div>

                <div class="group relative bg-zinc-900/50 border border-zinc-800 border-l-4 border-l-zinc-800 hover:border-red-600/50 hover:border-l-red-600 p-6 flex flex-col md:flex-row items-start md:items-center justify-between gap-6 transition-all duration-300 rounded-r-xl">
                    <div class="flex-1">
                        <div class="flex flex-wrap items-center gap-3 mb-2">
                            <span class="px-2 py-0.5 bg-red-900/20 text-red-500 text-[10px] font-mono border border-red-900/30 rounded">LEVEL 4</span>
                            <h3 class="text-xl font-bold text-white group-hover:text-red-500 transition-colors">Motion Graphics Artist</h3>
                        </div>
                        <div class="flex flex-wrap items-center gap-4 text-sm text-zinc-400 font-mono mt-2">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-red-600"></i> Contract</span>
                            <span class="flex items-center gap-1 text-zinc-300"><i data-lucide="dollar-sign" class="w-3 h-3"></i> Project Based</span>
                        </div>
                        <div class="flex flex-wrap gap-2 mt-3">
                            <span class="text-xs text-zinc-500">#AfterEffects</span>
                            <span class="text-xs text-zinc-500">#Cinema4D</span>
                            <span class="text-xs text-zinc-500">#Rive</span>
                        </div>
                    </div>
                    <button class="flex items-center gap-2 px-4 py-2 border border-zinc-700 text-zinc-300 font-mono text-sm hover:bg-red-600 hover:text-white hover:border-red-600 transition-all rounded">
                        VIEW_BRIEF <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    </button>
                </div>

                 <div class="group relative bg-zinc-900/50 border border-zinc-800 border-l-4 border-l-zinc-800 hover:border-red-600/50 hover:border-l-red-600 p-6 flex flex-col md:flex-row items-start md:items-center justify-between gap-6 transition-all duration-300 rounded-r-xl">
                    <div class="flex-1">
                        <div class="flex flex-wrap items-center gap-3 mb-2">
                            <span class="px-2 py-0.5 bg-red-900/20 text-red-500 text-[10px] font-mono border border-red-900/30 rounded">LEVEL 2</span>
                            <h3 class="text-xl font-bold text-white group-hover:text-red-500 transition-colors">Short-Form Killer</h3>
                        </div>
                        <div class="flex flex-wrap items-center gap-4 text-sm text-zinc-400 font-mono mt-2">
                            <span class="flex items-center gap-1"><i data-lucide="clock" class="w-3 h-3 text-red-600"></i> Retainer</span>
                            <span class="flex items-center gap-1 text-zinc-300"><i data-lucide="dollar-sign" class="w-3 h-3"></i> $1.5k/mo</span>
                        </div>
                        <div class="flex flex-wrap gap-2 mt-3">
                            <span class="text-xs text-zinc-500">#TikTok</span>
                            <span class="text-xs text-zinc-500">#Reels</span>
                            <span class="text-xs text-zinc-500">#SoundDesign</span>
                        </div>
                    </div>
                    <button class="flex items-center gap-2 px-4 py-2 border border-zinc-700 text-zinc-300 font-mono text-sm hover:bg-red-600 hover:text-white hover:border-red-600 transition-all rounded">
                        VIEW_BRIEF <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>
        </section>

        <section class="container mx-auto px-6 mb-24">
            <div class="flex items-center gap-2 mb-12 text-red-500 font-mono text-sm">
                <div class="w-4 h-px bg-red-500"></div>
                <h3>INFILTRATION_PROTOCOL</h3>
                <div class="flex-1 h-px bg-zinc-800"></div>
            </div>

            <div class="relative">
                <div class="absolute top-1/2 left-0 w-full h-px bg-zinc-800 -translate-y-1/2 hidden md:block"></div>
                
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 md:gap-4 relative z-10">
                    <div class="flex flex-col items-center text-center group cursor-default">
                        <div class="w-16 h-16 rounded-full bg-zinc-950 border-2 border-zinc-800 group-hover:border-red-600 flex items-center justify-center mb-4 transition-colors relative z-20">
                            <i data-lucide="file-text" class="w-6 h-6 text-zinc-500 group-hover:text-red-500 transition-colors"></i>
                            <div class="absolute -top-2 -right-2 w-6 h-6 bg-zinc-950 text-red-600 font-mono text-xs flex items-center justify-center border border-zinc-800 rounded-full">1</div>
                        </div>
                        <h4 class="text-white font-bold font-mono text-sm mb-2">Portfolio Review</h4>
                        <p class="text-xs text-zinc-500 max-w-[150px]">No cover letters. Just raw work.</p>
                    </div>
                    <div class="flex flex-col items-center text-center group cursor-default">
                        <div class="w-16 h-16 rounded-full bg-zinc-950 border-2 border-zinc-800 group-hover:border-red-600 flex items-center justify-center mb-4 transition-colors relative z-20">
                            <i data-lucide="cpu" class="w-6 h-6 text-zinc-500 group-hover:text-red-500 transition-colors"></i>
                            <div class="absolute -top-2 -right-2 w-6 h-6 bg-zinc-950 text-red-600 font-mono text-xs flex items-center justify-center border border-zinc-800 rounded-full">2</div>
                        </div>
                        <h4 class="text-white font-bold font-mono text-sm mb-2">Paid Test Edit</h4>
                        <p class="text-xs text-zinc-500 max-w-[150px]">Show us your skills, get paid regardless.</p>
                    </div>
                    <div class="flex flex-col items-center text-center group cursor-default">
                        <div class="w-16 h-16 rounded-full bg-zinc-950 border-2 border-zinc-800 group-hover:border-red-600 flex items-center justify-center mb-4 transition-colors relative z-20">
                            <i data-lucide="user" class="w-6 h-6 text-zinc-500 group-hover:text-red-500 transition-colors"></i>
                            <div class="absolute -top-2 -right-2 w-6 h-6 bg-zinc-950 text-red-600 font-mono text-xs flex items-center justify-center border border-zinc-800 rounded-full">3</div>
                        </div>
                        <h4 class="text-white font-bold font-mono text-sm mb-2">Culture Interview</h4>
                        <p class="text-xs text-zinc-500 max-w-[150px]">Vibe check. Are you one of us?</p>
                    </div>
                    <div class="flex flex-col items-center text-center group cursor-default">
                        <div class="w-16 h-16 rounded-full bg-zinc-950 border-2 border-zinc-800 group-hover:border-red-600 flex items-center justify-center mb-4 transition-colors relative z-20">
                            <i data-lucide="zap" class="w-6 h-6 text-zinc-500 group-hover:text-red-500 transition-colors"></i>
                            <div class="absolute -top-2 -right-2 w-6 h-6 bg-zinc-950 text-red-600 font-mono text-xs flex items-center justify-center border border-zinc-800 rounded-full">4</div>
                        </div>
                        <h4 class="text-white font-bold font-mono text-sm mb-2">Official Offer</h4>
                        <p class="text-xs text-zinc-500 max-w-[150px]">Access granted to the network.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="application-terminal" class="max-w-2xl mx-auto w-full px-6">
            <div class="bg-zinc-900 border border-zinc-800 rounded-lg overflow-hidden shadow-2xl shadow-red-900/10">
                
                <div class="bg-black px-4 py-2 border-b border-zinc-800 flex items-center gap-2">
                    <div class="flex gap-1.5">
                        <div class="w-3 h-3 rounded-full bg-red-600/50"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-600/50"></div>
                        <div class="w-3 h-3 rounded-full bg-green-600/50"></div>
                    </div>
                    <span class="ml-4 font-mono text-xs text-zinc-500">user@recruit:~/application</span>
                </div>

                <div class="p-6 md:p-8 font-mono">
                    <form id="career-form" class="space-y-6">
                        <div class="space-y-1">
                            <p class="text-red-500 text-xs mb-4"># FILL OUT THE PARAMETERS BELOW</p>
                            
                            <div class="group">
                                <label class="block text-xs text-zinc-500 mb-1">CODENAME / REAL NAME</label>
                                <div class="flex items-center border-b border-zinc-800 group-focus-within:border-red-500 transition-colors pb-1">
                                    <span class="text-red-600 mr-2">></span>
                                    <input required type="text" class="w-full bg-transparent border-none outline-none text-white placeholder-zinc-700 focus:ring-0" placeholder="Enter identification...">
                                </div>
                            </div>
                        </div>

                        <div class="group">
                            <label class="block text-xs text-zinc-500 mb-1">PORTFOLIO URL</label>
                            <div class="flex items-center border-b border-zinc-800 group-focus-within:border-red-500 transition-colors pb-1">
                                <span class="text-red-600 mr-2">></span>
                                <input required type="url" class="w-full bg-transparent border-none outline-none text-white placeholder-zinc-700 focus:ring-0" placeholder="https://...">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="group">
                                <label class="block text-xs text-zinc-500 mb-1">PRIMARY WEAPON</label>
                                <div class="flex items-center border-b border-zinc-800 group-focus-within:border-red-500 transition-colors pb-1">
                                    <span class="text-red-600 mr-2">></span>
                                    <select class="w-full bg-transparent border-none outline-none text-white [&>option]:bg-zinc-900 focus:ring-0 cursor-pointer">
                                        <option value="premiere">Adobe Premiere</option>
                                        <option value="ae">After Effects</option>
                                        <option value="davinci">DaVinci Resolve</option>
                                        <option value="c4d">Cinema 4D</option>
                                        <option value="blender">Blender</option>
                                    </select>
                                </div>
                            </div>

                            <div class="group">
                                <label class="block text-xs text-zinc-500 mb-1">COMBAT EXPERIENCE</label>
                                <div class="flex items-center border-b border-zinc-800 group-focus-within:border-red-500 transition-colors pb-1">
                                    <span class="text-red-600 mr-2">></span>
                                    <select class="w-full bg-transparent border-none outline-none text-white [&>option]:bg-zinc-900 focus:ring-0 cursor-pointer">
                                        <option value="0-1">0-1 Years</option>
                                        <option value="1-3">1-3 Years</option>
                                        <option value="3-5">3-5 Years</option>
                                        <option value="5+">5+ Years (Veteran)</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="pt-4">
                            <button type="submit" id="submit-btn" class="w-full bg-zinc-800/50 border border-zinc-700 text-red-500 py-3 hover:bg-red-600 hover:text-white hover:border-red-600 transition-all flex items-center justify-center gap-2 group rounded">
                                <span>[ INITIATE_APPLICATION ]</span>
                                <span class="w-2 h-4 bg-red-500 group-hover:bg-white animate-pulse"></span>
                            </button>
                        </div>
                    </form>

                    <div id="success-message" class="hidden flex-col items-center justify-center py-12 text-center space-y-4">
                        <i data-lucide="check-circle" class="w-16 h-16 text-green-500"></i>
                        <h3 class="text-xl font-bold text-white">TRANSMISSION RECEIVED</h3>
                        <p class="text-zinc-400 text-sm max-w-sm">
                            Our intelligence officers are reviewing your dossier. Stand by for encrypted contact within 48 hours.
                        </p>
                        <button onclick="resetForm()" class="text-xs text-red-500 underline mt-4 hover:text-red-400">
                            SEND_ANOTHER_TRANSMISSION
                        </button>
                    </div>
                </div>
            </div>
            
            <div class="text-center pt-8 pb-8">
                <p class="text-xs font-mono text-zinc-600">
                    SECURE CONNECTION ESTABLISHED • 100% ENCRYPTED • V.2.0.4
                </p>
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

        // 3. Form Simulation Logic
        const form = document.getElementById('career-form');
        const successMsg = document.getElementById('success-message');
        const submitBtn = document.getElementById('submit-btn');
        const originalBtnContent = submitBtn.innerHTML;

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Loading State
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="animate-pulse">TRANSMITTING_DATA...</span>';
            submitBtn.classList.add('opacity-75', 'cursor-not-allowed');

            // Simulate Network Request
            setTimeout(() => {
                form.classList.add('hidden');
                successMsg.classList.remove('hidden');
                successMsg.classList.add('flex');
            }, 2000);
        });

        function resetForm() {
            form.reset();
            successMsg.classList.add('hidden');
            successMsg.classList.remove('flex');
            form.classList.remove('hidden');
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalBtnContent;
            submitBtn.classList.remove('opacity-75', 'cursor-not-allowed');
        }
    </script>

<?php include 'footer.php'; ?>