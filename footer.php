<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AF_Services
 */

?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg links">
                <?php
                if ( has_nav_menu('main_menu') ) {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'main_menu',
                            'container' => false,
                            'items_wrap' => '<ul id="%1$s" class="footerlinks %2$s">%3$s</ul>',
                        )
                    );
                }
                ?>
                <?php
                if ( has_nav_menu('footer_menu_social_links') ) {
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer_menu_social_links',
                            'container' => false,
                            'items_wrap' => '<ul id="%1$s" class="social %2$s">%3$s</ul>',
                        )
                    );
                }
                ?>
            </div>
            <div class="col-lg address">
                <p><strong><?php the_field( 'name_company', 'option' ); ?></strong><br>
                    <?php the_field( 'address_company', 'option' ); ?><br>
                    Tel: <a href="tel:+16302790500" title="Call Us"><?php the_field( 'telephone_number', 'option' ); ?></a> | Fax: <?php the_field( 'fax_number', 'option' ); ?><br>
                    E-mail: <a href="mailto:<?php the_field( 'email', 'option' ); ?>" title="Email Us"><?php the_field( 'email', 'option' ); ?></a></p>
            </div>
        </div>
        <div class="copyright">
            &copy; <?php echo date('Y');?> <?php bloginfo( 'name' ); ?>. All Rights Reserved. <a title="web design company" href="http://www.dreamcodesign.com">Web Design Company</a> - <a title="dreamco design" href="http://www.dreamcodesign.com">DreamCo Design</a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
