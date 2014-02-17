<form  style="position:relative;left:753px;top:20px;" action="<?php echo home_url( '/' ); ?>" method="get">
	<input type="hidden" name="page" value="recherche" />
	<fieldset>
		<input type="text" name="s" value="<?php echo $_REQUEST['s'] ?>" title="Cherchez sur DIALOG" maxlength="100" />
		<input type="image" src="<?php echo get_template_directory_uri(); ?>/media/images/all/buttons/search_button.gif" class="submit" />
	</fieldset>
</form>		