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
                                <a class="chevron-left" href="<?php the_sub_field( 'slide_link_url' ); ?>"><?php the_sub_field( 'slide_link_text' ); ?></a>
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

    <section class="tabbed-links p60">
        <div class="constrain lg">
            <div class="tabs flexxed">
                <a href="#" data-ref="products">Products</a>
                <a href="#" data-ref="success">Success Stories</a>
            </div>
        </div><!-- . constrain -->
        <div class="constrain lg">
            <div class="tab-content">
                <div id="product" class="tab-block flexxed">
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
                    
                </div>
                <div id="success" class="tab-block flexxed">
                    <?php $args = array(
                        'post_type' => 'success_stories',
                        'posts_per_page' => -1
                        );

                        $proLoop = new WP_Query( $args );
                        // Get Post Count
                        $itemCount = wp_count_posts( 'success_stories' )->publish;
                        
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
            </div><!-- .tabbed-content -->
        </div><!-- .contrain .flexxed -->
    </section><!-- .tabbed-links -->

    <section class="home intro-text p60 ltgray-bg">
        <div class="constrain lg flexxed">
            <div class="intro-text-block">
                <h3><?php the_field( 'homepage_introduction_title_column_1' ); ?></h3>
                <div class="text">
                    <?php the_field( 'homepage_introduction_text_column_1' ); ?>
                </div>
            </div>
            <div class="intro-text-block">
                <h3><?php the_field( 'homepage_introduction_title_column_2' ); ?></h3>
                <div class="text">
                    <?php the_field( 'homepage_introduction_text_column_2' ); ?>
                </div>
            </div>
    </section>

    <?php if ( have_rows( 'product_category_items' ) ) : ?>

        <section class="what-we-do p60">
            <div class="constrain lg flexxed">
                <div class="intro">
                    <div class="title"><?php the_field( 'product_category_section_title' ); ?></div>
                    <a href="<?php the_field( 'product_category_sublink_text_url' ); ?>" class="subtitle"><?php the_field( 'product_category_sublink_text' ); ?></a>
                </div>
                <div class="category-items flexxed">
                    <?php while ( have_rows( 'product_category_items' ) ) : the_row(); ?>
                        <a class="category-item" href="<?php the_sub_field( 'category_url' ); ?>">
                            <?php $icon = get_sub_field( 'category_icon' ); ?>
                            <img src="<?php echo $icon[ 'url' ]; ?>" alt="<?php echo $icon[ 'alt' ]; ?>">
                            <h4 class="category-title"><?php the_sub_field( 'category_title' ); ?></h4>
                            <div class="category-link">Read More</div>
                        </a>
                    <?php endwhile; ?>
                </div>
            </div><!-- .constrain .flexxed -->
        </section><!-- .what-we-do -->

    <?php endif; ?>

    <section class="block-module cta-block accent-bg p60">
        <div class="constrain">
            <?php the_field( 'module_text', 'option' ); ?>
        </div>
    </section><!-- .cta-module -->

</article><!-- #post-<?php the_ID(); ?> -->
