<?php
/**
 * Template Name: Index des éditions
 *
 **/

get_header();

$id = get_queried_object_id();

?>



			<div class="content-container clearfix">
				<div class="white-background">
					<div class="left-col">
						<?php if(get_post_meta($id, 'colonne_gauche_1', true)) :?>
							<div class="solid_light_blue">
								<?php echo get_post_meta($id, 'colonne_gauche_1', true); ?>
							</div>
						<?php endif; ?>
						<?php if(get_post_meta($id, 'colonne_gauche_2', true)) :?>
							<div class="light_blue">
								<?php echo get_post_meta($id, 'colonne_gauche_2', true); ?>
							</div>
						<?php endif; ?>
					</div> <!-- /.left-col -->
					<div class="content">
						<div id="primary" class="content-area">
							<main id="main" class="site-main" role="main">

								<?php while ( have_posts() ) : the_post(); ?>

									<?php get_template_part( 'content', 'page' ); ?>

									<?php
										// If comments are open or we have at least one comment, load up the comment template
									/*	if ( comments_open() || '0' != get_comments_number() ) :
											comments_template();
										endif;
									*/
									?>
								<?php endwhile; // end of the loop. ?>

								<?php $editions = new WP_Query(array('post_type' => 'edition', 'post_parent' => 0, 'orderby' => 'menu_order', 'order' => 'ASC') ); ?>
								<?php if ( $editions->have_posts() ) : ?>
								  <?php while ( $editions->have_posts() ) : $editions->the_post(); ?>
								  	<div class="editions" style="">
								  		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> 
								  			<?php the_post_thumbnail( 'thumbnail' ); ?><br />
								    		<?php the_title(); ?>
								    	</a>
								  	</div>
								  <?php endwhile; ?>
								  <?php wp_reset_postdata(); ?>
								<?php endif; ?>								

							</main><!-- #main -->
						</div><!-- #primary -->
					</div> <!-- /.content -->
					<div class="right-col">
						<?php if(get_post_meta($id, 'colonne_droite_1', true)) :?>
							<div class="dark_blue">
								<?php echo get_post_meta($id, 'colonne_droite_1', true); ?>
							</div>
						<?php endif; ?>
						<?php if(get_post_meta($id, 'colonne_droite_2', true)) :?>
							<div class="light_green">
								<?php echo get_post_meta($id, 'colonne_droite_2', true); ?>
							</div>
						<?php endif; ?>
					</div> <!-- /.right-col -->
                    
				</div> <!-- /.white-background -->
			</div> <!-- /.content-container -->





<?php get_sidebar(); ?>
<?php get_footer(); ?>
