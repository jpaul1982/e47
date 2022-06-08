<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fly_Keystone
 */

get_header();
?>
    <main>
        <div class="site-container">
            <h1><?php the_archive_title(''); ?></h1>
        </div>

        <?php get_template_part('template-parts/loop'); ?>
    </main>

<?php
get_footer();
