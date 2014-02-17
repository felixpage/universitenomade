<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Université Nomade
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/master.css" type="text/css" media="screen" title="Dialog Main Stylesheet" charset="utf-8" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/print.css" type="text/css" media="print" charset="utf-8" />
</head>

<body <?php body_class("inside"); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>

		<div id="wrap" class="clearfix">

			<div id="header">
				<p class="logo"><a href="<?php bloginfo('url'); ?> " title="Retour &agrave; l'accueil">Dialog</a></p>
				<div class="content">
					<p><strong><?php _e('Université Nomade<br />du Réseau Dialog', 'universitenomade'); ?></strong></p>
					<ul class="paranav">
						<li class="first"><a href="http://www.reseaudialog.ca/fr/reseau-dialog/nous-joindre/"><?php _e('Nous joindre', 'universitenomade'); ?></a></li>
						<?php pll_the_languages(array('hide_current' => true)); ?>


					</ul>
					 <?php get_search_form(); ?> 
				</div>
			</div> <!-- /#header -->
			<div id="menu">
				<?php wp_nav_menu(array('theme_location' => 'primary')); ?>

				<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script><script type="text/javascript">stLight.options({publisher:'c46d3138-bc62-4718-9f3e-859167520b69'});</script>


				<div style="margin-top:8px;position:absolute; right:10%;text-align:right;" >
					<span class="st_facebook"></span><span class="st_twitter"></span><span class="st_sharethis" displayText="Partager"></span>
				</div>
				
				<ul class="tools">
					<li><a href="javascript:set_font_size('down');" class="btn_font_down" title="Diminuer la police">Diminuer</a></li>
					<li><a href="javascript:set_font_size('up');" class="btn_font_up" title="Grossir la police">Grossir</a></li>
				</ul>


			</div> <!-- /#menu -->

