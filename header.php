<?php
/**
  * @package eyalb
  * header.php
  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if( is_singular() && pings_open( get_queried_object() ) ) { ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php } ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="site-wrapper">
		<header id="header" class="site_header">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<?php
                            $logoPct = esc_attr( get_option( 'logo' ) );
                            if ( @$logoPct ) {
                        ?>
                            <div class="csseco_logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                                    <img class="csseco_logo_img" src="<?php print $logoPct; ?>" alt="Logo" />
                                </a>
                            </div>
                        <?php
                            }
                        ?>
						
					</div>
				</div>
			</div>
			<div id="header-menu">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<nav class="navbar navbar-expand-lg csseco_navbar">
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
									<i class="fas fa-bars"></i>
								</button>
								<?php
									wp_nav_menu( array( 
										'theme_location'        =>      'primary',
										'menu_class'			=>		'navbar-nav ',
										'container'             =>      'div',
										'container_class'		=>		'collapse navbar-collapse csseco_nav_wrapper',
										'container_id'			=>		'navbarNavDropdown'
									) );
								?>
								<i class="fas fa-search csseco_search_show_btn"></i>
								<?php
									get_search_form();
								?>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header><!-- /#header -->
		<div id="primary" class="content-area">
			<div class="container">
				<div class="row">
				
				
	