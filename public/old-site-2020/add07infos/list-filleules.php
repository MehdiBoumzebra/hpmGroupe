<?
$q = "SELECT * FROM `parrainage` where parrain='".$_GET["email"]."'";
$r = mysql_query($q) or die(mysql_error());

$num = mysql_num_rows($r);
?>
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr><td><img src="img/spacer.gif" width="1" height="10" alt=""></td></tr>		<tr>
			<td>
			</td>
		</tr>
<tr><td><img src="img/spacer.gif" width="1" height="1" alt=""></td></tr>
<tr>
	<td class="txt_title">&nbsp;&nbsp;&nbsp;<strong>La liste des filleules :</strong></td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="5" alt=""></td></tr>
<tr>
	<td>
		
		<div align="center">
		<table width="400" cellpadding="3" cellspacing="1" border="0" bgcolor="#104E8B">
		<tr bgcolor="#1874CD">
			<td width="100" class="txt_table_head" align="center"><strong>Email</strong></td>
			<td width="100" class="txt_table_head" align="center"><strong>Date d'inscription</strong></td>
			<td width="100" class="txt_table_head" align="center"><strong>Gain</strong></td>
		</tr>
 <? if($num){?>
 		<?
		while ($row = mysql_fetch_array($r)) {

		$q="SELECT * FROM bon_achat  WHERE client_id ='".$_GET['client_id']."' AND used=1 ";
		$rb = mysql_query($q) or die(mysql_error());
				$montant=0;
				while ($rowb = mysql_fetch_array($rb))
				if($rowb["montant"]<800)
				$montant+=50;
				elseif($row["montant"]>800)
				$montant+=80;
		 ?>
		<tr bgcolor="#FFFFFF" onMouseOver="bgColor='#CAE5FF';" onMouseOut="bgColor='#FFFFFF';">
			<td class="txt_table" align="center"><?=$row['filleules']?></td>
			<td class="txt_table" align="center"><?= dd($row["DateP"])?></td>
			<td class="txt_table" align="center"><?=$montant?></td>
<!--			<td align="center" valign="middle">
				<a href="index.php?cmd=edit-client&id=<?=$row['id']?>" title="Editer l'annonce -> admin"><img src="img/icon-edit.gif" width="16" height="16" alt="Editer l'annonce -> admin" border="0" /></a>&nbsp;
			</td>
-->		</tr>
		<? }?>
			<? }else {echo "<tr height=30 valign=middle bgcolor='#FFFFFF'><td align=center colspan=4><strong>Aucun filleule n'a été trouvé.</strong></td></tr>";}?>
	</table>
		</div>
		
	</td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="21" alt=""></td></tr>
<tr>
	<td class="txt_black" align="center">
<!--		<div style="width:700px;" align="left">
		<strong>Explication:</strong><br />

		<img src="img/icon-edit.gif" width="16" height="16" alt="" border="0" /> - Editer l'utilisateur <br />
	<img src="img/icon-delete.gif" width="16" height="16" alt="" border="0" /> - Effacer l'utilisateur <br />
		</div>
-->		</td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="12" alt=""></td></tr>

<tr><td><img src="img/spacer.gif" width="1" height="55" alt=""></td></tr>
		</table>

