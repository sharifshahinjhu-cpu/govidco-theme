<?php include 'header.php'; ?>

    <div id="preloader" class="fixed inset-0 z-[100] bg-black flex items-center justify-center flex-col transition-opacity duration-700">
        <div class="text-5xl font-black text-white tracking-tighter animate-pulse mb-4">
            GO<span class="text-red-600">VID</span>CO
        </div>
        <div class="text-red-500 font-mono text-sm">
            Loading Knowledge Base...
        </div>
    </div>

    <main class="relative z-10 pt-32 pb-20 px-4 md:px-8 min-h-screen bg-zinc-950">
        <div class="absolute inset-0 opacity-20 bg-noise mix-blend-overlay pointer-events-none fixed"></div>
        
        <div class="max-w-4xl mx-auto space-y-8 relative z-10">
            
            <header class="space-y-6 border-b border-zinc-800 pb-8">
                <div class="space-y-2">
                    <h1 class="text-3xl md:text-4xl font-mono font-bold text-white tracking-tight">
                        <span class="text-red-600 mr-2">&gt;</span>
                        Protocol Knowledge Base
                    </h1>
                    <p class="text-zinc-500 font-mono text-sm md:text-base pl-6">
                        // Answers regarding turnaround, technical specs, and billing.
                    </p>
                </div>

                <div class="relative group">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <span class="text-red-600 font-mono animate-pulse">&gt;</span>
                    </div>
                    <input 
                        type="text" 
                        id="faq-search"
                        placeholder="Search query..." 
                        class="w-full bg-zinc-900/50 border border-zinc-800 text-zinc-200 pl-10 pr-4 py-4 rounded-lg font-mono focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600 transition-all placeholder-zinc-600"
                    >
                    <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none text-zinc-600">
                        <i data-lucide="search" class="w-5 h-5"></i>
                    </div>
                </div>
            </header>

            <nav class="flex flex-wrap gap-2 md:gap-4 font-mono text-sm" id="category-tabs">
                <button data-category="general" class="tab-btn active flex items-center gap-2 px-4 py-2 rounded border transition-all duration-300 bg-red-600/10 border-red-600 text-red-500 shadow-[0_0_10px_rgba(220,38,38,0.2)]">
                    <i data-lucide="layers" class="w-4 h-4"></i>
                    <span>[GENERAL]</span>
                </button>
                <button data-category="pricing" class="tab-btn flex items-center gap-2 px-4 py-2 rounded border transition-all duration-300 bg-transparent border-zinc-800 text-zinc-500 hover:border-zinc-600 hover:text-zinc-300">
                    <i data-lucide="dollar-sign" class="w-4 h-4"></i>
                    <span>[PRICING]</span>
                </button>
                <button data-category="technical" class="tab-btn flex items-center gap-2 px-4 py-2 rounded border transition-all duration-300 bg-transparent border-zinc-800 text-zinc-500 hover:border-zinc-600 hover:text-zinc-300">
                    <i data-lucide="terminal" class="w-4 h-4"></i>
                    <span>[TECHNICAL]</span>
                </button>
                <button data-category="ai-services" class="tab-btn flex items-center gap-2 px-4 py-2 rounded border transition-all duration-300 bg-transparent border-zinc-800 text-zinc-500 hover:border-zinc-600 hover:text-zinc-300">
                    <i data-lucide="cpu" class="w-4 h-4"></i>
                    <span>[AI-SERVICES]</span>
                </button>
            </nav>

            <div id="faq-list" class="space-y-4 min-h-[300px]">
                
                <div class="faq-item group cursor-pointer rounded-lg border border-zinc-800 bg-zinc-900/30 hover:border-zinc-700 transition-all duration-300 overflow-hidden" data-category="general">
                    <div class="faq-header flex items-center justify-between p-5">
                        <h3 class="font-medium text-lg text-zinc-400 group-hover:text-zinc-200 transition-colors">What is the turnaround time?</h3>
                        <div class="icon-wrapper text-zinc-600 transition-transform duration-300">
                            <i data-lucide="plus" class="w-5 h-5"></i>
                        </div>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-inner p-5 pt-0 text-zinc-400 leading-relaxed border-t border-zinc-800/50">
                            <span class="text-red-500 font-mono mr-2 text-xs">OUTPUT >></span>
                            Standard turnaround is 24-48 hours for typical requests. For Enterprise tier clients, we offer same-day priority processing.
                        </div>
                    </div>
                </div>

                <div class="faq-item group cursor-pointer rounded-lg border border-zinc-800 bg-zinc-900/30 hover:border-zinc-700 transition-all duration-300 overflow-hidden" data-category="general">
                    <div class="faq-header flex items-center justify-between p-5">
                        <h3 class="font-medium text-lg text-zinc-400 group-hover:text-zinc-200 transition-colors">How do revisions work?</h3>
                        <div class="icon-wrapper text-zinc-600 transition-transform duration-300">
                            <i data-lucide="plus" class="w-5 h-5"></i>
                        </div>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-inner p-5 pt-0 text-zinc-400 leading-relaxed border-t border-zinc-800/50">
                            <span class="text-red-500 font-mono mr-2 text-xs">OUTPUT >></span>
                            We offer unlimited revisions via our direct Frame.io integration. Simply leave comments on the timeline, and the system automatically generates a revision ticket.
                        </div>
                    </div>
                </div>

                <div class="faq-item hidden group cursor-pointer rounded-lg border border-zinc-800 bg-zinc-900/30 hover:border-zinc-700 transition-all duration-300 overflow-hidden" data-category="pricing">
                    <div class="faq-header flex items-center justify-between p-5">
                        <h3 class="font-medium text-lg text-zinc-400 group-hover:text-zinc-200 transition-colors">Do you offer refunds?</h3>
                        <div class="icon-wrapper text-zinc-600 transition-transform duration-300">
                            <i data-lucide="plus" class="w-5 h-5"></i>
                        </div>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-inner p-5 pt-0 text-zinc-400 leading-relaxed border-t border-zinc-800/50">
                            <span class="text-red-500 font-mono mr-2 text-xs">OUTPUT >></span>
                            Yes, we offer a 14-day 100% money-back guarantee if the initial output does not meet the agreed-upon technical specifications.
                        </div>
                    </div>
                </div>

                <div class="faq-item hidden group cursor-pointer rounded-lg border border-zinc-800 bg-zinc-900/30 hover:border-zinc-700 transition-all duration-300 overflow-hidden" data-category="pricing">
                    <div class="faq-header flex items-center justify-between p-5">
                        <h3 class="font-medium text-lg text-zinc-400 group-hover:text-zinc-200 transition-colors">Do I own the project files?</h3>
                        <div class="icon-wrapper text-zinc-600 transition-transform duration-300">
                            <i data-lucide="plus" class="w-5 h-5"></i>
                        </div>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-inner p-5 pt-0 text-zinc-400 leading-relaxed border-t border-zinc-800/50">
                            <span class="text-red-500 font-mono mr-2 text-xs">OUTPUT >></span>
                            Yes, upon final payment, you own 100% of the Intellectual Property (IP) and all source files included in the delivery package.
                        </div>
                    </div>
                </div>

                <div class="faq-item hidden group cursor-pointer rounded-lg border border-zinc-800 bg-zinc-900/30 hover:border-zinc-700 transition-all duration-300 overflow-hidden" data-category="technical">
                    <div class="faq-header flex items-center justify-between p-5">
                        <h3 class="font-medium text-lg text-zinc-400 group-hover:text-zinc-200 transition-colors">What format are the final deliverables?</h3>
                        <div class="icon-wrapper text-zinc-600 transition-transform duration-300">
                            <i data-lucide="plus" class="w-5 h-5"></i>
                        </div>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-inner p-5 pt-0 text-zinc-400 leading-relaxed border-t border-zinc-800/50">
                            <span class="text-red-500 font-mono mr-2 text-xs">OUTPUT >></span>
                            We deliver in all standard industry formats including ProRes 422, H.264, and RAW source where applicable. Custom encoding profiles can be set in your dashboard.
                        </div>
                    </div>
                </div>

                <div class="faq-item hidden group cursor-pointer rounded-lg border border-zinc-800 bg-zinc-900/30 hover:border-zinc-700 transition-all duration-300 overflow-hidden" data-category="technical">
                    <div class="faq-header flex items-center justify-between p-5">
                        <h3 class="font-medium text-lg text-zinc-400 group-hover:text-zinc-200 transition-colors">Is the API documentation public?</h3>
                        <div class="icon-wrapper text-zinc-600 transition-transform duration-300">
                            <i data-lucide="plus" class="w-5 h-5"></i>
                        </div>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-inner p-5 pt-0 text-zinc-400 leading-relaxed border-t border-zinc-800/50">
                            <span class="text-red-500 font-mono mr-2 text-xs">OUTPUT >></span>
                            Yes, our REST API documentation is available at /docs. You can generate sandbox keys in the settings terminal to test integration before going live.
                        </div>
                    </div>
                </div>

                <div class="faq-item hidden group cursor-pointer rounded-lg border border-zinc-800 bg-zinc-900/30 hover:border-zinc-700 transition-all duration-300 overflow-hidden" data-category="ai-services">
                    <div class="faq-header flex items-center justify-between p-5">
                        <h3 class="font-medium text-lg text-zinc-400 group-hover:text-zinc-200 transition-colors">How is data privacy handled for AI models?</h3>
                        <div class="icon-wrapper text-zinc-600 transition-transform duration-300">
                            <i data-lucide="plus" class="w-5 h-5"></i>
                        </div>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-inner p-5 pt-0 text-zinc-400 leading-relaxed border-t border-zinc-800/50">
                            <span class="text-red-500 font-mono mr-2 text-xs">OUTPUT >></span>
                            We utilize isolated container environments. Your data is never used to train our base models and is wiped from the inference cache immediately after processing.
                        </div>
                    </div>
                </div>

                <div class="faq-item hidden group cursor-pointer rounded-lg border border-zinc-800 bg-zinc-900/30 hover:border-zinc-700 transition-all duration-300 overflow-hidden" data-category="ai-services">
                    <div class="faq-header flex items-center justify-between p-5">
                        <h3 class="font-medium text-lg text-zinc-400 group-hover:text-zinc-200 transition-colors">Can I bring my own fine-tuned model?</h3>
                        <div class="icon-wrapper text-zinc-600 transition-transform duration-300">
                            <i data-lucide="plus" class="w-5 h-5"></i>
                        </div>
                    </div>
                    <div class="accordion-content">
                        <div class="accordion-inner p-5 pt-0 text-zinc-400 leading-relaxed border-t border-zinc-800/50">
                            <span class="text-red-500 font-mono mr-2 text-xs">OUTPUT >></span>
                            Enterprise plans support BYOM (Bring Your Own Model). We currently support LoRA adapters and full checkpoints for Stable Diffusion and Llama architectures.
                        </div>
                    </div>
                </div>

                <div id="no-results" class="hidden flex-col items-center justify-center h-40 text-zinc-600 font-mono border border-dashed border-zinc-800 rounded-lg">
                    <i data-lucide="shield-alert" class="w-8 h-8 mb-2 opacity-50"></i>
                    <p>NO DATA FOUND FOR QUERY</p>
                </div>

            </div>

            <footer class="mt-12 pt-8 border-t border-zinc-800 flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="flex items-start gap-4">
                    <div class="p-3 rounded bg-red-900/10 text-red-500">
                        <i data-lucide="shield-alert" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <h4 class="text-white font-mono font-bold">System Error? / Question Not Found?</h4>
                        <p class="text-sm text-zinc-500 mt-1 max-w-md">
                            If the automated knowledge base could not resolve your query, initialize a manual override protocol.
                        </p>
                    </div>
                </div>
                
                <a href="contact.php" class="flex items-center gap-2 bg-red-600 hover:bg-red-700 text-white font-mono font-bold py-3 px-6 rounded shadow-[0_0_20px_rgba(220,38,38,0.4)] hover:shadow-[0_0_30px_rgba(220,38,38,0.6)] transition-all transform hover:-translate-y-0.5 active:translate-y-0">
                    <i data-lucide="message-square" class="w-5 h-5"></i>
                    <span>OPEN_TICKET</span>
                </a>
            </footer>

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
            }, 500);
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

        // 3. FAQ Logic (Tabs + Search + Accordion)
        const tabs = document.querySelectorAll('.tab-btn');
        const faqItems = document.querySelectorAll('.faq-item');
        const searchInput = document.getElementById('faq-search');
        const noResults = document.getElementById('no-results');
        
        let currentCategory = 'general';
        let searchQuery = '';

        // Tab Switching
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Update styling
                tabs.forEach(t => {
                    t.classList.remove('active', 'bg-red-600/10', 'border-red-600', 'text-red-500', 'shadow-[0_0_10px_rgba(220,38,38,0.2)]');
                    t.classList.add('bg-transparent', 'border-zinc-800', 'text-zinc-500', 'hover:border-zinc-600', 'hover:text-zinc-300');
                });
                tab.classList.remove('bg-transparent', 'border-zinc-800', 'text-zinc-500', 'hover:border-zinc-600', 'hover:text-zinc-300');
                tab.classList.add('active', 'bg-red-600/10', 'border-red-600', 'text-red-500', 'shadow-[0_0_10px_rgba(220,38,38,0.2)]');
                
                // Update Logic
                currentCategory = tab.getAttribute('data-category');
                filterFAQs();
                closeAllAccordions();
            });
        });

        // Search
        searchInput.addEventListener('input', (e) => {
            searchQuery = e.target.value.toLowerCase();
            filterFAQs();
        });

        function filterFAQs() {
            let visibleCount = 0;
            faqItems.forEach(item => {
                const itemCat = item.getAttribute('data-category');
                const text = item.innerText.toLowerCase();
                
                // Check if matches category AND search
                const matchesCat = (itemCat === currentCategory);
                const matchesSearch = text.includes(searchQuery);

                if (matchesCat && matchesSearch) {
                    item.classList.remove('hidden');
                    visibleCount++;
                } else {
                    item.classList.add('hidden');
                }
            });

            if (visibleCount === 0) {
                noResults.classList.remove('hidden');
                noResults.classList.add('flex');
            } else {
                noResults.classList.add('hidden');
                noResults.classList.remove('flex');
            }
        }

        // Accordion Logic
        document.querySelectorAll('.faq-header').forEach(header => {
            header.addEventListener('click', () => {
                const parent = header.parentElement;
                const content = parent.querySelector('.accordion-content');
                const icon = header.querySelector('.icon-wrapper');
                const title = header.querySelector('h3');

                const isOpen = content.classList.contains('open');

                // Close all others first
                closeAllAccordions();

                // Toggle current if it wasn't open
                if (!isOpen) {
                    content.classList.add('open');
                    parent.classList.remove('bg-zinc-900/30', 'border-zinc-800');
                    parent.classList.add('bg-zinc-900/80', 'border-red-600', 'shadow-[0_0_15px_rgba(220,38,38,0.15)]');
                    title.classList.replace('text-zinc-400', 'text-white');
                    icon.classList.add('rotate-180', 'text-red-600');
                    // Change Plus to Minus visually (optional, rotating + usually works)
                }
            });
        });

        function closeAllAccordions() {
            faqItems.forEach(item => {
                const content = item.querySelector('.accordion-content');
                const icon = item.querySelector('.icon-wrapper');
                const title = item.querySelector('h3');

                content.classList.remove('open');
                item.classList.add('bg-zinc-900/30', 'border-zinc-800');
                item.classList.remove('bg-zinc-900/80', 'border-red-600', 'shadow-[0_0_15px_rgba(220,38,38,0.15)]');
                title.classList.replace('text-white', 'text-zinc-400');
                icon.classList.remove('rotate-180', 'text-red-600');
            });
        }
    </script>

<?php include 'footer.php'; ?>