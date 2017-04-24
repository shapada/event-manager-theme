<div class="x_title">
    <?php
        $title = '';
        if ( is_front_page() ) {
            $title = the_title();
        } elseif ( is_page( 'entertainers' ) || is_page( 'venues' ) ) {
            $title = the_title( 'All ' );
        } elseif ( is_search() ) {
            $title = 'Search Results';
        } elseif ( is_singular( 'entertainer' ) ) {
            $title = the_title( 'Entertainer Profile: ' );
        } elseif ( is_singular( 'venue' ) ) {
	        $title = the_title( 'Venue Profile: ' );
        }
    ?>
    <h2><?php echo $title; ?></h2>
    <div class="clearfix"></div>
</div>