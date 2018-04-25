<?php
/**
 * Template part for displaying page content in single-success.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Mainstream_Corp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'success' ); ?>>
    <section class="main-content p60">
        <div class="constrain">
            <header class="entry-header">
                <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
            </header><!-- .entry-header -->
        </div>

        <div class="entry-content">
            <div class="intro-text">
                <div class="constrain flexxed">
                    <div class="project-text">
                        <?php the_content(); ?>
                    </div>
                    <div class="project-details">
                        <div class="flexxed">
                            <?php if ( get_field( 'project' ) ) : ?>
                            <div class="detail">
                                <h4 class="accent-text">Project</h4>
                                <?php the_field( 'project' ); ?>
                            </div>
                            <?php endif; ?>
                            <?php if ( get_field( 'location' ) ) : ?>
                            <div class="detail">
                                <h4 class="accent-text">Location</h4>
                                <?php the_field( 'location' ); ?>
                            </div>
                            <?php endif; ?>
                            <?php if ( get_field( 'product' ) ) : ?>
                            <div class="detail">
                                <h4 class="accent-text">Product</h4>
                                <?php the_field( 'product' ); ?>
                            </div>
                            <?php endif; ?>
                            <!-- <div class="detail">
                                <h4 class="accent-text">Category:</h4>
                                <?php
                                    $category = get_the_terms( $post->ID, 'category' );
                                    print_r($category);
                                ?>
                            </div> -->
                        </div>
                        <div class="detail">
                            <a href="<?php the_field( 'product_link' ); ?>" class="chevron-left">View Product</a>
                        </div>
                    </div>
                </div><!-- .constrain -->
            </div><!-- .intro-text -->

        </div><!-- .entry-content -->
    </section>
    <?php if ( get_field( 'success_images' ) ) : ?>
        <section class="success-images">
            <div class="constrain lg">
                <h2>Project Images:</h2>
            <?php $images = get_field( 'success_images' ); ?>
                <div class="success-slider">
                    <?php foreach ( $images as $image ) : ?>
                        <div class="slide">
                            <img src="<?php echo $image[ 'url' ]; ?>" alt="<?php echo $image[ 'alt' ]; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
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
