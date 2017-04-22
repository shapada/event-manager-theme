<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Event_Manager
 */
?>
	<div class="main_container">
		<div class="col-md-3 left_col">
			<div class="left_col scroll-view">
				<div class="navbar nav_title" style="border: 0;">
					<a href="index.html" class="site_title">
						<i class="fa fa-calendar"></i>
						<span><?php echo get_bloginfo( 'name' ); ?></span>
					</a>
				</div>

				<div class="clearfix"></div>

				<!-- menu profile quick info -->
				<div class="profile">
					<div class="profile_pic">
						<img src="<?php echo get_avatar_url( get_current_user_id() ); ?>" class="img-circle profile_img">
					</div>
					<div class="profile_info">
						<span>Welcome,</span>
						<h2>
							<?php
								echo get_user_by( 'ID', get_current_user_id() )->display_name;
							?>
						</h2>
					</div>
				</div>
				<!-- /menu profile quick info -->

				<br/>

				<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
					<div class="menu_section">
						<?php wp_nav_menu( array(
							'theme_location' => 'primary',
							'container'      => 'ul',
							'menu_class'     => 'nav side-menu',
							'echo'           => true,
						) ); ?>
					</div>
				</div>
			</div>
		</div>
	

