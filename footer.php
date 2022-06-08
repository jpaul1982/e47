<footer>
    <div class="flex-grid">
        <div class="flex-item">
            <div class='logo-wrapper'>
                <img src="<?php echo get_field('site_logo', 'options')['sizes']['large']; ?>" alt="<?php echo get_field('site_logo', 'options')['alt']; ?>">
            </div>
            <p><?php echo get_field('footer_copy', 'options'); ?></p>
            <div class="small-text">
                <span>©2022 InStream, LLC. All RightsReserved.</span>
                <a href="#">Privacy Policy</a>
            </div>
        </div>
        <div class="flex-item">
            <?php $nav_menu =
                wp_nav_menu(
                    array(
                        'menu' => 'Footer Menu',
                        'theme_location'  => 'auxiliary',
                        'sort_column'      => 'menu_order',
                        'container'        => false,
                        'echo'            => '0',
                        'depth'            => 1,
                    )
                ); ?>
            <?php
            $nav_classes = 'footer-menu';
            $nav_id = "footer-nav";
            $cta = get_field('cta_button', 'options');
            include(locate_template('template-parts/nav.php', false, false));
            ?>
            <div class="contact-info">
                <div><a href="#">Contact Us</a></div>
                <div>Tel: <a href=""><?php echo get_field('company_phone', 'options'); ?></a>
                </div>
                <div>Email: <a href=""><?php echo get_field('company_email', 'options'); ?></a>
                </div>
                <div><a style="margin:0;" href="<?php echo $cta['url']; ?>" class="button"><?php echo $cta['title']; ?></a></div>
                <div class="social">
                    <p>Follow InStream</p>
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php
/*Call any footer widgets or other things pulled in at the footer hook, plus our theme JS*/
wp_footer();
?>


</body>

</html>