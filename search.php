<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package AF_Services
 */

get_header();
?>


    <section class="white-bg">
        <div class="container">
            <div class="row">
                <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                    <div class="col-md-8">
                    <?php
                    else: ?>
                    <div class="col-md-12">
                        <?php
                    endif;
                ?>
                    <?php if ( have_posts() ) : ?>

                        <header class="page-header">
                            <h1 class="page-title">
                                <?php
                                /* translators: %s: search query. */
                                printf( esc_html__( 'Search Results for: %s', 'afservices' ), '<span>' . get_search_query() . '</span>' );
                                ?>
                            </h1>
                        </header><!-- .page-header -->

                        <?php
                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();

                            /**
                             * Run the loop for the search to output the results.
                             * If you want to overload this in a child theme then include a file
                             * called content-search.php and that will be used instead.
                             */
                            get_template_part( 'template-parts/content', 'search' );

                        endwhile;

                        the_posts_navigation();

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif;
                    ?>
                    </div>
                <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                    <div class="col-md-4">
                        <?php
                        get_sidebar();
                        ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>



<?php

get_footer();
