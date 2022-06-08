<?php
/**
 * Template Name: Page
 */
get_header();
?>

    <section class="main">

        <div class="site-container">
            <h1><?php the_title(); ?></h1>
            <?php if(have_posts()): ?>

                <?php while ( have_posts() ) : ?>

                    <?php the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; ?>

            <?php endif; ?>

        </div>
    </section>


<?php
get_footer();
