<?

$q = "SELECT * FROM `clients` WHERE id = {$_GET["id"]}";

$r = mysql_query($q);



$row = mysql_fetch_array($r);

?>

		<div align="center">
		<div class="div_main">
			<br/>
			<div class="txt_1"><b>Creer nouveaux compte administrateur:</b></div>
			<div id="general_icon" style="background-image:url(img_icons/icon-admin-add.gif);"></div>
			
			<div class="div_form">
				<form name="form12" id="form12" action="process-clients.php" method="post">
				<input name="action" value="modify" type="hidden">
				<input name="id" value="<?=$row['id']?>" type="hidden">
			<table width="55%" cellpadding="2" cellspacing="2" border="0" align="center">
				<tr>
					<td width="45%" class="txt_small">&nbsp;</td>
					<td width="55%" class="txt_small">&nbsp;</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Nom : </b></td>
					<td class="txt_black" align="left"><input name="nom" type="text" size="21" maxlength="99" value="<?=$row['nom']?>"></td>
					<td class="txt_black" align="left"><b>Pr?nom : </b></td>
					<td class="txt_black" align="left"><input name="prenom" type="text" size="21" maxlength="99" value="<?=$row['prenom']?>"></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Soci?t? : </b></td>
					<td class="txt_black" align="left"><input name="societe" type="text" size="21" maxlength="99" value="<?=$row['societe']?>"></td>
					<td class="txt_black" align="left" valign="top"><b>GSM : </b></td>
					<td class="txt_black" align="left"><input name="gsm" type="text" size="21" maxlength="99" value="<?=$row['gsm']?>"><br /></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>E-mail : </b></td>
					<td class="txt_black" align="left"><input name="email" type="text" size="21" maxlength="99" value="<?=$row['email']?>"></td>
					<td class="txt_black" align="left" valign="top"><b>Fixe : </b></td>
					<td class="txt_black" align="left"><input name="fixe" type="text" size="21" maxlength="99" value="<?=$row['fixe']?>"><br /></td>
				</tr>

				<tr>
					<td class="txt_black" align="left"><b>Adresse : </b></td>
					<td class="txt_black" align="left" colspan="3"><textarea name="adresse"  rows="3" cols="59" ><?=$row['adresse']?></textarea></td>
				</tr>				
				<tr>
					<td class="txt_black" align="left"><b>Login : </b></td>
					<td class="txt_black" align="left"><input name="login" type="text" size="21" maxlength="99" value="<?=$row['login']?>"></td>
					<td class="txt_black" align="left" ><b>Pass : </b></td>
					<td class="txt_black" align="left"><input name="pass" type="text" size="21" maxlength="99" value="<?=$row['pass']?>"><br /></td>
				</tr>
			
				<tr><td colspan="4" class="txt_black" align="center"><br />
				<input type="submit" name="SubmitAll" class="button_1" value="Sauver le compte" onmouseover="this.style.backgroundColor='#1E90FF'" onmouseout="this.style.backgroundColor='#1874CD'" onClick="send('form12');return false;" />
				</td></tr>			  
				</table>
				</form>
			</div>
			<br/>
		</div>
		<br/>
		<a href="index.php?cmd=list-users" class="link_blue">Afficher les administrateurs</a> | <a href="index.php?cmd=add-user" class="link_blue">Ajouter un administrateur</a> 
