<?
//$listingCounter=1;
//$q = "SELECT * FROM pub  ORDER BY id ASC  ";
//$r = mysql_query($q);
//while ($row = mysql_fetch_array($r)) {
//$query = "UPDATE pub SET pos = " . $listingCounter . " WHERE id = " . $row['id']; 
//mysql_query($query);
//$listingCounter++;	
//}

if($_GET['pos']){

$query = "UPDATE pub SET pos = ".$_GET['posprec']." WHERE id = " . $_GET['id']; 
mysql_query($query) or die(mysql_error()); 

$query = "UPDATE pub SET pos = ".$_GET['posact']." WHERE id = " . $_GET['precedent']; 
mysql_query($query) or die(mysql_error()); 

}

$q = "SELECT * FROM `pub` order by pos ASC";

$r = mysql_query($q);

$num = mysql_num_rows($r);
?>
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr><td colspan="">
<input type="button" id="ulaitem0z2z3"  onclick="window.location='index.php?cmd=add-pub'" value="Ajouter Pub" />
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
	<td class="txt_title">&nbsp;&nbsp;&nbsp;<strong>La liste avec touts les pub :</strong></td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="5" alt=""></td></tr>
<tr>
	<td>
		
		<div align="center">
		<table width="700" cellpadding="3" cellspacing="1" border="0" bgcolor="#104E8B">
		<tr bgcolor="#1874CD">
			<td width="50" class="txt_table_head" align="center"><strong>image</strong></td>
			<td width="150" class="txt_table_head" align="center"><strong>Action</strong></td>
		</tr>
		<?
		$i=1;
		while ($row = mysql_fetch_array($r)) {
		 ?>
		<tr bgcolor="#FFFFFF" onMouseOver="bgColor='#CAE5FF';" onMouseOut="bgColor='#FFFFFF';">
			<td class="txt_table" align="center"><? if ($row['petite_image']) { ?><img width="96" height="124" src="../photos/<?=$row['petite_image']?>" /><? }?></td>
			<td align="center" valign="middle">
          <? if($i>1){?>  <a href="index.php?cmd=list-pub&id=<?=$row['id']?>&pos=1&precedent=<?=$id?>&posprec=<?=$posprec?>&posact=<?=$row['pos']?>" title="Monter d'un niveau"><img src="img/up.png" width="16" height="16" alt="Monter d'un niveau" border="0" /></a>&nbsp;<? }?>
				<a href="index.php?cmd=add-pub&id=<?=$row['id']?>" title="Editer l'annonce -> admin"><img src="img/icon-edit.gif" width="16" height="16" alt="Editer l'annonce -> admin" border="0" /></a>&nbsp;
				<a href="index.php?cmd=delete-pub&id=<?=$row['id']?>" title="Effacer l'annonce -> admin"><img src="img/icon-delete.gif" width="16" height="16" alt="Effacer l'annonce -> admin" border="0" /></a>&nbsp;
			</td>
		</tr>
		<? 
		   $i++;
		   $id=$row['id'];
		   $posprec=$row['pos'];
		
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

		<img src="img/icon-edit.gif" width="16" height="16" alt="" border="0" /> - Editer la pub <br />
		<img src="img/icon-delete.gif" width="16" height="16" alt="" border="0" /> - Effacer la pub <br />
		</div>
	</td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="12" alt=""></td></tr>

<tr><td><img src="img/spacer.gif" width="1" height="55" alt=""></td></tr>
		</table>

