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

		<div class="constrain lg flexxed">
			<div class="footer-block left-footer flexxed">
				<div class="footer-logo">
					<img src="<?php echo get_theme_mod( 'theme_footer_logo' ); ?>" alt="">
				</div>
				<div class="contact-info">
					<div class="street text">
						<?php echo get_theme_mod( 'theme_company_street' ); ?>
					</div>
					<div class="city text">
					<?php echo get_theme_mod( 'theme_company_city' ); ?>, <?php echo get_theme_mod( 'theme_company_state' ); ?> <?php echo get_theme_mod( 'theme_company_zip' ); ?>
					</div>
				
					<div class="phone text">
					Phone: <a href="tel:<?php echo get_theme_mod( 'theme_company_phone' ); ?>"><?php echo get_theme_mod( 'theme_company_phone' ); ?></a>
					</div>	
					<?php if ( get_theme_mod( 'theme_company_fax' ) ) : ?>
						<div class="fax text">
							Fax: <?php echo get_theme_mod( 'theme_company_fax' ); ?>
						</div>
					<?php endif; ?>

					<div class="email text">
						Email: <a href="mailto:<?php echo get_theme_mod( 'theme_company_email' ); ?>"><?php echo get_theme_mod( 'theme_company_email' ); ?></a>
					</div>
				</div>
			</div><!-- .footer-block .left-footer -->
			<div class="footer-block right-footer">
				<div class="copyright text">
					&copy; <?php echo date( 'Y' ); ?> <?php echo bloginfo( 'name' ); ?>
				</div>
				<?php if ( get_theme_mod( 'theme_privacy_policy' ) ) : ?>
					<div class="privacy text">
						<a href="<?php echo get_theme_mod( 'theme_privacy_policy' ); ?>">Privacy Statement</a>
					</div>
				<?php endif; ?>
				<?php if ( get_theme_mod( 'theme_sitemap' ) ) : ?>
					<div class="sitemap text">
						<a href="<?php echo get_theme_mod( 'theme_sitemap' ); ?>">Site Map</a>
					</div>
				<?php endif; ?>
			</div><!-- .footer-block .right-footer -->
		</div>
	
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
