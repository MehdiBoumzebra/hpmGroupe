<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr><td><img src="img/spacer.gif" width="1" height="77" alt=""></td></tr>		<tr>
			<td>
			</td>
		</tr>
<tr>
	<td>
		<div align="center">
		<div class="div_main">
			<br/>
			<div class="txt_1"><b>Assistance technique : </b></div>
			<div id="general_icon" style="background-image:url(img_icons/icon-help.gif);"></div>
			
			<div class="div_form">
				<form name="form12" action="index.php?cmd=help-send" method="post">
				<input name="nom" type="hidden" value="<?=$_SESSION['nom']?>" />
				<input name="email" type="hidden" value="<?=$_SESSION['email']?>" />
				<table width="555" cellpadding="3" cellspacing="1" border="0">
				<tr><td colspan="12" class="txt_black" align="left"><br /></b></td></tr>
				<tr>
					<td class="txt_black" align="left"><strong>Sujet : </strong></td>
					<td class="txt_black" align="left"><input name="sujet" type="text" size="33" value="" /></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><strong>Message : </strong></td>
					<td class="txt_black" align="left"><textarea name="message" rows="7" cols="53"></textarea></td>
				</tr>
				<tr>
					<td class="txt_black" align="center" colspan="12">
						<input type="submit" name="SubmitAll" value="  Envoyer  " class="button_1" onmouseover="this.style.backgroundColor='#1E90FF'" onmouseout="this.style.backgroundColor='#1874CD'" />
						&nbsp;&nbsp;&nbsp;
						<input type="button" value="  Effacer  " onClick="clear_all(document.form12);" class="button_1" onmouseover="this.style.backgroundColor='#1E90FF'" onmouseout="this.style.backgroundColor='#1874CD'" />
					</td>
				</tr>
				<tr><td colspan="12" class="txt_black" align="left"><br /></b></td></tr>
				</table>
				</form>
			</div>
			<br/>
		</div>
	</td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="1" alt=""></td></tr>

<tr><td><img src="img/spacer.gif" width="1" height="55" alt=""></td></tr>
		</table>