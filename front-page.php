<?php

/**
 * Template Name: Front Page
 */
get_header();
?>
<main>
    <?php
    if (have_rows('hero_fields_group')) :
        while (have_rows('hero_fields_group')) : the_row();
            $hero_image_url = get_sub_field('background_image');
            $hero_heading = get_sub_field('heading');
    ?>
            <section class="hero bg-image" style="--background-image:url(<?php echo $hero_image_url['sizes']['background']; ?>);">
                <div class="hero__content">
                    <h1><?php echo $hero_heading; ?></h1>
                </div>
        <?php endwhile;
    endif; ?>
            </section>
            <?php
            if (have_rows('section_first_group')) :
                while (have_rows('section_first_group')) : the_row();
                    $img = get_sub_field('section_image');
                    $heading = get_sub_field('section_heading');
                    $copy = get_sub_field('section_copy');
            ?>
                    <section class="section-first">
                        <div class="bg-design-el"></div>
                        <div class="flex-grid">
                            <div><img class='section-img' src="<?php echo $img['url']; ?>" alt=""></div>
                            <div>
                                <h3><?php echo $heading; ?></h3>
                                <?php
                                if (have_rows('section_copy')) :
                                    while (have_rows('section_copy')) : the_row();
                                        $paragraph = get_sub_field('section_paragraph');
                                ?>
                                        <p><?php echo $paragraph; ?></p>
                                <?php endwhile;
                                endif; ?>
                            </div>
                        </div>
                <?php endwhile;
            endif; ?>
                    </section>
                    <?php
                    if (have_rows('section_second_group')) :
                        while (have_rows('section_second_group')) : the_row();
                            $img = get_sub_field('section_image');
                            $heading = get_sub_field('section_heading');
                    ?>
                            <section class="section-second">
                                <div class="flex-grid">
                                    <div>
                                        <h3><?php echo $heading; ?></h3>
                                        <ul>
                                            <?php
                                            if (have_rows('section_list')) :
                                                while (have_rows('section_list')) : the_row();
                                                    $li = get_sub_field('list_item');
                                            ?>
                                                    <li><i class="fas fa-check-square"></i><?php echo $li; ?></li>
                                            <?php endwhile;
                                            endif; ?>
                                        </ul>
                                    </div>
                                    <div><img class='section-img' src="<?php echo $img['url']; ?>" alt=""></div>
                                </div>
                        <?php endwhile;
                    endif; ?>
                            </section>
                            <?php
                            if (have_rows('cta_section_group')) :
                                while (have_rows('cta_section_group')) : the_row();
                                    $bg_img = get_sub_field('background_image');
                                    $heading = get_sub_field('heading');
                                    $copy = get_sub_field('copy');
                                    $cta = get_field('cta_button', 'options');
                            ?>
                                    <section class="section-cta bg-image--cta" style="--background-image:url(<?php echo $bg_img['sizes']['background']; ?>);">
                                        <div class="cta-content-wrapper">
                                            <h2><?php echo $heading; ?></h2>
                                            <p><?php echo $copy; ?></p>
                                            <div><a href="<?php echo $cta['url']; ?>" class="button button--inverted"><?php echo $cta['title']; ?></a></div>
                                        </div>
                                        </div>
                                <?php endwhile;
                            endif; ?>
                                    </section>
</main>
<?php get_footer();
