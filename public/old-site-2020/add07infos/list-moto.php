<div align="center">
		<table width="700" cellpadding="0" cellspacing="0" border="0">
<tr><td colspan="">
<input type="button" id="ulaitem0z2z3"  onclick="window.location='index.php?cmd=add-moto'" value="Ajouter une Moto" />
<br />
<br />
<br />
</td>
</tr>

<?
//error_reporting(E_ALL);
if (!isset($_GET["o"])) $o = 1;

else $o = $_GET["o"];

	

if (!isset($_GET["p"])) $p = 4;

else $p = $_GET["p"];



if (!isset($_GET["n"])) $n = 1;

else $n = $_GET["n"];



switch ($o) {

	case 0 : $order = "ASC"; break;

	case 1 : $order = "DESC"; break;

}



$order1 = "croissant";

$order2 = "décroissant";



switch ($p) {

	case 1 : $param = "ref"; break;

	case 2 : $param = "type"; break;

	case 3 : $param = "prix_t"; break;

	case 4 : $param = "moto.id"; break;

}



$npp = 5;

$m = ($n - 1) * $npp;
$q = "SELECT *,carburants.nom as carburantlibelle FROM `moto`,carburants where moto.carburant=carburants.id ";

if(($_GET['type'])!='')
$q .= " and type='".$_GET['type']."' ";

if(($_GET['datedu'])!='')
$q .= " and date >= ".$_GET['datedu']." ";

if(($_GET['dateau'])!='')
$q .= " and date <= '".$_GET['dateau']."' ";

if(($_GET['budgetdu'])!='')
$q .= " and prix <= '".$_GET['budgetdu']."' ";

if(($_GET['budgetau'])!='')
$q .= " and prix <= '".$_GET['budgetau']."' ";

if(($_GET['superficiedu'])!='')
$q .= " and superficie <= '".$_GET['superficiedu']."' ";

if(($_GET['superficieau'])!='')
$q .= " and superficie <= '".$_GET['superficieau']."' ";

$qu = $q . " ORDER BY {$param} {$order} LIMIT " . ($n - 1) * $npp . ",{$npp}";

//echo $qu;
$r = mysql_query($qu);

$num = mysql_num_rows($r);



if ($p == 1 && $o == 1) {

	$a = ($n - 1) * $npp + $num;

}

else {

	$a = ($n - 1) * $npp + 1;

}


while ($row = mysql_fetch_array($r)) {


?>
		<tr>
			<td colspan="12">
				<table width="700" cellpadding="3" cellspacing="1" border="0" bgcolor="#104E8B" onmouseover="document.getElementById('zit<?=$row[0]?>').style.backgroundColor='#CAE5FF';" onmouseout="document.getElementById('zit<?=$row[0]?>').style.backgroundColor='#FFFFFF';">
				<tr bgcolor="#1874CD">
					<td class="txt_table_head" align="left">
						<b>&nbsp;
						<?=$row['marque']?> <?=$row['modele']?>&nbsp;&nbsp;|&nbsp;&nbsp;PI <?=$row['immatriculation']?>&nbsp;&nbsp;| &nbsp;&nbsp;Kilométrage <?=$row['km']?>&nbsp;&nbsp;|&nbsp;&nbsp;<?=$row['prix']?> Dhs&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href="index.php?cmd=edit-moto&id=<?=$row[0]?>" title="Editer l'annonce -> Ref. <?=$row[0]?>"><img src="img/icon-edit.gif" width="16" height="16" alt="Editer l'annonce -> " border="0" align="absmiddle" /></a>&nbsp;&nbsp;|&nbsp;&nbsp;
						<a href="index.php?cmd=delete-moto&id=<?=$row[0]?>" title="Effacer l'annonce -> Ref. <?=$row[0]?>"><img src="img/icon-delete.gif" width="16" height="16" alt="Effacer l'annonce -> " border="0" align="absmiddle" /></a>
						</b>
					</td>
				</tr>
				<tr bgcolor="#FFFFFF" id="zit<?=$row[0]?>">
					<td class="txt">
						<table width="700" cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td width="100" align="left">
								<a href="index.php?cmd=edit-moto&id=<?=$row[0]?>"><img src="../photos/<?=$row['photo1']?>" width="100" height="75" align="absmiddle" alt="" border="0" /></a>
							</td>
							<td width="10"><img src="img/spacer.gif" width="10" height="1" alt="" border="0" /></td>
							<td width="640" class="txt" align="left">
								<?=$row['equipement']?>
							<br /><span class="txt_small"><br /></span>
								<!--
								<a href="#" onclick="return false;" class="link_blue">&raquo; Fiche détaillée &laquo;</a>
								-->
							</td>
						</tr>
						</table>
					</td>
				</tr>
				</table>
				<span class="txt_small"><br /></span>
			</td>
		</tr>
		
		
<? }?>	
<tr height="20px"><td></td></tr>
<tr><td>

<?php



//$q = "SELECT * FROM `moto`";
$r = mysql_query($q);
$num = mysql_num_rows($r);



if ($num > $npp) {

	echo "Pages&nbsp;:";

	if ($num % $npp == 0) $j = $num / $npp;

	else $j = ($num - ($num % $npp)) / $npp + 1;



	for ($i = 1; $i <= $j; $i++) {

		if ($n != $i) echo "&nbsp;<a class=link_blue  href=\"index.php?type=".$_GET['type']."&datedu=".$_GET['datedu']."&dateau=".$_GET['dateau']."&budgetdu=".$_GET['budgetdu']."&budgetau=".$_GET['budgetau']."&superficiedu=".$_GET['superficiedu']."&superficieau=".$_GET['superficieau']."&cmd=list-motos&n={$i}&p={$p}&o={$o}\">{$i}</a>";

		else echo "&nbsp;{$i}";

	}



	if ($n != $j) echo "&nbsp;<a class=link_blue href=\"index.php?type=".$_GET['type']."&datedu=".$_GET['datedu']."&dateau=".$_GET['dateau']."&budgetdu=".$_GET['budgetdu']."&budgetau=".$_GET['budgetau']."&superficiedu=".$_GET['superficiedu']."&superficieau=".$_GET['superficieau']."&cmd=list-motos&n=" . ($n + 1) . "&p={$p}&o={$o}\">Suivante</a>";

	else echo "&nbsp;Suivante";

}

?>	</td></tr>


	</table>
</div>