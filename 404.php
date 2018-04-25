<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Mainstream_Corp
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found p60">
				<div class="constrain">
				<header class="page-header">
					<h1 class="page-title">Looks like that page is not here! <span class="accent-text">Would you like to see something else?</span></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					CHECK OUT THESE LINKS:</br>
					<h3 class="link-404"><a href="/"><span class="accent-text">Home</span> Page</a></h3><h3 	class="link-404"><a href="/contact/">Contact <span class="accent-text">Us</span></a></h3>
					<?php
					get_search_form();
					?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php if ( get_field( 'cta_module_text', 'option' ) ) : ?>
        <section class="cta-contact-module p60 dkgray-bg">
            <div class="constrain lg flexxed">
                <div class="text-block">
                    <?php the_field( 'cta_module_text', 'option' ); ?> <a href="tel:<?php the_field( 'cta_module_phone_number', 'option' ); ?>"><?php the_field( 'cta_module_phone_number', 'option' ); ?></a>
                </div>
                <div class="link">
                    <a class="chevron-right white" href="<?php the_field( 'cta_module_link_text', 'option' ); ?>"><?php the_field( 'cta_module_link_text', 'option' ); ?></a>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ( get_field( 'module_text', 'option' ) ) : ?>
        <section class="block-module cta-block accent-bg p60">
            <div class="constrain">
                <?php the_field( 'module_text', 'option' ); ?>
            </div>
        </section><!-- .cta-module -->
    <?php endif; ?>
<?php
get_footer();
