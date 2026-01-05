<?php
/**
 * The main template file / Blog Page Template for GoVidCo.
 * This file has been updated to use the custom Blog Insights Hub layout and fix infinite scrolling.
 */

get_header(); 
?>

<div class="blog-page-template py-16">
    <div class="container mx-auto px-6 md:px-8">

        <section id="blog-hero" class="text-center pt-10 pb-16">
            <header class="page-header mb-8">
                <h1 class="page-title text-shadow-neon-red text-5xl sm:text-6xl font-extrabold mb-4">
                    The Global Hub for Video Strategy & Viral Insights
                </h1>
                <p class="text-xl text-go-purple max-w-4xl mx-auto font-medium mb-4">
                    Stay ahead of the curve with expert analysis on B2B video, creator growth, and post-production secrets.
                </p>
            </header>
        </section>

        <div class="glass bg-white/3 backdrop-blur-xl border border-go-red rounded-3xl p-6 md:p-12 my-16 main-content-plate max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                <div class="lg:col-span-2 space-y-12">
                    
                    <section id="content-search" class="pb-8 border-b border-go-cyan/20 text-center">
                        <div class="inline-block mx-auto px-8 py-3 bg-go-dark/50 backdrop-blur-md rounded-2xl border border-go-red mb-4 mt-4" style="box-shadow: 0 0 15px rgba(255, 0, 102, 0.4), inset 0 0 5px rgba(255, 0, 102, 0.2);">
                             <h2 class="text-3xl font-bold text-center text-go-text !mb-0">Explore Our Knowledge Base</h2>
                        </div>

                        <div>
                            <input type="search" placeholder="Search articles, strategies, or insights..." class="w-full p-4 bg-go-dark/50 border border-go-cyan/50 text-go-text rounded-full focus:outline-none focus:border-go-red focus:shadow-[0_0_10px_#FF0066] transition-all duration-300 shadow-[0_0_10px_rgba(3,216,243,0.5)]">
                        </div>

                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 text-center mt-6">
                            <a href="#" class="p-3 text-sm font-semibold text-go-cyan border border-go-cyan/50 rounded-lg hover:bg-go-cyan/10 transition-colors duration-300 shadow-[0_0_8px_rgba(3,216,243,0.5)]">B2B Strategy</a>
                            <a href="#" class="p-3 text-sm font-semibold text-go-cyan border border-go-cyan/50 rounded-lg hover:bg-go-cyan/10 transition-colors duration-300 shadow-[0_0_8px_rgba(3,216,243,0.5)]">Creator Growth</a>
                            <a href="#" class="p-3 text-sm font-semibold text-go-cyan border border-go-cyan/50 rounded-lg hover:bg-go-cyan/10 transition-colors duration-300 shadow-[0_0_8px_rgba(3,216,243,0.5)]">Technical Insights</a>
                            <a href="#" class="p-3 text-sm font-semibold text-go-cyan border border-go-cyan/50 rounded-lg hover:bg-go-cyan/10 transition-colors duration-300 shadow-[0_0_8px_rgba(3,216,243,0.5)]">Case Studies</a>
                        </div>
                    </section>
                    
                    <section id="featured-content" class="bg-go-dark/50 p-6 md:p-8 rounded-xl border border-go-red/50 shadow-[0_0_20px_rgba(255,0,51,0.2)] card-cyan-glow">
                        <p class="text-sm font-bold uppercase text-go-cyan mb-3">🔥 Editor's Pick: Long-Form Deep Dive</p>
                        <h3 class="text-4xl font-extrabold text-go-text mb-4 leading-tight">
                            How GoVidCo’s 24/7 Global Model Cut Production Costs by 40% for Enterprise Clients.
                        </h3>
                        <p class="text-base text-go-purple mb-6">
                            A comprehensive look at our operational efficiency, automation tools (Trello, Zapier), and the secret to leveraging time zones for non-stop editing cycles.
                        </p>
                        <a href="#" class="inline-block px-6 py-3 bg-go-red text-white font-semibold rounded-full hover:shadow-[0_0_20px_#FF0066] transition-all duration-300">
                            Read Full Analysis &raquo;
                        </a>
                    </section>

                    <section id="article-grid">
                        <h3 class="text-3xl font-bold text-go-cyan mb-8 text-left border-b border-go-cyan/20 pb-3">All Latest Articles</h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <?php 
                            // Start a new query to display only 6 posts on the blog index page
                            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                            $args = array(
                                'posts_per_page' => 6, // Show only 6 posts per page
                                'paged' => $paged,
                            );
                            $blog_query = new WP_Query( $args );

                            if ( $blog_query->have_posts() ) :
                                while ( $blog_query->have_posts() ) : $blog_query->the_post();
                                    $category = get_the_category() ? get_the_category()[0]->name : 'GoVidCo Insight';
                            ?>
                            <article class="bg-go-dark/50 rounded-xl overflow-hidden filter-card card-cyan-glow h-full flex flex-col justify-between hover:scale-[1.01] transition-transform duration-300">
                                <div class="p-5">
                                    <div class="h-40 bg-go-dark/70 border border-go-red/30 flex items-center justify-center mb-4 rounded-lg">
                                        <span class="text-go-purple/70">Thumbnail Placeholder</span>
                                    </div>
                                    <p class="text-xs font-semibold uppercase text-go-red mb-1"><?php echo esc_html($category); ?></p>
                                    <h4 class="text-xl font-bold text-go-text mb-2"><?php the_title(); ?></h4>
                                    <p class="text-sm text-go-purple/80"><?php echo get_the_excerpt(); ?></p>
                                </div>
                                <div class="mt-auto p-5 pt-0">
                                    <a href="<?php the_permalink(); ?>" class="text-go-cyan font-semibold hover:text-go-red transition-colors duration-300">Continue Reading &raquo;</a>
                                </div>
                            </article>
                            <?php 
                                endwhile;
                            else :
                                // Display placeholders if no posts are found
                                for ($i = 1; $i <= 4; $i++): ?>
                                    <article class="bg-go-dark/50 rounded-xl overflow-hidden filter-card card-cyan-glow h-full flex flex-col justify-between hover:scale-[1.01] transition-transform duration-300">
                                        <div class="p-5">
                                            <div class="h-40 bg-go-dark/70 border border-go-red/30 flex items-center justify-center mb-4 rounded-lg">
                                                <span class="text-go-purple/70">Thumbnail Placeholder <?php echo $i; ?></span>
                                            </div>
                                            <p class="text-xs font-semibold uppercase text-go-red mb-1">Technical Insights</p>
                                            <h4 class="text-xl font-bold text-go-text mb-2">Mastering DaVinci Resolve’s Fusion Page for Cinematic Neon Effects.</h4>
                                            <p class="text-sm text-go-purple/80">A step-by-step tutorial on applying our signature Crimson Flux style to any footage.</p>
                                        </div>
                                        <div class="mt-auto p-5 pt-0">
                                            <a href="#" class="text-go-cyan font-semibold hover:text-go-red transition-colors duration-300">Continue Reading &raquo;</a>
                                        </div>
                                    </article>
                                <?php endfor; 
                            endif;
                            wp_reset_postdata(); // Restore original Post Data
                            ?>
                        </div>
                        
                        <div class="text-center mt-12">
                            <?php 
                            // Pagination / Load More
                            if ( $blog_query->max_num_pages > 1 ) : ?>
                                <a href="<?php echo get_next_posts_page_link( $blog_query->max_num_pages ); ?>" class="px-8 py-3 border-2 border-go-red text-go-red font-semibold rounded-full hover:bg-go-red/10 transition-all duration-300">Load More Articles &raquo;</a>
                            <?php else: ?>
                                <a href="#" class="px-8 py-3 border-2 border-go-red text-go-red font-semibold rounded-full opacity-50 cursor-not-allowed">No More Articles</a>
                            <?php endif; ?>
                        </div>
                    </section>
                </div>
                
                <div class="lg:col-span-1 space-y-12">
                    
                    <section id="lead-magnets" class="bg-go-dark/50 p-6 rounded-xl border border-go-cyan/50 space-y-6 card-cyan-glow">
                        <h3 class="text-2xl font-bold text-go-cyan mb-4 text-center border-b border-go-red/30 pb-3">GoVidCo Special Assets</h3>
                        
                        <div class="p-4 bg-go-dark/70 rounded-lg border border-go-red/50 text-center">
                            <p class="text-lg font-extrabold text-go-red mb-2">B2B Video ROI Calculator</p>
                            <p class="text-sm text-go-purple/80 mb-3">Predict your content's financial impact. (Gated)</p>
                            <a href="#" class="text-go-cyan font-semibold hover:text-go-red transition-colors duration-300">Download Tool &raquo;</a>
                        </div>
                        
                        <div class="p-4 bg-go-dark/70 rounded-lg border border-go-red/50 text-center">
                            <p class="text-lg font-extrabold text-go-red mb-2">Short-Form Hook Script Templates</p>
                            <p class="text-sm text-go-purple/80 mb-3">Start your Reels/TikToks with viral hooks. (Gated)</p>
                            <a href="#" class="text-go-cyan font-semibold hover:text-go-red transition-colors duration-300">Get Templates &raquo;</a>
                        </div>
                        
                        <div class="p-4 bg-go-dark/70 rounded-lg border border-go-red/50 text-center">
                            <p class="text-lg font-extrabold text-go-red mb-2">GoVidCo Whitepaper / Agency Profile</p>
                            <p class="text-sm text-go-purple/80 mb-3">Our full service offering and automation secrets.</p>
                            <a href="#" class="text-go-cyan font-semibold hover:text-go-red transition-colors duration-300">Download Whitepaper &raquo;</a>
                        </div>
                    </section>

                    <section id="subscribe-form" class="bg-go-dark/50 p-6 rounded-xl border border-go-cyan/50 card-cyan-glow">
                        <h3 class="text-2xl font-bold text-go-cyan mb-4 text-center">Get Viral Insights</h3>
                        <p class="text-sm text-go-purple/80 mb-4 text-center">Subscribe for weekly strategies directly to your inbox.</p>
                        
                        <form action="#" method="POST" class="space-y-4">
                            <input type="email" placeholder="Your Work Email" required class="w-full p-3 bg-go-dark/70 border border-go-cyan/50 text-go-text rounded-lg focus:outline-none focus:border-go-red focus:shadow-[0_0_5px_#FF0066] transition-all duration-300">
                            <button type="submit" class="w-full py-3 bg-go-red text-white font-semibold rounded-lg hover:shadow-[0_0_15px_#FF0066] transition-all duration-300">
                                Subscribe Now
                            </button>
                        </form>
                        <p class="text-xs text-go-purple/70 mt-3 text-center">We value your privacy. No spam, ever.</p>
                    </section>

                </div>
            </div>
        </div>
        
    </div>
</div>

<?php get_footer(); ?>