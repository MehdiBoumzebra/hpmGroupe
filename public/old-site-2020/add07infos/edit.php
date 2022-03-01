<?

@require_once "../../mysql.php";



if (!isset($_GET["o"])) $o = 0;

else $o = $_GET["o"];

	

if (!isset($_GET["p"])) $p = 1;

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

	case 3 : $param = "ville"; break;

	case 4 : $param = "date"; break;

	case 5 : $param = "prix"; break;

	case 6 : $param = "sexe"; break;

}



$npp = 15;



$m = ($n - 1) * $npp;

?>

<html>



<head>
<meta http-equiv="pragma" content="no-cache">
<link href="../main.css" rel="stylesheet" type="text/css">

<script language="JavaScript" type="text/javascript" src="../main.js"></script>

</head>



<body>

<table cellPadding="0" cellSpacing="0" width="98%" align="center" height="100%">

<tr valign="top">

<td height="30"><img src="../arrow.gif" width="12" height="12">&nbsp;<span class="overtitle">IMMEUBLES</span>&nbsp;<img src="../arrow.gif" width="12" height="12">&nbsp;<span class="overtitle">Liste des annonces</span></td>

</tr>



<tr>

<td height="10"></td>

</tr>

<tr>

<td height="10"><form action="<?=$_SERVER['PHP_SELF']?>" method="get">
<input type="hidden" name="type" value="<?=$_GET['type']?>">
Recherche par reference : &nbsp;<input name="sRef" style="width:70px">&nbsp;&nbsp;<input type="submit" value="OK"></form></td>

</tr>

<tr valign="top">

<td height="100">

	<table align="center" cellSpacing="5">

	<tr>

	<td align="center" width="100"><b><a title="Trier par `reference` | <?= ($p == 1 && $o == 0) ? $order2 : $order1 ?>" href="<?= $_SERVER["PHP_SELF"] ?>?<? echo (($p == 1 && $o == 0)?"p=1&o=1&n={$n}&type=".$_GET['type']."":"p=1&o=0&n={$n}&type=".$_GET['type']."") ?>">REFERENCE <?= ($p == 1 && $o == 0) ? "&darr;" : "&uarr;" ?></a></b></td>

	<td align="center" width="200"><b><a title="Trier par `nom (FR)` | <?= ($p == 2 && $o == 0) ? $order2 : $order1 ?>" href="<?= $_SERVER["PHP_SELF"] ?>?<? echo (($p == 2 && $o == 0)?"p=2&o=1&n={$n}&type=".$_GET['type']."":"p=2&o=0&n={$n}&type=".$_GET['type']."") ?>">TYPE <?= ($p == 2 && $o == 0) ? "&darr;" : "&uarr;" ?></a></b></td>

	<td align="center" width="100"><b><a title="Trier par `marque` | <?= ($p == 3 && $o == 0) ? $order2 : $order1 ?>" href="<?= $_SERVER["PHP_SELF"] ?>?<? echo (($p == 3 && $o == 0)?"p=3&o=1&n={$n}&type=".$_GET['type']."":"p=3&o=0&n={$n}&type=".$_GET['type']."") ?>">VILLE<?= ($p == 3 && $o == 0) ? "&darr;" : "&uarr;" ?></a></b></td>

	<td align="center" width="100"><b><a title="Trier par `categorie` | <?= ($p == 4 && $o == 0) ? $order2 : $order1 ?>" href="<?= $_SERVER["PHP_SELF"] ?>?<? echo (($p == 4 && $o == 0)?"p=4&o=1&n={$n}&type=".$_GET['type']."":"p=4&o=0&n={$n}&type=".$_GET['type']."") ?>">DATE DE VENTE <?= ($p == 4 && $o == 0) ? "&darr;" : "&uarr;" ?></a></b></td>

