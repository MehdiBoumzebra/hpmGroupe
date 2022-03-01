<?
if (!isset($_GET["o"])) $o = 1;

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

	case 1 : $param = "emploie.id"; break;

	case 2 : $param = "type"; break;

	case 3 : $param = "prix_t"; break;

	case 4 : $param = "id"; break;

}



$npp = 7;

$m = ($n - 1) * $npp;

$r=$_GET['r']?$_GET['r']:1;

$q = "SELECT * FROM emploie ";

$qu = $q . " ORDER BY id {$order} LIMIT " . ($n - 1) * $npp . ",{$npp}";


//echo $qu;
$r = mysql_query($qu) or die(mysql_error());

$row = mysql_fetch_array($r);

?>
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr><td><img src="img/spacer.gif" width="1" height="10" alt=""></td></tr>		<tr>
<tr><td colspan="" align="center">
<input type="button" id="ulaitem0z2z3"  class="button_1"  onmouseover="this.style.backgroundColor='#1E90FF'" onmouseout="this.style.backgroundColor='#1874CD'" onclick="window.location='index.php?cmd=add-offres&type=<?=$_GET['type']?>&r=<?=$_GET['r']?>'" value="Ajouter" />
<br />
</td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="10" alt=""></td></tr>		<tr>
			<td>
			</td>
		</tr>
<tr><td><img src="img/spacer.gif" width="1" height="1" alt=""></td></tr>
<tr>
	<td class="txt_title" align="center">&nbsp;&nbsp;&nbsp;<strong>Lites Offres:</strong></td>
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
		<table width="912" cellpadding="3" cellspacing="1" border="0" bgcolor="#104E8B">
		<tr bgcolor="#45537A" style="color:#FFF">
			<td width="101" class="txt_table_head" align="center"><strong>Poste</strong></td>
			<td width="72" align="center" class="txt_table_head"><strong>Contrat</strong></td>
			<td width="78" align="center" class="txt_table_head"><strong>Région</strong></td>
			<td width="43" class="txt_table_head" align="center"><strong>Action</strong></td>
		</tr>
		<?
        $r = mysql_query($qu);
		$num = mysql_num_rows($r);
		if($num>0){
		while ($row = mysql_fetch_array($r)) {
		 ?>
		<tr bgcolor="#FFFFFF" onMouseOver="bgColor='#CAE5FF';" onMouseOut="bgColor='#FFFFFF';">
			<td class="txt_table" align="left"><?=substr($row['titre_du_poste'],0,120)?></td>
			<td align="left" class="txt_table"><?=substr($row['Contrat'],0,120)?></td>
			<td align="left" class="txt_table"><?=substr($row['Region'],0,120)?></td>
			<td align="center" valign="middle">
				<a href="index.php?cmd=add-offres&id=<?=$row[0]?>&type=<?=$_GET['type']?>" title="Editer l'article"><img src="img/icon-edit.gif" width="16" height="16" alt="Editer l'article" border="0" /></a>&nbsp;
				<a href="index.php?cmd=delete-offres&id=<?=$row[0]?>&type=<?=$_GET['type']?>" title="Effacer l'article"><img src="img/icon-delete.gif" width="16" height="16" alt="Effacer Revue" border="0" /></a>&nbsp;			</td>
		</tr>
		<? }}else {echo "<tr height=30 valign=middle bgcolor='#FFFFFF'><td align=center colspan=7><strong>Aucune offre n'a été trouvée.</strong></td></tr>";}?>
		</table>
	  </div>
		
	</td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="21" alt=""></td></tr>
<tr><td><img src="img/spacer.gif" width="1" height="21" alt=""></td></tr>
<tr><td align="center">

<?php



//$q = "SELECT * FROM `moto`";
$r = mysql_query($q);
$num = mysql_num_rows($r);



if ($num > $npp) {

	echo "Pages&nbsp;:";

	if ($num % $npp == 0) $j = $num / $npp;

	else $j = ($num - ($num % $npp)) / $npp + 1;



	for ($i = 1; $i <= $j; $i++) {

		if ($n != $i) echo "&nbsp;<a class=link_blue  href=\"index.php?r=".$_GET['r']."&type=".$_GET['type']."&cmd=list-emploie&n={$i}&cmd={$p}&o={$o}\">{$i}</a>";

		else echo "&nbsp;<strong style='font-size:16px'>[ {$i} ]</strong>";

	}



	if ($n != $j) echo "&nbsp;<a class=link_blue href=\"index.php?r=".$_GET['r']."&type=".$_GET['type']."&cmd=list-emploie&n=" . ($n + 1) . "&cmd={$p}&o={$o}\">Suivante</a>";

	else echo "&nbsp;Suivante";

}

?>	</td></tr>

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

