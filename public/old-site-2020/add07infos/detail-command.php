<?

$npp = 15;



$m = ($n - 1) * $npp;
$q = "SELECT *,commandes.id as cid FROM (`commandes` LEFT JOIN `clients` ON commandes.client = clients.id) LEFT JOIN `paniers` ON paniers.commande = commandes.id WHERE commandes.id=".$_GET['id']." ";
$r = mysql_query($q) or die(mysql_error());
$row = mysql_fetch_array($r);

?>
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr><td><img src="img/spacer.gif" width="1" height="10" alt=""></td></tr>		<tr>
			<td>
			</td>
		</tr>
<tr><td><img src="img/spacer.gif" width="1" height="1" alt=""></td></tr>
<tr>
	<td class="txt_title" align="center">&nbsp;&nbsp;&nbsp;<strong> Détails de la commande:</strong></td>
</tr>
<tr>
<td><img src="img/spacer.gif" width="1" height="5" alt=""></td>
</tr>

<tr>
<td><img src="img/spacer.gif" width="1" height="5" alt=""></td>
</tr>


<tr>
<td><img src="img/spacer.gif" width="1" height="5" alt=""></td>
</tr>
<tr>
	<td align="center">
		
		<div align="center">
		<table width="700" cellpadding="3" cellspacing="1" border="0" bgcolor="#104E8B">
		<tr bgcolor="#1874CD">
                  <td width="100" class="txt_table_head" align="center"><b>R&eacute;f&eacute;rence</b></td>
                  <td width="100" class="txt_table_head" align="center"><b>Nom</b></td>
                  <td width="100" class="txt_table_head" align="center"><b>Quantit&eacute;</b></td>
                  <td width="100" class="txt_table_head" align="center"><b>Prix</b></td>
		</tr>
		<?

	for ($i = 0; $i < strlen($row[0]); $i++) {

		if ($i%3 == 0 && $i != 0) $id .= "-";

		$id .= substr($row[0], $i, 1);

	}
$r2 = mysql_query("SELECT * FROM `paniers` LEFT JOIN `coffrets` ON paniers.article = coffrets.id WHERE commande = " . $row["cid"]) or die(mysql_error());
while ($produit = mysql_fetch_array($r2)) {
	$prix = $produit['prix'];
	$prixtotal += $produit['prix'];

		 ?>
		<tr bgcolor="#FFFFFF" onMouseOver="bgColor='#CAE5FF';" onMouseOut="bgColor='#FFFFFF';">
                  <td class="txt_table" align="center"><?= $produit["id"] ?></td>
                  <td class="txt_table" align="center"><?= $produit["nom"] ?></td>
                   <td class="txt_table" align="center"><?= $produit["quantite"] ?></td>
                 <td class="txt_table" align="center"><?= $prix ?></td>
		</tr>
<? }?>
		</table>
		</div>
		
<?
$qc = "select * from clients where id=".$row['client']."";
$rc = mysql_query($qc);
$rowc = mysql_fetch_array($rc);
  $output='<br />
<div align="center" style="width:700">
  
  <div  style="width:50%;float:left"><table align="center" width="90%" border=0>
    <tbody>
      <tr>
        <td colspan=2 align="left" valign="top" width="50%"><b>Coordonnées du client</td>
	  </tr>	
      <tr>
        <td align="left" valign="top" width="50%"><b>Nom :</b> '.$rowc['nom'].'</td>
        <td align="left" valign="top" width="50%"><b>Prenom : </b>'.$rowc['prenom'].'</td>
      </tr>
      <tr>
        <td align="left" valign="top" width="50%"><b>email : </b>'.$rowc['email'].'</td>
        <td align="left" valign="top" width="50%"><b>tel : </b>'.$rowc['telephone'].'</td>
      </tr>
       <tr>
       <td align="left" valign="top" width="50%"><b>Adresse : </b>'.$rowc['adresse'].'</td>
        <td align="left" valign="top" width="50%"><b>code postal : </b>'.$rowc['codepostal'].'</td>
      </tr>
     <tr>
         <td align="left" valign="top" width="50%"><b>ville : </b>'.$rowc['ville'].'</td>
        <td align="left" valign="top" width="50%"><b>Pays : </b>'.$rowc['pays'].'</td>
      </tr>
      <tr></tbody></table></div>
	  
	  ';
	  $output.='<div style="width:50%;float:left"><strong>Etat de la commande</strong> :';
		if ($row["canceled"]) $output.= "Annulée";
		elseif ($row["sent"]) $output.= "Expediée";
		elseif ($row["paid"]) $output.= "Pay&eacute; <br />(en cours de preparation)";
		elseif ($row["finished"] ||$row["closed"] ) $output.= "Attente de paiement";
	 $output.=' <br />
	 
	 				<form name="form12" id="form12" action="process-cmd.php" method="post" enctype="multipart/form-data">
				<input name="action" value="modify" type="hidden">
				<input name="id" value="'.$row['cid'].'" type="hidden">
	 	<label><strong>Nouvelle etat</strong> :</label> <select name="status" id="status">
	<option value="sent">Expediée</option>
	<option value="paid">Pay&eacute;</option>
	<option value="canceled">Annulée</option>
	</select>
<br /><br /><input type="submit" name="SubmitAll" value="Valider" class="button_1" onClick="send(\'form12\');return false;" /> 
	

	 </div>
	 
	 </div>';
	 echo $output;

?>	</td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="21" alt=""></td></tr>
<tr><td><img src="img/spacer.gif" width="1" height="21" alt=""></td></tr>

<tr><td><img src="img/spacer.gif" width="1" height="21" alt=""></td></tr>
<tr><td><img src="img/spacer.gif" width="1" height="12" alt=""></td></tr>

<tr><td><img src="img/spacer.gif" width="1" height="55" alt=""></td></tr>
		</table>

