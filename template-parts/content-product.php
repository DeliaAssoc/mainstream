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
    <div class="constrain lg">
        <header class="entry-header">
            <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php
            the_content();
            ?>
        </div><!-- .entry-content -->

    </div>
</article><!-- #post-<?php the_ID(); ?> -->
