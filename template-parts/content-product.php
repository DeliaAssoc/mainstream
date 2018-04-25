<?php
/**
 * Template part for displaying page content in single-product.php
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
                    <?php if ( get_field( 'product_images' ) ) : ?>
                    <div class="text">
                        <?php the_field( 'body_text' ); ?>
                    </div>
                    <div class="product-slider">                    
                    <?php $images = get_field( 'product_images' ); ?>
                        <?php foreach ( $images as $image ) : ?>
                            <div class="product-slide">
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
        <?php if ( get_field( 'features' ) || get_field( 'benefits' ) ) : ?>
        <section class="fandb flexxed">
            <div class="fandb-block features darkest-bg p60">
                <div class="content">
                    <h2>Features</h2>
                    <ul class="items">
                        <?php if ( have_rows( 'features' ) ) : ?>
                            <?php while ( have_rows( 'features' ) ) : the_row(); ?>
                                <li>
                                    <?php the_sub_field( 'feature' ); ?>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="fandb-block benefits accent-bg p60">
                <div class="content">
                    <h2>Benefits</h2>
                    <ul class="items">
                        <?php if ( have_rows( 'benefits' ) ) : ?>
                            <?php while ( have_rows( 'benefits' ) ) : the_row(); ?>
                                <li>
                                    <?php the_sub_field( 'benefit' ); ?>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </section><!-- .fandb -->
        <?php endif; ?>
        <?php if ( get_field( 'extra_items_listing_title' ) ) : ?>
        <section class="comp-opt-types p60">
            <div class="constrain lg">
                <h3 class="accent-text"><?php the_field( 'extra_items_listing_title' ); ?></h3>
                <div class="flexxed">
                <?php if ( have_rows( 'components_and_options' ) ) : ?>
                    <?php while ( have_rows( 'components_and_options' ) ) : the_row(); ?>

                        <div class="item-block">
                            <?php $bImage = get_sub_field( 'block_icon' ); ?>
                            <div class="block-image">
                                <img src="<?php echo $bImage[ 'url' ]; ?>" alt="<?php echo $bImage[ 'alt' ]; ?>">
                            </div>
                            <div class="block-content">
                                <h4><?php the_sub_field( 'block_title' ); ?></h4>
                                <?php if ( get_sub_field( 'block_content_type' ) == 'list' ) : ?>
                                    <ul class="block-list">
                                        <?php if ( have_rows( 'list' ) ) : ?>
                                            <?php while ( have_rows( 'list' ) ) : the_row(); ?>
                                            <li><?php the_sub_field( 'list_item' ); ?></li>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </ul><!-- .block-list -->
                                <?php else : ?>
                                    <?php the_sub_field( 'text_content' ); ?>
                                <?php endif; ?>

                            </div><!-- .block-content -->
                        </div><!-- .item-block -->

                    <?php endwhile; ?>
                <?php endif; ?>
                </div>

            </div><!-- .constrain -->
        </section><!-- .comp-opt-types -->
        <?php endif; ?>
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
