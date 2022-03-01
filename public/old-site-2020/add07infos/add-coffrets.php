<?
//echo "la pos : ".strpos("5|8|6|","7|");
if($_GET['id']){
$q = "SELECT * FROM `coffrets` WHERE id = {$_GET["id"]}";

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
<script language="javascript" type="text/javascript" src="nicedit/nicEdit.js"></script>
<script type="text/javascript">
bkLib.onDomLoaded(function() {
	//new nicEditor().panelInstance('detail');,maxHeight : 500
	new nicEditor({fullPanel : true,iconsPath : 'nicedit/nicEditorIcons.gif'}).panelInstance('detail');
	//new nicEditor({iconsPath : '../nicEditorIcons.gif'}).panelInstance('area3');
	//new nicEditor({buttonList : ['fontSize','bold','italic','underline','strikeThrough','subscript','superscript','html','image']}).panelInstance('area4');
	//new nicEditor({}).panelInstance('area5');
});
</script>

		<div align="center">
		<div class="div_main">
			<br/>
			<div class="txt_1"><b>Editer coffrets:</b></div>
			<div id="general_icon" style="background-image:url(img_icons/icon-admin-add.gif);"></div>
			
			<div class="div_form">
				<form name="form12" id="form12" action="process-coffrets.php" method="post" enctype="multipart/form-data">
                    <? if ($row['id']) { ?>
				<input name="action" value="modify" type="hidden">
				<input name="id" value="<?=$row['id']?>" type="hidden">
                    <? }else {?>
				<input name="action" value="add" type="hidden">
                    <?  }?>
			<table width="700" cellpadding="2" cellspacing="2" border="0" align="center">
				<tr>
					<td width="30%" class="txt_small">&nbsp;</td>
					<td width="70%" class="txt_small">&nbsp;</td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Nom : </b></td>
					<td class="txt_black" align="left"><input name="nom" type="text" size="21" maxlength="99" value="<?=$row['nom']?>"></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Prix : </b></td>
					<td class="txt_black" align="left"><input name="prix" type="text" size="21" maxlength="99" value="<?=$row['prix']?>"></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Code Promo : </b></td>
					<td class="txt_black" align="left"><textarea name="promo" type="text" size="21" cols="80" rows="4" maxlength="99"><?=$row['promo']?></textarea></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Date limite d'utilisation : </b></td>
					<td class="txt_black" align="left"><input name="date_limit" type="text" size="21" maxlength="99" value="<?=$row['date_limit']?>"></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Pourcentage : </b></td>
					<td class="txt_black" align="left"><input name="pourcent" type="text" size="21" maxlength="99" value="<?=$row['pourcent']?>"></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Description: </b></td>
					<td class="txt_black" align="left"><textarea name="descriptif" id="descriptif"  cols="80" rows="10"><?=$row['description']?></textarea></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Detail: </b></td>
					<td class="txt_black" align="left"><textarea name="detail" id="detail"  cols="80" rows="10"><?=$row['detail']?></textarea></td>
				</tr>
				<tr>
					<td class="txt_black" align="left"><b>Univers : </b></td>
					<td class="txt_black" align="left">
                    		<select class="fuelSelect" name="univer" id="univer">

					<?	
						$r = mysql_query("SELECT * FROM univers ");
						while ($type = mysql_fetch_array($r)) {
		
					?>
					<option value="<?= $type["id"] ?>"  <?= $row['univer']==$type["id"]?'selected':''?>><?= $type["sous_sous_menu"] ?></option>
					<? } ?>

		</select>

                    </td>
                    </tr>
                 <tr>
                  <td class="txt_black" align="left" width="50%"><strong>Image:</strong></td><td> <input name="image"  size="21" type="file">
                    <? if ($row['image']) { ?>
                    <br /><img src="../bimages/<?=$row['image']?>" />
                    <? }?>
                  
                    </td>
                 </tr>   
	
				<tr>
					<td class="txt_black" align="left"><b>fiche : </b></td>
					<td class="txt_black" align="left"><input name="fiche" type="file" size="21" maxlength="99">
                    <? if ($row['fiche']) { ?>
                    <br /><a href="../fiche/<?=$row['fiche']?>" >Fiche</a>
                    <? }?>
</td>
				</tr>
    			<tr>
                	<td colspan="2" class="txt_black" align="center"><br />
						<input type="submit" name="SubmitAll" value="Valider" class="button_1" onmouseover="this.style.backgroundColor='#1E90FF'" onmouseout="this.style.backgroundColor='#1874CD'" onClick="send('form12');return false;" />
					</td>
                  </tr>			  
				</table>
				</form>
			</div>
			<br/>
		</div>
		<br/>
        <script>//window.onload=top.frames[0].document.getElementById('nicEditContent').style.backgroundColor="#fff"; </script>
