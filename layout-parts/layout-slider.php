<?php
$images = $args['images'];
?>

<div class="main-bg">
    <div class="content">
        <h1><?php echo $args['title']; ?></h1>
        <h2><?php echo $args['sub_title']; ?></h2>
        <div class="text-center">
            <a href="<?php echo $args['button_link']; ?>" class="btn btn-primary" title="<?php echo $args['button_name']; ?>"><?php echo $args['button_name']; ?></a>
        </div>
    </div>
    <div class="main-slider">
        <?php if ( $images ) :
            foreach ( $images as $image ) :
            ?>
                <div>
                    <div class="slide-bg" style="background-image:url(<?php echo $image ?>);">
                        <div class="slick-slide-overlay"></div>
                    </div>
                </div>
        <?php
            endforeach;
        endif; ?>
    </div>
</div>
