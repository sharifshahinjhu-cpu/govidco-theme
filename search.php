<?php
/**
 * The template for displaying search results pages
 *
 * @package GoVidCo
 */

get_header(); ?>

<main class="relative min-h-screen bg-zinc-950 pt-32 pb-20">
    
    <div class="absolute inset-0 opacity-20 bg-noise mix-blend-overlay pointer-events-none fixed"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <header class="text-center mb-16">
            <div class="inline-flex items-center gap-2 mb-6 px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 backdrop-blur-sm">
                <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
                <span class="text-xs font-mono text-zinc-400 tracking-wider">DATABASE QUERY</span>
            </div>
            
            <h1 class="text-3xl md:text-5xl font-black text-white tracking-tight mb-4">
                Results for: <span class="text-red-500 border-b-2 border-red-500/30 pb-1"><?php echo get_search_query(); ?></span>
            </h1>
            
            <p class="text-zinc-500 font-mono text-sm">
                Found <?php echo $wp_query->found_posts; ?> record(s) in the archive.
            </p>
        </header>

        <?php if ( have_posts() ) : ?>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                while ( have_posts() ) :
                    the_post();
                    
                    // Calculate Read Time
                    $word_count = str_word_count( strip_tags( get_the_content() ) );
                    $read_time  = ceil( $word_count / 200 );
                    ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'blog-card group relative bg-zinc-900 border border-zinc-800 hover:border-red-600/30 transition-all duration-300 flex flex-col h-full hover:-translate-y-1 hover:shadow-[0_0_20px_rgba(220,38,38,0.15)] rounded-xl overflow-hidden' ); ?>>
                        
                        <div class="relative h-48 overflow-hidden bg-zinc-950">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<?php the_permalink(); ?>" class="block w-full h-full">
                                    <?php the_post_thumbnail( 'medium_large', array( 'class' => 'w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700' ) ); ?>
                                </a>
                            <?php else : ?>
                                <div class="w-full h-full bg-zinc-900 flex items-center justify-center">
                                    <i data-lucide="file-text" class="w-12 h-12 text-zinc-800"></i>
                                </div>
                            <?php endif; ?>
                            
                            <div class="absolute top-3 right-3 bg-black/80 backdrop-blur text-white text-xs font-mono px-2 py-1 flex items-center gap-1 border border-zinc-700 rounded pointer-events-none">
                                <i data-lucide="hash" class="w-3 h-3 text-red-500"></i>
                                <?php echo get_post_type(); ?>
                            </div>
                        </div>

                        <div class="p-6 flex flex-col flex-grow">
                            <div class="flex items-center gap-2 mb-3 text-xs text-zinc-500 font-mono">
                                <i data-lucide="calendar" class="w-3 h-3"></i>
                                <span><?php echo get_the_date(); ?></span>
                                <?php if ( 'post' === get_post_type() ) : ?>
                                    <span class="text-zinc-700">|</span>
                                    <span><?php echo esc_html( $read_time ); ?> min read</span>
                                <?php endif; ?>
                            </div>

                            <h3 class="text-xl font-bold text-white mb-4 line-clamp-2 group-hover:text-red-500 transition-colors duration-300">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <div class="text-zinc-400 text-sm mb-4 line-clamp-3">
                                <?php the_excerpt(); ?>
                            </div>

                            <div class="mt-auto pt-4 border-t border-zinc-800 flex justify-between items-center text-sm">
                                <a href="<?php the_permalink(); ?>" class="text-zinc-500 font-mono group-hover:text-white transition-colors">View File</a>
                                <i data-lucide="chevron-right" class="w-4 h-4 text-zinc-600 group-hover:text-red-500 transform group-hover:translate-x-1 transition-all"></i>
                            </div>
                        </div>

                    </article>

                <?php endwhile; ?>
            </div>

            <div class="mt-20 flex justify-center">
                <?php
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => '<span class="flex items-center gap-2"><i data-lucide="chevron-left" class="w-4 h-4"></i> Prev</span>',
                    'next_text' => '<span class="flex items-center gap-2">Next <i data-lucide="chevron-right" class="w-4 h-4"></i></span>',
                    'class'     => 'flex gap-2 font-mono text-sm',
                ) );
                ?>
            </div>

            <style>
                .pagination .page-numbers {
                    padding: 0.5rem 1rem;
                    border: 1px solid #27272a;
                    background-color: #18181b;
                    color: #a1a1aa;
                    border-radius: 0.375rem;
                    transition: all 0.2s;
                }
                .pagination .page-numbers:hover {
                    border-color: #dc2626;
                    color: white;
                }
                .pagination .page-numbers.current {
                    background-color: #dc2626;
                    border-color: #dc2626;
                    color: white;
                }
                .pagination .nav-links {
                    display: flex;
                    gap: 0.5rem;
                    justify-content: center;
                }
            </style>

        <?php else : ?>

            <div class="max-w-2xl mx-auto text-center py-20">
                <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-zinc-900 border border-zinc-800 mb-8 relative group">
                    <i data-lucide="search-x" class="w-10 h-10 text-zinc-500 group-hover:text-red-500 transition-colors"></i>
                    <div class="absolute inset-0 border border-red-600/20 rounded-full animate-ping opacity-20"></div>
                </div>
                
                <h2 class="text-3xl font-bold text-white mb-4">DATA NOT FOUND</h2>
                <p class="text-zinc-400 mb-10 font-light">
                    The requested signal returned zero packets. Adjust your search parameters or return to base.
                </p>

                <form role="search" method="get" class="relative max-w-md mx-auto" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i data-lucide="terminal" class="w-5 h-5 text-red-600"></i>
                    </div>
                    <input 
                        type="search" 
                        class="w-full bg-zinc-900 border border-zinc-700 text-white pl-12 pr-12 py-4 rounded-lg font-mono focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600 transition-all placeholder-zinc-600" 
                        placeholder="Try a new query..." 
                        value="<?php echo get_search_query(); ?>" 
                        name="s"
                    >
                    <button type="submit" class="absolute inset-y-0 right-0 pr-4 flex items-center text-zinc-500 hover:text-white transition-colors">
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </button>
                </form>

                <div class="mt-12">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-sm font-mono text-zinc-500 hover:text-red-500 transition-colors underline decoration-zinc-700 hover:decoration-red-500">
                        RETURN_TO_HOME_PROTOCOL
                    </a>
                </div>
            </div>

        <?php endif; ?>

    </div>
</main>

<script>
    // Ensure icons render correctly
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
</script>

<?php get_footer(); ?>