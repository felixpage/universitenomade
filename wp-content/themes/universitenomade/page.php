<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Université Nomade
 */

get_header();

$id = get_queried_object_id();

?>



			<div class="content-container clearfix">
				<div class="white-background">
					<div class="left-col">
						<?php if(get_post_meta($id, 'colonne_gauche_1', true)) :?>
							<div class="solid_light_blue">
								<?php
									$id_colonne = get_post_meta($id, 'colonne_gauche_1', true);
									$colonne = get_post($id_colonne);
									echo apply_filters('the_content', $colonne->post_content);
								?>
							</div>
						<?php endif; ?>
						<?php if(get_post_meta($id, 'colonne_gauche_2', true)) :?>
							<div class="light_blue">
								<?php
									$id_colonne = get_post_meta($id, 'colonne_gauche_2', true);
									$colonne = get_post($id_colonne);
									echo apply_filters('the_content', $colonne->post_content);
								?>
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

							</main><!-- #main -->
						</div><!-- #primary -->
					</div> <!-- /.content -->
					<div class="right-col">
						<?php if(get_post_meta($id, 'colonne_droite_1', true)) :?>
							<div class="dark_blue">
								<?php
									$id_colonne = get_post_meta($id, 'colonne_droite_1', true);
									$colonne = get_post($id_colonne);
									echo apply_filters('the_content', $colonne->post_content);
								?>
							</div>
						<?php endif; ?>
						<?php if(get_post_meta($id, 'colonne_droite_2', true)) :?>
							<div class="light_green">
								<?php
									$id_colonne = get_post_meta($id, 'colonne_droite_2', true);
									$colonne = get_post($id_colonne);
									echo apply_filters('the_content', $colonne->post_content);
								?>
							</div>
						<?php endif; ?>
					</div> <!-- /.right-col -->
                    
				</div> <!-- /.white-background -->
			</div> <!-- /.content-container -->





<?php get_sidebar(); ?>
<?php get_footer(); ?>
