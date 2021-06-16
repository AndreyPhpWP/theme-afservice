<?php
$gallery = $args['gallery'];
$background = $args['background'] ? 'offwhite-bg' : 'white-bg';
?>

<section class="<?php echo $background; ?> gallery">
    <div class="container">

        <div class="gallery-wrap">
            <?php
            if ( $gallery ) :
                foreach ( $gallery as $item ) :
                ?>
                    <div class="gallery-item">
                        <a href="<?php echo $item['url']; ?>" data-fancybox="gallery">
                            <img src="<?php echo $item['url']; ?>" alt="<?php echo $item['alt']; ?>" />
                        </a>
                    </div>
            <?php
                endforeach;
            endif; ?>
        </div>

    </div>
</section>
