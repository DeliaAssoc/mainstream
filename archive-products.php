<?php
/**
 * The template for displaying products archive pages
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

				<header class="page-header">
					<div class="constrain">
						<h1 class="page-title">Products</h1>
					</div>
				</header><!-- .page-header -->

				<div class="constrain">
					<div class="intro-text">
						<?php the_field( 'products_archive_page_introduction', 'option' ); ?>
					</div>
				</div>

				<div class="constrain lg">
					<div class="tab-block flexxed">
						<?php $args = array(
							'post_type' => 'products',
							'posts_per_page' => -1
							);

							$proLoop = new WP_Query( $args );
							// Get Post Count
							$itemCount = wp_count_posts( 'products' )->publish;
							
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
							
					</div><!-- .constrain -->
				</section><!-- .main-content -->
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();