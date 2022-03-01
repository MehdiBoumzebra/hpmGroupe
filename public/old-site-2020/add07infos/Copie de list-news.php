<?

$q = "SELECT * FROM `news` where id>1 ORDER BY id DESC";

$r = mysql_query($q);

$num = mysql_num_rows($r);
?>
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr><td colspan="">
<input type="button" id="ulaitem0z2z3"  onclick="window.location='index.php?cmd=add-news'" value="Ajouter article" />
<br />
<br />
<br />
</td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="10" alt=""></td></tr>		<tr>
			<td>
			</td>
		</tr>
<tr><td><img src="img/spacer.gif" width="1" height="1" alt=""></td></tr>
<tr>
	<td class="txt_title">&nbsp;&nbsp;&nbsp;<strong>La liste avec touts les news :</strong></td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="5" alt=""></td></tr>
<tr>
	<td>
		
		<div align="center">
		<table width="700" cellpadding="3" cellspacing="1" border="0" bgcolor="#104E8B">
		<tr bgcolor="#1874CD">
			<td width="50" class="txt_table_head" align="center"><strong>id</strong></td>
			<td width="100" class="txt_table_head" align="center"><strong>titre</strong></td>
			<td width="100" class="txt_table_head" align="center"><strong>date</strong></td>
			<td width="150" class="txt_table_head" align="center"><strong>Action</strong></td>
		</tr>
		<?
		while ($row = mysql_fetch_array($r)) {
		 ?>
		<tr bgcolor="#FFFFFF" onMouseOver="bgColor='#CAE5FF';" onMouseOut="bgColor='#FFFFFF';">
			<td class="txt_table" align="center"><?=$row['id']?></td>
			<td class="txt_table" align="left"><?=substr($row['titre'],0,120)?></td>
			<td class="txt_table" align="center"><?=$row['date']?></td>
			<td align="center" valign="middle">
				<a href="index.php?cmd=edit-news&id=<?=$row['id']?>" title="Editer l'annonce -> admin"><img src="img/icon-edit.gif" width="16" height="16" alt="Editer l'annonce -> admin" border="0" /></a>&nbsp;
				<a href="index.php?cmd=delete-news&id=<?=$row['id']?>" title="Effacer l'annonce -> admin"><img src="img/icon-delete.gif" width="16" height="16" alt="Effacer l'annonce -> admin" border="0" /></a>&nbsp;
			</td>
		</tr>
		<? }?>
		</table>
		</div>
		
	</td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="21" alt=""></td></tr>
<tr>
	<td class="txt_black" align="center">
		<div style="width:700px;" align="left">
		<strong>Explication:</strong><br />

		<img src="img/icon-edit.gif" width="16" height="16" alt="" border="0" /> - Editer la news <br />
		<img src="img/icon-delete.gif" width="16" height="16" alt="" border="0" /> - Effacer la news <br />
		</div>
	</td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="12" alt=""></td></tr>

<tr><td><img src="img/spacer.gif" width="1" height="55" alt=""></td></tr>
		</table>

