<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mainstream_Corp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="main-content p60">
        <div class="constrain">
            <header class="entry-header">
                <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
            </header><!-- .entry-header -->
        </div>

        <div class="entry-content">
			<?php if ( get_field( 'intro_text' ) ) : ?>
			<div class="intro-text">
                <div class="constrain">
                    <?php the_field( 'intro_text' ); ?>
                </div>
            </div><!-- .intro-text -->
			<?php endif; ?>
            <div class="body-content">
                <div class="constrain flexxed">
                    <?php if ( get_field( 'default_images' ) ) : ?>
                    <div class="text">
                        <?php the_content(); ?>
                    </div>
                    <div class="default-slider">                    
                    <?php $images = get_field( 'default_images' ); ?>
                        <?php foreach ( $images as $image ) : ?>
                            <div class="default-slide">
                                <img src="<?php echo $image[ 'url' ]; ?>" alt="<?php echo $image[ 'alt' ]; ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php else : ?>
                    <div class="text full">
                        <?php the_content(); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div><!-- .body-content -->
        </section><!-- .main-content -->
    </div><!-- .entry-content -->

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
   
</article><!-- #post-<?php the_ID(); ?> -->
