
<?php
 ob_start(); ?>
<form method="post">
	<table width="50%" align="center" bgcolor="	lightgray">
		<tr>	<th colspan="	2" align="	center	"> <font style='font-family:Arial, Helvetica, sans-serif;font-size:30px;color: #3355AA;'>Informations de l'article	</th></tr>
	<tr><td><font style='font-family:Arial, Helvetica, sans-serif;font-size:20px;color: #3355AA;'>libelle:</td><td><input type=text name=lib></td></tr>
		<tr><td><font style='font-family:Arial, Helvetica, sans-serif;font-size:20px;color: #3355AA;'>prix:</td><td><input type="number" name="prix"></td></tr><tr><td><font style='font-family:Arial, Helvetica, sans-serif;font-size:20px;color: #3355AA;'>Quantite en stock:</td><td><input type=text name=lib></td></tr>
			<tr><td><font style='font-family:Arial, Helvetica, sans-serif;font-size:20px;color: #3355AA;'>description:</td><td><textarea cols="	50" rows="	10">	</textarea></td></tr>
	
	<tr><td colspan="2" align="center"><input type="submit" name="ok"></td></tr></table>
</form>
<?php $content = ob_get_clean(); 

require('template.php'); ?>