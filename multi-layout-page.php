<?php
/**
 * Template Name: Multi-layout Page
 */

get_header();

if ( have_rows('layouts') ) :

    $page_and_post_sections = get_field( 'layouts' );

    foreach ($page_and_post_sections as $section) :

        switch ( $section['acf_fc_layout'] ) :
            case 'slider':
                get_template_part( 'layout-parts/layout', 'slider', $section );
                break;
            case 'banner_four_img':
                get_template_part( 'layout-parts/layout', 'banner-four-img', $section);
                break;
            case 'welcome_block':
                get_template_part( 'layout-parts/layout', 'welcome-block', $section );
                break;
            case 'layout_featured_cta':
                get_template_part( 'layout-parts/layout', 'featured-cta', $section );
                break;
            case 'banner':
                get_template_part( 'layout-parts/layout', 'banner', $section );
                break;
            case 'big_title_multi_column':
                get_template_part( 'layout-parts/layout', 'big-title-multi-column', $section );
                break;
            case 'layout_gallery':
                get_template_part( 'layout-parts/layout', 'gallery', $section );
                break;
            case 'three_column_block':
                get_template_part( 'layout-parts/layout', 'three-column', $section );
                break;
            case 'two_column_block':
                get_template_part( 'layout-parts/layout', 'two-column', $section );
                break;
            case 'content_block':
                get_template_part( 'layout-parts/layout', 'content-block', $section );
                break;
        endswitch;

    endforeach;
endif;

get_footer();

