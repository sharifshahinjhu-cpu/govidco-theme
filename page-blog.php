<?php include 'header.php'; ?>

    <div id="preloader" class="fixed inset-0 z-[100] bg-black flex items-center justify-center flex-col transition-opacity duration-700">
        <div class="text-5xl font-black text-white tracking-tighter animate-pulse mb-4">
            GO<span class="text-red-600">VID</span>CO
        </div>
        <div class="text-red-500 font-mono text-sm">
            Loading Intelligence Feed...
        </div>
    </div>

    <header class="relative w-full h-[60vh] min-h-[500px] overflow-hidden flex flex-col items-center justify-center border-b border-zinc-800 bg-zinc-950 pt-20">
        <div class="absolute inset-0 opacity-[0.03] pointer-events-none select-none overflow-hidden flex flex-col justify-center gap-8">
            <div class="whitespace-nowrap animate-scroll-left text-7xl font-black font-mono text-white">
                CTR ROAS AVD RETENTION ALGORITHM SCALE VIRALITY DATA CTR ROAS AVD RETENTION ALGORITHM SCALE VIRALITY DATA
            </div>
            <div class="whitespace-nowrap animate-scroll-right text-7xl font-black font-mono text-white">
                STORYTELLING PACING HOOKS EDITING COLOR SOUND DESIGN STORYTELLING PACING HOOKS EDITING COLOR SOUND DESIGN
            </div>
        </div>

        <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
            <div class="inline-flex items-center gap-2 mb-6 px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 backdrop-blur-sm">
                <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
                <span class="text-xs font-mono text-zinc-400 tracking-wider">SYSTEM ONLINE // INTELLIGENCE FEED</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-bold text-white tracking-tighter mb-6 font-sans">
                The Edit Bay
            </h1>
            <p class="text-lg md:text-xl text-zinc-400 max-w-2xl mx-auto font-mono">
                Decoding algorithms, production hacks, and the future of storytelling.
            </p>
        </div>

        <div class="absolute bottom-0 left-0 w-full h-32 bg-gradient-to-t from-zinc-950 to-transparent"></div>
    </header>

    <section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 -mt-20 relative z-20 mb-20">
        <div class="group relative rounded-2xl overflow-hidden bg-zinc-900 border border-zinc-800 hover:border-red-600/50 transition-all duration-500 shadow-2xl">
            <div class="grid md:grid-cols-2 gap-0">
                
                <div class="relative h-64 md:h-auto overflow-hidden">
                    <div class="absolute inset-0 bg-red-900/20 mix-blend-overlay z-10"></div>
                      
                    <div class="absolute inset-0 bg-gradient-to-r from-zinc-950 via-transparent to-transparent opacity-60 md:opacity-100"></div>
                </div>

                <div class="relative p-8 md:p-12 flex flex-col justify-center">
                    <div class="flex items-center gap-2 mb-4 text-red-500 font-mono text-xs tracking-widest uppercase">
                        <i data-lucide="zap" class="w-3 h-3"></i>
                        <span>Strategy // Deep Dive</span>
                    </div>
                    
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-white leading-tight mb-6 font-sans">
                        The Death of the <br class="hidden lg:block"/>10-Minute Video: <span class="text-zinc-500">Why Pacing is the New SEO.</span>
                    </h2>
                    
                    <p class="text-zinc-400 text-lg mb-8 font-sans leading-relaxed">
                        Retention is no longer about length; it's about density. We analyzed 50M views to understand how to engineer dopamine hits that keep viewers glued.
                    </p>

                    <button class="w-fit flex items-center gap-3 px-6 py-3 bg-white text-zinc-950 font-bold font-mono text-sm uppercase tracking-wide transition-all duration-300 hover:bg-zinc-200 group-hover:pl-8 rounded">
                        Read Transmission
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20">
        <div class="flex flex-wrap gap-4 mb-12 border-b border-zinc-800 pb-4">
            <button class="filter-btn active px-4 py-2 text-sm font-mono transition-all duration-300 relative text-red-500" data-filter="all">
                All
                <span class="absolute -bottom-[17px] left-0 w-full h-[2px] bg-red-600"></span>
            </button>
            <button class="filter-btn px-4 py-2 text-sm font-mono transition-all duration-300 relative text-zinc-500 hover:text-white" data-filter="growth">
                /Growth
            </button>
            <button class="filter-btn px-4 py-2 text-sm font-mono transition-all duration-300 relative text-zinc-500 hover:text-white" data-filter="ai-tools">
                /AI_Tools
            </button>
            <button class="filter-btn px-4 py-2 text-sm font-mono transition-all duration-300 relative text-zinc-500 hover:text-white" data-filter="inside">
                /Inside_GoVidCo
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="blog-grid">
            
            <article class="blog-card group relative bg-zinc-900 border border-zinc-800 hover:border-red-600/30 transition-all duration-300 flex flex-col h-full hover:-translate-y-1 hover:shadow-[0_0_20px_rgba(220,38,38,0.15)] rounded-xl overflow-hidden" data-category="growth">
                <div class="relative h-48 overflow-hidden bg-zinc-950">
                    
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-transparent transition-colors"></div>
                    <div class="absolute top-3 right-3 bg-black/80 backdrop-blur text-white text-xs font-mono px-2 py-1 flex items-center gap-1 border border-zinc-700 rounded">
                        <i data-lucide="activity" class="w-3 h-3 text-red-500"></i>
                        <span>Case Study</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-2 mb-3 text-xs text-zinc-500 font-mono">
                        <i data-lucide="clock" class="w-3 h-3"></i>
                        <span>6 min Read</span>
                        <span class="text-zinc-700">|</span>
                        <span class="text-red-500">Growth</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4 line-clamp-2 group-hover:text-red-500 transition-colors duration-300">
                        How we saved a dying channel with 1 change
                    </h3>
                    <div class="mt-auto pt-4 border-t border-zinc-800 flex justify-between items-center text-sm">
                        <span class="text-zinc-500 font-mono group-hover:text-white transition-colors">Read Article</span>
                        <i data-lucide="chevron-right" class="w-4 h-4 text-zinc-600 group-hover:text-red-500 transform group-hover:translate-x-1 transition-all"></i>
                    </div>
                </div>
            </article>

            <article class="blog-card group relative bg-zinc-900 border border-zinc-800 hover:border-red-600/30 transition-all duration-300 flex flex-col h-full hover:-translate-y-1 hover:shadow-[0_0_20px_rgba(220,38,38,0.15)] rounded-xl overflow-hidden" data-category="ai-tools">
                <div class="relative h-48 overflow-hidden bg-zinc-950">
                    
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-transparent transition-colors"></div>
                    <div class="absolute top-3 right-3 bg-black/80 backdrop-blur text-white text-xs font-mono px-2 py-1 flex items-center gap-1 border border-zinc-700 rounded">
                        <i data-lucide="cpu" class="w-3 h-3 text-red-500"></i>
                        <span>Tech</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-2 mb-3 text-xs text-zinc-500 font-mono">
                        <i data-lucide="clock" class="w-3 h-3"></i>
                        <span>4 min Read</span>
                        <span class="text-zinc-700">|</span>
                        <span class="text-red-500">AI_Tools</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4 line-clamp-2 group-hover:text-red-500 transition-colors duration-300">
                        Top 5 AI Tools for Color Grading in 2026
                    </h3>
                    <div class="mt-auto pt-4 border-t border-zinc-800 flex justify-between items-center text-sm">
                        <span class="text-zinc-500 font-mono group-hover:text-white transition-colors">Read Article</span>
                        <i data-lucide="chevron-right" class="w-4 h-4 text-zinc-600 group-hover:text-red-500 transform group-hover:translate-x-1 transition-all"></i>
                    </div>
                </div>
            </article>

            <article class="blog-card group relative bg-zinc-900 border border-zinc-800 hover:border-red-600/30 transition-all duration-300 flex flex-col h-full hover:-translate-y-1 hover:shadow-[0_0_20px_rgba(220,38,38,0.15)] rounded-xl overflow-hidden" data-category="inside">
                <div class="relative h-48 overflow-hidden bg-zinc-950">
                    
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-transparent transition-colors"></div>
                    <div class="absolute top-3 right-3 bg-black/80 backdrop-blur text-white text-xs font-mono px-2 py-1 flex items-center gap-1 border border-zinc-700 rounded">
                        <i data-lucide="layers" class="w-3 h-3 text-red-500"></i>
                        <span>Gear</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-2 mb-3 text-xs text-zinc-500 font-mono">
                        <i data-lucide="clock" class="w-3 h-3"></i>
                        <span>12 min Read</span>
                        <span class="text-zinc-700">|</span>
                        <span class="text-red-500">Inside_GoVidCo</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4 line-clamp-2 group-hover:text-red-500 transition-colors duration-300">
                        Behind the scenes: The $50k Setup
                    </h3>
                    <div class="mt-auto pt-4 border-t border-zinc-800 flex justify-between items-center text-sm">
                        <span class="text-zinc-500 font-mono group-hover:text-white transition-colors">Read Article</span>
                        <i data-lucide="chevron-right" class="w-4 h-4 text-zinc-600 group-hover:text-red-500 transform group-hover:translate-x-1 transition-all"></i>
                    </div>
                </div>
            </article>

             <article class="blog-card group relative bg-zinc-900 border border-zinc-800 hover:border-red-600/30 transition-all duration-300 flex flex-col h-full hover:-translate-y-1 hover:shadow-[0_0_20px_rgba(220,38,38,0.15)] rounded-xl overflow-hidden" data-category="growth">
                <div class="relative h-48 overflow-hidden bg-zinc-950">
                    
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-transparent transition-colors"></div>
                    <div class="absolute top-3 right-3 bg-black/80 backdrop-blur text-white text-xs font-mono px-2 py-1 flex items-center gap-1 border border-zinc-700 rounded">
                        <i data-lucide="activity" class="w-3 h-3 text-red-500"></i>
                        <span>Analytics</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-2 mb-3 text-xs text-zinc-500 font-mono">
                        <i data-lucide="clock" class="w-3 h-3"></i>
                        <span>5 min Read</span>
                        <span class="text-zinc-700">|</span>
                        <span class="text-red-500">Growth</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4 line-clamp-2 group-hover:text-red-500 transition-colors duration-300">
                        The algorithm hates your intro (Here's why)
                    </h3>
                    <div class="mt-auto pt-4 border-t border-zinc-800 flex justify-between items-center text-sm">
                        <span class="text-zinc-500 font-mono group-hover:text-white transition-colors">Read Article</span>
                        <i data-lucide="chevron-right" class="w-4 h-4 text-zinc-600 group-hover:text-red-500 transform group-hover:translate-x-1 transition-all"></i>
                    </div>
                </div>
            </article>

            <article class="blog-card group relative bg-zinc-900 border border-zinc-800 hover:border-red-600/30 transition-all duration-300 flex flex-col h-full hover:-translate-y-1 hover:shadow-[0_0_20px_rgba(220,38,38,0.15)] rounded-xl overflow-hidden" data-category="ai-tools">
                <div class="relative h-48 overflow-hidden bg-zinc-950">
                    
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-transparent transition-colors"></div>
                    <div class="absolute top-3 right-3 bg-black/80 backdrop-blur text-white text-xs font-mono px-2 py-1 flex items-center gap-1 border border-zinc-700 rounded">
                        <i data-lucide="cpu" class="w-3 h-3 text-red-500"></i>
                        <span>Workflow</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-2 mb-3 text-xs text-zinc-500 font-mono">
                        <i data-lucide="clock" class="w-3 h-3"></i>
                        <span>7 min Read</span>
                        <span class="text-zinc-700">|</span>
                        <span class="text-red-500">AI_Tools</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4 line-clamp-2 group-hover:text-red-500 transition-colors duration-300">
                        Automating thumbnails with Midjourney v7
                    </h3>
                    <div class="mt-auto pt-4 border-t border-zinc-800 flex justify-between items-center text-sm">
                        <span class="text-zinc-500 font-mono group-hover:text-white transition-colors">Read Article</span>
                        <i data-lucide="chevron-right" class="w-4 h-4 text-zinc-600 group-hover:text-red-500 transform group-hover:translate-x-1 transition-all"></i>
                    </div>
                </div>
            </article>

            <article class="blog-card group relative bg-zinc-900 border border-zinc-800 hover:border-red-600/30 transition-all duration-300 flex flex-col h-full hover:-translate-y-1 hover:shadow-[0_0_20px_rgba(220,38,38,0.15)] rounded-xl overflow-hidden" data-category="inside">
                <div class="relative h-48 overflow-hidden bg-zinc-950">
                    
                    <div class="absolute inset-0 bg-black/40 group-hover:bg-transparent transition-colors"></div>
                    <div class="absolute top-3 right-3 bg-black/80 backdrop-blur text-white text-xs font-mono px-2 py-1 flex items-center gap-1 border border-zinc-700 rounded">
                        <i data-lucide="layers" class="w-3 h-3 text-red-500"></i>
                        <span>Gear</span>
                    </div>
                </div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex items-center gap-2 mb-3 text-xs text-zinc-500 font-mono">
                        <i data-lucide="clock" class="w-3 h-3"></i>
                        <span>12 min Read</span>
                        <span class="text-zinc-700">|</span>
                        <span class="text-red-500">Inside_GoVidCo</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-4 line-clamp-2 group-hover:text-red-500 transition-colors duration-300">
                        Behind the scenes: The $50k Setup
                    </h3>
                    <div class="mt-auto pt-4 border-t border-zinc-800 flex justify-between items-center text-sm">
                        <span class="text-zinc-500 font-mono group-hover:text-white transition-colors">Read Article</span>
                        <i data-lucide="chevron-right" class="w-4 h-4 text-zinc-600 group-hover:text-red-500 transform group-hover:translate-x-1 transition-all"></i>
                    </div>
                </div>
            </article>

        </div>
    </section>

    <section class="w-full bg-zinc-950 border-t border-zinc-900 relative overflow-hidden py-24">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#333_1px,transparent_1px)] bg-[size:30px_30px]"></div>

        <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
            <div class="flex justify-center mb-6">
                <div class="relative p-4 rounded-full bg-zinc-900/50 border border-zinc-800 group">
                    <i data-lucide="mail" class="w-12 h-12 text-white group-hover:text-red-500 transition-colors duration-300"></i>
                    <div class="absolute inset-0 border border-transparent group-hover:border-red-500/50 rounded-full animate-ping opacity-20"></div>
                </div>
            </div>

            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 tracking-tight">
                Join the Intelligence Briefing.
            </h2>
            <p class="text-zinc-400 mb-8 font-mono text-sm md:text-base max-w-lg mx-auto">
                Get the weekly download on strategies, tools, and raw data. No spam, just signal.
            </p>

            <form class="flex flex-col sm:flex-row gap-0 max-w-lg mx-auto">
                <div class="relative flex-grow">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <i data-lucide="terminal" class="w-5 h-5 text-zinc-500"></i>
                    </div>
                    <input 
                        type="email" 
                        placeholder="Enter secure email..." 
                        class="w-full h-12 pl-10 pr-4 bg-zinc-900 border border-zinc-700 text-white placeholder-zinc-500 font-mono text-sm focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600 transition-all rounded-l-md rounded-r-md sm:rounded-r-none"
                    >
                </div>
                <button type="submit" class="h-12 px-8 bg-white text-zinc-950 font-bold uppercase tracking-wider font-mono text-sm hover:bg-zinc-200 transition-all duration-300 rounded-r-md rounded-l-md sm:rounded-l-none mt-2 sm:mt-0">
                    Subscribe
                </button>
            </form>
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

        // 3. Filter Logic
        const filterBtns = document.querySelectorAll('.filter-btn');
        const blogCards = document.querySelectorAll('.blog-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active state
                filterBtns.forEach(b => {
                    b.classList.remove('text-red-500', 'active');
                    b.classList.add('text-zinc-500');
                    const line = b.querySelector('span');
                    if(line) line.remove();
                });
                
                btn.classList.remove('text-zinc-500');
                btn.classList.add('text-red-500', 'active');
                
                // Add underline
                const line = document.createElement('span');
                line.className = 'absolute -bottom-[17px] left-0 w-full h-[2px] bg-red-600';
                btn.appendChild(line);

                const filterValue = btn.getAttribute('data-filter');

                blogCards.forEach(card => {
                    if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
                        card.style.display = 'flex';
                        // Add fade in animation
                        card.animate([
                            { opacity: 0, transform: 'translateY(10px)' },
                            { opacity: 1, transform: 'translateY(0)' }
                        ], {
                            duration: 300,
                            easing: 'ease-out'
                        });
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>

<?php include 'footer.php'; ?>