<?php
$content_block = $args['content_block'];
$background = $args['background'] ? 'offwhite-bg' : 'white-bg';
$header_color = $args['header_color'] ? 'content' : '';
?>
<section class="<?php echo $background .' '. $header_color; ?>">
    <div class="container">
        <?php
            if ( $content_block ) :
                echo $content_block;
            endif;
        ?>
    </div>
</section>