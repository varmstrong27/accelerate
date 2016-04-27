<?php
/**
 * The template for displaying the case studies archive page.
 *
 * @package WordPress
 * @subpackage Accelerate_Theme
 * @since Accelerate Theme 1.1
 */

get_header(); ?>

<div id="primary" class="site-content">
    <div id="content" role="main">
        <?php while ( have_posts() ) : the_post(); 
            $image_1 = get_field("image_1");
            $size = "full";
            $services = get_field('services');
        ?>
        
        <!--<article class="case-study"> -->
            <!-- <aside class="case-study-sidebar"> -->
            <aside class="archive-sidebar">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <h5><?php echo $services; ?></h5>
                                    
                <?php the_excerpt(); ?>
                    
                <p><strong><a href="<?php the_permalink(); ?>">View Project</a></strong></p>
            </aside><!-- .case-study-sidebar -->
            
            <!--<div class="case-study-images">-->
            <div class="archive-images">
                <a href="<?php the_permalink(); ?>">
                    <?php if($image_1) { echo wp_get_attachment_image( $image_1, $size );  } ?>
                </a>
             </div><!-- .case-study-images-archive -->
        <!--</article><!-- .case-study -->
        <?php endwhile; // end of the loop. ?>
    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>