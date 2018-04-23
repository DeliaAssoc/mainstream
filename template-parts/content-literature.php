<?php
/**
 * Template part for displaying page content in literature-template.php
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
            <div class="intro-text">
                <div class="constrain">
                    <?php the_field( 'intro_text' ); ?>
                </div>
            </div><!-- .intro-text -->
            <div class="body-content">
                <div class="constrain flexxed">
                    <?php if ( get_field( 'media_images' ) ) : ?>
                    <div class="text">
                        <?php the_field( 'body_text' ); ?>
                    </div>
                    <div class="media-slider">                    
                    <?php $images = get_field( 'media_images' ); ?>
                        <?php foreach ( $images as $image ) : ?>
                            <div class="media-slide">
                                <img src="<?php echo $image[ 'url' ]; ?>" alt="<?php echo $image[ 'alt' ]; ?>">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php else : ?>
                    <div class="text full">
                        <?php the_field( 'body_text' ); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div><!-- .body-content -->
        </section><!-- .main-content -->
        <?php if ( get_field( 'literature_media_section_title' ) || get_field( 'literature_media_items' ) ) : ?>
            <section class="media-items">
                <div class="constrain">
                    <h2 class="page-title">
                        <?php the_field( 'literature_media_section_title' ); ?>
                    </h2>
                    <?php if ( have_rows( 'literature_media_items' ) ) : ?>
                        <div class="flexxed">
                            <!-- Get total items for flexbox styling -->
                            <?php $itemCount = count( get_field( 'literature_media_items' ) ); ?>
                            <?php while ( have_rows( 'literature_media_items' ) ) : the_row(); ?>
                                <div class="media-item items-<?php echo $itemCount; ?>">
                                    <div class="media-item-image">
                                        <?php $image = get_sub_field( 'item_image' ); ?>
                                        <img src="<?php echo $image[ 'url' ]; ?>" alt="<?php echo $image[ 'alt' ]; ?>">
                                    </div>
                                    <div class="media-item-text">
                                        <h4><?php the_sub_field( 'item_title' ); ?></h4>
                                        <div><?php the_sub_field( 'item_text' ); ?></div>
                                        <?php $file = get_sub_field( 'item_media_file' ); ?>
                                        <a traget="_blank" href="<?php echo $file[ 'url' ]; ?>" class="chevron-left">Download</a>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div><!-- .flexxed -->
                    <?php endif; ?>
                </div><!-- .constrain -->
            </section><!-- .media-items -->
        <?php endif; ?>
    </div><!-- .entry-content -->

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
   
</article><!-- #post-<?php the_ID(); ?> -->
