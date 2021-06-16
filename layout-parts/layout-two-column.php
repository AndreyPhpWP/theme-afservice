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
        <div class="row">
            <div class="left-column col-md-6">
                <?php echo $args['left_column']; ?>
            </div>
            <div class="right-column col-md-6">
                <?php echo $args['right_column']; ?>
            </div>
        </div>
    </div>
</section>
