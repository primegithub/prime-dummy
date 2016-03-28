<?php 
/*
Template Name:Single-Page	
*/
?>
<?php get_header(); ?>
<?php echo do_shortcode('[layerslider id="2"]'); ?>	
  <section>
    	<div class="container">
    		<div class="row">
    		  <div class="col-md-12">
    		  	<div class="scroll-pane box centered">
				  <h1><?php the_title(); ?></h1>
		         <?php if (have_posts()): while (have_posts()) : the_post(); ?> 
                   <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		           <?php the_content(); ?>
		          </article>
		          <?php endwhile; ?>
		          <?php else: ?>
			      <article>
				    <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
				  </article>
		         <?php endif; ?>
			   </div><!--end of centered-->
             </div><!--end of col-md-12-->
    	   </div><!-- end of row-->
    	</div><!-- end of container-->
  </section>
<?php get_footer(); ?>
