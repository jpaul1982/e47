<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Fly_Keystone
 */

get_header();
?>

<main>

        <div class="site-container">

            <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'e47' ); ?></h1>

            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'e47' ); ?></p>

            <?php get_search_form(); ?>


        </div>


</main>

<?php
get_footer();
