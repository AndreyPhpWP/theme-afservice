<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AF_Services
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#ffce00"/>
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="author" content="">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="magic_cover" class="modal-backdrop fade in" style="cursor: pointer; display: none;"></div>

<nav class="navbar navbar-expand-md <?php if ( is_front_page() ) : ?>overlay-nav<?php endif; ?>">
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php the_field( 'logo_image', 'option' ); ?>" alt="<?php bloginfo( 'name' ); ?>" />
    </a>
    <div class="navbar-wrap">
        <?php
        if ( has_nav_menu('main_menu') ) {
            wp_nav_menu(
                array(
                    'theme_location' => 'main_menu',
                    'container' => false,
                    'items_wrap' => '<ul id="%1$s" class="nav ml-auto %2$s">%3$s</ul>',
                )
            );
        }
        ?>
        <button class="toggle-menu menu-left ml-auto" role="button" type="button"><i class="far fa-bars"></i></button>
    </div>
</nav>

<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php the_field( 'logo_image', 'option' ); ?>" alt="<?php bloginfo( 'name' ); ?>" />
    </a>
    <?php
    if ( has_nav_menu('main_menu') ) {
        wp_nav_menu(
            array(
                'theme_location' => 'main_menu',
                'container' => false,
                'items_wrap' => '<ul id="%1$s" class="nav ml-auto %2$s">%3$s</ul>',
            )
        );
    }
    ?>
</nav>

