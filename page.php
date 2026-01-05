<?php
/**
 * The template for displaying all pages
 *
 * @package GoVidCo
 */

get_header(); ?>

<main class="relative min-h-screen bg-zinc-950 pt-32 pb-20">
    
    <div class="absolute inset-0 opacity-20 bg-noise mix-blend-overlay pointer-events-none fixed"></div>

    <div class="relative z-10 max-w-4xl mx-auto px-6">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    
                    <header class="mb-12 border-b border-zinc-800 pb-8">
                        <h1 class="text-4xl md:text-5xl font-black text-white tracking-tight leading-tight">
                            <?php the_title(); ?>
                        </h1>
                    </header>

                    <div class="prose prose-lg prose-invert prose-red max-w-none text-zinc-400 leading-relaxed">
                        <?php the_content(); ?>
                    </div>

                </article>
                <?php
            endwhile;
        endif;
        ?>
    </div>
</main>

<?php get_footer(); ?>