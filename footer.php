<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Mainstream_Corp
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer p60">

		<div class="constrain lg">
			<div class="address">
				<div class="street text">
					<?php echo get_theme_mod( 'theme_company_street' ); ?>
				</div>
				<div class="text">
				<?php echo get_theme_mod( 'theme_company_city' ); ?>, <?php echo get_theme_mod( 'theme_company_state' ); ?> <?php echo get_theme_mod( 'theme_company_zip' ); ?>
				</div>
			</div>
			
			<div class="contact">
				<div class="phone text">
				Phone: <a href="tel:<?php echo get_theme_mod( 'theme_company_phone' ); ?>"><?php echo get_theme_mod( 'theme_company_phone' ); ?></a>
				</div>	
				<?php if ( get_theme_mod( 'theme_company_fax' ) ) : ?>
					<div class="fax text">
						Fax: <?php echo get_theme_mod( 'theme_company_fax' ); ?>
					</div>
				<?php endif; ?>
			</div>

			<div class="copyright">
				&copy; <?php echo date( 'Y' ); ?> <?php echo bloginfo( 'name' ); ?> All Rights Reserved.
			</div>
		</div>
	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
