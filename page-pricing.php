<?php include 'header.php'; ?>

    <div id="preloader" class="fixed inset-0 z-[100] bg-black flex items-center justify-center flex-col transition-opacity duration-700">
        <div class="text-5xl font-black text-white tracking-tighter animate-pulse mb-4">
            GO<span class="text-red-600">VID</span>CO
        </div>
        <div class="text-red-500 font-mono text-sm">
            Calculating ROI...
        </div>
    </div>

    <main class="relative z-10 pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden bg-zinc-950">
        <div class="absolute inset-0 opacity-20 bg-noise mix-blend-overlay pointer-events-none fixed"></div>
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-red-900/10 rounded-full blur-[120px] -z-10"></div>

        <div class="container mx-auto px-6 text-center mb-24 relative z-10">
            <div class="inline-flex items-center space-x-2 bg-zinc-900/50 border border-zinc-800 rounded-full px-4 py-1.5 mb-8 backdrop-blur-sm">
                <span class="flex h-2 w-2 rounded-full bg-red-500 animate-pulse"></span>
                <span class="text-xs font-medium text-zinc-300 tracking-wide uppercase">Flat Monthly Rate</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-black text-white tracking-tight mb-6 leading-[1.1]">
                Simple Pricing.<br />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 to-red-400">
                    Maximum Velocity.
                </span>
            </h1>
            <p class="text-xl text-zinc-400 max-w-2xl mx-auto mb-10 leading-relaxed">
                Scale your video output without the headcount. Pause or cancel anytime. 
                No contracts, no hidden fees, just raw output.
            </p>
        </div>

        <section class="container mx-auto px-6 mb-32 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto items-center">
                
                <div class="bg-zinc-900/80 border border-zinc-800 rounded-2xl p-8 flex flex-col hover:border-zinc-700 transition-all duration-300 group">
                    <div class="mb-4">
                        <h3 class="text-white text-xl font-bold mb-2">Starter</h3>
                        <p class="text-zinc-500 text-sm">Perfect for emerging creators.</p>
                    </div>
                    <div class="text-4xl font-black text-white mb-6">$1,999<span class="text-sm font-medium text-zinc-500 font-sans tracking-normal">/mo</span></div>
                    
                    <button class="w-full py-3 rounded-lg border border-zinc-700 text-white font-bold hover:bg-zinc-800 hover:border-zinc-600 transition-all mb-8">
                        Get Started
                    </button>

                    <div class="space-y-4 text-sm text-zinc-400 flex-grow">
                        <div class="flex items-center gap-3">
                            <i data-lucide="check" class="w-4 h-4 text-zinc-500"></i>
                            <span>4 Short-Form Videos</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i data-lucide="check" class="w-4 h-4 text-zinc-500"></i>
                            <span>Basic Editing & Captions</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i data-lucide="check" class="w-4 h-4 text-zinc-500"></i>
                            <span>48h Turnaround Time</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i data-lucide="check" class="w-4 h-4 text-zinc-500"></i>
                            <span>Stock Footage Access</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i data-lucide="check" class="w-4 h-4 text-zinc-500"></i>
                            <span>Slack Support</span>
                        </div>
                    </div>
                </div>

                <div class="relative bg-zinc-900 border border-red-600 rounded-2xl p-8 flex flex-col transform md:-translate-y-4 shadow-[0_0_40px_rgba(220,38,38,0.15)] z-20">
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-red-600 text-white text-xs font-bold px-4 py-1.5 rounded-full uppercase tracking-wider shadow-lg shadow-red-900/50">
                        Most Popular
                    </div>
                    
                    <div class="mb-4 mt-2">
                        <h3 class="text-white text-xl font-bold mb-2">Growth</h3>
                        <p class="text-red-200/60 text-sm">For brands scaling aggressively.</p>
                    </div>
                    <div class="text-5xl font-black text-white mb-6">$4,999<span class="text-sm font-medium text-zinc-500 font-sans tracking-normal">/mo</span></div>
                    
                    <button class="w-full py-4 rounded-lg bg-red-600 text-white font-bold hover:bg-red-700 transition-all shadow-lg hover:shadow-red-900/40 mb-8 transform hover:scale-[1.02]">
                        Get Started
                    </button>

                    <div class="space-y-4 text-sm text-zinc-300 flex-grow">
                        <div class="flex items-center gap-3">
                            <div class="p-1 bg-red-900/30 rounded-full"><i data-lucide="check" class="w-3 h-3 text-red-500"></i></div>
                            <span class="font-medium text-white">12 Short-Form Videos</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="p-1 bg-red-900/30 rounded-full"><i data-lucide="check" class="w-3 h-3 text-red-500"></i></div>
                            <span class="font-medium text-white">2 Long-Form Videos</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="p-1 bg-red-900/30 rounded-full"><i data-lucide="check" class="w-3 h-3 text-red-500"></i></div>
                            <span>Advanced Motion Graphics</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="p-1 bg-red-900/30 rounded-full"><i data-lucide="check" class="w-3 h-3 text-red-500"></i></div>
                            <span>Thumbnail Design Included</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="p-1 bg-red-900/30 rounded-full"><i data-lucide="check" class="w-3 h-3 text-red-500"></i></div>
                            <span>Strategy Consulting</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="p-1 bg-red-900/30 rounded-full"><i data-lucide="check" class="w-3 h-3 text-red-500"></i></div>
                            <span>Dedicated Slack Channel</span>
                        </div>
                    </div>
                </div>

                <div class="bg-zinc-900/80 border border-zinc-800 rounded-2xl p-8 flex flex-col hover:border-zinc-700 transition-all duration-300 group">
                    <div class="mb-4">
                        <h3 class="text-white text-xl font-bold mb-2">Enterprise</h3>
                        <p class="text-zinc-500 text-sm">Full-scale production teams.</p>
                    </div>
                    <div class="text-4xl font-black text-white mb-6">Custom</div>
                    
                    <button class="w-full py-3 rounded-lg border border-zinc-700 text-white font-bold hover:bg-zinc-800 hover:border-zinc-600 transition-all mb-8">
                        Contact Sales
                    </button>

                    <div class="space-y-4 text-sm text-zinc-400 flex-grow">
                        <div class="flex items-center gap-3">
                            <i data-lucide="check" class="w-4 h-4 text-zinc-500"></i>
                            <span>Unlimited Requests</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i data-lucide="check" class="w-4 h-4 text-zinc-500"></i>
                            <span>24h Priority Turnaround</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i data-lucide="check" class="w-4 h-4 text-zinc-500"></i>
                            <span>Dedicated Creative Director</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i data-lucide="check" class="w-4 h-4 text-zinc-500"></i>
                            <span>Full Asset Management</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i data-lucide="check" class="w-4 h-4 text-zinc-500"></i>
                            <span>Custom Integrations</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="container mx-auto px-6 py-20 border-t border-zinc-800">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-black text-white mb-6">Have Questions?</h2>
                <p class="text-zinc-400 mb-8">
                    Not sure which plan is right for you? Check our detailed knowledge base or chat with us.
                </p>
                <div class="flex justify-center gap-4">
                    <a href="faq.php" class="flex items-center gap-2 text-white hover:text-red-500 transition-colors font-medium">
                        <i data-lucide="help-circle" class="w-5 h-5"></i> Visit FAQ
                    </a>
                    <span class="text-zinc-700">|</span>
                    <a href="contact.php" class="flex items-center gap-2 text-white hover:text-red-500 transition-colors font-medium">
                        <i data-lucide="message-square" class="w-5 h-5"></i> Chat with Sales
                    </a>
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