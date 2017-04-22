<div class="top_nav">
	<div class="nav_menu">
		<nav role="navigation">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<img src="<?php echo get_avatar_url( get_current_user_id() ); ?>">
							<?php echo wp_get_current_user()->display_name; ?>
						<span class=" fa fa-angle-down"></span>
					</a>
					<ul class="dropdown-menu dropdown-usermenu pull-right">
						<li>
							<a href="<?php echo admin_url( 'profile.php' ); ?>">
								Profile
							</a>
						</li>
						<li>
							<a href="<?php echo admin_url( 'options-general.php' ); ?>">
								<span>Settings</span>
							</a>
						</li>
						<li>
							<a href="<?php echo wp_logout_url(); ?>">
								<i class="fa fa-sign-out pull-right"></i> Log Out
							</a>
						</li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</div>