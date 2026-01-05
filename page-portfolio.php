<?php 
/* Template Name: Cinematic Portfolio */ 
get_header(); 
?>

<main class="relative z-10 pt-32 pb-20 px-6 min-h-screen bg-zinc-950">
    <div class="absolute inset-0 opacity-20 bg-noise mix-blend-overlay pointer-events-none fixed"></div>
    
    <div class="max-w-7xl mx-auto relative z-10">
        
        <header class="text-center mb-20 space-y-6">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 backdrop-blur-sm">
                <span class="w-2 h-2 rounded-full bg-red-600 animate-pulse"></span>
                <span class="text-xs font-mono text-zinc-400 tracking-widest">VISUAL_DATABASE // ONLINE</span>
            </div>
            
            <h1 class="text-4xl md:text-6xl font-black text-white tracking-tight leading-tight font-sans">
                Our Work <span class="text-gradient">Protocol</span>
            </h1>
            
            <p class="text-lg text-zinc-400 max-w-2xl mx-auto font-light leading-relaxed">
                A curated selection of high-performance assets engineered for retention. 
                Data-driven creativity meets high-end production.
            </p>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

            <article class="space-y-4 group">
                <div class="flex flex-col space-y-1 mb-4">
                    <div class="flex items-center gap-2 text-red-500 font-mono text-xs tracking-widest uppercase">
                        <i data-lucide="monitor-play" class="w-4 h-4"></i>
                        <span>01 // The Flagship</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white">YouTube Long-Form</h3>
                    <p class="text-zinc-400 text-sm">Cinematic storytelling designed for maximum AVD.</p>
                </div>
                
                <div class="relative w-full rounded-xl overflow-hidden border border-zinc-800 bg-zinc-900 shadow-2xl shadow-black/50 aspect-video">
                    <iframe 
                        src="https://vimeo.com/showcase/12032619/embed2" 
                        class="absolute top-0 left-0 w-full h-full" 
                        frameborder="0" 
                        allow="autoplay; fullscreen" 
                        allowfullscreen>
                    </iframe>
                </div>
            </article>

            <article class="space-y-4 group">
                <div class="flex flex-col space-y-1 mb-4">
                    <div class="flex items-center gap-2 text-red-500 font-mono text-xs tracking-widest uppercase">
                        <i data-lucide="smartphone" class="w-4 h-4"></i>
                        <span>02 // The Viral Engine</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Shorts, Reels & TikTok</h3>
                    <p class="text-zinc-400 text-sm">Vertical hooks engineered to stop the scroll.</p>
                </div>
                
                <div class="relative w-full rounded-xl overflow-hidden border border-zinc-800 bg-zinc-900 shadow-2xl shadow-black/50 aspect-[9/16] max-w-md mx-auto lg:mx-0">
                    <iframe 
                        src="https://vimeo.com/showcase/12032633/embed2" 
                        class="absolute top-0 left-0 w-full h-full" 
                        frameborder="0" 
                        allow="autoplay; fullscreen" 
                        allowfullscreen>
                    </iframe>
                </div>
            </article>

            <article class="space-y-4 group">
                <div class="flex flex-col space-y-1 mb-4">
                    <div class="flex items-center gap-2 text-red-500 font-mono text-xs tracking-widest uppercase">
                        <i data-lucide="building-2" class="w-4 h-4"></i>
                        <span>03 // Brand Guardian</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Corporate & Business</h3>
                    <p class="text-zinc-400 text-sm">Polished assets for leadership and internal comms.</p>
                </div>
                
                <div class="relative w-full rounded-xl overflow-hidden border border-zinc-800 bg-zinc-900 shadow-2xl shadow-black/50 aspect-video">
                    <iframe 
                        src="https://vimeo.com/showcase/12029251/embed2" 
                        class="absolute top-0 left-0 w-full h-full" 
                        frameborder="0" 
                        allow="autoplay; fullscreen" 
                        allowfullscreen>
                    </iframe>
                </div>
            </article>

            <article class="space-y-4 group">
                <div class="flex flex-col space-y-1 mb-4">
                    <div class="flex items-center gap-2 text-red-500 font-mono text-xs tracking-widest uppercase">
                        <i data-lucide="target" class="w-4 h-4"></i>
                        <span>04 // ROI Generator</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Ad Creatives</h3>
                    <p class="text-zinc-400 text-sm">High-conversion VSLs and social ads.</p>
                </div>
                
                <div class="relative w-full rounded-xl overflow-hidden border border-zinc-800 bg-zinc-900 shadow-2xl shadow-black/50 aspect-video">
                    <iframe 
                        src="https://vimeo.com/showcase/12037287/embed2" 
                        class="absolute top-0 left-0 w-full h-full" 
                        frameborder="0" 
                        allow="autoplay; fullscreen" 
                        allowfullscreen>
                    </iframe>
                </div>
            </article>

            <article class="space-y-4 group">
                <div class="flex flex-col space-y-1 mb-4">
                    <div class="flex items-center gap-2 text-red-500 font-mono text-xs tracking-widest uppercase">
                        <i data-lucide="cpu" class="w-4 h-4"></i>
                        <span>05 // The Automation Engine</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Cash-Cow Faceless</h3>
                    <p class="text-zinc-400 text-sm">Scalable content pipelines without on-camera talent.</p>
                </div>
                
                <div class="relative w-full rounded-xl overflow-hidden border border-zinc-800 bg-zinc-900 shadow-2xl shadow-black/50 aspect-video">
                    <iframe 
                        src="https://vimeo.com/showcase/12037279/embed2" 
                        class="absolute top-0 left-0 w-full h-full" 
                        frameborder="0" 
                        allow="autoplay; fullscreen" 
                        allowfullscreen>
                    </iframe>
                </div>
            </article>

            <article class="space-y-4 group">
                <div class="flex flex-col space-y-1 mb-4">
                    <div class="flex items-center gap-2 text-red-500 font-mono text-xs tracking-widest uppercase">
                        <i data-lucide="mic" class="w-4 h-4"></i>
                        <span>06 // The Multiplier</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Podcast Video</h3>
                    <p class="text-zinc-400 text-sm">Multi-cam cuts and vertical clip extraction.</p>
                </div>
                
                <div class="relative w-full rounded-xl overflow-hidden border border-zinc-800 bg-zinc-900 shadow-2xl shadow-black/50 aspect-[9/16] max-w-md mx-auto lg:mx-0">
                    <iframe 
                        src="https://vimeo.com/showcase/12037284/embed2" 
                        class="absolute top-0 left-0 w-full h-full" 
                        frameborder="0" 
                        allow="autoplay; fullscreen" 
                        allowfullscreen>
                    </iframe>
                </div>
            </article>

        </div>

        <div class="mt-24 pt-12 border-t border-zinc-900 text-center">
            <p class="text-zinc-500 font-mono text-sm mb-6">SEEN ENOUGH?</p>
            <a href="<?php echo home_url('/contact'); ?>" class="inline-flex items-center gap-2 bg-white text-zinc-950 hover:bg-zinc-200 px-8 py-4 rounded-full font-bold text-lg transition-all shadow-[0_0_20px_rgba(255,255,255,0.2)]">
                INITIATE PROJECT
                <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </a>
        </div>

    </div>
</main>

<script>
    // Initialize Lucide Icons for this page
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
</script>

<?php get_footer(); ?>