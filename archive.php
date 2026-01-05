<?php
/**
 * The template for displaying archive pages
 *
 * @package GoVidCo
 */

get_header(); ?>

<main class="relative min-h-screen bg-zinc-950 pt-32 pb-20">
    
    <div class="absolute inset-0 opacity-20 bg-noise mix-blend-overlay pointer-events-none fixed"></div>

    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <header class="text-center mb-20">
            <div class="inline-flex items-center gap-2 mb-6 px-3 py-1 rounded-full border border-zinc-800 bg-zinc-900/50 backdrop-blur-sm">
                <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
                <span class="text-xs font-mono text-zinc-400 tracking-wider">ARCHIVE PROTOCOL</span>
            </div>
            
            <h1 class="text-4xl md:text-6xl font-black text-white tracking-tight mb-4 uppercase">
                <?php the_archive_title(); ?>
            </h1>
            
            <?php if ( get_the_archive_description() ) : ?>
                <div class="text-lg text-zinc-400 max-w-2xl mx-auto font-mono">
                    <?php the_archive_description(); ?>
                </div>
            <?php endif; ?>
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
                                <i data-lucide="folder" class="w-3 h-3 text-red-500"></i>
                                <?php
                                $categories = get_the_category();
                                if ( ! empty( $categories ) ) {
                                    echo esc_html( $categories[0]->name );
                                }
                                ?>
                            </div>
                        </div>

                        <div class="p-6 flex flex-col flex-grow">
                            <div class="flex items-center gap-2 mb-3 text-xs text-zinc-500 font-mono">
                                <i data-lucide="clock" class="w-3 h-3"></i>
                                <span><?php echo esc_html( $read_time ); ?> min Read</span>
                                <span class="text-zinc-700">|</span>
                                <span class="text-red-500"><?php echo get_the_date(); ?></span>
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
                                <a href="<?php the_permalink(); ?>" class="text-zinc-500 font-mono group-hover:text-white transition-colors">Read Protocol</a>
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
                    // Note: Styling pagination generated by WordPress requires targeting .page-numbers classes in CSS or tailwind config, 
                    // or wrapping this output in a styled div.
                ) );
                ?>
            </div>

            <style>
                .pagination .page-numbers {
                    padding: 0.5rem 1rem;
                    border: 1px solid #27272a; /* border-zinc-800 */
                    background-color: #18181b; /* bg-zinc-900 */
                    color: #a1a1aa; /* text-zinc-400 */
                    border-radius: 0.375rem;
                    transition: all 0.2s;
                }
                .pagination .page-numbers:hover {
                    border-color: #dc2626; /* border-red-600 */
                    color: white;
                }
                .pagination .page-numbers.current {
                    background-color: #dc2626; /* bg-red-600 */
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

            <div class="text-center py-20">
                <i data-lucide="folder-open" class="w-16 h-16 text-zinc-800 mx-auto mb-4"></i>
                <h2 class="text-2xl font-bold text-white mb-2">No Records Found</h2>
                <p class="text-zinc-500">The requested archive does not contain any data.</p>
            </div>

        <?php endif; ?>

    </div>
</main>

<script>
    // Re-init icons for the loop content
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
</script>

<?php get_footer(); ?>