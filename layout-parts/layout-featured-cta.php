<?php
$featured_cta = $args['featured_cta'];
$background = $args['background'] ? 'offwhite-bg' : 'white-bg';
if ( $background === 'white-bg' ) :
    $background_cta = 'border: 1rem solid #fff';
else :
    $background_cta = '';
endif;
?>

<section class="<?php echo $background; ?>  featured-cta">
    <div class="container">
        <div class="cta-wrap">
            <?php if ( $featured_cta ) :
                foreach ( $featured_cta as $item ) :
                ?>
                    <div class="cta" style="background-image: url(<?php echo $item['image'] ?>); <?php echo $background_cta; ?>;">
                        <div class="content">
                            <h3><?php echo $item['title'] ?></h3>
                            <p><?php echo $item['sub_title'] ?></p>
                            <a href="<?php echo $item['button_link'] ?>"
                               class="btn btn-outline-light"
                               title="<?php echo $item['button_name'] ?>">
                                <?php echo $item['button_name'] ?>
                            </a>
                        </div>
                    </div>
            <?php
                endforeach;
            endif; ?>
        </div>
    </div>
</section>
