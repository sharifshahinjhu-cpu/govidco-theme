<?php include 'header.php'; ?>

<?php while ( have_posts() ) : the_post(); ?>

    <div class="relative w-full h-[60vh] min-h-[500px] flex items-end justify-center bg-zinc-900 overflow-hidden">
        
        <div class="absolute inset-0 z-0">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover opacity-60']); ?>
            <?php else : ?>
                <div class="w-full h-full bg-gradient-to-br from-zinc-900 via-zinc-950 to-red-950 opacity-50"></div>
            <?php endif; ?>
            <div class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-zinc-950/80 to-transparent"></div>
            <div class="absolute inset-0 opacity-20 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0IiBoZWlnaHQ9IjQiPgo8cmVjdCB3aWR0aD0iNCIgaGVpZ2h0PSI0IiBmaWxsPSIjZmZmIiBmaWxsLW9wYWNpdHk9IjAuMDUiLz4KPC9zdmc+')]"></div>
        </div>

        <div class="relative z-10 w-full max-w-7xl mx-auto px-6 pb-16 md:pb-24">
            <div class="flex flex-wrap items-center gap-4 mb-6 text-sm font-mono tracking-wider text-zinc-400">
                <span class="flex items-center gap-2">
                    <i data-lucide="calendar" class="w-4 h-4 text-red-600"></i>
                    <?php echo get_the_date(); ?>
                </span>
                <span class="w-1 h-1 rounded-full bg-zinc-600"></span>
                <span class="flex items-center gap-2">
                    <i data-lucide="folder" class="w-4 h-4 text-red-600"></i>
                    <?php 
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) {
                        echo esc_html( $categories[0]->name );   
                    }
                    ?>
                </span>
                <span class="w-1 h-1 rounded-full bg-zinc-600"></span>
                <span class="flex items-center gap-2 text-white">
                    <i data-lucide="user" class="w-4 h-4 text-red-600"></i>
                    <?php the_author(); ?>
                </span>
            </div>

            <h1 class="text-4xl md:text-6xl font-black text-white tracking-tight leading-tight max-w-4xl drop-shadow-2xl">
                <?php the_title(); ?>
            </h1>
        </div>
    </div>

    <main class="relative bg-zinc-950 px-6 py-16 md:py-24">
        <div class="absolute inset-0 opacity-20 pointer-events-none bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMDAiIGhlaWdodD0iMjAwIj48ZmlsdGVyIGlkPSJub2lzZUZpbHRlciI+PGZlVHVyYnVsZW5jZSB0eXBlPSJmcmFjdGFsTm9pc2UiIGJhc2VGcmVxdWVuY3k9IjAuNjUiIG51bU9jdGF2ZXM9IjMiIHN0aXRjaFRpbGVzPSJzdGl0Y2giLz48L2ZpbHRlcj48cmVjdCB3aWR0aD0iMTAwJSIgaGVpZ2h0PSIxMDAlIiBmaWx0ZXI9InVybCgjbm9pc2VGaWx0ZXIpIiBvcGFjaXR5PSIwLjA1Ii8+PC9zdmc+')]"></div>

        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-24 relative z-10">
            
            <article class="lg:col-span-8">
                
                <div class="prose prose-lg prose-invert max-w-none 
                    prose-headings:font-bold prose-headings:text-white prose-headings:tracking-tight 
                    prose-h2:text-3xl prose-h2:mt-12 prose-h2:mb-6 prose-h2:border-b prose-h2:border-zinc-800 prose-h2:pb-2 
                    prose-h3:text-2xl prose-h3:text-zinc-100 prose-h3:mt-8 
                    prose-p:text-zinc-300 prose-p:leading-relaxed prose-p:mb-6 
                    prose-a:text-red-500 prose-a:no-underline hover:prose-a:text-red-400 hover:prose-a:underline 
                    prose-blockquote:border-l-4 prose-blockquote:border-red-600 prose-blockquote:bg-zinc-900/30 prose-blockquote:py-2 prose-blockquote:px-6 prose-blockquote:italic prose-blockquote:text-zinc-200 prose-blockquote:rounded-r-lg
                    prose-img:rounded-xl prose-img:shadow-2xl prose-img:border prose-img:border-zinc-800
                    prose-strong:text-white prose-code:text-red-400 prose-code:bg-zinc-900 prose-code:px-1 prose-code:py-0.5 prose-code:rounded prose-code:font-mono">
                    
                    <?php the_content(); ?>

                </div>

                <div class="mt-16 pt-8 border-t border-zinc-800">
                    <h4 class="text-zinc-500 font-mono text-xs uppercase tracking-widest mb-4">Share Protocol</h4>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-zinc-900 border border-zinc-800 flex items-center justify-center text-zinc-400 hover:text-white hover:border-red-600 hover:bg-red-600 transition-all duration-300">
                            <i data-lucide="twitter" class="w-4 h-4"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-zinc-900 border border-zinc-800 flex items-center justify-center text-zinc-400 hover:text-white hover:border-blue-600 hover:bg-blue-600 transition-all duration-300">
                            <i data-lucide="linkedin" class="w-4 h-4"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-zinc-900 border border-zinc-800 flex items-center justify-center text-zinc-400 hover:text-white hover:border-blue-500 hover:bg-blue-500 transition-all duration-300">
                            <i data-lucide="facebook" class="w-4 h-4"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-zinc-900 border border-zinc-800 flex items-center justify-center text-zinc-400 hover:text-white hover:border-zinc-600 hover:bg-zinc-800 transition-all duration-300">
                            <i data-lucide="link" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>

                <nav class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <?php 
                    $prev_post = get_previous_post();
                    if($prev_post): 
                    ?>
                    <a href="<?php echo get_permalink($prev_post->ID); ?>" class="group p-6 rounded-xl border border-zinc-800 bg-zinc-900/30 hover:border-red-600/30 hover:bg-zinc-900 transition-all duration-300">
                        <div class="flex items-center gap-2 text-zinc-500 text-xs font-mono mb-2 group-hover:text-red-500 transition-colors">
                            <i data-lucide="arrow-left" class="w-3 h-3"></i> PREVIOUS_TRANSMISSION
                        </div>
                        <h4 class="text-white font-bold group-hover:underline decoration-zinc-700 underline-offset-4 line-clamp-1">
                            <?php echo esc_html($prev_post->post_title); ?>
                        </h4>
                    </a>
                    <?php endif; ?>

                    <?php 
                    $next_post = get_next_post();
                    if($next_post): 
                    ?>
                    <a href="<?php echo get_permalink($next_post->ID); ?>" class="group p-6 rounded-xl border border-zinc-800 bg-zinc-900/30 hover:border-red-600/30 hover:bg-zinc-900 transition-all duration-300 text-right">
                        <div class="flex items-center justify-end gap-2 text-zinc-500 text-xs font-mono mb-2 group-hover:text-red-500 transition-colors">
                            NEXT_TRANSMISSION <i data-lucide="arrow-right" class="w-3 h-3"></i>
                        </div>
                        <h4 class="text-white font-bold group-hover:underline decoration-zinc-700 underline-offset-4 line-clamp-1">
                            <?php echo esc_html($next_post->post_title); ?>
                        </h4>
                    </a>
                    <?php endif; ?>
                </nav>

            </article>

            <aside class="lg:col-span-4 space-y-12">
                
                <div class="bg-zinc-900/50 border border-zinc-800 rounded-xl p-6 backdrop-blur-sm">
                    <h3 class="text-zinc-500 text-xs font-mono uppercase tracking-widest mb-6 border-b border-zinc-800 pb-2">About The Author</h3>
                    <div class="flex items-start gap-4">
                        <div class="flex-shrink-0">
                            <?php echo get_avatar( get_the_author_meta( 'ID' ), 64, '', '', array( 'class' => 'rounded-full border-2 border-zinc-800' ) ); ?>
                        </div>
                        <div>
                            <h4 class="text-white font-bold text-lg mb-1"><?php the_author(); ?></h4>
                            <p class="text-zinc-400 text-sm leading-relaxed mb-3">
                                <?php echo get_the_author_meta('description') ? get_the_author_meta('description') : 'Content strategist and visual engineer at GoVidCo.'; ?>
                            </p>
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="text-red-500 text-xs font-bold hover:text-white transition-colors uppercase tracking-wide">
                                View Intelligence File &rarr;
                            </a>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="text-zinc-500 text-xs font-mono uppercase tracking-widest mb-6 border-b border-zinc-800 pb-2">Recent Transmissions</h3>
                    <ul class="space-y-4">
                        <?php
                        $recent_posts = wp_get_recent_posts(array(
                            'numberposts' => 4,
                            'post_status' => 'publish',
                            'exclude'     => get_the_ID() // Exclude current post
                        ));
                        foreach($recent_posts as $post_item) : ?>
                            <li>
                                <a href="<?php echo get_permalink($post_item['ID']); ?>" class="group block">
                                    <h4 class="text-zinc-300 font-medium group-hover:text-red-500 transition-colors line-clamp-2">
                                        <?php echo $post_item['post_title']; ?>
                                    </h4>
                                    <span class="text-zinc-600 text-xs font-mono mt-1 block group-hover:text-zinc-500">
                                        <?php echo get_the_date('M j, Y', $post_item['ID']); ?>
                                    </span>
                                </a>
                            </li>
                        <?php endforeach; wp_reset_query(); ?>
                    </ul>
                </div>

                <div>
                    <h3 class="text-zinc-500 text-xs font-mono uppercase tracking-widest mb-6 border-b border-zinc-800 pb-2">Data Clusters</h3>
                    <div class="flex flex-wrap gap-2">
                        <?php
                        $categories = get_categories();
                        foreach($categories as $category) {
                            echo '<a href="' . get_category_link($category->term_id) . '" class="px-3 py-1.5 bg-zinc-900 border border-zinc-800 rounded text-xs text-zinc-400 hover:text-white hover:border-red-600 hover:bg-red-600/10 transition-all duration-300">';
                            echo $category->name . ' <span class="text-zinc-600 ml-1">(' . $category->count . ')</span>';
                            echo '</a>';
                        }
                        ?>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-xl bg-gradient-to-br from-red-900/20 to-zinc-900 border border-red-900/30 p-6 text-center">
                    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI0IiBoZWlnaHQ9IjQiPgo8cmVjdCB3aWR0aD0iMSIgaGVpZ2h0PSIxIiBmaWxsPSIjZmMwMDAwIiBmaWxsLW9wYWNpdHk9IjAuMSIvPjwvc3ZnPg==')] opacity-30"></div>
                    <i data-lucide="zap" class="w-8 h-8 text-red-500 mx-auto mb-3"></i>
                    <h4 class="text-white font-bold text-lg mb-2">Need Viral Output?</h4>
                    <p class="text-zinc-400 text-sm mb-6">Deploy our team of editors today.</p>
                    <a href="<?php echo home_url('/pricing'); ?>" class="block w-full py-3 bg-red-600 hover:bg-red-700 text-white font-bold text-sm rounded shadow-lg shadow-red-900/20 transition-all">
                        INITIATE PROJECT
                    </a>
                </div>

            </aside>

        </div>
    </main>

<?php endwhile; ?>
<script>
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
</script>

<?php include 'footer.php'; ?>