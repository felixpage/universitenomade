<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Université Nomade
 */

get_header(); ?>

			<div class="content-container clearfix">
				<div class="white-background">
					<div class="left-col">
						<?php if(is_active_sidebar( 'gauche1' )) get_sidebar('gauche1'); ?>
						<?php if(is_active_sidebar( 'gauche2' )) get_sidebar('gauche2'); ?>
					</div> <!-- /.left-col -->
					<div class="content">
						<div id="primary" class="content-area">
							<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php // universitenomade_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
			//	if ( comments_open() || '0' != get_comments_number() ) :
			//		comments_template();
			//	endif;
			?>

		<?php endwhile; // end of the loop. ?>

							</main><!-- #main -->
						</div><!-- #primary -->
					</div> <!-- /.content -->
					<div class="right-col">
						<?php if(is_active_sidebar( 'droite1' )) get_sidebar('droite1'); ?>
						<?php if(is_active_sidebar( 'droite2' )) get_sidebar('droite2'); ?>
					</div> <!-- /.right-col -->
                    
				</div> <!-- /.white-background -->
			</div> <!-- /.content-container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>