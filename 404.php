<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package GoVidCo
 */

get_header(); ?>

<main class="relative min-h-[85vh] flex items-center justify-center bg-zinc-950 overflow-hidden">
    
    <div class="absolute inset-0 opacity-20 bg-noise mix-blend-overlay pointer-events-none fixed"></div>
    
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-red-900/10 rounded-full blur-[120px] pointer-events-none animate-pulse-slow"></div>

    <div class="relative z-10 text-center px-6 max-w-2xl mx-auto">
        
        <div class="flex justify-center mb-8 relative group">
            <div class="relative">
                <i data-lucide="alert-triangle" class="w-24 h-24 text-red-600 relative z-10"></i>
                <div class="absolute inset-0 text-red-600 blur-md opacity-70 animate-pulse">
                    <i data-lucide="alert-triangle" class="w-24 h-24"></i>
                </div>
            </div>
        </div>

        <h1 class="text-7xl md:text-9xl font-black text-white tracking-tighter mb-2 leading-none select-none">
            404
        </h1>
        <h2 class="text-xl md:text-3xl font-mono text-red-500 font-bold tracking-widest mb-8 border-b border-red-900/30 inline-block pb-2 px-4">
            // SIGNAL_LOST
        </h2>

        <p class="text-zinc-300 text-lg md:text-xl mb-2 font-light">
            The trajectory you requested does not exist in this timeline.
        </p>
        <p class="text-zinc-600 font-mono text-xs mb-12">
            SYSTEM_ERROR: NULL_REFERENCE_EXCEPTION at navigation_protocol.php
        </p>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-flex items-center gap-3 bg-zinc-900 border border-red-900/50 text-white font-mono font-bold py-4 px-10 rounded hover:bg-red-600 hover:border-red-600 transition-all duration-300 shadow-[0_0_20px_rgba(220,38,38,0.1)] hover:shadow-[0_0_30px_rgba(220,38,38,0.4)] group">
            <i data-lucide="chevron-left" class="w-5 h-5 group-hover:-translate-x-1 transition-transform"></i>
            RETURN_TO_BASE
        </a>

    </div>
</main>

<script>
    // Ensure icons render on 404 page
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
</script>

<?php get_footer(); ?>