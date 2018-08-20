<?php
/**
 * The template for displaying all single posts
 * 
 * Template Name:About
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package whc-eight
 */

get_header();
?>

	<div class="container" style="margin-top:30px;">

<div class="row">
    <div class="col-4">
        <?php get_sidebar(); ?>
        </div>
        <div class="col-8 text-center">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
        </div>

        </div>
        

        
        

        
        </div>

		

<?php

get_footer();
