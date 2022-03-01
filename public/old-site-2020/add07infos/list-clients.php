<?
$q = "SELECT * FROM `clients`";
$r = mysql_query($q);

$num = mysql_num_rows($r);
?>
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr><td><img src="img/spacer.gif" width="1" height="10" alt=""></td></tr>		<tr>
			<td>
			</td>
		</tr>
<tr><td><img src="img/spacer.gif" width="1" height="1" alt=""></td></tr>
<tr>
	<td class="txt_title">&nbsp;&nbsp;&nbsp;<strong>La liste avec touts les clients :</strong></td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="5" alt=""></td></tr>
<tr>
	<td>
		
		<div align="center">
		<table width="900" cellpadding="3" cellspacing="1" border="0" bgcolor="#104E8B">
		<tr bgcolor="#1874CD">
			<td width="70" class="txt_table_head" align="center"><strong>Nom</strong></td>
			<td width="70" class="txt_table_head" align="center"><strong>Prénom</strong></td>
			<td width="150" class="txt_table_head" align="center"><strong>Adresse</strong></td>
			<td width="70" class="txt_table_head" align="center"><strong>Ville</strong></td>
			<td width="70" class="txt_table_head" align="center"><strong>Tél portable</strong></td>
			<td width="100" class="txt_table_head" align="center"><strong>Email</strong></td>
			<td width="250" class="txt_table_head" align="center"><strong>Action</strong></td>
		</tr>
		<?
		while ($row = mysql_fetch_array($r)) {
$q = "SELECT *,commandes.id as cid FROM (`commandes` LEFT JOIN `clients` ON commandes.client = clients.id) LEFT JOIN `paniers` ON paniers.commande = commandes.id WHERE  1 ";
$q .= " and commandes.client=".$_GET['client_id']." ";
		 ?>
		<tr bgcolor="#FFFFFF" onMouseOver="bgColor='#CAE5FF';" onMouseOut="bgColor='#FFFFFF';">
			<td class="txt_table" align="center"><?=$row['nom']?></td>
			<td class="txt_table" align="center"><?=$row['prenom']?></td>
			<td class="txt_table" align="center"><?=$row['adresse']?></td>
			<td class="txt_table" align="center"><?=$row['ville']?></td>
			<td class="txt_table" align="center"><?=$row['portable']?></td>
			<td class="txt_table" align="center"><?=$row['email']?></td>
			<td align="center" valign="middle">
				<a href="index.php?cmd=list-command&client_id=<?=$row['id']?>">Les commandes</a>&nbsp;|&nbsp;
				<a href="index.php?cmd=list-filleules&email=<?=$row['email']?>" >Les filleules</a>&nbsp;|&nbsp;
				<a href="index.php?cmd=client-stats&client_id=<?=$row['client_id']?>" >Statistiques</a>&nbsp;|&nbsp;
				<a href="index.php?cmd=delete-client&id=<?=$row['id']?>"><img src="img/icon-delete.gif" width="16" height="16" alt="supprimer" border="0" /></a>&nbsp;
			</td>
<!--			<td align="center" valign="middle">
				<a href="index.php?cmd=edit-client&id=<?=$row['id']?>" title="Editer l'annonce -> admin"><img src="img/icon-edit.gif" width="16" height="16" alt="Editer l'annonce -> admin" border="0" /></a>&nbsp;
			</td>
-->		</tr>
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

<!--		<img src="img/icon-edit.gif" width="16" height="16" alt="" border="0" /> - Editer l'utilisateur <br />
-->		<img src="img/icon-delete.gif" width="16" height="16" alt="" border="0" /> - Effacer l'utilisateur <br />
		</div>
	</td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="12" alt=""></td></tr>

<tr><td><img src="img/spacer.gif" width="1" height="55" alt=""></td></tr>
		</table>

