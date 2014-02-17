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
						<div class="solid_light_blue">
							<aside>
								<ul class="menuedition">
									<?php
									$parent = get_post_ancestors( get_queried_object_id() );
									if(empty($parent)){
										$id_parent = get_queried_object_id();
										$show_list = true;
									} else {
										$id_parent = $parent[0];
										$show_list = false;
									}
									echo '<h1><a href="'.get_permalink($id_parent).'">'.get_the_title($id_parent)."</a></h1>";
									wp_list_pages( array('post_type' => 'edition', 'child_of' => $id_parent, 'title_li' => '' ) ); ?> 
								</ul>
							</aside>
						</div>
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
									<div class="editionimage">
										<a href="<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full'); echo $image[0]; ?>">
											<?php the_post_thumbnail( 'medium' ); ?>
										</a>
									</div>
									<?php get_template_part( 'content', 'page' ); ?>


									<?php
										// If comments are open or we have at least one comment, load up the comment template
									/*	if ( comments_open() || '0' != get_comments_number() ) :
											comments_template();
										endif;
									*/
									?>

								<?php endwhile; // end of the loop. ?>
									<ul class="listesouseditions">
										<?php if($show_list) wp_list_pages( array('post_type' => 'edition', 'child_of' => $id_parent, 'title_li' => '' ) ); ?>
									</ul>
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
