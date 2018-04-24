<?php
/**
 * Template part for displaying page content in contact-template.php
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
    <section class="form-info">
        <div class="constrain flexxed">
            <aside class="contact flexxed">
                <div class="gmap">
                    <?php echo get_theme_mod( 'theme_company_gmap' ); ?>
                </div>
                <div class="contact-blocks">
                    <div class="contact-block address">
                        <h4>Address:</h4>
                        <div class="item">
                            <?php echo bloginfo( 'name' ); ?>
                        </div>
                        <div class="item">
                            <?php echo get_theme_mod( 'theme_company_street' ); ?>
                        </div>
                        <div class="item">
                            <?php echo get_theme_mod( 'theme_company_city' ); ?>, <?php echo get_theme_mod( 'theme_company_state' ); ?> <?php echo get_theme_mod( 'theme_company_zip' ); ?>
                        </div>
                    </div>
                    <div class="contact-block phones">
                        <h4>Phones:</h4>
                        <div class="item phone">
                            Phone: <a href="tel:<?php echo get_theme_mod( 'theme_company_phone' ); ?>"><?php echo get_theme_mod( 'theme_company_phone' ); ?></a>
                        </div>
                        <div class="item fax">
                            Fax: <?php echo get_theme_mod( 'theme_company_fax' ); ?>
                        </div>
                    </div>
                    <div class="contact-block email">
                        <h4>Email:</h4>
                        <div class="item">
                            <a href="mailto:<?php echo get_theme_mod( 'theme_company_email' ); ?>"><?php echo get_theme_mod( 'theme_company_email' ); ?></a>
                        </div>
                    </div>
                </div>
            </aside><!-- aside.contact -->
            <div class="form-area">
                <h3>Contact a Mainstream Representative Today</h3>
                <?php $sCode = get_field( 'contact_form_shortcode' ); ?>
                <?php echo do_shortcode( $sCode ); ?>
            </div>
        </div><!-- .contstrain -->
    </section><!-- .form-info -->
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
