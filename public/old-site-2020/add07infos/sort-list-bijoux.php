<?
require_once "../mysql.php";
/*$listingCounter=1;
$q = "SELECT * FROM bijoux  ORDER BY id ASC  ";
$r = mysql_query($q);
while ($row = mysql_fetch_array($r)) {
$query = "UPDATE bijoux SET pos3 = " . $listingCounter . ",pos4 = " . $listingCounter . ",pos5 = " . $listingCounter . ",pos6 = " . $listingCounter . ",pos7 = " . $listingCounter . ",pos8 = " . $listingCounter . ",pos9 = " . $listingCounter . ",pos10 = " . $listingCounter . " WHERE id = " . $row['id']; 
mysql_query($query);
$listingCounter++;	
}*/

if($_GET['pos']){

$query = "UPDATE bijoux SET pos".$_GET['sous_menu']." = ".$_GET['posprec']." WHERE id = " . $_GET['id']; 
mysql_query($query) or die(mysql_error()); 

$query = "UPDATE bijoux SET pos".$_GET['sous_menu']." = ".$_GET['posact']." WHERE id = " . $_GET['precedent']; 
mysql_query($query) or die(mysql_error()); 

}
?>
<?
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

	case 4 : $param = "id"; break;

}


if (!isset($_GET["npp"])) $npp = 20;

else $npp = $_GET["npp"];


$m = ($n - 1) * $npp;
//$q = "SELECT * FROM `biens` where 1 ";
$q = "SELECT * FROM bijoux  where menu=1 ";

if(($_GET['sous_menu'])!='')
$q .= " and sous_menu like '%".$_GET['sous_menu']."|%'  ";

if(($_GET['sous_sous_menu'])!='')
$q .= " and sous_sous_menu = ".$_GET['sous_sous_menu']." ";

if(($_GET['ref'])!='')
$q .= " and ref = ".$_GET['ref']." ";

if(($_GET['nom'])!='')
$q .= " and nom like '%".$_GET['nom']."%' ";

if($_GET['sous_menu']){
$param="pos".$_GET['sous_menu'];
$order="ASC";
}
$qu = $q . "ORDER BY {$param} {$order} LIMIT " . ($n - 1) * $npp . ",{$npp}";
//echo $qu;

$r = mysql_query($qu);

$num = mysql_num_rows($r);
?>
		<table width="700" cellpadding="3" cellspacing="1" border="0"  bgcolor="#104E8B">
		<tr bgcolor="#1874CD">
			<td width="50" class="txt_table_head" align="center"><strong>Réf</strong></td>
			<td width="100" class="txt_table_head" align="center"><strong>Nom</strong></td>
			<td width="100" class="txt_table_head" align="center"><strong>Descriptif</strong></td>
			<td width="150" class="txt_table_head" align="center"><strong>Action</strong></td>
		</tr>
		<?
		$i=1;
		while ($row = mysql_fetch_array($r)) {
		 ?>
		<tr bgcolor="#FFFFFF" onMouseOver="bgColor='#CAE5FF';" onMouseOut="bgColor='#FFFFFF';">
			<td class="txt_table" align="center"><?=$row['ref']?></td>
			<td class="txt_table" align="left"><?=substr($row['nom'],0,120)?></td>
			<td class="txt_table" align="left"><?=substr($row['descriptif'],0,120)?></td>
			<td align="center" valign="middle">
          <? if($_GET['sous_sous_menu'] && $_GET['sous_menu'] && $i>1){?>  <a  href="javascript:void(0);"   onclick="javascript:update_list('cmd=list-bijoux&id=<?=$row['id']?>&sous_menu=<?=$_GET['sous_menu']?>&sous_sous_menu=<?=$_GET['sous_sous_menu']?>&pos=1&precedent=<?=$id?>&posprec=<?=$posprec?>&posact=<?=$row['pos'.$_GET['sous_menu']]?>');" title="Monter d'un niveau"><img src="img/up.png" width="16" height="16" alt="Monter d'un niveau" border="0" /></a>&nbsp;<? }?>
            <a href="index.php?cmd=add-bijoux&id=<?=$row['id']?>&sous_menu=<?=$_GET['sous_menu']?>&sous_sous_menu=<?=$_GET['sous_sous_menu']?>" title="Editer"><img src="img/icon-edit.gif" width="16" height="16" alt="Editer" border="0" /></a>&nbsp;
            <a href="index.php?cmd=delete-bijoux&id=<?=$row['id']?>" title="Effacer"><img src="img/icon-delete.gif" width="16" height="16" alt="Effacer" border="0" /></a>&nbsp;
			</td>
		</tr>
		<? 
		   $i++;
		   $id=$row['id'];
		   $posprec=$row['pos'.$_GET['sous_menu']];
		
		}
		?>
		</table>
