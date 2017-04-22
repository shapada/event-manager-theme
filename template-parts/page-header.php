<div class="page-title">
	<div class="title_left">
        <?php

            $title = get_the_title();
            if ( is_singular( 'entertainer' ) ) {
               $title = 'Entertainer Profile';
            } elseif ( is_singular( 'venue' ) ) {
                $title = 'Venue Profile';
            }

        ?>
		<h3>
            <?php echo $title; ?>
        </h3>
	</div>

	<div class="title_right">
		<?php get_template_part( 'template-parts/header-search'); ?>
	</div>
</div>

<div class="clearfix"></div>

