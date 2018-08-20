<?php
/**
 * The template for displaying all single posts
 * 
 * Template Name: Contact
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package whc-eight
 */

get_header();
?>
<div class="row text-center" id="top-space" style="margin-top:70px;">
<div class="col-12">
	<?php dynamic_sidebar('contact-1') ?>

	

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

	<div class="row">
	<div class="col-12">
	<?php dynamic_sidebar('map-1') ?>
	</div>
	</div>

	<?php get_footer(); ?>

<?php


