<?php
$background = $args['background'] ? 'offwhite-bg' : 'white-bg';
?>

<section class="<?php echo $background; ?> content">
    <div class="container">
        <?php if ( $args['title'] ) : ?>
            <h2 class="mb-4"><?php echo $args['title']; ?></h2>
        <?php endif; ?>
        <?php
            if ( $args['full_width_block'] ) :
                echo $args['full_width_block'];
            endif;
        ?>
        <div class="multi-column mb-4">
            <?php
            if ( $args['lock_of_three_columns'] ) :
                echo $args['lock_of_three_columns'];
            endif;
            ?>
        </div>

    </div>
</section>