<?php include 'header.php'; ?>

    <style>
        .text-gradient {
            background: linear-gradient(to right, #dc2626, #f87171);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .bg-noise {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.05'/%3E%3C/svg%3E");
        }
        .fade-in-section {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 1s ease-out, transform 1s ease-out;
            will-change: opacity, visibility;
        }
        .fade-in-section.is-visible {
            opacity: 1;
            transform: none;
        }
    </style>

    <div id="preloader" class="fixed inset-0 z-[100] bg-black flex items-center justify-center flex-col transition-opacity duration-700">
        <div class="text-5xl font-black text-white tracking-tighter animate-pulse mb-4">
            GO<span class="text-red-600">VID</span>CO
        </div>
        <div class="text-red-500 font-mono text-sm">
            Loading System Architecture...
        </div>
    </div>

    <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-zinc-950">
        <div class="absolute inset-0 opacity-20 bg-noise mix-blend-overlay pointer-events-none fixed"></div>
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-red-900/10 rounded-full blur-[120px] -z-10"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-6 text-center fade-in-section">
            
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 backdrop-blur-sm mb-8">
                <span class="relative flex h-2 w-2">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-red-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-red-500"></span>
                </span>
                <span class="text-xs font-mono text-red-500 tracking-wider">SYSTEM_ONLINE // V2.0</span>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-bold tracking-tight text-white mb-6 leading-tight">
                Born in the Cloud.<br />
                <span class="text-gradient">
                    Built for Velocity.
                </span>
            </h1>

            <p class="text-lg md:text-xl text-zinc-400 max-w-2xl mx-auto mb-10 font-light leading-relaxed">
                A decentralized collective of top <span class="text-white font-medium">1% talent</span>, 
                powered by proprietary AI infrastructure to deliver content at the speed of culture.
            </p>
            
            

            <div class="flex justify-center">
               <button class="group relative px-8 py-4 bg-white text-zinc-950 font-bold uppercase tracking-wider transition-all hover:bg-red-600 hover:text-white clip-path-polygon">
                  INITIATE PROJECT
                  <i data-lucide="arrow-right" class="inline ml-2 w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
               </button>
            </div>
        </div>

        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce text-zinc-600">
            <i data-lucide="chevron-down" class="w-6 h-6"></i>
        </div>
        
        <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-zinc-950 to-transparent z-10"></div>
        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-zinc-950 to-transparent z-10"></div>
    </section>

    <section id="origin" class="py-24 bg-zinc-950 relative border-t border-zinc-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                
                <div class="order-2 lg:order-1 fade-in-section">
                    <h2 class="text-3xl md:text-4xl font-black text-white mb-2">The Glitch in the Matrix</h2>
                    <div class="h-1 w-20 bg-red-600 mb-8"></div>
                    
                    <div class="space-y-8">
                        <div class="bg-zinc-900/40 border-l-2 border-red-800 p-6 backdrop-blur-sm">
                            <h3 class="text-red-500 font-mono text-sm mb-2 uppercase tracking-widest">The Problem</h3>
                            <p class="text-zinc-400 leading-relaxed">
                                The creative industry was fragmented. Freelancers were unreliable ghosts in the machine. 
                                Traditional agencies were bloated giants, too slow to catch the viral wave. 
                                The market demanded quality <i>and</i> speed, but the old systems could only pick one.
                            </p>
                        </div>

                        <div class="bg-zinc-900/40 border-l-2 border-white p-6 backdrop-blur-sm">
                            <h3 class="text-white font-mono text-sm mb-2 uppercase tracking-widest">The Solution</h3>
                            <p class="text-zinc-400 leading-relaxed">
                                Enter <span class="text-white font-semibold">GoVidCo</span>. We dismantled the agency model 
                                and rebuilt it as a hybrid engine. By combining the soul of elite human creatives with 
                                the ruthless efficiency of AI workflows, we unlocked a new standard of output.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2 flex justify-center fade-in-section">
                    <div class="relative w-full max-w-md aspect-square">
                        <div class="absolute inset-0 bg-red-600/10 rounded-full blur-3xl"></div>
                          

                        <div class="relative z-10 w-full h-full border border-zinc-800 bg-zinc-900/80 rounded-2xl p-8 flex flex-col justify-between overflow-hidden group hover:border-red-600/30 transition-colors duration-500 shadow-2xl">
                            
                            <div class="absolute inset-0 bg-[radial-gradient(#333_1px,transparent_1px)] bg-[size:20px_20px] opacity-20 pointer-events-none"></div>

                            <div class="flex justify-between items-start">
                                <div class="p-3 bg-zinc-950 border border-zinc-800 rounded-lg">
                                    <i data-lucide="users" class="w-8 h-8 text-zinc-400"></i>
                                </div>
                                <div class="font-mono text-xs text-red-500 animate-pulse">
                                    SYNC_RATE: 99.9%
                                </div>
                                <div class="p-3 bg-zinc-950 border border-zinc-800 rounded-lg">
                                    <i data-lucide="cpu" class="w-8 h-8 text-red-600"></i>
                                </div>
                            </div>

                            <div class="relative py-12">
                                <div class="absolute top-1/2 left-0 right-0 h-px bg-gradient-to-r from-zinc-500 via-red-500 to-zinc-500 opacity-50"></div>
                                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-12 h-12 bg-zinc-950 border border-red-900/50 rounded-full flex items-center justify-center z-20 shadow-[0_0_20px_rgba(220,38,38,0.4)]">
                                    <i data-lucide="zap" class="w-5 h-5 text-red-500 fill-current"></i>
                                </div>
                            </div>

                            <div class="text-center font-mono text-sm text-zinc-500 mt-auto">
                                <span class="text-zinc-300">HUMAN_INTUITION</span> + <span class="text-red-500">AI_VELOCITY</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-zinc-950 relative overflow-hidden">
        <div class="absolute top-0 inset-x-0 h-px bg-gradient-to-r from-transparent via-zinc-800 to-transparent"></div>
        
        <div class="max-w-7xl mx-auto px-6 text-center mb-16 fade-in-section">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 backdrop-blur-sm mb-6">
                <i data-lucide="globe" class="w-4 h-4 text-red-500"></i>
                <span class="text-xs font-mono text-red-500 tracking-wider">NETWORK_STATUS: ACTIVE</span>
            </div>
            <h2 class="text-3xl md:text-5xl font-black text-white mb-6">Global Operations</h2>
            <p class="text-xl text-zinc-400 max-w-2xl mx-auto">
                We work while you sleep. The sun never sets on GoVidCo.
            </p>
        </div>

        <div class="relative max-w-5xl mx-auto h-[400px] bg-zinc-900/20 rounded-3xl border border-zinc-800/50 overflow-hidden backdrop-blur-sm fade-in-section">
            

            <div class="absolute inset-0 opacity-40">
                <div class="absolute inset-0 bg-[radial-gradient(#27272a_1px,transparent_1px)] [background-size:20px_20px]"></div>
            </div>
            
            <div class="absolute top-1/2 left-1/4 -translate-x-1/2 -translate-y-1/2 group cursor-pointer">
                <div class="relative flex items-center justify-center">
                     <span class="animate-ping absolute inline-flex h-6 w-6 rounded-full bg-red-600 opacity-75"></span>
                     <span class="relative inline-flex rounded-full h-3 w-3 bg-red-600"></span>
                </div>
            </div>

            <div class="absolute top-1/3 left-3/4 -translate-x-1/2 -translate-y-1/2 group cursor-pointer">
                <div class="relative flex items-center justify-center">
                     <span class="animate-ping-slow absolute inline-flex h-6 w-6 rounded-full bg-red-600 opacity-75"></span>
                     <span class="relative inline-flex rounded-full h-3 w-3 bg-red-600"></span>
                </div>
            </div>

            <div class="absolute top-2/3 left-1/2 -translate-x-1/2 -translate-y-1/2 group cursor-pointer">
                <div class="relative flex items-center justify-center">
                     <span class="animate-ping absolute inline-flex h-6 w-6 rounded-full bg-white opacity-25"></span>
                     <span class="relative inline-flex rounded-full h-3 w-3 bg-white"></span>
                </div>
            </div>

            <div class="absolute bottom-0 w-full bg-gradient-to-t from-zinc-950 to-transparent p-8">
                <div class="flex flex-wrap justify-center gap-8 md:gap-16">
                   <div class="text-center">
                      <div class="text-2xl md:text-3xl font-bold text-white font-mono">24/7</div>
                      <div class="text-xs md:text-sm text-zinc-500 uppercase tracking-wider">Operations</div>
                   </div>
                   <div class="text-center">
                      <div class="text-2xl md:text-3xl font-bold text-white font-mono">50+</div>
                      <div class="text-xs md:text-sm text-zinc-500 uppercase tracking-wider">Specialists</div>
                   </div>
                   <div class="text-center">
                      <div class="text-2xl md:text-3xl font-bold text-white font-mono">12</div>
                      <div class="text-xs md:text-sm text-zinc-500 uppercase tracking-wider">Time Zones</div>
                   </div>
                </div>
            </div>
        </div>
    </section>

    <section id="manifesto" class="py-24 bg-zinc-950 relative border-t border-zinc-900">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-16 fade-in-section">
                <h2 class="text-3xl md:text-4xl font-black text-white mb-2">The Manifesto</h2>
                <div class="h-1 w-20 bg-red-600"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group relative h-full bg-zinc-900/30 border border-zinc-800 p-8 hover:bg-zinc-900/60 transition-colors duration-300 rounded-lg overflow-hidden fade-in-section">
                    <div class="absolute top-0 left-0 w-1 h-full bg-red-600 opacity-50 group-hover:opacity-100 transition-opacity"></div>
                    
                    <div class="inline-flex p-3 rounded-lg mb-6 bg-red-900/20 text-red-500">
                       <i data-lucide="activity" class="w-8 h-8"></i>
                    </div>

                    <h3 class="text-xl font-bold text-white mb-4 group-hover:translate-x-1 transition-transform">Retention is King</h3>
                    <p class="text-zinc-400 leading-relaxed text-sm">We don't just edit; we engineer attention. Obsessed with AVD (Average View Duration), we optimize every frame for engagement.</p>
                </div>

                <div class="group relative h-full bg-zinc-900/30 border border-zinc-800 p-8 hover:bg-zinc-900/60 transition-colors duration-300 rounded-lg overflow-hidden fade-in-section">
                    <div class="absolute top-0 left-0 w-1 h-full bg-white opacity-20 group-hover:opacity-100 transition-opacity"></div>
                    
                    <div class="inline-flex p-3 rounded-lg mb-6 bg-zinc-800 text-white">
                       <i data-lucide="clock" class="w-8 h-8"></i>
                    </div>

                    <h3 class="text-xl font-bold text-white mb-4 group-hover:translate-x-1 transition-transform">Speed is Currency</h3>
                    <p class="text-zinc-400 leading-relaxed text-sm">In the viral age, timing is everything. Our 48-hour standard turnaround ensures you ride the trend, not chase it.</p>
                </div>

                <div class="group relative h-full bg-zinc-900/30 border border-zinc-800 p-8 hover:bg-zinc-900/60 transition-colors duration-300 rounded-lg overflow-hidden fade-in-section">
                    <div class="absolute top-0 left-0 w-1 h-full bg-red-600 opacity-50 group-hover:opacity-100 transition-opacity"></div>
                    
                    <div class="inline-flex p-3 rounded-lg mb-6 bg-red-900/20 text-red-500">
                       <i data-lucide="award" class="w-8 h-8"></i>
                    </div>

                    <h3 class="text-xl font-bold text-white mb-4 group-hover:translate-x-1 transition-transform">1% Talent Only</h3>
                    <p class="text-zinc-400 leading-relaxed text-sm">We hire the top 1% of creatives and automate the mundane. Pure creative horsepower, zero administrative drag.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-zinc-950 border-t border-zinc-900">
        <div class="max-w-4xl mx-auto px-6 fade-in-section">
            <div class="relative bg-zinc-900 border border-zinc-800 p-8 md:p-12 rounded-2xl overflow-hidden shadow-2xl shadow-red-900/10">
                <div class="absolute top-0 right-0 w-64 h-64 bg-red-600/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
                
                <div class="flex flex-col md:flex-row items-center gap-10 relative z-10">
                    <div class="flex-shrink-0">
                        <div class="w-32 h-32 md:w-40 md:h-40 rounded-full bg-zinc-800 border-2 border-zinc-700 flex items-center justify-center relative overflow-hidden group">
                            
                           <i data-lucide="user" class="w-16 h-16 text-zinc-600 absolute"></i>
                           
                           <div class="absolute inset-0 opacity-20 font-mono text-[8px] leading-3 text-red-500 break-all p-2 select-none group-hover:opacity-40 transition-opacity">
                             010101010101010100101010101010101010101010100101010101
                             010101010101010100101010101010101010101010100101010101
                             10101010101010010101010101010101010101001010101010101
                           </div>
                        </div>
                    </div>

                    <div class="flex-1 text-center md:text-left">
                        <div class="inline-block px-3 py-1 bg-red-900/20 border border-red-900/30 rounded-full text-red-500 text-xs font-mono mb-4">
                            ARCHITECT_ACCESS_LEVEL_1
                        </div>
                        <h3 class="text-3xl font-bold text-white mb-1">Sharif Shahin</h3>
                        <p class="text-zinc-500 font-mono text-sm mb-6">Founder & Architect</p>
                        
                        <div class="relative">
                            <span class="absolute -top-4 -left-2 text-6xl text-zinc-800 font-serif leading-none">"</span>
                            <p class="text-lg md:text-xl text-zinc-300 italic font-light leading-relaxed relative z-10">
                                I built GoVidCo to combine the soul of an artist with the speed of an algorithm. We are what happens when creativity gets an operating system.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

        // 3. Scroll Fade-In Animation Observer
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in-section').forEach(section => {
            observer.observe(section);
        });
    </script>

<?php include 'footer.php'; ?>