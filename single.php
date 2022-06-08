<?php
get_header();
?>
    <main>
        <section class="main">
            <h1><?php the_title(); ?></h1>
            <div class="site-container">

				<?php if(have_posts()): ?>

					<?php while ( have_posts() ) : ?>

						<?php the_post(); ?>

						<?php the_content(); ?>

					<?php endwhile; ?>

				<?php endif; ?>


            </div>
        </section>

    </main>

<?php
get_footer();