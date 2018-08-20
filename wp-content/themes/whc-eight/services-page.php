<?php
/**
 * The template for displaying all single posts
 * 
 * Template Name: Service
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package whc-eight
 */

get_header();
?>

	<div class="container" style="margin-top:100px;">
    <div class="row">
    
    

		<?php
       $serviceArgs = array(
           'post_type' => 'services',
           'posts_per_page' => 3,
           'order' => 'ACS'
       );
       $services = new WP_Query($serviceArgs);
       ?>
        <?php if($services -> have_posts()): while($services -> have_posts()): $services -> the_post() ?>

        <div class="col-md-4">
        <h2><?php the_title() ?></h2>
        <div class="image-box">
        <?php the_post_thumbnail() ?>
        </div>
        <p><?php the_content() ?></p>
        </div>

    <?php endwhile; endif; ?>
        <div class="col-md-4">
        <?php dynamic_sidebar('sidebar-2') ?>
        </div>
		</div>
    </div>

<?php
get_footer();
