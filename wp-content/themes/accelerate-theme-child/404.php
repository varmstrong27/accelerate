<?php
/**
 * The template for displaying the 404 page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<div class="error-image">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/404.jpg"/>
</div>

<div class="error-message">
    <h3>These aren't the droids you're looking for...</h3>
</div>

<?php get_footer(); ?>