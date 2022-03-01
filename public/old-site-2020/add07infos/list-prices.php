<?

if($_POST['sub']=="ok"){
$q="update prices set price=".$_POST['price']." where id=".$_POST['id'];
if(mysql_query($q))
echo 'modification effectuée avec succès.';
else
echo mysql_error();
}

$q = "select prices.*, destination.id, destination.name as destdep,destination1.id, destination1.name as destarr,transfert_type.name as tname from transfert_type, (prices inner join destination on prices.depart = destination.id) inner join destination AS destination1 on prices.arrive = destination1.id where prices.transfert_type=transfert_type.id and prices.transfert_type=".$_GET['type']."  order by destination.id,max_passager ASC";

//group by destination.id,destination1.id$q = "select prices.*, destination.id, destination.name as destdep,destination1.id, destination1.name as destarr,transfert_type.name as tname,services.name as sname from transfert_type,services, (prices inner join destination on prices.depart = destination.id) inner join destination AS destination1 on prices.arrive = destination1.id where prices.transfert_type=transfert_type.id or prices.service=services.id group by prices.service";

$r = mysql_query($q);

$num = mysql_num_rows($r);
//echo $num;
?>
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr><td><img src="img/spacer.gif" width="1" height="10" alt=""></td></tr>		<tr>
			<td>
			</td>
		</tr>
<tr><td><img src="img/spacer.gif" width="1" height="1" alt=""></td></tr>
<tr>
	<td class="txt_title">&nbsp;&nbsp;&nbsp;<strong>La liste avec touts les administrateurs:</strong></td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="5" alt=""></td></tr>
<tr>
	<td>
		
		<div align="center">
		<table width="700" cellpadding="3" cellspacing="1" border="0" bgcolor="#104E8B">
		<tr bgcolor="#1874CD">
			<td width="30%" class="txt_table_head" align="center"><strong>Depart</strong></td>
			<td width="30%" class="txt_table_head" align="center"><strong>Arrivée</strong></td>
			<td width="10%" class="txt_table_head" align="center"><strong>Max. PAX</strong></td>
			<td width="20%" class="txt_table_head" align="center"><strong>Type de transfert</strong></td>
			<td width="10%" class="txt_table_head" align="center"><strong>Prix</strong></td>
            <td width="10%" class="txt_table_head" align="center"><strong>Action</strong></td>
		</tr>
		<?
		while ($row = mysql_fetch_array($r)) {
		 ?>
		<form name=formres<?=$row[0]?>d id=formres<?=$row[0]?>d action=<?=$_SERVER['PHP_SELF']?>?cmd=list-prices method=post><tr bgcolor="#FFFFFF" onMouseOver="bgColor='#CAE5FF';" onMouseOut="bgColor='#FFFFFF';">
			<td class="txt_table" align="center"><?=$row['destdep']?></td>
			<td class="txt_table" align="center"><?=$row['destarr']?></td>
			<td class="txt_table" align="center"><?=$row['max_passager']?></td>
			<td class="txt_table" align="center"><?=$row['tname']?></td>
			<td class="txt_table" align="center"><input type="text" size="3" name="price" value="<?=$row['price']?>" /><input type="hidden" value="<?=$row[0]?>" name="id" /><input type="hidden" value="ok" name="sub" /> <? //if($row['per1'])echo " par pers."?></td>
			<td align="center" valign="middle">
				<a onclick="document.getElementById('formres<?=$row[0]?>d').submit();" href="#" title="Modifier le prix">Modifier</a>
			</td>
		</tr></form>
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

		<img src="img/icon-edit.gif" width="16" height="16" alt="" border="0" /> - Editer l'utilisateur <br />
		<img src="img/icon-delete.gif" width="16" height="16" alt="" border="0" /> - Effacer l'utilisateur <br />
		</div>
	</td>
</tr>
<tr><td><img src="img/spacer.gif" width="1" height="12" alt=""></td></tr>

<tr><td><img src="img/spacer.gif" width="1" height="55" alt=""></td></tr>
		</table>

