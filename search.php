<?php
/*
Template Name: Site Search
*/
?>
<?php
get_header(); ?>


    <main>
        <div class="site-container narrow">

                    <h1>Search</h1>
					<?php get_search_form(); ?>

					<?php if(get_search_query()): ?>

						<?php while(have_posts()): ?>

							<?php the_post(); ?>
                            <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

						<?php endwhile; ?>

					<?php endif; ?>

        </div>




    </main>


<?php get_footer();