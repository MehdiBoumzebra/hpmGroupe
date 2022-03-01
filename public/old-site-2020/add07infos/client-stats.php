<script type="text/javascript" src="js/calendarDateInput.js">
</script><?

@mysql_query("delete  FROM `commandes` WHERE `maxtime`<UNIX_TIMESTAMP()-(3600*5) and (finished<>1 or closed<>1)");
if (!isset($_GET["o"])) $o = 0;

else $o = $_GET["o"];

	

if (!isset($_GET["pa"])) $pa = 1;

else $pa = $_GET["pa"];



if (!isset($_GET["n"])) $n = 1;

else $n = $_GET["n"];



switch ($o) {

	case 0 : $order = "ASC"; break;

	case 1 : $order = "DESC"; break;

}



$order1 = "croissant";

$order2 = "décroissant";



switch ($pa) {

	case 1 : $param = "commandes.id"; break;

	case 2 : $param = "nom"; break;

	case 3 : $param = "sent, paid"; break;

	case 4 : $param = "pro"; break;

	case 4 : $param = "paiement"; break;

}



$npp = 55;



$m = ($n - 1) * $npp;
$q = "SELECT *,commandes.id as cid FROM (`commandes` LEFT JOIN `clients` ON commandes.client = clients.id) LEFT JOIN `paniers` ON paniers.commande = commandes.id WHERE  1 ";
//echo $q;



if($_GET['client_id'])
$q .= " and commandes.client=".$_GET['client_id']." ";

if($_GET['status'])
$q .= " and ".$_GET['status']." = 1 ";

if($_GET['status']=='finished')
$q .= " or closed = 1 and paid=0 AND sent=0";

if($_GET['status']=='paid')
$q .= "  AND sent=0";

if($_GET['date_debut'] && $_GET['date_fin'])
$q .= " and FROM_UNIXTIME(endtime) between '".$_GET['date_debut']." 00:00:00' and '".$_GET['date_fin']." 00:00:00'";

$qu = $q . " ORDER BY {$param} {$order} LIMIT " . ($n - 1) * $npp . ",{$npp}";

//echo $qu;
$r = mysql_query($qu);

$row = mysql_fetch_array($r);
$date_debut=$_GET['date_debut']?$_GET['date_debut']:date('Y-m-d');
$date_fin=$_GET['date_fin']?$_GET['date_fin']:date('Y-m-d');
?>
		<table width="700" cellpadding="0" cellspacing="0" border="0">
<tr><td><img src="img/spacer.gif" width="1" height="10" alt=""></td></tr>		<tr>
			<td>
			</td>
		</tr>
<tr><td colspan="">
		<table width="700" cellpadding="3" cellspacing="0" border="0">
<form   method="get" id="formvol" name="formvol">
<input type="hidden" name="cmd" value="list-command" id="cmd">
<input type="hidden" name="status" value="<?=$_GET['status']?>" id="status">
<input type="hidden" name="client_id" value="<?=$_GET['client_id']?>" id="client_id">
<tr><td colspan="">Par date commande </td><td>Date debut :</td><td><script>DateInput('date_debut', true, 'YYYY-M-DD','<?=$date_debut?>')</script></td><td>Date fin :</td><td><script>DateInput('date_fin', true, 'YYYY-M-DD','<?=$date_fin?>')</script></td></tr>
<!--
<tr><td>Nom </td>
<td>
<input type="text" name="nom" value="<?=$_GET['nom']?>" id="nom">
</td></tr>
<tr><td>Réf </td>
<td>
<input type="text" name="ref" value="<?=$_GET['ref']?>" id="ref">
</td></tr>
--><tr><td align="left" colspan="3"><input type="submit" value="   FILTRER   "></td></tr>

<tr><td height="15px" align="left" colspan="2">&nbsp;</td></tr>
					

