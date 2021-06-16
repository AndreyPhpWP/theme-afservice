<?php

$big_title_and_content = $args['big_title_and_content'];
$simple_content_block = $args['simple_content_block'];
$multi_column_block = $args['multi_column_block'];
$background = $args['background'] ? 'offwhite-bg' : 'white-bg';

?>
<section class="<?php echo $background; ?> content">
	<div class="container">
        <?php if ( $big_title_and_content ) : ?>
            <h1 class="big-title"><?php echo $big_title_and_content['title_bt']; ?></h1>

            <h2 class="mb-4"><?php echo $big_title_and_content['sub_title_bt']; ?></h2>
            <?php echo $big_title_and_content['content_bt']; ?>
        <?php endif; ?>
		&nbsp;
        <?php if ( $simple_content_block ) : ?>
            <h2 class="mb-4"><?php echo $simple_content_block['title_sb']; ?></h2>
            <?php echo $simple_content_block['content_sb']; ?>
        <?php endif; ?>
        <?php if ( $multi_column_block ) : ?>
            <div class="multi-column mb-4">
                <?php echo $multi_column_block['multi-column']; ?>
            </div>
        <?php endif; ?>
	</div>
</section>