<?php
/**
 * Template Name: Search
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Event_Manager
 */

use EventManager\Search\SearchRefinement;

get_header(); ?>

<div class="right_col" role="main">
	<?php get_template_part( 'template-parts/page-header' ); ?>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
			<?php get_template_part( 'template-parts/panel-header' ); ?>

            <div class="x_content">
				<?php  ?>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>


<?php get_footer(); ?>
