<?php
/**
 * Template part for displaying page content in homepage.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mainstream_Corp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <section class="home-slider">
        <?php if ( have_rows( 'sliders' ) ) : ?>
            <div class="slider">
                <?php while ( have_rows( 'sliders' ) ) : the_row(); ?>
                    <div class="slide flexxed">
                        <div class="slide-text">
                            <div class="slide-text-inner">
                                <p>
                                <a class="slide-text-link" href="<?php the_sub_field( 'slide_link_url' ); ?>"><?php the_sub_field( 'slide_text' ); ?></a></p>
                                <a class="slide-link" href="<?php the_sub_field( 'slide_link_url' ); ?>"><?php the_sub_field( 'slide_link_text' ); ?></a>
                            </div>
                        </div>
                        <div class="slide-image">
                            <?php $sImage = get_sub_field( 'slide_image' ); ?>
                            <img src="<?php echo $sImage[ 'url' ]; ?>" alt="<?php echo $sImage[ 'alt' ]; ?>">
                        </div>
                    </div><!-- .slide -->
                <?php endwhile; ?>
            </div><!-- .slider -->
        <?php endif; ?>
    </section><!-- .home-slider -->

	<div class="entry-content">
		<?php
		    the_content();
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
