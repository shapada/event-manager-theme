<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Event_Manager
 */

// if ( ! is_active_sidebar( 'left-navigation' ) ) {
// 	return;
// }
?>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-calendar-o"></i> <span><?php echo get_bloginfo( 'name' ); ?></span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="<?php echo get_avatar_url( 1 ); ?>" class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2><?php 
                $current_user = get_user_by( 'ID', 1 ); 
                echo get_user_by( 'ID', 1 )->display_name;
              ?>
                
              </h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
            <!--<div class="menu_section">

              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Dashboard <span class="fa fa-chevron-down"></span></a></li>
                  <li><a><i class="fa fa-male" aria-hidden="true"></i> Entertainers <span class="fa fa-chevron-down"></span></a></li>
                  <li><a><i class="fa fa-calendar" aria-hidden="true"></i> Event Calendar <span class="fa fa-chevron-down"></span></a></li>
                  <li><a><i class="fa fa-tasks" aria-hidden="true"></i> Upcoming Events <span class="fa fa-chevron-down"></span></a></li>
                  <li class="active"><a><i class="fa fa-building" aria-hidden="true"></i> Venues <span class="fa fa-chevron-down"></span></a></li>
              </ul>
            </div>

            </div>
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section">
			        <?php wp_nav_menu( array(
				        'theme_location' => 'primary',
				        'container' 	 => 'ul',
				        'menu_class'     => 'nav side-menu',
				        'echo'           => true,
			        )); ?>
                </div>
            </div>
          </div>
            <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="<?php echo get_avatar_url( get_current_user_id() ); ?>" alt=""><?php echo wp_get_current_user()->display_name; ?>
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu pull-right">
                  <li><a href="<?php echo admin_url( 'profile.php' ); ?>"> Profile</a></li>
                  <li>
                      <a href="<?php echo admin_url( 'options-general.php' ); ?>">
                      <span>Settings</span>
                    </a>
                  </li>
                  <li><a href="<?php  echo wp_logout_url(); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                  <li>
                    <a>
                      <span class="image"><img src="<?php echo get_avatar_url( 2 ); ?>" alt="Profile Image" /></span>
                      <span>
                        <span><?php echo get_user_by( 'ID', 2 )->display_name; ?></span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Lamias sunt castors de albus vortex. Sunt lactaes contactus fortis, salvus plasmatores.                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="<?php echo get_avatar_url( 3 ); ?>" alt="Profile Image" /></span>
                      <span>
                        <span><?php echo get_user_by( 'ID', 3 )->display_name; ?></span>
                        <span class="time">1 day ago</span>
                      </span>
                      <span class="message">
                        Clabulare de azureus abactor, captis visus! Tus de brevis adiurator, tractare valebat.
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="<?php echo get_avatar_url( 4 ); ?>" alt="Profile Image" /></span>
                      <span>
                        <span><?php echo get_user_by( 'ID', 4 )->display_name; ?></span>
                        <span class="time">3 days ago</span>
                      </span>
                      <span class="message">
                        Heu, alter nuclear vexatum iacere! Velox, mirabilis bubos solite magicae de ferox, regius bromium.
                      </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image"><img src="<?php echo get_avatar_url( 1 ); ?>" alt="Profile Image" /></span>
                      <span>
                        <span><?php echo get_user_by( 'ID', 1 )->display_name; ?></span>
                        <span class="time">1 week ago</span>
                      </span>
                      <span class="message">
                        Flavum, talis devatios grauiter demitto de emeritis, ferox silva. Medicina azureus absolutio est.
                      </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a>
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->
