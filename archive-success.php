<?php
/**
 * The template for displaying success stories archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mainstream_Corp
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="main-content p60">
				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<div class="constrain">
							<h1 class="page-title">Success Stories</h1>
						</div>
					</header><!-- .page-header -->

				<div class="constrain">
					<div class="intro-text">
						<?php the_field( 'success_stories_archive_page_introduction', 'option' ); ?>
					</div>
				</div>

				<?php endif; ?>
				<div class="constrain lg">
					<div class="tab-block flexxed">
						<?php $args = array(
							'post_type' => 'success',
							'posts_per_page' => -1
							);

							$proLoop = new WP_Query( $args );
							// Get Post Count
							$itemCount = wp_count_posts( 'success' )->publish;
							
							while ( $proLoop->have_posts() ) : $proLoop->the_post(); 
						?>
							<a href="<?php the_permalink(); ?>" class="tab-block-item items-<?php echo $itemCount; ?>">
								<?php // Get image alt
									$imgID  = get_post_thumbnail_id($post->ID);
									$img    = wp_get_attachment_image_src($imgID,'full', false, ''); 
									$imgAlt = get_post_meta($imgID,'_wp_attachment_image_alt', true); ?>
								<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $imgAlt; ?>">
								<span class="overlay">
									<?php the_title(); ?>
								</span>
							</a>  

						<?php endwhile;
							wp_reset_query(); ?>
							
					</div>
				</div><!-- .constrain -->
			</section>
			<section class="block-module p60 accent-bg">
				<div class="constrain"><?php the_field( 'testimonial_heading', 'option' ); ?></div>
			</section>
			<?php if ( have_rows( 'testimonials', 'option' ) ) : ?>
			<section class="testimonials p60">
				<div class="constrain flexxed">
					<?php while ( have_rows( 'testimonials', 'option' ) ) : the_row(); ?>
						<div class="testimonial-block">
							<div class="testimonial-text">
								<?php the_sub_field( 'testimonial_text' ); ?>
							</div>
							<div class="testimonial-client">
								<?php if ( get_sub_field( 'client_name', 'option' ) ) : ?>
									<div class="client-block">
										<?php the_sub_field( 'client_name', 'option' ); ?>
									</div>
								<?php endif; ?>
								<?php if ( get_sub_field( 'client_title', 'option' ) ) : ?>
									<div class="client-block">
										<?php the_sub_field( 'client_title', 'option' ); ?>
									</div>
								<?php endif; ?>
								<?php if ( get_sub_field( 'client_company', 'option' ) ) : ?>
									<div class="client-block">
										<?php the_sub_field( 'client_company', 'option' ); ?>
									</div>
								<?php endif; ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			</section>
			<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
    <?php if ( get_field( 'cta_module_text', 'option' ) ) : ?>
        <section class="cta-contact-module p60 dkgray-bg">
            <div class="constrain lg flexxed">
                <div class="text-block">
                    <?php the_field( 'cta_module_text', 'option' ); ?> <a href="tel:<?php the_field( 'cta_module_phone_number', 'option' ); ?>"><?php the_field( 'cta_module_phone_number', 'option' ); ?></a>
                </div>
                <div class="link">
                    <a class="chevron-right white" href="<?php the_field( 'cta_module_link_url', 'option' ); ?>"><?php the_field( 'cta_module_link_text', 'option' ); ?></a>
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
