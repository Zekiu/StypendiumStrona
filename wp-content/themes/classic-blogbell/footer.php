<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Classic BlogBell
 */
/**
 *
 * @hooked classic_blogbell_footer_start
 */
do_action( 'classic_blogbell_action_before_footer' );

/**
 * Hooked - classic_blogbell_footer_top_section -10
 * Hooked - classic_blogbell_footer_section -20
 */
do_action( 'classic_blogbell_action_footer' );

/**
 * Hooked - classic_blogbell_footer_end. 
 */
do_action( 'classic_blogbell_action_after_footer' );

wp_footer(); ?>

</body>  
</html>