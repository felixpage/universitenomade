<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Université Nomade
 */
?>
	<div id="footer">
		<ul class="fLeft">
			<li class="first">&copy; R&eacute;seau DIALOG 2014 - Tous droits r&eacute;serv&eacute;s</li>
			<li><span class="highlight">Derni&egrave;re mise &agrave; jour : <?php the_modified_date(); ?></span></li>
		</ul>
		<ul class="fRight">
			<li class="first"><a href="http://www.reseaudialog.ca/fr/reseau-dialog/nous-joindre/"><?php _e('Nous joindre','universitenomade');?></a></li>
			<li><?php pll_the_languages(array('hide_current' => true)); ?></li>
		</ul>
	</div>


	<ul id="sponsors">
		<li><a href="http://www.fqrsc.gouv.qc.ca/fr/accueil.php" class="logo_fqrsc">FQRSC</a></li>
		<li><a href="http://www.sshrc.ca/site/home-accueil-fra.aspx" class="logo_crsh">CRSH</a></li>
		<li><a href="http://www.inrs.uquebec.ca/Francais/index.jsp" class="logo_inrs">INRS</a></li>
	</ul>

</div> <!-- /#wrap -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>