<?php

use EventManager\Venues\VenuesRefinement;

$refinement = new VenuesRefinement();
$refinement->register();

get_header(); ?>
s
    <div class="right_col" role="main">
		<?php get_template_part( 'template-parts/page-header' ); ?>

        <div class="clearfix"></div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
				<?php get_template_part( 'template-parts/panel-header' ); ?>

                <div class="x_content">
					<?php $refinement->render_data_table(); ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>