<!--	<td align="center" width="100"><b><a title="Trier par `sexe` | <?= ($p == 6 && $o == 0) ? $order2 : $order1 ?>" href="<?= $_SERVER["PHP_SELF"] ?>?<? echo (($p == 6 && $o == 0)?"p=6&o=1&n={$n}&type=".$_GET['type']."":"p=6&o=0&n={$n}&type=".$_GET['type']."") ?>">SEXE <?= ($p == 6 && $o == 0) ? "&darr;" : "&uarr;" ?></a></b></td>
-->
	<td align="center" width="100"><b><a title="Trier par `etat` | <?= ($p == 5 && $o == 0) ? $order2 : $order1 ?>" href="<?= $_SERVER["PHP_SELF"] ?>?<? echo (($p == 5 && $o == 0)?"p=5&o=1&n={$n}&type=".$_GET['type']."":"p=5&o=0&n={$n}&type=".$_GET['type']."") ?>">PRIX <?= ($p == 5 && $o == 0) ? "&darr;" : "&uarr;" ?></a></b></td>

	<td align="center" width="120"><b>ACTION</b></td>

	</tr>

	<tr>

	<td colspan="8"><hr style="color: black; height: 2px"></td>

	</tr>

<?

$q = "SELECT * FROM `immeubles` where type_ventes='".$_GET['type']."' ORDER BY {$param} {$order} LIMIT " . ($n - 1) * $npp . ",{$npp}";
if($_GET['sRef']!='') 
$q = "SELECT * FROM `immeubles` where type_ventes='".$_GET['type']."' and ref='".$_GET['sRef']."' ORDER BY {$param} {$order} LIMIT " . ($n - 1) * $npp . ",{$npp}";
$r = mysql_query($q);

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

	<td align="center"><?= $row["ref"] ?></td>

	<td align="center"><?= $row["type"] ?></td>

	<td align="center"><?= $row["ville"] ?></td>

	<td align="center"><?= dd($row["date"])?></td>

	<td align="center"><?= $row["prix"] ?></td>

	<td align="center"><a href="process.php?action=<?= $row["affichee"] ? "0":"1" ?>&id=<?= $row["id"] ?>"><?= $row["affichee"] ? "Masquer":"Afficher" ?></a> - <a href="modify.php?id=<?= $row["id"] ?>&type=<?=$_GET['type']?>">Modifier</a> - <a href="delete.php?id=<?= $row["id"] ?>&type=<?=$_GET['type']?>">Supprimer</a></td>

	</tr>

<?

}

?>

	<tr>

	<td colspan="8"><hr style="color: black; height: 2px"></td>

	</tr>

	<tr>

	<td colspan="7"><?php



$q = "SELECT * FROM `immeubles` where type_ventes='".$_GET['type']."'";
if($_GET['sRef']!='') 
$q = "SELECT * FROM `immeubles` where type_ventes='".$_GET['type']."' and ref='".$_GET['sRef']."'";
//echo $q;
$r = mysql_query($q);

$num = mysql_num_rows($r);



if ($num > $npp) {

	echo "Pages&nbsp;:";

	if ($num % $npp == 0) $j = $num / $npp;

	else $j = ($num - ($num % $npp)) / $npp + 1;



	for ($i = 1; $i <= $j; $i++) {

		if ($n != $i) echo "&nbsp;<a href=\"edit.php?n={$i}&p={$p}&o={$o}&type=".$_GET['type']."\">{$i}</a>";

		else echo "&nbsp;{$i}";

	}



	if ($n != $j) echo "&nbsp;<a href=\"edit.php?n=" . ($n + 1) . "&p={$p}&o={$o}&type=".$_GET['type']."\">Suivante</a>";

	else echo "&nbsp;Suivante";

}

?></td>

	<td align="right"><button style="width: 80px" onClick="goto('.')">RETOUR</button></td>

	</tr>

	</table>

</td>

</tr>



<tr>

<td height="10"></td>

</tr>



<tr>

<td colspan="2" height="10"><div class="expli" align="center">Pour modifier ou supprimer une annonce, cliquez sur le bouton correspondant sur la ligne du produit désiré.<br />Vous pouvez classer la liste par ordre croissant ou décroissant en cliquant sur l'intitulé de la colonne, pour faciliter vos recherches.</td>

</tr>



<tr>

<td></td>

</tr>



<tr>

<td height="30"></td>

</tr>





</table>

</body>



</html>