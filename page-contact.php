<?php include 'header.php'; ?>

    <style>
        input:-webkit-autofill,
        input:-webkit-autofill:hover, 
        input:-webkit-autofill:focus, 
        textarea:-webkit-autofill,
        textarea:-webkit-autofill:hover,
        textarea:-webkit-autofill:focus,
        select:-webkit-autofill,
        select:-webkit-autofill:hover,
        select:-webkit-autofill:focus {
            -webkit-text-fill-color: white;
            -webkit-box-shadow: 0 0 0px 1000px #18181b inset;
            transition: background-color 5000s ease-in-out 0s;
        }
    </style>

    <div id="preloader" class="fixed inset-0 z-[100] bg-black flex items-center justify-center flex-col transition-opacity duration-700">
        <div class="text-5xl font-black text-white tracking-tighter animate-pulse mb-4">
            GO<span class="text-red-600">VID</span>CO
        </div>
        <div class="text-red-500 font-mono text-sm">
            Establishing Secure Uplink...
        </div>
    </div>

    <main class="relative z-10 pt-32 pb-20 px-6 min-h-screen">
        <div class="absolute inset-0 opacity-20 bg-noise mix-blend-overlay pointer-events-none fixed"></div>
        
        <div class="max-w-7xl mx-auto relative z-10">
            
            <div class="text-center mb-16 relative">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-zinc-900 border border-zinc-800 mb-6">
                    <span class="w-2 h-2 rounded-full bg-red-600 animate-pulse"></span>
                    <span class="text-xs font-mono text-zinc-300 uppercase tracking-widest">Accepting New Clients for Q1</span>
                </div>
                
                <h1 class="text-5xl md:text-6xl font-black text-white mb-6 tracking-tight">
                    Ready to <span class="text-red-600">Engineer</span> Viral <br/> Growth?
                </h1>
                <p class="text-lg text-zinc-400 max-w-2xl mx-auto font-mono">
                    Initialize your onboarding sequence below. Our algorithms are standing by to process your request.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                
                <div class="bg-zinc-950 border border-zinc-800 rounded-xl p-1 shadow-2xl relative overflow-hidden group hover:border-red-600/50 transition-colors duration-500">
                    <div class="bg-zinc-900 rounded-lg p-6 md:p-8">
                        
                        <div class="flex items-center gap-2 border-b border-zinc-800 pb-4 mb-6">
                            <i data-lucide="terminal" class="w-5 h-5 text-red-600"></i>
                            <span class="text-xs font-mono text-zinc-500">root@govidco:~/project-request</span>
                        </div>

                        <form id="contact-form" class="space-y-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="space-y-2">
                                    <label class="text-xs font-mono text-red-500 uppercase tracking-wider">Identity // Name</label>
                                    <div class="relative">
                                        <i data-lucide="user" class="absolute left-3 top-3 w-4 h-4 text-zinc-500"></i>
                                        <input 
                                            type="text" 
                                            required
                                            class="w-full bg-zinc-900 border border-zinc-800 rounded p-3 pl-10 text-white font-mono focus:border-red-600 focus:ring-1 focus:ring-red-600 outline-none transition-all placeholder-zinc-600"
                                            placeholder="John Doe"
                                        >
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <label class="text-xs font-mono text-red-500 uppercase tracking-wider">Identity // Email</label>
                                    <div class="relative">
                                        <i data-lucide="mail" class="absolute left-3 top-3 w-4 h-4 text-zinc-500"></i>
                                        <input 
                                            type="email" 
                                            required
                                            class="w-full bg-zinc-900 border border-zinc-800 rounded p-3 pl-10 text-white font-mono focus:border-red-600 focus:ring-1 focus:ring-red-600 outline-none transition-all placeholder-zinc-600"
                                            placeholder="john@example.com"
                                        >
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="text-xs font-mono text-red-500 uppercase tracking-wider">Target Protocol</label>
                                <div class="relative">
                                    <i data-lucide="chevron-down" class="absolute right-3 top-3.5 w-4 h-4 text-zinc-500 pointer-events-none"></i>
                                    <select class="w-full bg-zinc-900 border border-zinc-800 rounded p-3 text-white font-mono focus:border-red-600 focus:ring-1 focus:ring-red-600 outline-none appearance-none cursor-pointer">
                                        <option>YouTube Long-Form Engineering</option>
                                        <option>Shorts/Reels Viral System</option>
                                        <option>Ad Creative ROAS Engine</option>
                                        <option>Generative AI Video (Beta)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="text-xs font-mono text-red-500 uppercase tracking-wider">Current Asset Link</label>
                                <div class="relative">
                                    <i data-lucide="link" class="absolute left-3 top-3 w-4 h-4 text-zinc-500"></i>
                                    <input 
                                        type="url" 
                                        class="w-full bg-zinc-900 border border-zinc-800 rounded p-3 pl-10 text-white font-mono focus:border-red-600 focus:ring-1 focus:ring-red-600 outline-none transition-all placeholder-zinc-600"
                                        placeholder="https://youtube.com/@yourchannel"
                                    >
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="text-xs font-mono text-red-500 uppercase tracking-wider">Mission Brief</label>
                                <div class="relative">
                                    <i data-lucide="file-text" class="absolute left-3 top-3 w-4 h-4 text-zinc-500"></i>
                                    <textarea 
                                        rows="4"
                                        class="w-full bg-zinc-900 border border-zinc-800 rounded p-3 pl-10 text-white font-mono focus:border-red-600 focus:ring-1 focus:ring-red-600 outline-none transition-all placeholder-zinc-600"
                                        placeholder="Describe your vision, volume, and timeline..."
                                    ></textarea>
                                </div>
                            </div>

                            <button type="submit" id="submit-btn" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-4 rounded flex items-center justify-center gap-3 transition-all hover:scale-[1.01] shadow-[0_0_20px_rgba(220,38,38,0.4)] group">
                                <span class="font-mono text-lg tracking-wide">>> INITIATE_PROJECT</span>
                                <i data-lucide="send" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                            </button>
                        </form>

                        <div id="success-state" class="hidden h-[400px] flex-col items-center justify-center text-center space-y-6 animate-fade-in">
                             
                            <div class="w-20 h-20 rounded-full bg-zinc-950 flex items-center justify-center border border-zinc-800 shadow-lg">
                                <i data-lucide="check-circle" class="w-10 h-10 text-green-500"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-white">Signal Received.</h3>
                            <p class="text-zinc-400 font-mono">Our agents are analyzing your data.<br/>Expect a transmission within 2 hours.</p>
                            <button onclick="resetForm()" class="text-red-500 hover:text-white underline font-mono text-sm transition-colors">
                                Initialize New Request
                            </button>
                        </div>

                    </div>
                </div>

                <div class="flex flex-col gap-8">
                    
                    <div class="bg-zinc-900/50 backdrop-blur border border-zinc-800 rounded-xl p-8 hover:border-red-600/50 transition-all duration-300">
                        <div class="flex items-center gap-3 mb-6">
                            <div class="w-10 h-10 rounded-full bg-zinc-800 flex items-center justify-center text-red-600">
                                <i data-lucide="calendar" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white">Skip the Queue</h3>
                                <p class="text-xs font-mono text-red-500 uppercase tracking-wider">Priority Access</p>
                            </div>
                        </div>
                        <p class="text-zinc-400 mb-6 text-sm leading-relaxed">
                            Don't want to type? Book a 15-min strategy call directly with our Lead Strategist. We'll audit your channel live.
                        </p>
                        
                        <div class="w-full h-64 bg-zinc-950 border border-dashed border-zinc-800 rounded-lg flex flex-col items-center justify-center gap-4 group cursor-pointer hover:border-red-600 transition-colors relative overflow-hidden">
                            
                            <div class="absolute inset-0 bg-black/50 hover:bg-black/40 transition-colors"></div>
                            <div class="relative z-10 w-12 h-12 rounded-full bg-zinc-800 flex items-center justify-center group-hover:bg-red-600 transition-colors">
                                <i data-lucide="arrow-right" class="w-5 h-5 text-zinc-400 group-hover:text-white"></i>
                            </div>
                            <span class="relative z-10 text-sm font-mono text-zinc-500 group-hover:text-white">Load Calendly Widget...</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="bg-zinc-900 p-4 rounded-lg border border-zinc-800 flex items-center gap-3">
                            <i data-lucide="mail" class="w-5 h-5 text-zinc-500"></i>
                            <div>
                                <p class="text-xs text-zinc-500 uppercase">General Inquiries</p>
                                <p class="text-white font-mono text-sm">hello@govidco.com</p>
                            </div>
                        </div>
                        <div class="bg-zinc-900 p-4 rounded-lg border border-zinc-800 flex items-center gap-3">
                            <i data-lucide="message-square" class="w-5 h-5 text-green-500 animate-pulse"></i>
                            <div>
                                <p class="text-xs text-zinc-500 uppercase">Support Status</p>
                                <p class="text-green-500 font-mono text-sm">Online (Avg: 5m)</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-zinc-900/50 p-4 rounded-lg border border-zinc-800 mt-2">
                        <p class="text-sm text-zinc-400">
                            <span class="text-red-500 font-bold">Are you an editor?</span> Do not use this form. 
                            <a href="career.php" class="underline ml-2 hover:text-white transition-colors">Apply via Careers Protocol.</a>
                        </p>
                    </div>

                </div>

            </div>
        </div>
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

        // 3. Form Submission Logic
        const form = document.getElementById('contact-form');
        const successState = document.getElementById('success-state');
        const submitBtn = document.getElementById('submit-btn');
        const originalBtnContent = submitBtn.innerHTML;

        form.addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Loading State
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="font-mono animate-pulse">TRANSMITTING...</span>';
            submitBtn.classList.add('opacity-75', 'cursor-not-allowed');

            // Simulate Network Request
            setTimeout(() => {
                form.classList.add('hidden');
                successState.classList.remove('hidden');
                successState.classList.add('flex');
            }, 1500);
        });

        function resetForm() {
            form.reset();
            successState.classList.add('hidden');
            successState.classList.remove('flex');
            form.classList.remove('hidden');
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalBtnContent;
            submitBtn.classList.remove('opacity-75', 'cursor-not-allowed');
        }
    </script>

<?php include 'footer.php'; ?>