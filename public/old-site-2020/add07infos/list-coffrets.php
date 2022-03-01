<script>
	function handleHttpResponse2() {
	  if (xmlhttp.readyState == 4) {	
		rep=xmlhttp.responseText;
		//alert(rep);
		if(rep){
				
				document.getElementById('content').innerHTML=(rep);
			//document.write(json_parse(rep));
		}
		else{
			//document.getElementById('text').innerHTML=xmlhttp.responseText;
		}
	  }
	 else
	   {
		//document.getElementById('text').innerHTML=
			//"En cours...";
	   }
	};

function sendData(method, url, data,h)
 {//alert("ok");
  if(window.XMLHttpRequest) // Firefox
      xmlhttp = new XMLHttpRequest();
   else if(window.ActiveXObject) // Internet Explorer
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
   else { // XMLHttpRequest non support par le navigateur
      alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest...");
      return;
   }

    if(method == "GET")
     {
     if(data == 'null')
     {
            xmlhttp.open("GET", url, true); //ouverture asynchrone
     }
     else
     {
 xmlhttp.open("GET", url+"?"+data, true);
     }
        xmlhttp.send(null);
     }

     else if(method == "POST")
     {
        xmlhttp.open("POST", url, true); //ouverture asynchrone
        xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
     	xmlhttp.send(data);
     }
	  xmlhttp.onreadystatechange = h;
    return true;
 };
function update_list(data){
	document.getElementById('content').innerHTML='Mise a jour en cours ... (si ca depasse les 5 sec cliquer sur le bouton filtrer)';
	sendData('GET','sort-list-coffrets.php',data,handleHttpResponse2)

}
</script>
<?
/*$listingCounter=1;
$q = "SELECT * FROM coffrets  ORDER BY id ASC  ";
$r = mysql_query($q);
while ($row = mysql_fetch_array($r)) {
$query = "UPDATE coffrets SET pos3 = " . $listingCounter . ",pos4 = " . $listingCounter . ",pos5 = " . $listingCounter . ",pos6 = " . $listingCounter . ",pos7 = " . $listingCounter . ",pos8 = " . $listingCounter . ",pos9 = " . $listingCounter . ",pos10 = " . $listingCounter . " WHERE id = " . $row['id']; 
mysql_query($query);
$listingCounter++;	
}*/

if($_GET['pos']){

$query = "UPDATE coffrets SET pos".$_GET['sous_menu']." = ".$_GET['posprec']." WHERE id = " . $_GET['id']; 
mysql_query($query) or die(mysql_error()); 

$query = "UPDATE coffrets SET pos".$_GET['sous_menu']." = ".$_GET['posact']." WHERE id = " . $_GET['precedent']; 
mysql_query($query) or die(mysql_error()); 

}
?>
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
<!--<tr><td colspan="">
		<table width="700" cellpadding="3" cellspacing="0" border="0">
<form   method="get" id="formvol" name="formvol">
<input type="hidden" name="cmd" value="list-coffrets" id="cmd">
<tr><td colspan="">Collections : </td><td>
					<select name="sous_menu" id="sous_menu">
					<option value="">Tout les collections</option>
					<?	
						$r = mysql_query("SELECT * FROM sous_menu where menu=1 order by id ASC");
						while ($type = mysql_fetch_array($r)) {
		
					?>
					<option value="<?= $type["id"] ?>" <?= $type["id"]==$_GET['sous_menu']? 'selected':''?>><?= $type["titre"] ?></option>
					<? } ?>
		
					</select></td></tr>
<tr><td colspan="">Sous categorie  : </td><td>
					<select name="sous_sous_menu" id="sous_sous_menu">
					<option value="">Tous</option>
					<?	
						$r = mysql_query("SELECT * FROM sous_sous_menu order by id ASC");
						while ($type = mysql_fetch_array($r)) {
		
					?>
					<option value="<?= $type["id"] ?>" <?= $type["id"]==$_GET['sous_sous_menu']? 'selected':''?>><?= $type["sous_sous_menu"] ?></option>
					<? } ?>
		
					</select></td></tr>
<tr><td>Nom </td>
<td>
<input type="text" name="nom" value="<?=$_GET['nom']?>" id="nom">
</td></tr>
<tr><td>Réf </td>
<td>
<input type="text" name="ref" value="<?=$_GET['ref']?>" id="ref">
</td></tr>
<tr><td align="left" colspan="2"><input type="submit" value="   FILTRER   "></td></tr>

<tr><td height="15px" align="left" colspan="2">&nbsp;</td></tr>
					

</form>
</table>
</td>
</tr>
--><?
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
$q = "SELECT * FROM coffrets  where 1 ";

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
<tr>
	<td class="txt_title" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>La liste des coffrets :</strong></td>
</tr>
<tr><td colspan="" align="center">
<input type="button" id="ulaitem0z2z3" class="button_1" onmouseover="this.style.backgroundColor='#1E90FF'" onmouseout="this.style.backgroundColor='#1874CD'"   onclick="window.location='index.php?cmd=add-coffrets'" value="Ajouter" />
</td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="5" alt=""></td></tr>
<tr><td><img src="img/spacer.gif" width="1" height="5" alt=""></td></tr>
<tr>
	<td align="center">
		<table width="700" cellpadding="3" cellspacing="1" border="0" >
        <tr bgcolor="#FFFFFF" style="border-color:#fff"><td colspan="4">Nbr Element par page : <a href="<?=$_SERVER['PHP_SELF']."?npp=20&sous_sous_menu=".$_GET['sous_sous_menu']."&sous_menu=".$_GET['sous_menu']."&nom=".$_GET['nom']."&ref=".$_GET['ref']."&cmd=list-coffrets&n={$n}&p={$p}&o={$o}"?>">20</a> - <a href="<?=$_SERVER['PHP_SELF']."?npp=50&sous_sous_menu=".$_GET['sous_sous_menu']."&sous_menu=".$_GET['sous_menu']."&nom=".$_GET['nom']."&ref=".$_GET['ref']."&cmd=list-coffrets&n={$n}&p={$p}&o={$o}"?>">50</a> - <a href="<?=$_SERVER['PHP_SELF']."?npp=10000&sous_sous_menu=".$_GET['sous_sous_menu']."&sous_menu=".$_GET['sous_menu']."&nom=".$_GET['nom']."&ref=".$_GET['ref']."&cmd=list-coffrets&n={$n}&p={$p}&o={$o}"?>">Tout</a></td></tr>
