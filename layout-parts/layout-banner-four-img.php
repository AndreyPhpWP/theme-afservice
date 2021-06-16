<?php
$images = $args['images'];
$text_block = $args['text_block'];
?>

<?php if ( $images ) : ?>
    <section class="composite-banner white-bg">
        <div class="images-block">
            <?php foreach ( $images as $image ) : ?>
                <div class="image-block-wrap">
                    <div class="image-block">
                        <div class="image"  style="background-image: url(<?php echo $image['image']; ?>);"></div>
                    </div>

                    <div class="image-title"><?php echo $image['title']; ?></div>
                </div>

            <?php endforeach; ?>
        </div>
        <?php if ( $text_block ) : ?>
            <div class="text_under_banner">
                <span><?php echo $text_block; ?></span>
            </div>
        <?php endif; ?>
    </section>

<?php endif; ?>