
		<div align="center">
		<div class="div_main">
			<br/>
			<div class="txt_1"><b>Creer nouveaux compte administrateur:</b></div>
			<div id="general_icon" style="background-image:url(img_icons/icon-admin-add.gif);"></div>
			
			<div class="div_form">
				<form name="form12" id="form12" action="process-users.php" method="post">
				<input name="action" value="add" type="hidden">
				<table width="55%" cellpadding="2" cellspacing="2" border="0" align="center">
				<tr>
					<td width="45%" class="txt_small">&nbsp;</td>
					<td width="55%" class="txt_small">&nbsp;</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Identifiant Administrateur : </b></td>
					<td class="txt_black" align="left"><input name="user" type="text" size="21" maxlength="99" value=""></td>
				</tr>
				<tr>
					<td class="txt_black" align="left" valign="top"><b>Mot de passe : </b></td>
					<td class="txt_black" align="left"><input name="password" type="text" size="21" maxlength="99" value=""><br /></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Nom : </b></td>
					<td class="txt_black" align="left"><input name="nom" type="text" size="21" maxlength="99" value=""></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Prénom : </b></td>
					<td class="txt_black" align="left"><input name="prenom" type="text" size="21" maxlength="99" value=""></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>E-mail : </b></td>
					<td class="txt_black" align="left"><input name="email" type="text" size="21" maxlength="99" value=""></td>
				</tr>
				
				<tr>
					<td class="txt_black" align="left"><b>Tel : </b></td>
					<td class="txt_black" align="left"><input name="tel" type="text" size="21" maxlength="99" value=""></td>
				</tr>

				<tr><td colspan="3" class="txt_black" align="center"><br />
				<input type="submit" name="SubmitAll" class="button_1" value="Sauver le compte" onmouseover="this.style.backgroundColor='#1E90FF'" onmouseout="this.style.backgroundColor='#1874CD'" onClick="send('form12');" />
				</td></tr>			  
				</table>
				</form>
			</div>
			<br/>
		</div>
		<br/>
		<a href="index.php?cmd=list-users" class="link_blue">Afficher les administrateurs</a> | <a href="index.php?cmd=add-user" class="link_blue">Ajouter un administrateur</a> 