</form>
</table>
</td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="1" alt=""></td></tr>
<tr>
	<td class="txt_title" align="center">&nbsp;&nbsp;&nbsp;<strong> Statistiques Client:</strong></td>
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
<td><img src="img/spacer.gif" width="1" height="5" alt=""></td>
</tr>
<tr>
	<td>
		
		<div align="center">
		<table width="700" cellpadding="3" cellspacing="1" border="0" bgcolor="#104E8B">
		<?
        $r = mysql_query($qu);
		$num = mysql_num_rows($r);
		if($num>0){
	$ca = 0;
		while ($row = mysql_fetch_array($r)) {
	$id = "";
	$prixtotal = 0;
	$datei=dd($row["datei"]);
	$nbrc=$row["nbrconnexion"];
$r2 = mysql_query("SELECT * FROM `paniers` LEFT JOIN `coffrets` ON paniers.article = coffrets.id WHERE commande = " . $row["cid"]) or die(mysql_error());
while ($produit = mysql_fetch_array($r2)) {
	$prixtotal += $produit['prix'];
}
	$ca += $prixtotal;

		 ?>
		<? }}else {echo "<tr height=30 valign=middle bgcolor='#FFFFFF'><td align=center colspan=5><strong>Aucune commande n'a été trouvée.</strong></td></tr>";}?>
    		<tr bgcolor="#FFFFFF" onMouseOver="bgColor='#CAE5FF';" onMouseOut="bgColor='#FFFFFF';">
               <td class="txt_table" align="center">Date d'inscription</td>
                 <td class="txt_table" align="center"><?= $datei ?></td>
		</tr>
    		<tr bgcolor="#FFFFFF" onMouseOver="bgColor='#CAE5FF';" onMouseOut="bgColor='#FFFFFF';">
               <td class="txt_table" align="center">Nombre de conn2xion</td>
                 <td class="txt_table" align="center"><?= $nbrc ?></td>
		</tr>
		<tr bgcolor="#FFFFFF" onMouseOver="bgColor='#CAE5FF';" onMouseOut="bgColor='#FFFFFF';">
                  <td class="txt_table" align="center">Chiffre d'affaire:</td>
                  <td class="txt_table" align="center"><?= $ca ?></td>
                  </tr>
		</table>
		</div>
		
	</td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="21" alt=""></td></tr>
<tr><td><img src="img/spacer.gif" width="1" height="21" alt=""></td></tr>
<tr><td align="center">
<SPAN align="center" style="width:700;">

<?php



//$q = "SELECT * FROM `moto`";
$r = mysql_query($q);
$num = mysql_num_rows($r);



if ($num > $npp) {

	echo "Pages : ";

	if ($num % $npp == 0) $j = $num / $npp;

	else $j = ($num - ($num % $npp)) / $npp + 1;



	for ($i = 1; $i <= $j; $i++) {

		if ($n != $i) echo "&nbsp;<a class=link_blue  href=\"index.php?status=".$_GET['status']."&client_id=".$_GET['client_id']."&date_fin=".$_GET['date_fin']."&date_debut=".$_GET['date_debut']."&cmd=list-command&n={$i}&p={$p}&o={$o}\">{$i}</a>";

		else echo "&nbsp;<strong style='font-size:16px'>[ {$i} ]</strong>";

	}



	if ($n != $j) echo "&nbsp;<a class=link_blue href=\"index.php?status=".$_GET['status']."&client_id=".$_GET['client_id']."&date_fin=".$_GET['date_fin']."&date_debut=".$_GET['date_debut']."&cmd=list-command&n=" . ($n + 1) . "&p={$p}&o={$o}\">Suivante</a>";

	else echo "&nbsp;Suivante";

}

?></SPAN>	</td></tr>

<tr><td><img src="img/spacer.gif" width="1" height="21" alt=""></td></tr>
<tr>
	<td class="txt_black" align="center">
		<div style="width:700px;" align="left">
		<strong>Explication:</strong><br />

		<img src="img/icon-edit.gif" width="16" height="16" alt="" border="0" /> - Editer l'article <br />
		<img src="img/icon-delete.gif" width="16" height="16" alt="" border="0" /> - Effacer l'article <br />
		</div>
	</td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="12" alt=""></td></tr>

<tr><td><img src="img/spacer.gif" width="1" height="55" alt=""></td></tr>
		</table>

