<?php
$add_title = $args['add_title'];
$background_image = $args['background_image'];
?>

<section class="heading-bg" style="background-image: url(<?php if ( $background_image ) { echo $background_image; } ?>);">
    <?php if ( $add_title ) : ?>
        <div class="container">
            <?php if ( $args['title'] ) : ?>
                <h2 class="banner-title"><?php echo $args['title']; ?></h2>
            <?php else: ?>
                <h2 class="banner-title"><?php the_title(); ?></h2>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</section>
