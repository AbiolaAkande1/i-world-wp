<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TechIT
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header">
	<div class="site-wrapper">
		<div class="header-container">
			<!-- THIS IS THE SITE LOGO -->
			<div class="site-branding">
				<?php
				the_custom_logo(); ?>
			</div>

			<!-- THIS IS THE MAIN NAVIGATION -->
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="mobile-menu" aria-expanded="false"><?php esc_html_e( '', 'techit_test' );?>
					<div class="hamburger-container" id="click">
						<span class="hamburger first"></span>
						<span class="hamburger second"></span>
						<span class="hamburger third"></span>
					</div>
				</button>
					<?php
						wp_nav_menu(
							array(
								'theme_location'    => 'mobile-menu',
								'menu_class'        => 'mobile-menu',
								'container'         => 'div',
								'container_class'   => 'mobile-list',
								'container_id'      => 'mobile-list-menu',
								'menu_id'           => 'mobile-menu',
								'items_wrap'        => '<ul class="mobile-menu">%3$s</ul>',
							)
						);
					?>
				<?php
					wp_nav_menu(
						array(
							'theme_location'    =>  'menu-1',
							'container'         =>  'div',
							'container_class'   =>  'nav-links',
							'container_id'      =>  'nav-links',
							'menu_id'           =>  'primary-menu',
							'items_wrap'        =>  '<ul>%3$s</ul>'
						)
					);
				?>			
			</nav><!-- #site-navigation -->
		</div>
	</div>
		

		
</header><!-- #masthead -->
