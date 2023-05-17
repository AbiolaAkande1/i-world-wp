<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TechIT
 */

?>

 <!-- THIS IS THE FOOTER SECTION  -->
	<footer id="colophon" class="footer-section">
		<div class="footer-holder">
			<!-- This is the First Footer Links-->
			<div class="footer-links1">
				<h2><?php echo get_theme_mod( 'footer_menu_link_1' )?></h2>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu-1',
							'container'      => '',
							'before'      => '<p>',
							'after'      => '</p>',
							'items_wrap'     => '<span>%3$s</span>',
						)
					);
				?> 
			</div>

			<!-- This is the Footer Sales Line-->
			<div class="footer-sales-line">
				<h4><?php echo get_theme_mod( 'footer_sales_heading')?></h4>
				<?php echo get_theme_mod( 'footer_sales_hotles' )?>
			</div>

			<!-- This is the Second Footer Links-->
			<div class="footer-links2">
				<h2><?php echo get_theme_mod( 'footer_menu_link_2' )?></h2>
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu-2',
							'container'      => '',
							'before'      => '<p>',
							'after'      => '</p>',
							'items_wrap'     => '<span>%3$s</span>',
						)
					);
				?> 
			</div>

			<!-- This is the Footer Address-->
			<div class="footer-office-address">
				<span>
					<p><?php echo get_theme_mod( 'footer_address_text' )?></p>
				</span>
			</div>

			<!-- This is the Footer Social Links-->
			<div class="footer-socials">
				<div class="footer-icons-content">
					<h4><?php echo get_theme_mod( 'footer_social_icon')?></h4>

					<!-- Displaying the Social Media Icons with if Statements-->
					<div class="footer-icons">
						<!-- if statement for Footer Social Links 1-->
						<span>
							<?php if(!empty(get_theme_mod('footer_social_link1')) ){ ?>
							<a href="<?php echo get_theme_mod( 'footer_social_link1' ); ?>"><img src="wp-content/themes/techit_test/assets/icons/social-icon1.png" alt=""></a>
							<?php } ?>
						</span>

						<!-- if statement for Footer Social Links 2 -->
						<span>
							<?php if(!empty(get_theme_mod('footer_social_link2')) ){ ?>
							<a href="<?php echo get_theme_mod( 'footer_social_link2' ); ?>"><img src="wp-content/themes/techit_test/assets/icons/social-icon2.png" alt=""></a>
							<?php } ?>
						</span>
							
						<!-- if statement for Footer Social Links 3-->
						<span>
							<?php if(!empty(get_theme_mod('footer_social_link3')) ){ ?>
							<a href="<?php echo get_theme_mod( 'footer_social_link3' ); ?>"><img src="wp-content/themes/techit_test/assets/icons/social-icon3.png" alt=""></a>
							<?php } ?>
						</span>
					</div>
				</div>

				<!-- This is the Footer Copywright Text-->
				<div class="footer-copywright">
					<p><?php echo get_theme_mod( 'footer_copywright' )?></p>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
