<?
if($_GET['id']){

$q = "SELECT * FROM livraison WHERE livraison.id = {$_GET["id"]}";

$r = mysql_query($q);
$row = mysql_fetch_array($r);
}
?>
<style type="text/css">
#detail {
        /*border: 2px dashed #0000ff;*/
	background-color: #ffffff !important;
}
#nicEditContent {
        /*border: 2px dashed #0000ff;*/
	background-color: #ffffff !important;
}

/*.nicEdit-selected {
        border: 2px solid #0000ff !important;
}

.nicEdit-panel {
	background-color: #fff !important;
}

.nicEdit-button {
	background-color: #fff !important;
}
*/</style>
		<div align="center">
		<div class="div_main">
			<br/>
			<div class="txt_1"><b>Ajouter/editer mode de livraison</b></div>
			<div id="general_icon" style="background-image:url(img_icons/icon-admin-add.gif);"></div>
			
			<div class="div_form">
				<form name="form12" id="form12" action="process-livraison.php" method="post" enctype="multipart/form-data">
                     <? if ($_GET["id"]) { ?>
				<input name="action" value="modify" type="hidden">
				<input name="id" value="<?=$_GET["id"]?>" type="hidden">
                    <? }else {?>
				<input name="action" value="add" type="hidden">
                    <?  }?>
			<table width="700" cellpadding="2" cellspacing="2" border="0" align="center">
				<tr>
					<td width="30%" class="txt_small">&nbsp;</td>
					<td width="70%" class="txt_small">&nbsp;</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Mode de livraison : </b></td>
					<td class="txt_black" align="left"><input name="libelle" type="text" size="21" maxlength="99" value="<?=$row['libelle']?>"></td>
                 </tr> 
				<tr>
					<td class="txt_black" align="left"><b>Coût : </b></td>
					<td class="txt_black" align="left"><input name="cout" type="text" size="21" maxlength="99" value="<?=$row['cout']?>"></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Type : </b></td>
					<td class="txt_black" align="left">	<select style="display:block" name="type" id="type">
                                                            <option <?=$row['type']==1?"selected":""?> value="1">Maroc</option>
                                                            <option <?=$row['type']==2?"selected":""?> value="2">Etrangers</option>
                                                        </select>
</td>
				</tr>
    			<tr>
                	<td colspan="2" class="txt_black" align="center"><br />
						<input type="submit" name="SubmitAll" class="button_1" value="   Valider   " onmouseover="this.style.backgroundColor='#1E90FF'" onmouseout="this.style.backgroundColor='#1874CD'" onClick="send('form12');return false;" />
					</td>
                  </tr>			  
				</table>
				</form>
			</div>
			<br/>
		</div>
		<br/>
		<a href="index.php?cmd=list-users" class="link_blue">Afficher les administrateurs</a> | <a href="index.php?cmd=add-user" class="link_blue">Ajouter un administrateur</a> 
        <script>//window.onload=top.frames[0].document.getElementById('nicEditContent').style.backgroundColor="#fff"; </script>
