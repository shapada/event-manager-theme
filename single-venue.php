<?php
get_header(); ?>

    <div class="right_col" role="main">
		<?php get_template_part( 'template-parts/page-header' ); ?>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
				<?php get_template_part( 'template-parts/panel-header' ); ?>

                <div class="x_content">

                    <div class="col-md-3 col-sm-3 col-xs-12 profile_left">

                        <img class="img-responsive" src="<?php echo get_field( 'image' )['url']; ?>">

                        <h3><?php the_title(); ?></h3>

	                    <?php
                            $venue_type = get_the_terms( get_the_ID(), 'venue_type' );
	                        $venue_location = get_the_terms( get_the_ID(), 'venue_location')
	                    ?>
                        <ul class="list-unstyled user_data">
                            <li>Type: <?php echo "{$venue_type[0]->name}"; ?></li>
                            <li>Location: <?php echo "{$venue_location[0]->name}"; ?></li>
                        </ul>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                        <div class="profile_title">
                            <div class="col-md-6">
                                <h2>About the Venue</h2>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <p><?php echo get_field( 'description' ); ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

<?php get_footer(); ?>