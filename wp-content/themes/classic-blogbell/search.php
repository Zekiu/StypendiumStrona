<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Classic BlogBell
 */

get_header(); 
$latest_post_column = classic_blogbell_get_option( 'number_of_latest_posts_column' );
$blog_layout_content_type = classic_blogbell_get_option( 'blog_layout_content_type' );?>
<div class="wrapper page-section">
	<div id="primary" class="content-area clear">
		<main id="main" class="site-main blog-posts-wrapper" role="main">
			<div id="infinite-post-wrap" class="
					<?php if($blog_layout_content_type == 'blog-one'|| $blog_layout_content_type == 'blog-five') { ?>
						col-<?php echo esc_attr($latest_post_column) ?>
			 			<?php if(($latest_post_column > 1) && $blog_layout_content_type == 'blog-one') { ?> 
			 				grid 
			 			<?php }
			 		} elseif($blog_layout_content_type == 'blog-two'|| $blog_layout_content_type == 'blog-three'|| $blog_layout_content_type == 'blog-four'){ ?> 
			 			col-1 
			 		<?php } elseif($blog_layout_content_type == 'blog-six'){ ?> 
			 			col-2
			 		<?php } elseif($blog_layout_content_type == 'blog-seven'){ ?> 
			 			grid
			 		<?php } ?>
				">
				<?php
				if ( have_posts() ) : ?>

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;
				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div>
		<?php 	/**
			* Hook - classic_blogbell_pagination_action.
			*
			* @hooked classic_blogbell_pagination 
			*/
			 do_action('classic_blogbell_pagination_action'); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div>
<?php

get_footer();
