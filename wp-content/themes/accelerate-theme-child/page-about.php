<?php 
/**
 * The template for displaying the About page
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero about-hero'>
				<?php the_content(); ?>
			</div><!-- .homepage-hero-->
		<?php endwhile; // end of the loop. ?>
	</div><!-- .site-content -->
</section><!-- .home-page -->

<section class="about-services">
    <div class="site-content">
        
        <?php while ( have_posts() ) : the_post(); 
            $about_title = get_field('about_title');
            $about_description = get_field('about_description');
            $service_1_title = get_field('service_1_title');
            $service_1_description = get_field('service_1_description');              $service_2_title = get_field('service_2_title');
            $service_2_description = get_field('service_2_description');
            $service_3_title = get_field('service_3_title');
            $service_3_description = get_field('service_3_description');
            $service_4_title = get_field('service_4_title');
            $service_4_description = get_field('service_4_description');
            $image_1 = get_field('image_1');    
            $image_2 = get_field('image_2');
            $image_3 = get_field('image_3');
            $image_4 = get_field('image_4');
            $size = "full";
        ?>
        
        <div class="about-section">
            <h4><?php echo $about_title; ?></h4>
            <p><?php echo $about_description; ?></p>
        </div>
        

        <div class="image-left">
            <?php if($image_1) { echo wp_get_attachment_image( $image_1, $size );  } ?>
        </div>
            
        <div class="services-right">
            <h4><?php echo $service_1_title; ?></h4>
            <p><?php echo $service_1_description; ?></p>
        </div>
        
        <div class="image-right">
            <?php if($image_2) { echo wp_get_attachment_image( $image_2, $size );  } ?>
        </div>
            
        <div class="services-left">
            <h4><?php echo $service_2_title; ?></h4>
            <p><?php echo $service_2_description; ?></p>
        </div>
        
        <div class="image-left">
            <?php if($image_3) { echo wp_get_attachment_image( $image_3, $size );  } ?>
        </div>
            
        <div class="services-right">
            <h4><?php echo $service_3_title; ?></h4>
            <p><?php echo $service_3_description; ?></p>
        </div>
        
        <div class="image-right">
            <?php if($image_4) { echo wp_get_attachment_image( $image_4, $size );  } ?>
        </div>
            
        <div class="services-left">
            <h4><?php echo $service_4_title; ?></h4>
            <p><?php echo $service_4_description; ?></p>
        </div>
        
        <?php endwhile; // end of the loop. ?>
        
        <div class="contact-info">
            <h2>Interested in working with us?</h2>
            <a class="button contact-button" href="<?php echo home_url(); ?>/contact-us">Contact Us</a>
        </div><!-- .contact-info -->

    </div><!-- .site-content -->
</section><!-- .about-services -->

<?php get_footer(); ?>