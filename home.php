<?php
/**
 * Template Name: Blog
 */
get_header();
?>
    <main>
        <div class="site-container">
            <h1>Blog</h1>
        </div>
        <div class="site-container">

            <?php

                if(have_posts()): ?>

                <ul class="unstyled">



                <?php while ( have_posts() ) : ?>

                <?php the_post(); ?>

                <li>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                </li>

                <?php endwhile; ?>

                </ul>
                <?php endif; ?>
            <?php wp_reset_postdata(); ?>

        </div>
    </main>

<?php
get_footer();