<tr><td bgcolor="#FFFFFF" colspan="4" ><img src="img/spacer.gif" width="1" height="5" alt=""></td></tr>
</table>		
		<div align="center" id="content">
		<table width="700" cellpadding="3" cellspacing="1" border="0"  bgcolor="#104E8B">
		<tr bgcolor="#1874CD">
			<td width="50" class="txt_table_head" align="center"><strong>Image</strong></td>
			<td width="100" class="txt_table_head" align="center"><strong>Nom</strong></td>
			<td width="100" class="txt_table_head" align="center"><strong>Description</strong></td>
			<td width="150" class="txt_table_head" align="center"><strong>Action</strong></td>
		</tr>
		<?
		$i=1;
		while ($row = mysql_fetch_array($r)) {
		 ?>
		<tr bgcolor="#FFFFFF" onMouseOver="bgColor='#CAE5FF';" onMouseOut="bgColor='#FFFFFF';">
			<td class="txt_table" align="center"><? if ($row['image']) { ?><img width="96" height="124" src="../bimages/<?=$row['image']?>" /><? }?></td>
			<td class="txt_table" align="left"><?=substr($row['nom'],0,120)?></td>
			<td class="txt_table" align="left"><?=substr($row['description'],0,120)?></td>
			<td align="center" valign="middle">
          <? if($_GET['sous_sous_menu'] && $_GET['sous_menu'] && $i>1){?>  <a  href="javascript:void(0);"   onclick="javascript:update_list('cmd=list-coffrets&id=<?=$row['id']?>&sous_menu=<?=$_GET['sous_menu']?>&sous_sous_menu=<?=$_GET['sous_sous_menu']?>&pos=1&precedent=<?=$id?>&posprec=<?=$posprec?>&posact=<?=$row['pos'.$_GET['sous_menu']]?>');" title="Monter d'un niveau"><img src="img/up.png" width="16" height="16" alt="Monter d'un niveau" border="0" /></a>&nbsp;<? }?>
            <a href="index.php?cmd=add-coffrets&id=<?=$row['id']?>&sous_menu=<?=$_GET['sous_menu']?>&sous_sous_menu=<?=$_GET['sous_sous_menu']?>" title="Editer"><img src="img/icon-edit.gif" width="16" height="16" alt="Editer" border="0" /></a>&nbsp;
            <a href="index.php?cmd=delete-coffrets&id=<?=$row['id']?>" title="Effacer"><img src="img/icon-delete.gif" width="16" height="16" alt="Effacer" border="0" /></a>&nbsp;
            <a href="index.php?cmd=list-activite&cof=<?=$row['id']?>" title="Liste d'activite de ce coffret"><img src="img/list-act.png" alt="Liste d'activite de ce coffret" border="0" /></a>&nbsp;
			</td>
		</tr>
		<? 
		   $i++;
		   $id=$row['id'];
		   $posprec=$row['pos'.$_GET['sous_menu']];
		
		}?>
		</table>
		</div>
		
	</td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="21" alt=""></td></tr>
<tr>
	<td class="txt_black" align="center">
		<div style="width:700px;" align="left">
		<strong>Explication:</strong><br />

		<!--<img src="img/up.png"  alt="" border="0" /> - Monter d'un niveau <br />-->
		<img src="img/icon-edit.gif" width="16" height="16" alt="" border="0" /> - Editer <br />
		<img src="img/icon-delete.gif" width="16" height="16" alt="" border="0" /> - Effacer<br />
		</div>
	</td>
</tr>
<tr height="20px"><td></td></tr>
<tr><td>

<?php



//$q = "SELECT * FROM `biens`";
$r = mysql_query($q);
$num = mysql_num_rows($r);



if ($num > $npp) {

	echo "Pages&nbsp;:";

	if ($num % $npp == 0) $j = $num / $npp;

	else $j = ($num - ($num % $npp)) / $npp + 1;



	for ($i = 1; $i <= $j; $i++) {

		if ($n != $i) echo "&nbsp;<a class=link_blue  href=\"index.php?sous_sous_menu=".$_GET['sous_sous_menu']."&sous_menu=".$_GET['sous_menu']."&nom=".$_GET['nom']."&ref=".$_GET['ref']."&cmd=list-coffrets&n={$i}&p={$p}&o={$o}\">{$i}</a>";

		else echo "&nbsp;{$i}";

	}



	if ($n != $j) echo "&nbsp;<a class=link_blue href=\"index.php?sous_sous_menu=".$_GET['sous_sous_menu']."&sous_menu=".$_GET['sous_menu']."&nom=".$_GET['nom']."&ref=".$_GET['ref']."&cmd=list-coffrets&n=" . ($n + 1) . "&p={$p}&o={$o}\">Suivante</a>";

	else echo "&nbsp;Suivante";

}

?>	</td></tr>

<tr><td><img src="img/spacer.gif" width="1" height="12" alt=""></td></tr>

<tr><td><img src="img/spacer.gif" width="1" height="55" alt=""></td></tr>
		</table>

